<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <?php
                    if (isset($_SESSION["useruid"])){
                        echo "<a class='nav-link' href='profile.php'>Profile</a>";
                        echo "<a class='nav-link' href='includes/log_out.inc.php'>Log out</a>";
                    }
                    else {
                        echo "<a class='nav-link' href='login.php'>Login</a>";
                        echo "<a class='nav-link' href='sign_up.php'>Sign Up</a>";
                    }
                ?>
            </div>
            </div>
        </div>
</nav>