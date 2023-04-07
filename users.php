<?php
include_once 'fragments/isauthenticated.php';
$pageTitle = 'Users';
include_once 'fragments/header.php';
include_once 'autoload.php';

$cnxDB = ConnexionBD::getInstance();
$query = "select * from user";
$response = $cnxDB->query($query);
$users = $response->fetchAll(PDO::FETCH_OBJ);
?>
    <div class="container">
        <?php foreach($users as $user): ?>
            <div class="alert alert-info">
                <?= $user->username ?>
            </div>
        <?php endforeach ?>
    </div>

<?php
include_once 'fragments/footer.php';
?>
