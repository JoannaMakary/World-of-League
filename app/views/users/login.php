<?php
require APPROOT . '/views/includes/header.php';
?>

<div id="main">
    <?php
    require APPROOT . '/views/includes/nav.php';
    ?>

    <h1>World of League</h1>

    <form action="<?php echo URLROOT; ?>/users/login" method="POST">
    <input type="text" placeholder="Username *" name="username" />
    <span class="invalidFeedback">
        <?php echo $data['usernameError']; ?>
    </span>

    <input type="password" placeholder="Password *" name="password" />
    <span class="invalidFeedback">
        <?php echo $data['passwordError']; ?>
    </span>

    <button id="submit" type="submit" value="submit">Submit</button>

    <p class="options">Don't have an account? <a href="<?php echo URLROOT; ?>/users/register">Register here!</a>
    </form>
</div>