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

<!-- lista de usuarios con login -->

    <div class="container-form">
        <table class="table table-striped container-table">
            <thead>
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td><?= $user ?></td>
                    <td><?= $email ?></td>
                </tr>
                
            </tbody>
        </table>
    </div>







</body>
</html>