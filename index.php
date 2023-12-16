<?php
    require_once('php/encabezado.php');
?>
<?php
    $dia = mt_rand(1, 31);
    $mes = mt_rand(1, 12);
    switch ($mes){
        case 1:
            if($dia >= 20){
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/acuario.jpg" alt="Acuario">';
            }
            else{
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/capricornio.jpg" alt="Capricornio">';
            }
            break;
        case 2:
            if($dia >= 20){
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/piscis.jpg" alt="Piscis">';
            }
            else{
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/acuario.jpg" alt="Acuario">';
            }
            break;
        case 3:
            if($dia >= 21){
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/aries.jpg" alt="Aries">';
            }
            else{
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/piscis.jpg" alt="Piscis">';
            }
            break;
        case 4:
            if($dia >= 21){
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/tauro.jpg" alt="Tauro">';
            }
            else{
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/aries.jpg" alt="Aries">';
            }
            break;
        case 5:
            if($dia >= 21){
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/geminis.jpg" alt="Géminis">';
            }
            else{
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/tauro.jpg" alt="Tauro">';
            }
            break;
        case 6:
            if($dia >= 22){
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/cancer.jpg" alt="Cáncer">';
            }
            else{
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/geminis.jpg" alt="Géminis">';
            }
            break;
        case 7:
            if($dia >= 23){
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/leo.jpg" alt="Leo">';
            }
            else{
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/cancer.jpg" alt="Cáncer">';
            }
            break;
        case 8:
            if($dia >= 24){
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/virgo.jpg" alt="Virgo">';
            }
            else{
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/leo.jpg" alt="Leo">';
            }
            break;
        case 9:
            if($dia >= 24){
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/libra.jpg" alt="Libra">';
            }
            else{
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/virgo.jpg" alt="Virgo">';
            }
            break;
        case 10:
            if($dia >= 23){
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/escorpio.jpg" alt="Escorpio">';
            }
            else{
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/libra.jpg" alt="Libra">';
            }
            break;
        case 11:
            if($dia >= 23){
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/sagitario.jpg" alt="Sagitario">';
            }
            else{
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/escorpio.jpg" alt="Escorpio">';
            }
            break;
        case 12:
            if($dia >= 22){
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/capricornio.jpg" alt="Capricornio">';
            }
            else{
                echo '<p>Fecha Generada :', $dia , '/', $mes , '</p> <br> <img src="img/sagitario.jpg" alt="Sagitario">';
            }
            break;
    }
?>
<?php
    require_once('php/pie.php');
?>