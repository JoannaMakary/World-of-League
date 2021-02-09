<?php
require APPROOT . '/views/includes/header.php';
?>

<!-- If the user is not logged in, prompt to login -->
<?php if (!isLoggedIn()) : 
    header('location: ' . URLROOT . '/users/login');
    ?>
<?php endif; ?>
<!-- Else display the user's profile -->
<?php if (isLoggedIn()) : ?>
<div class='container'>
    <div id='profile'>
        <?php
        echo "User ID: {$_SESSION['user_id']}<br/>
            <label>Username:</label> {$_SESSION['username']}<br/>
    <label>E-mail:</label> {$_SESSION['email']}<br/>
    <label>Level:</label> {$_SESSION['level']}<br/>
    <label>EXP:</label> {$_SESSION['exp']}<br/>
    <label>Gold:</label> {$_SESSION['gold']}<br/>
    <label>Champion:</label> {$_SESSION['current_champion']}
        ";
        ?>

    </div>
</div>
<?php endif; ?>

<?php
require APPROOT . '/views/includes/footer.php';
?>