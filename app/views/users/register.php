<?php
require APPROOT . '/views/includes/header.php';
?>

<!-- If the user is already logged in, do not display register, redirect to profile. -->
<?php if (isLoggedIn()) : 
    header('location: ' . URLROOT . '/users/profile');
    ?>
<?php endif; ?>
<?php if (!isLoggedIn()) : ?>
<!-- Otherwise show the register container -->
<div class='container'>
    <div id="login" class='mx-auto'>

        <form action="<?php echo URLROOT; ?>/users/register" method="POST">
            Username: <input type="text" placeholder="Username" name="username" class='mb-2' />
            <?php if($data['usernameError']) {
                echo "<div class='invalidFeedback'>
                {$data['usernameError']}
                </div>";
            }?>

            Email: <input type="email" placeholder="Email" name="email" class='mb-2' />
            <?php if($data['emailError']) {
                echo "<div class='invalidFeedback'>
                {$data['emailError']}
                </div>";
            }?>

            Password: <input type="password" placeholder="Password" name="password" class='mb-2' />
            <?php if($data['passwordError']) {
                echo "<div class='invalidFeedback'>
                {$data['passwordError']}
                </div>";
            }?>

            Confirm Password: <input type="password" placeholder="Confirm Password" name="confirmPassword" class='mb-2' />
            <?php if($data['confirmPasswordError']) {
                echo "<div class='invalidFeedback'>
                {$data['confirmPasswordError']}
                </div>";
            }?>

            <input id='registerBtn' type='submit' name='register' value='Register' />

            <!-- <button id="submit" type="submit" value="submit">Submit</button> -->

            <p class="mt-3 options">Already have an account? <a href="<?php echo URLROOT; ?>/users/login">Login here!</a>
        </form>
    </div>
</div>
<?php endif; ?>

<?php
require APPROOT . '/views/includes/footer.php';
?>