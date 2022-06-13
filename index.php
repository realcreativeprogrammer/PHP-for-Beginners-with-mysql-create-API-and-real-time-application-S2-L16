<?php
$x=-55;
$y=23;
$operator='*';
$typeOfX=gettype($x);
$typeOfY=gettype($y);
if(($typeOfX == 'integer' || $typeOfX == 'double') && ($typeOfY == 'integer' || $typeOfY == 'double')){
    $result=null;
    switch($operator){
        case '+':
            $result=$x+$y;
            echo $x.' '.$operator.' '.$y.' = '.$result.'<br>';
            if($result %2 == 0){
                echo 'the result is even <br>';
            }else{
                echo 'the result is odd <br>';

            }
            if($result>0){
                echo ' the result is possative<br>';
            }else{
                echo ' the result is negative<br>';
            }
            break;
        case '-':
            $result=$x-$y;
            echo $x.' '.$operator.' '.$y.' = '.$result.'<br>';

            if($result % 2 == 0){
                echo 'the result is even<br>';
            }else{
                echo 'the result is odd<br>';

            }
            if($result>0){
                echo ' the result is possative<br>';
            }else{
                echo ' the result is negative<br>';
            }
            break;
         case '*':
            $result=$x*$y;
            echo $x.' '.$operator.' '.$y.' = '.$result.'<br>';

            if($result % 2 == 0){
                echo 'the result is even<br>';
            }else{
                echo 'the result is odd<br>';

            }
            if($result>0){
                echo ' the result is possative<br>';
            }else{
                echo ' the result is negative<br>';
            }
            break;   
         case '/':
            $result=$x/$y;
            echo $x.' '.$operator.' '.$y.' = '.$result.'<br>';

            if($result % 2 == 0){
                echo 'the result is even<br>';
            }else{
                echo 'the result is odd<br>';

            }
            if($result>0){
                echo ' the result is possative<br>';
            }else{
                echo ' the result is negative<br>';
            }
            break;  
        default:
            echo 'please write a correct operator<br>';                
    }
    
}else{
    echo 'variable x and y must be int or double<br>';
}

?>