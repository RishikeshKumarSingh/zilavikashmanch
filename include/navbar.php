<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
                <a href="" class="navbar-brand">ZVM - Officer Panel</a>

                <ul class="navbar-nav">
                        <?php
                        if(isset($_session['admin'])): ?>
                        <li class="nav-item"><a href="logout.php" class="btn btn-danger">Logout</a></li>
                        <?php endif; ?>
                </ul>
        </div>
</nav>