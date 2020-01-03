<?php
session_start();

$username = "";
$email    = "";
$email_preferences = "";
$errors = array(); 

$db = mysqli_connect('localhost', 'root', '', 'villa_for_rent');
/*=====================REGISTRTION================== */
if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $email_preferences = mysqli_real_escape_string($db, $_POST['all_email']);


  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {array_push($errors, "The two passwords do not match"); }

  // Validate password strength by CODEXWORLD
  $uppercase = preg_match('@[A-Z]@', $password_1);
  $lowercase = preg_match('@[a-z]@', $password_1);
  $number    = preg_match('@[0-9]@', $password_1);
  $specialChars = preg_match('@[^\w]@', $password_1);
  if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password_1) < 8) {
    array_push($errors, 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.');
  }

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  if (count($errors) === 0) {
  	$password = md5($password_1);

  	$query = "INSERT INTO users (username, email, password, email_preferences) 
  			  VALUES('$username', '$email', '$password','$email_preferences')";
    mysqli_query($db, $query);
    
  	$_SESSION['username'] = $username;
    $_SESSION['confirm'] = "start";
    header('location: ./main.php');
  }
}
/*=====================LOGIN================== */
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['confirm'] = "start";
      header('location: main.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}
/*=====================LOGOUT================== */
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header('location: index.php');
}
/*=====================CONFIRMED RESERVATION================== */
if (isset($_POST['reservation_confirm'])) {
  $id_reservation = uniqid();
  $name = mysqli_real_escape_string($db, $_POST['reservation_name']);
  $surname = mysqli_real_escape_string($db, $_POST['reservation_surname']);
  $phone = mysqli_real_escape_string($db, $_POST['reservation_phone']);
  $email = mysqli_real_escape_string($db, $_POST['reservation_email']);
  $adults = mysqli_real_escape_string($db, $_POST['reservation_adults']);
  $children = mysqli_real_escape_string($db, $_POST['reservation_children']);
  $checkin = mysqli_real_escape_string($db, $_POST['reservation_checkin']);
  $checkout = mysqli_real_escape_string($db, $_POST['reservation_checkout']);
  $massage = mysqli_real_escape_string($db, $_POST['reservation_message']);
  $price = mysqli_real_escape_string($db, $_POST['price']);
  $id_hotel = mysqli_real_escape_string($db, $_POST['id_hotel']);

  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($surname)) { array_push($errors, "Surname is required"); }
  if (empty($phone)) { array_push($errors, "Phone is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($adults)) { array_push($errors, "Adults is required"); }
  if (empty($checkin)) { array_push($errors, "Checkin is required"); }
  if (empty($checkout)) { array_push($errors, "Checkout is required"); }

  $date_check_query = "SELECT * FROM reservation WHERE id_hotel='$id_hotel' AND check_in='$checkin'";
  $result = mysqli_query($db, $user_check_query);
  $date = mysqli_fetch_assoc($result);
  
  if ($date) { 
    if ($date['id_hotel'] === $id_hotel &&  $date['check_in'] === $checkin) {
      array_push($errors, "In this date villa is 
      reserved");
    }
  }

  if(isset($_SESSION['username']) && count($errors) === 0) {
    $isuser = 1;
    $username = $_SESSION['username'];
    $user_id_query = "SELECT id_user FROM users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($db, $user_id_query);
    $user = mysqli_fetch_assoc($result);
    $userid = $user['id_user'];
    
    $query = "INSERT INTO reservation (id_reservation, client_name, client_surname, client_phone, client_email, adults, children, check_in, check_out, massage, price, is_user, id_user, id_hotel) VALUES
    ('$id_reservation', '$name', '$surname', '$phone', '$email', '$adults', '$children', '$checkin', '$checkout', '$massage','$price', '$isuser', '$userid', '$id_hotel')";
    mysqli_query($db, $query);
    header('location: user_reservation.php');
  } else {
    $query = "INSERT INTO reservation (id_reservation, client_name, client_surname, client_phone, client_email, adults, children, check_in, check_out, massage, price, is_user, id_user, id_hotel) VALUES
    ('$id_reservation', '$name', '$surname', '$phone', '$email', '$adults', '$children', '$checkin', '$checkout', '$massage','$price', NULL, NULL, '$id_hotel')";
    mysqli_query($db, $query);
    header('location: main.php');
  }
}
?>