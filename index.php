<?php 

class Movie{
    // attributi d'istanza
    public $title;
    public $image;
    public $weft;
    public $vote;
    public $cast;
    public $genre;
    public $director;
    public $duration;
    public $release;

    // costruttore
    function __construct($title,$image, $weft, $vote = 0, $cast, $director = '',$genre = '',$release = '',$duration=''){
        $this->title = $title;
        $this->image = $image;
        $this->weft = $this->subWeft($weft);
        $this->cast = $cast;
        $this->director = $director;
        $this->genre = $genre;
        $this->vote = $vote;
        $this->release =$release ;
        $this->duration = $duration;
    }

    // metodi
    public function subWeft($weft){
        return substr($weft,0,110) . '...';
    }
}

// film 1
$weft = "After surviving an unexpected attack in enemy territory, industrialist Tony Stark builds high-tech armor and vows to protect the world as Iron Man.";
$cast = ['Robert Downey jr','Gwyneth Paltrow','Jeff Bridges'];
$genre = ['Action', 'Science Fiction', 'Adventure'];
$image='https://image.tmdb.org/t/p/w342/vdb4nVzTy7BXYwF8F99DdszYqOa.jpg';

$film1 = new Movie('Iron man',$image,$weft, 4.5, $cast ,'Jon Favreau', $genre,'01/05/2008','2h 6m');

// film 2
$cast = ['Edward Norton','Brad Pitt','Helena Bonham Carter'];
$weft= 'A ticking-time-bomb insomniac and a slippery soap salesman channel primal male aggression into a shocking new form of therapy. Their concept catches on, with underground "fight clubs" forming in every town, until an eccentric gets in the way and ignites an out-of-control spiral toward oblivion.';

$image2='https://image.tmdb.org/t/p/w342/rtNLQ8HbPElzEfrHjrzSr07prKT.jpg';
$film2= new Movie('Fight Club', $image2, $weft, 4.6 ,$cast,'David Fincher','Drama','29/10/1999','2h 19m');

; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Movies</title>
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
                
                    Plot: <?= $film1->weft; ?>
                    
                </div>
                
               
            </div>
            
            <div class="duration-vote">
                <?= 'duration: ' . $film1->duration; ?>
                <div>
                    <?= 'Vote: '. $film1->vote; ?>
                </div>
            </div>

               
            <div class='cast'>
                <span> Cast </span>
                <?php
                    foreach ($film1->cast as $key) { 
                ?>
                
                <div>
                
                    <?= $key; ?>
                
                </div>
                    
                <?php }; ?>
                
            </div>
            <div class='director'>
                Director: 
                <?=  $film1->director; ?>
            </div>
            <div class="release">
                <?=  'Release: ' . $film1->release; ?>
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
                Plot: <?= $film2->weft; ?>
                
            </div>
            <div class="duration-vote">
                <?= 'Duration: ' . $film2->duration; ?>
                <div>
                    <?= 'Vote: '. $film2->vote; ?>
                </div>
               
            </div>
            <div class='cast'>
                <span> Cast </span>
                <?php
                    foreach ($film2->cast as $key) { 
                ?>
                
                <div>
                
                    <?= $key; ?>
                
                </div>
                    
                <?php }; ?>
                
            </div>
            <div class='director'>
                Director: 
                <?=  $film2->director; ?>
            </div>
            <div class="release">
                <?=  'Release: ' . $film2->release; ?>
            </div>
            
            
        </div>
    </div>
    
</body>
</html>