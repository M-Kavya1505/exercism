<?php

class Lasagna
{
    public function expectedCookTime()
    {
        // Implement the expectedCookTime method
        return 40;
    }

    public function remainingCookTime($elapsed_minutes)
    {
        // Implement the remainingCookTime method
        $expected_time=$this->expectedCookTime();
        return $expected_time - $elapsed_minutes;
        /*$remaining= $expected_time - $elapsed_minutes;
        return $remaining;*/
    }

    public function totalPreparationTime($layers_to_prep)
    {
        // Implement the totalPreparationTime method
        return 2*$layers_to_prep;
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        // Implement the totalElapsedTime method
        return $this->totalPreparationTime($layers_to_prep)+$elapsed_minutes;
    }

    public function alarm()
    {
        // Implement the alarm method
        return "Ding!";
    }
}
