<?php

require APPROOT . '/views/includes/header.php';
?>

<div id="content">
    <div class="row game-deets">
        <div class="col-5">
            <div id="world-league">WORLD OF LEAGUE</div>
            World of League is a <em>fan-made</em> browser-based RPG inspired by the RPG/strategy MOBA <a href="https://na.leagueoflegends.com/en-us/">League of Legends</a> from <a href="https://www.riotgames.com/en">Riot Games</a>.
            You start the game as the first champion, Singed, and battle monsters that appear to gain EXP and gold, to be able to level up and purchase additional items and champions.
        <button type="button" class="play-btn">PLAY NOW</button>
        </div>
        <div class="col"><img id='league-trans' src='http://localhost/world-of-league/public/images/lux-main.png'/></div>
    </div>

<div class="grid">
    <div class="grid__item pos-1">
        <div class="grid__item-img" style="background-image:url(img/1.jpg);"></div>
    </div>
    <div class="grid__item pos-2">
        <div class="grid__item-img" style="background-image:url(img/2.jpg);"></div>
    </div>
    <div class="grid__item pos-3">
        <div class="grid__item-img" style="background-image:url(img/3.jpg);"></div>
    </div>
    ...
</div>


    <?php if (isLoggedIn()) : ?>
        World of League is a <em>fan-made</em> browser-based RPG inspired by the RPG/strategy MOBA <a href="https://na.leagueoflegends.com/en-us/">League of Legends</a> from <a href="https://www.riotgames.com/en">Riot Games</a>.
        You start the game as the first champion, Singed, and battle monsters that appear to gain EXP and gold, to be able to level up and purchase additional items and champions.
    <?php endif; ?>
    <?php if (isLoggedIn()) : ?>
        You must be <a href=''>logged in</a> to play World of League.
    <?php endif; ?>
</div>

<!-- <div id='menu'>
    Home Profile Explore Shop
</div> -->

<?php

require APPROOT . '/views/includes/footer.php';

?>