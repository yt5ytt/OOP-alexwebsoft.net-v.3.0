<?php

 ?>
<nav>
  <ul class='mainMenu'>
  <?php foreach($menu->mainMenu as $mainMenu): ?>
    <li><a href="<?php echo 'index.php?pageID=' . $mainMenu->id; ?>">
      <?php echo $mainMenu->title; ?>
      <?php if($mainMenu->link == '#'):?>
        <ul class='subMenu'>
        <?php foreach($menu->subMenu('Sub-' . $mainMenu->title) as $subMenu): ?>
          <li> <a href="<?php echo 'index.php?pageID=' . $subMenu->id; ?>"> <?php echo $subMenu->title; ?></a></li>
        <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </a></li>
  <?php endforeach; ?>
  </ul>
</nav>
