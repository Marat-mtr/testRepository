<?php

namespace controller;

class Calculator {

    /**
     * метод додавання
     */
    public function addition($x , $y) {
        $summa = $x + $y;
        echo "<br> $x + $y = " . $summa;
    }


    /**
     * метод віднімання
     */
    public function subtraction($x , $y) {
        $summa = $x - $y;
        echo "<br> $x - $y = " . $summa;
    }


    /**
     * метод множення
     */
    public function multiplication($x , $y) {
        $summa = $x * $y;
        echo "<br> $x * $y = " . $summa;
    }


    /**
     * метод ділення
     */
    public function division($x , $y) {
        $summa = $x / $y;
        echo "<br> $x / $y = " . $summa;
    }





}