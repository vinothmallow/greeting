<?php

namespace VinothMallow\Greeting;

class Greeting
{
    public function greet(String $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }
}