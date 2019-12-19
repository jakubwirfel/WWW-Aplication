<?php include ("./server/server.php") ?>
<?php 
$hotel_name = $_GET['hotel_name'];
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
    <main class="main_page" >
        <div class="header_fix"></div>
        <section class="content_inside">
            <div class="reservation_form_box">
                <h1>Book your vacation in <span>Villa Amora</span></h1>
                <form autocomplete="off" id="reservation_form " class="reservation_form" action="reservation.php" accept-charset="UTF-8"
                    method="POST">
                    <div class="reservation_row">
                        <div class="reservation_column">
                            <input name="reservation_name" type="text" id="reservation_name" class="input_reservation" placeholder="First name*" required="required"/>
                        </div>
                        <div class="reservation_column">
                            <input name="reservation_checkin" onfocus="(this.type='date')" onblur="(this.type='text')" type="text" id="reservation_checkin" class="input_reservation" required="required" placeholder="Check in*"/>
                        </div>
                    </div>
                    <div class="reservation_row">
                        <div class="reservation_column">
                            <input name="reservation_name" type="text" id="reservation_name" class="input_reservation" placeholder="Last name*" required="required"/>
                        </div>
                        <div class="reservation_column">
                        <input name="reservation_checkout" onfocus="(this.type='date')" onblur="(this.type='text')" type="text" id="reservation_checkout" class="input_reservation" required="required" placeholder="Check out*"/>
                        </div>
                    </div>
                    <div class="reservation_row">
                        <div class="reservation_column">
                            <input name="reservation_name" type="text" id="reservation_name" class="input_reservation" placeholder="Phone number*" required="required"/>
                        </div>
                        <div class="reservation_column">
                            <select name="reservation_adults" id="reservation_adults" class="input_reservation" required="required">
                                <option selected value="1">Adult: 1</option>
                                <option value="2">Adults: 2</option>
                                <option value="3">Adults: 3</option>
                                <option value="4">Adults: 4</option>
                                <option value="5">Adults: 5</option>
                                <option value="6">Adults: 6</option>
                                <option value="7">Adults: 7</option>
                                <option value="8">Adults: 8</option>
                            </select>
                        </div>
                    </div>
                    <div class="reservation_row">
                        <div class="reservation_column">
                            <input name="reservation_name" type="text" id="reservation_name" class="input_reservation" placeholder="Email address*" required="required"/>  
                        </div>
                        <div class="reservation_column">
                        <select name="reservation_children" id="reservation_children" class="input_reservation" required="required">
                                <option selected value="0">Children: 0</option>
                                <option value="1">Children: 1</option>
                                <option value="2">Children: 2</option>
                                <option value="3">Children: 3</option>
                                <option value="4">Children: 4</option>
                                <option value="5">Children: 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-holder">                    
                        <textarea class="input_reservation text_area" placeholder="Message" name="reservation_message" cols="50" rows="10"></textarea>
                    </div>
                    <p class="privacy_policy">By sending an inquiry through this form, you acknowledge you are familiar with the <a href="#">Privacy policy</a>. of Villa for Rent d.o.o. and agree with it. With this you also give consent (permission) for the collection and processing of personal data specified in the form, and which are necessary for us to be able to accommodate your request.</p>
                    <div class="privacy_policy_button">
                        <div class="round">
                            <input type="checkbox" id="checkbox" name="privacy_policy" value="1"/>
                            <label for="checkbox"></label>
                        </div>
                        <p class="agree"> I agree</p>
                    </div>
                    <input type="submit" name="reservation" value="BOOK" class="book_button" />
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