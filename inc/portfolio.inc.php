<div id="portfolio" class="wrapper">
    <h2>These are some project that I made in a past.</h2>

    <?php use App\Portfolio; ?>
    <?php $portfolio = new Portfolio(); ?>

    <div class="portfolio">

        <?php foreach($portfolio->portfolio() as $folio): ?>

            <div class="oneRow">
                <div class="imageSection">
                    <img class="projectImage" src="../inc/img/<?php echo $folio->image; ?>" alt="">
                </div>

                <div class="projectText">

                    <div class="projectTitle">
                        <h2><?php echo $folio->title; ?></h2>
                    </div>

                    <div class="projectDescription">
                        <p><?php echo $folio->text; ?></p>
                    </div>  
                    
                    <div class="projectTechs">
                        <?php $lista = unserialize($folio->technologies); ?>
                        <?php foreach($lista as $tech): ?>
                            <span><?php echo $tech; ?></span>
                        <?php endforeach; ?>
                    </div>

                    <a class="code" href="<?php echo $folio->link; ?>" target="_blank">Visit site</a>
                    <?php if($folio->codesource != ""): ?>
                        <a class="code" href="<?php echo $folio->codesource; ?>" target="_blank">View source code</a>                        
                    <?php endif; ?>                    

                </div><!-- kraj diva .projectText -->

            </div><!-- kraj diva .oneRow -->

        <?php endforeach; ?>

        <?php
            /***
             *
             * This block code is to insert technologies in DB table with whom websites are made
             * 
             */

            // $lista = ["WordPress"];
            // $lista = serialize($lista);
            // $id = 3;
            // $portfolio->arrayAdding($id, $lista);
        ?>

    </div><!-- kraj diva .portfolio -->

</div><!-- kraj diva #portfolio -->