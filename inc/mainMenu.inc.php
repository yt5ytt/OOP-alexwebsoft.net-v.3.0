<nav class='menu'>
  <ol>
  <?php foreach($menu->mainMenu as $mainMenu): ?>
    <li class='menu-item'>
      <?php if ($mainMenu->link != '#'): ?>
        <a href="index.php?pageID=<?php echo $mainMenu->id; ?>">
      <?php endif; ?>
      <?php echo $mainMenu->title; ?>
      <?php if($mainMenu->link == '#'):?>
        <ol class='sub-menu'>
        <?php foreach($menu->subMenu('Sub-' . $mainMenu->title) as $subMenu): ?>
          <li class='menu-item'><a href="index.php?pageID=<?php echo $subMenu->id; ?>"><?php echo $subMenu->title; ?></a></li>
        <?php endforeach; ?>
      </ol>
      <?php endif; ?>
    </a></li>
  <?php endforeach; ?>
</ol>
</nav>
