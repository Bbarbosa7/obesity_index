<?php

    function obesityCalc ($weigth, $height)
    {
        return $weigth / ($height * $height);
    }    

    echo obesityCalc(75, 1.75)
?>