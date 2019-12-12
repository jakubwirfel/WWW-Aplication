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
?>