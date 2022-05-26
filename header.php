<nav class="navbar navbar-expand-lg navbar-dark bg-light py-3 shadow">
        <div class="container">
                <a href="" class="navbar-brand"><img src="image/logo.png" alt=""></a>

                <div class="d-flex">
                        <a href="" class="navbar-brand"><img src="image/digital.png" class="w-100" alt=""></a>

                        <ul class="navbar-nav">
                                <li class="nav-item">
                                        <?php
                                        if (isset($_SESSION['user'])) { ?>
                                                <a href="logout.php" class="btn btn-danger"><i class="bi bi-power"></i>Logout</a>
                                        <?php } ?>
                                </li>
                        </ul>
                </div>
        </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-1">
        <div class="container">
                <ul class="navbar-nav">
                        <li class="nav-item"><a href="index.php" class="nav-link"><i class="bi bi-house"></i> Home</a></li>
                        <li class="nav-item"><a href="about.php" class="nav-link"><i class="bi bi-map"></i> About Purnia</a></li>
                        <li class="nav-item"><a href="" class="nav-link"><i class="bi bi-window-stack"></i> Project</a></li>
                        <li class="nav-item"><a href="" class="nav-link"><i class="bi bi-bell"></i> Event</a></li>
                        <li class="nav-item"><a href="" class="nav-link"><i class="bi bi-arrow-down"></i> Notification</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link"><i class="bi bi-phone"></i> Contacts us</a></li>
                </ul>
                <ul class="navbar-nav">
                        <?php if (!isset($_SESSION['user'])) { ?>
                                <li class="nav-item"><a href="register.php" class="nav-link"><i class="bi bi-person-plus"></i> Register</a></li>
                                <li class="nav-item"><a href="login.php" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a></li>
                        <?php } ?>
                </ul>
        </div>
</nav>