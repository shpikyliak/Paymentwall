<?php

class Error
{

    public $phone;
    public $email;
    public $card_number;
    public $expiry_date;
    public $cvv2;
    public $success = true;

    public function getErrorMes()
    {
       //make error list

        foreach ($this as $key=>$value)
        {
            if ($key!='success') $answer[$key] = ($value ? true : false);
            if (!$value) $haveErr = true;
        }
        if ($haveErr) $this->success=false;
        return $answer;
    }
}