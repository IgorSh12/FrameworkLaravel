<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class TestController extends Controller
{
    public function Education()
    {
        return 'Я люблю учиться в ЧРТ';
    }


    public function MyDoc()
    {
        return view('template');
    }

    public function DocOrg(){
        $organization = 'ОАО Инвест Банк';
        return view('document', compact('organization'));
    }

    public function MyBook()
    {
        $book = "Я теперь не бываю ни счастлив, ни несчастен. Все просто проходит мимо. - Дадзай Осаму 'Исповедь Неполноценного человека'";
        return view('MyBook', compact('book'));
    }

    public function Mus()
    {
        $array = ["1 запись", "Игорь", "Картошка","9","5"];
        return view('template4', compact('array'));
    }

    public function Temp5()
    {
        $array = ["1 запись", "Игорь", "Картошка","9","5"];
        return view('template5', compact('array'));
    }

    public function Temp6()
    {
        $array = [2, 4, 7, 8, 10];
        return view('template6', compact('array'));
    }
}
