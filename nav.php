        <header>
            <a href="index.php"><div class="logo"><img src="assets/logo.png"/></div></a>
                <nav class="navigation">
                    <ul>
                        <li><a href="#open-modal">Sign in</a></li>
                        <li><a href="join.php">Sign up</a></li>
                    </ul>
                </nav>
        </header>
        <?php include ('./server/errors.php'); ?>
            <div id="open-modal" class="modal-window">
                <div>
                    <a href="#" title="Close" class="modal-close">Close</a>
                    <div class="modal-header">
                        <h1>Login</h1>
                    </div>
                        <form action="index.php" method="post" class="form_login" accept-charset="UTF-8">
                            <label class="label_login">
                                Username
                            </label>
                            <div class="field-wrap_login">
                                <input name="username" class="input_login" type="text" required autocomplete="off"/>
                            </div>
                            <label class="label_login">
                                Password
                            </label>
                            <div class="field-wrap_login">
                                <input name="password" class="input_login" type="password" required autocomplete="off"/>
                            </div>
                            <p class="forgot_login"><a href="#">Forgot Password?</a></p>
                            <button type="submit" class="button_login" name="login_user">Login</button>
                        </form>
                </div>
            </div>