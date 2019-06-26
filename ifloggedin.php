
<?php
include_once('loginfunction.php');
if(isLoggedIn())): ?>
    <div class="navbar">
        <div class="display-4">
            Meij Forum
        </div>
        <nav class="btn-toolbar">
            <a class="m-4" href="home.html"><button class="btn btn-light">Home</button></a>
            <a class="m-4" href="register-niet-johan.php"><button class="btn btn-light">Profiel</button></a>
        </nav>
    </div>
<?php endif; ?>


<?php if(isNotLoggedIn()): ?>
    <div class="navbar">
        <div class="display-4">
            Meij Forum
        </div>
        <nav class="btn-toolbar">
            <a class="m-4" href="home.html"><button class="btn btn-light">Home</button></a>
            <a class="m-4" href="register-niet-johan.php"><button class="btn btn-light">Inloggen/Registreren</button></a>
        </nav>
    </div>
<?php endif; ?>


<?php if()): ?>

<?php endif; ?>

