<?php
$title = "Home";
require_once 'layout/header.php';
?>

<div class="home uk-background-cover" style="background: linear-gradient(to bottom, #dddddd69, rgba(100, 100, 100, 0.2)), url(img/bg.jpg);">
    <h1 class="cta-home uk-text-uppercase uk-text-bold uk-text-center uk-padding-large">Find Love</h1>
    <div class="buttons uk-flex uk-flex-center">
        <a class="uk-button uk-button-primary uk-button-large uk-margin-medium-right" href="users.php">See users</a>
        <a class="uk-button uk-button-primary uk-button-large" href="search.php">Search user</a>
    </div>
</div>

<?php require_once 'layout/footer.php'; ?>