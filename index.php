<?php 
  function greet($name, $color) {
    echo "<p>Hi, my name is $name and my favorite color is $color</p>";
  }

  greet('Rafael', 'red');
  greet('Wesley', 'blue');
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('tagline') ?></p>