<?php

include 'partials/header.tpl.php';

?>

<!-- FORMULARIO DE LOGIN -->

<body>

    <div class="container-title">
        <h1><?= $title ?></h1>
    </div>
    <?php
    include 'partials/nav.tpl.php';
    ?>
    <div class="container-form">
        <form action="login" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>











</body>