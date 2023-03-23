<?php
        function pipi() 
        { 
            $x = rand(0, 4);
            switch($x) {
            case 0:
                echo 'Saison 1 - Episode 01';
                break;
            case 1:
                echo 'Saison 1 - Episode 02';
                break;
            case 2:
                echo 'Saison 1 - Episode 03';
                break;
            case 3:
                echo 'Saison 1 - Episode 04';
                break;
            case 4:
                echo 'Saison 1 - Episode 05';
                break;
            default:
                echo 'bug pas ça marche pas lol';
            }
        }
    ?>