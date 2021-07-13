<?php 
    require __DIR__ . '/classes/Movie.php';
; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title> Movies </title>
</head>
<body>
    <h1>Movies</h1>
    <div class="wrapper">
   
        <div class='movie'>
            <h3 class='title'> 
                <?= $film1->title; ?> 
            </h3>
            <div class="image">
                <img src="<?= $film1->image; ?>" alt="">
            </div>
            <div>
                <div class='weft'>
                
                <Strong> Plot: </Strong> <?= $film1->plot; ?>
                    
                </div>
                
               
            </div>
            
            <div class="duration-vote">
                <?= ' <Strong> Duration: </strong>' . $film1->duration; ?>
                <div>
                    <?= '<Strong> Vote: </Strong> '. $film1->vote; ?>
                </div>
            </div>

               
            <div class='cast'>
                <span> <Strong> Cast </Strong> </span>
                <?php
                    foreach ($film1->cast as $key) { 
                ?>
                
                <div>
                
                    <?= $key; ?>
                
                </div>
                    
                <?php }; ?>
                
            </div>
            <div class='director'>
                <Strong> Director: </Strong>
                <?=  $film1->director; ?>
            </div>
            <div class="release">
                <?=  '<Strong> Release: </Strong>' . $film1->release; ?>
            </div>
           
            
        </div>


        <div class='movie'>
            <h3 class='title'> 
                <?= $film2->title; ?> 
            </h3>
            <div class="image">
                <img src="<?= $film2->image; ?>" alt="">
            </div>
           
            <div class='weft'>
            <Strong> Plot: </Strong>  <?= $film2->plot; ?>
                
            </div>
            <div class="duration-vote">
                <?= ' <strong> Duration: </strong>' . $film2->duration; ?>
                <div>
                    <?= '<Strong> Vote: </Strong> '. $film2->vote; ?>
                </div>
               
            </div>
            <div class='cast'>
                <span> <Strong> Cast </Strong>  </span>
                <?php
                    foreach ($film2->cast as $key) { 
                ?>
                
                <div>
                
                    <?= $key; ?>
                
                </div>
                    
                <?php }; ?>
                
            </div>
            <div class='director'>
                <Strong> Director: </Strong> 
                <?=  $film2->director; ?>
            </div>
            <div class="release">
                <?=  ' <strong> Release: </strong>' . $film2->release; ?>
            </div>
            
            
        </div>
    </div>
    
</body>
</html>