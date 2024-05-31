<?php

class PizzaPi
{
    public function calculateDoughRequirement($pizzas,$persons)
    {
        //throw new \BadFunctionCallException("Implement the function");
        $grams=$pizzas * (($persons*20)+200);
        return $grams;
    }

    public function calculateSauceRequirement($pizzas,$sauce_can_volume)
    {
        //throw new \BadFunctionCallException("Implement the function");
        $sauce_per_pizza=125;
        $cans=($pizzas*$sauce_per_pizza)/$sauce_can_volume;
        return $cans;
    }

    public function calculateCheeseCubeCoverage($cheese_dimension,$thickness,$diameter)
    {
        //throw new \BadFunctionCallException("Implement the function");
        $pizzas=(int)(($cheese_dimension**3)/($thickness*pi()*$diameter));
        return $pizzas;
    }

    public function calculateLeftOverSlices($pizzas,$friends)
    {
        //throw new \BadFunctionCallException("Implement the function");
        /*$consume=(int)($pizzas*8/$friends);
        $left=$pizzas*8-$consume*$friends;*/
        $left=($pizzas*8)%($friends);
        return $left;
    }
}
