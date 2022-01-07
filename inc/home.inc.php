<div class="main-box wrapper">

  <?php include(ABSPATH . 'inc' . DS . 'sidebar.inc.php'); ?>

  <?php include(ABSPATH . 'inc' . DS . 'aboutMe.inc.php'); ?>

</div>

<?php if ($_GET['pageID'] == 1): ?>

  <?php include(ABSPATH . 'inc' . DS . 'technologies.inc.php'); ?>

<?php endif; ?>
