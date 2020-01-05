        <header id="navbar">
            <div class="nav_box">
                <a href="index.php"><div class="logo"><img src="./assets/logo.png"/></div></a>
                <nav class="navigation">
                    <ul>
                        <li class="nav_item"><a href="main.php">Villas</a></li>
                        <?php  if (isset($_SESSION['confirm'])) : ?>
                            <li><a href="#" aria-haspopup="true"><?=$_SESSION['username']?><i class="fas fa-angle-down"></i></a>
                                <ul class="dropdown" aria-label="submenu">
                                    <li><a href="user_reservation.php">Reservations</a></li>
                                    <li><a href="index.php?logout='1'">Sign out</a></li>
                                </ul>
                            </li>
                        <?php endif ?>
                        <?php  if (isset($_SESSION['confirm'])) : ?>
                            <li class="hide"><a href="#open-modal">Sign in</a></li>
                            <li class="hide" ><a href="join.php">Sign up</a></li>
                        <?php else : ?>
                            <li><a href="#open-modal">Sign in</a></li>
                            <li><a href="join.php" class="border_last">Sign up</a></li>
                        <?php endif ?>
                    </ul>
                </nav>
            </div>
        </header>
        <?php include ('./php_components/errors.php'); ?>
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