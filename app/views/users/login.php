<?php
require APPROOT . '/views/includes/header.php';
?>

<div class='container'>
<div id="login" class='mx-auto'>

    <form action="<?php echo URLROOT; ?>/users/login" method="POST">
    Username: <input type="text" placeholder="Username" name="username" class='mb-2'/>
    <div class="invalidFeedback">
        <?php echo $data['usernameError']; ?>
    </div>

    Password: <input type="password" placeholder="Password *" name="password" class='mb-2'/>
    <div class="invalidFeedback">
        <?php echo $data['passwordError']; ?>
    </div>
    <input id='loginBtn' type='submit' name='login' value='Login' />

    <!-- <button id="submit" type="submit" value="submit">Submit</button> -->

    <p class="mt-3 options">Don't have an account? <a href="<?php echo URLROOT; ?>/users/register">Register here!</a>
    </form>
</div>
</div>

<?php
require APPROOT . '/views/includes/footer.php';
?>