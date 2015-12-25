    <?php
      $bg = array('contra.gif', 'ninja-gaiden-ii.gif', 'super-mario-bros-3.gif', 'mega-man-2.gif', 'legend-of-zelda.gif', 'kirbys-adventure.gif', 'teenage-mutant-ninja-turtles-ii-the-arcade-game.gif', 'castlevania.gif', 'mike-tysons-punch-out.gif');
      $i = rand(0, count($bg)-1); // generate random number size of the array
      $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
    ?>

    <!-- body background image randomizer css -->
    <style type="text/css">
      body {
        background-image: url("assets/img/bg-random/<?php echo $selectedBg; ?>");
      }
    </style>