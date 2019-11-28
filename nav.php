<header>
            <a href="index.php"><div class="logo"><img src="assets/logo.png"/></div></a>
                <nav class="navigation">
                    <ul>
                        <li><a href="#open-modal">Sign in</a></li>
                        <li><a href="join.php">Sign up</a></li>
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
                        <form action="/" method="post" class="form_login">
                            <label class="label_login">
                                Email Address
                            </label>
                            <div class="field-wrap_login">
                                <input class="input_login" type="email" required autocomplete="off"/>
                            </div>
                            <label class="label_login">
                                Password
                            </label>
                            <div class="field-wrap_login">
                                <input class="input_login" type="password" required autocomplete="off"/>
                            </div>
                            <p class="forgot_login"><a href="#">Forgot Password?</a></p>
                            <button class="button_login">Log In</button>
                        </form>
                </div>
            </div>