<?php
    include 'partials/header.tpl.php';
?>
<body>
    <div class="container-title">
        <h1><?= $title ?></h1>
    </div>
<?php
    include 'partials/nav.tpl.php';
?>
    <div class="container-alumnes">
        <ul>
            <?php foreach ($alumnes as $alumne) : ?>
                <li><?= $alumne ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    
</body>

</html>