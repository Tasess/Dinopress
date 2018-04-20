<?php

require('C:\xampp\htdocs\wordpress/wp-blog-header.php');
get_header();
?>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link rel="stylesheet" href="game.css">
  <link rel="stylesheet" href="gameMobile.css">
  <script src="game.js" defer></script>
  <title>Games - Dino's Arcade</title>
</head>
<body>



<!-- <div class="gametooltip" id="gamethumbnail">
  <img src="GameNails/TheLab.jpg" alt="The Lab" width="300" height="200">
  <span class="gametooltiptext">Casual<br>Action<br>Everyone</span>
</div> -->

<!-- The Modal -->
<div id="myModal" class="gamemodal">
  <!-- <span class="gameclose">X</span>
  <object id="video" width="420" height="315"
  data="https://www.youtube.com/embed/ASVku-48N8Q">
  </object>
  <div id="caption"></div> -->
</div>
<h2>Games</h2>
<p>List of games available to play</p>
<div class="gamerow">
  <div class="gamecolumn">
    <div class="gametooltip">
      <img src="GameNails/Ariz.jpg" id="gamethumbnail" onclick="showVideo(0)">
      <span class="gametooltiptext">Shooter<br>Action<br>Mature</span>
    </div>
    <div class="gametooltip">
      <img src="GameNails/BaM.jpg" id="gamethumbnail" onclick="showVideo(1)">
      <span class="gametooltiptext">Shooter<br>Action<br>Teen</span>
    </div>
    <div class="gametooltip">
      <img src="GameNails/BotU.jpg" id="gamethumbnail" onclick="showVideo(2)">
      <span class="gametooltiptext">Bullet Hell<br>Action<br>Teen</span>
    </div>
    <div class="gametooltip">
      <img src="GameNails/CtDA.jpg" id="gamethumbnail" onclick="showVideo(3)">
      <span class="gametooltiptext">Adventure<br>Action<br>Teen</span>
    </div>
    <div class="gametooltip">
      <img src="GameNails/IOTA.jpg" id="gamethumbnail" onclick="showVideo(4)">
      <span class="gametooltiptext">Shooter<br>Action<br>Teen</span>
    </div>
    <div class="gametooltip">
      <img src="GameNails/Lightblade.jpg" id="gamethumbnail" onclick="showVideo(5)">
      <span class="gametooltiptext">Star Wars<br>Action<br>Teen</span>
    </div>
    <div class="gametooltip">
      <img src="GameNails/Plank.jpg" id="gamethumbnail" onclick="showVideo(6)">
      <span class="gametooltiptext">Casual<br>Simulation<br>Everyone/Teen</span>
    </div>
  </div>
  <div class="gamecolumn">
    <div class="gametooltip">
      <img src="GameNails/PortalStories.jpg" id="gamethumbnail" onclick="showVideo(7)">
      <span class="gametooltiptext">Puzzle<br>Action<br>Everyone 10+</span>
    </div>
    <div class="gametooltip">
      <img src="GameNails/QuiVR.jpg" id="gamethumbnail" onclick="showVideo(8)">
      <span class="gametooltiptext">Casual<br>Action<br>Everyone</span>
    </div>
    <div class="gametooltip">
      <img src="GameNails/RawData.jpg" id="gamethumbnail" onclick="showVideo(9)">
      <span class="gametooltiptext">Shooter<br>Action<br>Teen</span>
    </div>
    <div class="gametooltip">
      <img src="GameNails/RecRoom.jpg" id="gamethumbnail" onclick="showVideo(10)">
      <span class="gametooltiptext">Casual<br>Action<br>Everyone</span>
    </div>
    <div class="gametooltip">
      <img src="GameNails/Skyfront.jpg" id="gamethumbnail" onclick="showVideo(11)">
      <span class="gametooltiptext">Shooter<br>Action<br>Teen</span>
    </div>
    <div class="gametooltip">
      <img src="GameNails/Smashbox.jpg" id="gamethumbnail" onclick="showVideo(12)">
      <span class="gametooltiptext">Casual<br>Action<br>Everyone</span>
    </div>
    <div class="gametooltip">
      <img src="GameNails/Sophies.jpg" id="gamethumbnail" onclick="showVideo(13)">
      <span class="gametooltiptext">Shooter<br>Horror<br>Mature</span>
    </div>
  </div>
  <div class="gamecolumn">
    <div class="gametooltip">
      <img src="GameNails/Sprint.jpg" id="gamethumbnail" onclick="showVideo(14)">
      <span class="gametooltiptext">Sports<br>Action<br>Teen</span>
    </div>
    <div class="gametooltip">
      <img src="GameNails/SurgSim.jpg" id="gamethumbnail" onclick="showVideo(15)">
      <span class="gametooltiptext">Simulation<br>Action<br>Teen</span>
    </div>
    <div class="gametooltip">
      <img src="GameNails/TheLab.jpg" id="gamethumbnail" onclick="showVideo(16)">
      <span class="gametooltiptext">Casual<br>Action<br>Everyone</span>
    </div>
    <div class="gametooltip">
      <img src="GameNails/Trickster.jpg" id="gamethumbnail" onclick="showVideo(17)">
      <span class="gametooltiptext">Adventure<br>Action<br>Teen</span>
    </div>
    <div class="gametooltip">
      <img src="GameNails/Warcade.jpg" id="gamethumbnail" onclick="showVideo(18)">
      <span class="gametooltiptext">Shooter<br>Action<br>Teen</span>
    </div>
    <div class="gametooltip">
      <img src="GameNails/Wizards.jpg" id="gamethumbnail" onclick="showVideo(19)">
      <span class="gametooltiptext">Fantasy<br>Action<br>Everyone 10+</span>
    </div>
  </div>
  <div class="gamecolumn">
  </div>
</div>
</body>
<?php get_footer(); ?>
