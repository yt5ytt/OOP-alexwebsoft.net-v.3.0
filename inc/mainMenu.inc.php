<?php
  if(!@$_GET['pageID']){
    $_GET['pageID'] = 1;
  }

  use App\Pages;

  $menu = new Pages();

 ?>

<nav class='menu'>
  <ol>
  <?php foreach($menu->mainMenu as $mainMenu): ?>
    <li class='menu-item'>
      <?php echo $mainMenu->title; ?>
      <?php if($mainMenu->link == '#'):?>
        <ol class='sub-menu'>
        <?php foreach($menu->subMenu('Sub-' . $mainMenu->title) as $subMenu): ?>
          <li class='menu-item'><?php echo $subMenu->title; ?></li>
        <?php endforeach; ?>
      </ol>
      <?php endif; ?>
    </a></li>
  <?php endforeach; ?>
</ol>
</nav>
