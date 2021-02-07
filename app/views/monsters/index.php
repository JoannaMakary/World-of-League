<?php

require APPROOT . '/views/includes/header.php';
?>


<div class='container'>
<div id="content">
<h3>List of Monsters in the Game:</h3>
<?php foreach($data['monsters'] as $monster): 
    if($monster->level == 1) { ?>
    <div class="container-item"><?php echo $monster->name ?></div>
<?php } endforeach; ?>
</div>
</div>

<div id='menu'>
    Home Profile Explore Shop
</div>

<?php

require APPROOT . '/views/includes/footer.php';

?>