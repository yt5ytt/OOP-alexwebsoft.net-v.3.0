<?php
  if(!@$_GET['pageID']){
    $_GET['pageID'] = 1;
  }

  use App\Pages;

  $menu = new Pages();

 ?>
<nav>
  <ul class='mainMenu'>
  <?php foreach($menu->mainMenu as $mainMenu): ?>
    <li>
      <?php echo $mainMenu->title; ?>
      <?php if($mainMenu->link == '#'):?>
        <ul class='subMenu'>
        <?php foreach($menu->subMenu('Sub-' . $mainMenu->title) as $subMenu): ?>
          <li><?php echo $subMenu->title; ?></li>
        <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </li>
  <?php endforeach; ?>
  </ul>
</nav>
