

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo bloginfo( 'stylesheet_directory' ); ?>/assets/fonts/fonts.css" />
  <title>ArchMove</title>

  <?php wp_head(); ?>
</head>
<body>

  <header class="header">
    <a class="header__logo logo" href="#!"></a>
    <div class="header__wrapper">
      <nav class="nav">
        <ul class="nav__list">
          <li class="nav__item">
            <a class="nav__link" href="#!">Design Gallery</a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="#!">List of Architect</a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="#!">Articles</a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="#!">How it Works</a>
          </li>
        </ul>
      </nav>
      <div class="header__btns">
        <button class="header__search"></button>
        <button class="header__sing-in">Sign In</button>
      </div>      
    </div>
    <button class="header__sing-up btn">Sign Up</button>
  </header>