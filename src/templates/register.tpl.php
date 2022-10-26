<?php
include 'partials/header.tpl.php';
//Set_cookie

?>

<!-- FORMULARIO DE REGISTRO -->

<body>

    <div class="container-title">
        <h1><?= $title ?></h1>
    </div>
    <?php
    include 'partials/nav.tpl.php';
    ?>
    <div class="container-form">
        <form action="?url=regaction" method="POST">
            <div class="form-group">
                <label for="nombre">username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="password2">Repetir Password</label>
                <input type="password" name="password2" id="password2" class="form-control" placeholder="Repetir Password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
</body>

