<?php

    // creo la classe
    class Movie {
        public $titolo;
        public $attoreProtagonista;
        public $regista;
        public $anno;
        public $genere;

        // construct con due valori
        public function __construct($titolo, $anno) {
            $this->titolo = $titolo;
            $this->anno = $anno;
        }

        // funzione per titolo del film e anno
        public function getTitoloAnno(){
            return $this->titolo . ' <h3> (' . $this->anno . ') </h3>';
        }

        // funzione per il genere del film
        public function setGenere($genere) {
            $this->genere = $genere;
        }
        public function getGenere() {
            return $this->genere;
        }
    }

    // primo film
    $theBatman = new Movie('The Batman', '2022');
    $theBatman->attoreProtagonista = 'Robert Pattinson';
    $theBatman->regista = 'Matt Reeves';
    $theBatman->setGenere('Crime, Mistero, Thriller');

    echo "<h1>" . $theBatman->getTitoloAnno() . "</h1>";
    echo "<p> Genere: " . $theBatman->getGenere(). "</p>";
    echo "<p> Attore Protagonista: " . $theBatman->attoreProtagonista . "</p>";
    echo "<p> Scrittore e Regista: " . $theBatman->regista. "</p>";


    // secondo film
    $ilSestoSenso = new Movie('The Sixth Sense - Il sesto senso', '1999');
    $ilSestoSenso->attoreProtagonista = 'Bruce Willis';
    $ilSestoSenso->regista = 'M. Night Shyamalan';
    $ilSestoSenso->setGenere(' Mistero, Thriller, Dramma');

    echo "<h1>" . $ilSestoSenso->getTitoloAnno() . "</h1>";
    echo "<p> Genere: " . $ilSestoSenso->getGenere(). "</p>";
    echo "<p> Attore Protagonista: " . $ilSestoSenso->attoreProtagonista . "</p>";
    echo "<p> Scrittore e Regista: " . $ilSestoSenso->regista. "</p>";
