<?php 

$misal = "45+42";

function hesabla( $misal ){

    if(preg_match('/(\d+)(?:\s*)([\+\-\*\/])(?:\s*)(\d+)/', $misal, $matches) !== FALSE){
        $operator = $matches[2];
    
        switch($operator){
            case '+':
                $answer = $matches[1] + $matches[3];
                break;
            case '-':
                $answer = $matches[1] - $matches[3];
                break;
            case '*':
                $answer = $matches[1] * $matches[3];
                break;
            case '/':
                $answer = $matches[1] / $matches[3];
                break;
        }
    
        return $answer;
    }

}

echo hesabla( $misal );


?>