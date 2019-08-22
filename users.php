<?php
require_once 'data/users.php';
$title = "Users";
require_once 'layout/header.php';
require_once 'layout/nav.php';
?>

<div id="wrapper">
    <h1 class="uk-heading-medium">Users</h1>

    <div class="uk-child-width-1-2@s uk-child-width-1-3@m" uk-grid="masonry: true">
        <?php foreach ($users as $user) {
            require 'templates/user-single.php';
        } ?>
    </div>
</div>

<?php require_once 'layout/footer.php'; ?>