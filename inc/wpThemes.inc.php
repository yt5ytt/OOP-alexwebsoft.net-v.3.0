<div id="portfolio" class="wrapper">
    <h2>These are some WordPress themes that I made till now.</h2>

    <?php use App\WordPressThemes; ?>
    <?php $wpThemes = new WordPressThemes(); ?>

    <div class="portfolio">

        <?php foreach($wpThemes->wpThemes() as $themes): ?>

          <?php $id = $themes->id; ?>

            <div class="oneRow">
                <div class="imageSection">
                    <img class="projectImage" src="../inc/img/<?php echo $wpThemes->getImage($id); ?>" alt="">
                </div>

                <div class="projectText">

                    <div class="projectTitle">
                        <h2><?php echo $wpThemes->getTitle($id); ?></h2>
                    </div>

                    <div class="projectDescription">
                        <p><?php echo $wpThemes->getDescription($id); ?></p>
                    </div>  
                    
                    <div class="projectTechs">
                        <?php $lista = unserialize($wpThemes->getTechnologies($id)); ?>
                        <?php foreach($lista as $tech): ?>
                            <span><?php echo $tech; ?></span>
                        <?php endforeach; ?>
                    </div>

                    <?php if($themes->codesource != ""): ?>
                        <a class="code" href="<?php echo $wpThemes->getSourceCode($id); ?>" target="_blank">View source code</a>                        
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
            // $wpThemes->arrayAdding($id, $lista);
        ?>

    </div><!-- kraj diva .portfolio -->

</div><!-- kraj diva #portfolio -->