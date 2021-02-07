<?php

require APPROOT . '/views/includes/header.php';
?>

<div id="content">
    <?php if(isLoggedIn()): ?>
    World of League is a <em>fan-made</em> browser-based RPG inspired by the RPG/strategy MOBA <a href="https://na.leagueoflegends.com/en-us/">League of Legends</a> from <a href="https://www.riotgames.com/en">Riot Games</a>.
    You start the game as the first champion, Singed, and battle monsters that appear to gain EXP and gold, to be able to level up and purchase additional items and champions.
    Features:
    <?php endif; ?>
    <?php if(!isLoggedIn()): ?>
    You must be <a href=''>logged in</a> to play World of League.
    <?php endif; ?>
</div>

<div id='menu'>
    Home Profile Explore Shop
</div>

<?php

require APPROOT . '/views/includes/footer.php';

?>