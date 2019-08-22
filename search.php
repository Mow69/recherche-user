<?php
$title = "Search";
require_once 'layout/header.php';
require_once 'layout/nav.php';

$search = "";
$posted_data = array_key_exists('search', $_POST);

if ($posted_data) {
    require_once 'data/users.php';

    $search = $_POST['search'];
    $user = null;

    $emails = array_column($users, 'email');
    $userIndex = array_search($search, $emails);

    if ($userIndex !== false) { // Trouvé !
        $user = $users[$userIndex];
    }
}
?>

<div id="wrapper">
    <form method="POST" class="uk-margin-top">
        <fieldset class="uk-fieldset">

            <legend class="uk-legend">Search</legend>

            <div class="uk-margin">
                <input class="uk-input" type="text" name="search" placeholder="Search..." value="<?php echo $search; ?>">
            </div>

            <div class="uk-margin-top">
                <button type="submit" class="uk-button uk-button-danger">Search</button>
            </div>
    </form>
    
    <?php if ($posted_data) { ?>
    <div class="uk-margin-top">
        <?php if ($user) {
            require_once 'templates/user-single.php';
        } else { ?>
            <div class="uk-alert-danger" uk-alert>
                Aucun utilisateur n'a été trouvé
            </div>
        <?php } ?>
    </div>
    <?php } ?>
</div>