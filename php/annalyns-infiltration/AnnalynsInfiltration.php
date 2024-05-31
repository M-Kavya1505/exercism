<?php

class AnnalynsInfiltration
{
    public function canFastAttack($is_knight_awake)
    {
        //throw new \BadFunctionCallException("Implement the function");
        if($is_knight_awake==true)  return false;
        else   return true;
    }

    public function canSpy(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        //throw new \BadFunctionCallException("Implement the function");
       if($is_knight_awake==true||$is_archer_awake==true||$is_prisoner_awake==true)
           return true;
       else   return false;
    }

    public function canSignal(
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        //throw new \BadFunctionCallException("Implement the function");
        if($is_prisoner_awake==true&&$is_archer_awake==false)
            return true;
        else  return false;
    }

    public function canLiberate(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake,
        $is_dog_present
    ) {
        //throw new \BadFunctionCallException("Implement the function");
        if($is_dog_present==true)
        {
            if($is_archer_awake==false)
                return true;
            else
                return false;
        }
        else
        {
            if($is_prisoner_awake==true && $is_knight_awake==false && $is_archer_awake==false)
                return true;
            else
                return false;
        }
    }
}
