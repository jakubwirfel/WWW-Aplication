<?php include ("./server/server.php") ?>
<?php 
$hotel_name = $_SESSION['selected_hotel_name'];
$query = "SELECT hotel_price, id_hotel FROM hotels WHERE name ='$hotel_name'";
$results = mysqli_query($db, $query);
while ($row = mysqli_fetch_array($results) ) { 
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Villa for Rent</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>

<body class="main_body">
<?php include ("./php_components/nav.php")?>
<?php include ('./php_components/errors.php'); ?>
    <main class="main_page" >
        <div class="header_fix"></div>
        <section class="content_inside">
            <div class="reservation_form_box">
                <h1>Book your vacation in <span><?php echo $_SESSION['selected_hotel_name'];?></span></h1>
                <form autocomplete="off" id="reservation_form " class="reservation_form" action="confirm.php" accept-charset="UTF-8"
                    method="POST">
                    <input type="hidden" value="<?php echo  $row['id_hotel'];?>" name="id_hotel" />
                    <div class="reservation_row">
                        <div class="reservation_column">
                            <input name="reservation_name" type="text" id="reservation_name" class="input_reservation" value="<?php echo $_POST['reservation_name'];?>" readonly/>
                        </div>
                        <div class="reservation_column">
                            <input name="reservation_checkin" type="text" id="reservation_checkin" class="input_reservation" value="<?php echo $_POST['reservation_checkin'];?>"  readonly/>
                        </div>
                    </div>
                    <div class="reservation_row">
                        <div class="reservation_column">
                            <input name="reservation_surname" type="text" id="reservation_name" class="input_reservation" value="<?php echo $_POST['reservation_surname'];?>" readonly/>
                        </div>
                        <div class="reservation_column">
                        <input name="reservation_checkout" type="text" id="reservation_checkout" class="input_reservation"  value="<?php echo $_POST['reservation_checkout'];?>" readonly/>
                        </div>
                    </div>
                    <div class="reservation_row">
                        <div class="reservation_column">
                            <input name="reservation_phone" type="text" id="reservation_name" class="input_reservation" value="<?php echo $_POST['reservation_phone'];?>" readonly/>
                        </div>
                        <div class="reservation_column">
                            <input name="reservation_adults" id="reservation_adults" class="input_reservation" value="<?php echo $_POST['reservation_adults'];?>" readonly/>
                        </div>
                    </div>
                    <div class="reservation_row">
                        <div class="reservation_column">
                            <input name="reservation_email" type="text" id="reservation_name" class="input_reservation" value="<?php echo $_POST['reservation_email'];?>" readonly/>  
                        </div>
                        <div class="reservation_column">
                        <input name="reservation_children" id="reservation_children" class="input_reservation" value="<?php echo $_POST['reservation_children'];?>" readonly />
                        </div>
                    </div>
                    <div class="text-holder">                    
                        <textarea class="input_reservation text_area"  name="reservation_message" placeholder="<?php echo $_POST['reservation_message'];?>" readonly cols="50" rows="10"></textarea>
                    </div>
                    <div class="form_footer">
                        <input type="submit" name="reservation_confirm" value="CONFIRM" class="book_button" />
                        <div class="price_holder">
                            <?php 
                            // PHP code to find the number of days 
                            // between two given dates 
                                
                            // Creates DateTime objects 
                            $datetime1 = date_create($_POST['reservation_checkin']); 
                            $datetime2 = date_create($_POST['reservation_checkout']); 
                                
                            // Calculates the difference between DateTime objects 
                            $interval = date_diff($datetime1, $datetime2); 
                                
                            // Display the result 
                            $days = $interval->format('%a'); 
                            ?> 
                            <h1><?php echo $days?> NIGHT/S<span> <?php echo $row['hotel_price']* $days?>$</span></h1>
                        </div>
                    </div>
                    <input type="hidden" value="<?php echo  $row['hotel_price']* $days?>" name="price" />
                </form>
            </div>
            <aside class="contact_box">
                <h1>Call us</h1>
                <p>+48 111 111 111</p>
                <p>+48 111 111 111</p>
                <div class="email_contact">booking@villaforrent.com</div>
                <div class="working_time">Working days, Saturday, Sunday & Holidays: 08:00 - 22:00</div>
                <div class="button_contact">
                    <i class="fas fa-phone-alt"></i>
                    REQUEST A CALLBACK
                </div>
                <div class="button_contact">
                    <i class="fas fa-envelope"></i>
                    SEND US A MASSAGE
                </div>
                <div class="line"></div>
                <div class="company_name">
                    <p>Villa for Rent d.o.o</p>
                    <p>Tourist agency & services</p>
                </div>
                <div class="corresponding_info">
                    <p>20 Albert Road</p>
                    <p>London NW02 1BL, UK</p>
                </div>
                <div class="corresponding_info">
                    <p>OIB 93762654535</p>
                    <p>UK-AB-43-583642658</p>
                </div>
            </aside>
        </section>
    </main>
    <script>
        window.onscroll = () => {
            const nav = document.querySelector('#navbar');
            if (this.scrollY <= 1) nav.className = '';
            else nav.className = 'scroll';
        };
    </script>
</body>

</html>
<?php } ?>