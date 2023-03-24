<!DOCTYPE html>
<head>
    <head>
        <title>Je sais pas encore</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="icon" href="img/logo.png">
        
    </head>
</head>

<html> 
<body>

<img src="img/logo2.png" class="logo2">

<div class="tous">


<button class="bouton" onclick="style.display = 'none'">
AFFICHER
</button>


<strong>
<div class="php">
<?php 
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
    
?>
</div>
        </div>
        </strong>



<!--<div>
  <p class="nom">brooklyn nine nine lol</p>
  <button onclick="generation()">Générer</button>
</div>

<script>
function generation() 
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
</script>
    

<form>
<input type="button" value="Démarrer la machine">
</form>


<p>test </p>



    <script>
        var btn = document.querySelector('input');
        var txt = document.querySelector('p');


        function updateBtn() {
            switch() {
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
    </script>

  

</body>
</html>