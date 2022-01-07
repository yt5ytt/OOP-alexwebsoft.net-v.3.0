<div class="sidebar">
  <div class="profilePicture">
    <img src="<?php echo ROOTURI; ?>inc/img/profilePicture.jpg" alt="">
  </div>

  <div class="contact sidebarWrapper">
    <h1>Contact</h1>

    <h2>PHONE</h2>
    <h3>381-60-599-1001</h3>

    <h2>EMAIL</h2>
    <h3><a href="mailto: alexwebsoft.net@gmail.com">alexwebsoft.net@gmail.com</a></h3>

    <h2>WEBSITES</h2>
    <!-- <a href="https://github.com/yt5ytt"><i class="fab fa-github-square"></i></a>
    <a href="https://www.linkedin.com/in/aleksandar-safranec-0743b48b/"><i class="fab fa-linkedin"></i></a>
    <a href="https://www.facebook.com/alex.yt5ytt"><i class="fab fa-facebook-square"></i></a> -->
    
    <?php /*foreach($websites->getWebsites() as $webs): ?>
      <?php if($webs->icon == 'linkedin'): ?>
        <a href="https://www.linkedin.com/in/aleksandar-safranec-0743b48b/"><i class="fab fa-linkedin"></i></a>
      <?php else: ?>
        <a href="<?php echo $webs->link; ?>"><i class="fab fa-<?php echo $webs->icon; ?>-square"></i></a>
      <?php endif; ?>
    <?php endforeach;*/?>

    <?php $websites -> socialIcons(); ?>




  </div>

</div>
