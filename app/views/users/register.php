<?php
require APPROOT . '/views/includes/header.php';
?>

<div class='container'>
    <div id="login" class='mx-auto'>

        <form action="<?php echo URLROOT; ?>/users/register" method="POST">
            Username: <input type="text" placeholder="Username" name="username" class='mb-2' />
            <div class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
            </div>

            Email: <input type="email" placeholder="Email" name="email" class='mb-2' />
            <div class="invalidFeedback">
                <?php echo $data['emailError']; ?>
            </div>

            Password: <input type="password" placeholder="Password" name="password" class='mb-2' />
            <div class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </div>

            Confirm Password: <input type="password" placeholder="Confirm Password" name="confirmPassword" class='mb-2' />
            <div class="invalidFeedback">
                <?php echo $data['confirmPasswordError']; ?>
            </div>

            <input id='registerBtn' type='submit' name='register' value='Register' />

            <!-- <button id="submit" type="submit" value="submit">Submit</button> -->

            <p class="mt-3 options">Already have an account? <a href="<?php echo URLROOT; ?>/users/login">Login here!</a>
        </form>
    </div>
</div>

<?php
require APPROOT . '/views/includes/footer.php';
?>