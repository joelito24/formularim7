<?php

include 'partials/header.tpl.php';

?>

<!-- Pagina de logout -->

<body>

    <div class="container-title">
        <h1><?= $title ?></h1>
    </div>
    <?php
    include 'partials/nav.tpl.php';
    ?>
    <div class="container-form">
        <form action="?url=logout" method="POST" class="form">
            <div class="form-group">
            <button type="submit" class="btn btn-primary"><a href="?url=login">Logout</a></button>
            </div>
        </form>
    </div>
</body>
