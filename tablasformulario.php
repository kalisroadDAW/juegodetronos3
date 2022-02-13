<?php

require ("gameofthrones_db.php");


if(isset($_POST["pag"])){
    $capitulo=$_POST["pag"];
    foreach($capitulo as $pagina){
        echo $pagina . "</br>";
    }if($pagina == "E1"){
        $cap="SELECT * FROM gameofthrones.season_ep WHERE episode='1'";


    }else if($pagina == "E2"){
        $cap="SELECT * FROM gameofthrones.season_ep WHERE episode='2'";
        
    }else if($pagina == "E3"){
        $cap="SELECT * FROM gameofthrones.season_ep WHERE episode='3'";

    }else if($pagina == "E4"){
        $cap="SELECT * FROM gameofthrones.season_ep WHERE episode='4'";

    }else if($pagina == "E5"){
        $cap="SELECT * FROM gameofthrones.season_ep WHERE episode='5'";

    }else if($pagina == "E6"){
        $cap="SELECT * FROM gameofthrones.season_ep WHERE episode='6'";

    }else if($pagina == "E7"){
        $cap="SELECT * FROM gameofthrones.season_ep WHERE episode='7'";

    }else if($pagina == "E8"){
        $cap="SELECT * FROM gameofthrones.season_ep WHERE episode='8'";

    }else if($pagina == "E9"){
        $cap="SELECT * FROM gameofthrones.season_ep WHERE episode='9'";

    }else if($pagina == "E10"){
        $cap="SELECT * FROM gameofthrones.season_ep WHERE episode='10'";

    }else{
        echo "capitulo no encontrado";
    }

}











$resultado=mysqli_query($conexion, $cap);

echo "<table><tr><td>";

while($fila=mysqli_fetch_row($resultado)){


 echo "Nombre del actor: ". " ".$fila[1]. "</tr><td>" ;
 echo "Personaje: ". " ".$fila[2]. "</tr><td>" ;
 echo "capitulo: "." ".$fila[3]. "</tr><td>" ;
 echo "</br>";

} 

?>
