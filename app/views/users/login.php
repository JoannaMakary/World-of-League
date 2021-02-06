<?php
require APPROOT . '/views/includes/header.php';
?>

<div class='container'>
<div id="login" class='mx-auto'>

    <form action="<?php echo URLROOT; ?>/users/login" method="POST">
    Username: <input type="text" placeholder="Username" name="username" class='mb-2'/>

    <?php if($data['usernameError']) {
        echo "<div class='invalidFeedback'>
        {$data['usernameError']}
        </div>";
    }?>

    Password: <input type="password" placeholder="Password" name="password" class='mb-2'/>
    <?php if($data['passwordError']) {
        echo "<div class='invalidFeedback'>
        {$data['passwordError']}
        </div>";
    }?>
    <input id='loginBtn' type='submit' name='login' value='Login' />

    <!-- <button id="submit" type="submit" value="submit">Submit</button> -->

    <p class="mt-3 options">Don't have an account? <a href="<?php echo URLROOT; ?>/users/register">Register here!</a>

    <?php if(isset($_SESSION['user_id'])) {
        echo "LOGGED IN";
    }
    ?>
    </form>
</div>
</div>

<?php
require APPROOT . '/views/includes/footer.php';
?>