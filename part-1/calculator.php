<?php

class Calculator {

    public function sum($n1, $n2)
    {
        $sum_result =  $n1 + $n2;
        echo $n1 . " + " . $n2 . " = " . $sum_result . "<br>";
    }
    
    public function sub($n1, $n2)
    {
        $sub_result = $n1 - $n2;
        echo $n1 . " - " . $n2 . " = " . $sub_result . "<br>";
    }
    
    public function multiplication($n1, $n2)
    {
        $multip_result =  $n1 * $n2;
        echo $n1 . " x " . $n2 . " = " . $multip_result . "<br>";
    }
    
    public function division($n1, $n2)
    {
        $div_result =  $n1 / $n2;
        echo $n1 . " / " . $n2 . " = " . $div_result;
    }

}    
