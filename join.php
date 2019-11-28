<?php include ("./server/server.php"); ?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Join Villa for Rent</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800&display=swap" rel="stylesheet">
</head>

<body class="body_join">
    <main class="main_page">
        <?php include ("nav.php");?>
        <?php include ('./server/errors.php'); ?>
        <section class="registration">
            <div class="reg_box">
                <h1>Join Villa for Rent</h1>
                <h2>Create your account</h2>
                <form autocomplete="off" id="signup-form" class="signup_form" action="join.php" accept-charset="UTF-8"
                    method="post">
                    <div class="signup_form_group">
                        <label>Username</label>
                        <input name="username" autocapitalize="off" autofocus="autofocus" required="required" type="text" id="user_login" autocomplete="off" spellcheck="false" class="input_button" value="<?php echo $username; ?>"/>
                    </div>  
                    <div class="signup_form_group">
                        <label>Email address</label>
                        <input name="email" autocapitalize="off" required="required" type="email" id="user_email" autocomplete="off" spellcheck="false" class="input_button" value="<?php echo $email; ?>"/>
                    </div>  
                    <div class="signup_form_group">
                        <label>Password</label>
                        <input name="password_1" autocapitalize="off" required="required" type="password" id="user_password" class="input_button"/>
                    </div>  
                    <div class="signup_form_group">
                        <label>Confirm password</label>
                        <input name="password_2" autocapitalize="off" required="required" type="password" id="user_password" class="input_button"/>
                        <p class="pass_strenght">Make sure it's at least 15 characters OR at least 8 characters including a number and a lowercase letter.</p>
                    </div>  
                    <div class="signup_form_group">
                        <p class="email_pref">Email preferences</p>
                        <label class="all_email_box">
                            <input type="checkbox" name="all_email" value="1" id="all_email" class="checkbox"/>
                            Send me occasional product updates, announcements, and offers.
                        </label>
                    </div>  
                    <input type="submit" name="reg_user" value="REGISTER" class="submit_button" />
                    <p class="services_box">By creating an account, you agree to the <a href="#">Terms of Service</a>. For more information about Villa for Rent privacy practices, see the <a href="#">Villa for Rent Privacy Statement</a>. We'll occasionally send you account-related emails.</p>
                </form>
            </div>
        </section>
    </main>
</body>

</html>