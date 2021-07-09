<?php 
    
    require __DIR__ . '../../data/data.php';
    
    class Movie {
        // attributi d'istanza
        public $title;
        public $image;
        public $plot;
        public $vote;
        public $cast;
        public $genre;
        public $director;
        public $duration;
        public $release;

        // costruttore
        function __construct($title,$image, $plot, $vote = 0, $cast, $director = '',$genre = '', $release = '', $duration =''){
            $this->title = $title;
            $this->image = $image;
            $this->plot = $this->subPlot($plot);
            $this->cast = $cast;
            $this->director = $director;
            $this->genre = $genre;
            $this->vote = $vote;
            $this->release =$release ;
            $this->duration = $duration;
        }

        // metodi
        public function subPlot($plotMovie){
            return substr($plotMovie,0,110) . '...';
        }
    }
    
    $film1 = new Movie('Iron man',$image,$plot, 4.5, $cast ,'Jon Favreau', $genre,'01/05/2008','2h 6m');

    $film2= new Movie('Fight Club', $image2, $plot2, 4.6 ,$cast2,'David Fincher','Drama','29/10/1999','2h 19m');

?>
