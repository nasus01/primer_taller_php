<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="tex/html; charset=utf-8" />
        <title>Mi primera página con php</title>


    </head>
    <body>
        <h1>solución 1</h1>
        <form mane="form1" method="POST" action="index.php">
            digita un número : <input type="text" name="txtnumero1">
            <br>

           
            <input type="submit" name="calcular" value="calcular">
          



        </form>
          
        
        
        <?php
        if(isset($_POST["calcular"])){
            $numero=$_POST["txtnumero1"];

     
           

           
             
            function obtener_factorial($numero)
            {
               if($numero<=1)
                  return 1;
               else
                  return $numero * obtener_factorial($numero-1);
            }
            echo obtener_factorial ($numero);
          
        }
        
        ?>
      <h1>solución 3</h1>
        <?php 
        

            $array=array(1,2,3,4,5);
            $total=0;
            
            foreach($array as $value ){
               $total+=$value;

            }
            echo $total;

           

        
        

        

        



        
        
        ?>
        <br>
        <h1>solución 4</h1>
        <?php
        $datos[0][0]="45";
        $datos[0][1]="4";
        $datos[0][2]="6";
        $datos[0][3]="7";
        $datos[1][0]="23";
        $datos[1][1]="45";
        $datos[1][2]="67";
        $datos[1][3]="1";
        $datos[2][0]="3";
        $datos[2][1]="4";
        $datos[2][2]="7";
        $datos[2][3]="9";
        $datos[3][0]="5";
        $datos[3][1]="4";
        $datos[3][2]="3";
        $datos[3][3]="2";
        $datos[4][0]="1";
        $datos[4][1]="2";
        $datos[4][2]="1";
        $datos[4][3]="4";

        $array = array();
$array2 = array();
for ($i = 0 ; $i<5 ; $i++ ) {

    for ($j = 0 ; $j<4 ; $j++ ) {
       
        if(($datos[$i][$j] % 2) == 0) {

            $array[] = $datos[$i][$j];
            
            
        }
         else {
         
            
            
            $array2[] = $datos[$i][$j];
                
            }
            

    }
}  

foreach($array as $valor) {
    Echo "los numeros pares son: ";
    echo $valor . "<br>"; 
}

    foreach($array2 as $valor2) {
        Echo "los numeros impares son: ";
        echo $valor2 . "<br>"; 
    }

        ?>

    </body>
</html>