<div>
    <div class="uk-card uk-card-default uk-card-hover uk-card-body uk-padding-small">
        <p class="uk-text-center">
            <img width="80" height="80" src="<?php echo $user['profile_image']; ?>" alt="<?php echo $user['username']; ?>" class="uk-border-pill">
        </p>
        <h3 class="uk-card-title" style="margin: 4px;"><?php echo $user['username']; ?></h3>
        <p class="uk-text-small" style="margin: 4px;"><?php echo $user['email']; ?></p>
        <span class="uk-badge"><?php echo $user['date_inscription']; ?></span>
    </div>
</div>