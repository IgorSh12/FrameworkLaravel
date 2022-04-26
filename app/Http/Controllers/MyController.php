<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function education()
    {
        return 'Я люблю учиться в чрт';
    }

    public function name($name)
    {
        return "Меня зовут - " . $name;
    }

    public function name_fruit($name, $fruit)
    {
        return "Меня зовут - " . $name . " Я люблю - " . $fruit;
    }

    public function summa()
    {
        return 5 + 5;
    }

    public function sum($one, $two)
    {
        return $one + $two;
    }

    public function CheckKey($cipher)
    {
        if ($cipher == 'keyOneTest'){
            return "я взломал шифр";
        }else{
            return "нет доступа";
        }
    }
}
