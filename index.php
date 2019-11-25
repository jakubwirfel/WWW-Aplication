<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800&display=swap" rel="stylesheet">
    </head>
    <body>
        <main class="main_page">
            <header>
                <div class="logo"><img src="assets/logo.png"/></div>
                <nav class="navigation">
                    <ul>
                        <li><a href="#open-modal">Sign in</a></li>
                        <li><a href="#">Sign up</a></li>
                    </ul>
                </nav>
                <div class="hamburger">
                    <div class="line line1"></div>
                    <div class="line line2"></div>
                    <div class="line line3"></div>
                </div>
            </header>
            <div id="open-modal" class="modal-window">
                <div>
                    <a href="#" title="Close" class="modal-close">Close</a>
                    <div class="modal-header">
                        <h1>Login</h1>
                    </div>  
                        <form action="/" method="post">
                            <label>
                                Email Address<span class="req">*</span>
                            </label>
                            <div class="field-wrap">
                                <input type="email" required autocomplete="off"/>
                            </div>
                            <label>
                                Password<span class="req">*</span>
                            </label>
                            <div class="field-wrap">
                                <input type="password" required autocomplete="off"/>
                            </div>
                            <p class="forgot"><a href="#">Forgot Password?</a></p>
                            <button class="button">Log In</button>
                        </form>
                </div>
            </div>
            <div class="hero_box">
                <div class="hero_text">                
                    <h1>
                        Modern villa <br>to rent for you
                    </h1>
                </div>
                <a class="hero_button" href="#">
                    Rent Now
                </a>
            </div>
        </main>
    </body>
</html>