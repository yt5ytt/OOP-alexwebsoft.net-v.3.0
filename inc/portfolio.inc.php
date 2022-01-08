<div id="portfolio" class="wrapper">
    <h2>These are some project that I made in a past.</h2>

    <?php use App\Portfolio; ?>
    <?php $portfolio = new Portfolio(); ?>

    <div class="portfolio">

        <?php foreach($portfolio->portfolio() as $folio): ?>

            <div class="oneRow">
                <div class="projectImage" style="background-image: url('../inc/img/<?php echo $folio->image; ?>')"></div>
                <div class="projectText">

                    <h2><a href="<?php echo $folio->link; ?>" target="_blank"><?php echo $folio->title; ?></a></h2>
                    <h3><?php echo $folio->text; ?></h3>

                    <?php if($folio->codesource != ""): ?>
                        <p><a href="<?php echo $folio->codesource; ?>" target="_blank">View source code>>></a></p>
                    <?php endif; ?>

                </div>

            </div><!-- kraj diva .oneRow -->
        <?php endforeach; ?>

    </div><!-- kraj diva .portfolio -->

</div><!-- kraj diva #portfolio -->