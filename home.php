<?php
include_once 'fragments/isauthenticated.php';
$pageTitle = 'Home';
include_once 'fragments/header.php';
?>
    <div class="container">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
            <div class="card-header">Bienvenu</div>
            <div class="card-body">
                <h5 class="card-title">
                    <?= $_SESSION['user'] ?>
                </h5>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aut dicta exercitationem expedita
                    explicabo in neque, non praesentium quasi repellat velit veritatis vero. Animi cumque maiores minima
                    nihil sit voluptate.
                </p>
            </div>
        </div>
    </div>

<?php
include_once 'fragments/footer.php';
?>