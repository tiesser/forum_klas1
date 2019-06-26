 <div class="navbar">
<?php  ?>
        <div class="display-4">
            Meij Forum
        </div>
        <nav class="btn-toolbar">
            <a class="m-4" href="home.php"><button class="btn btn-light">Home</button></a>
            <?php if(isset($_SESSION['success'])) : ?>
                <a class="m-4" href="profile.php"><button class="btn btn-light"><?= $_SESSION['username'] ?></button></a>

                <a class="m-4" href="logout.php"><button class="btn btn-light">Log Out</button></a>


            <?php else: ?>
                <a class="m-4" href="login.php"><button class="btn btn-light">Inloggen</button></a>
                <a class="m-4" href="register.php"><button class="btn btn-light">Registreren</button></a>
            <?php endif; ?>
        </nav>
    </div>