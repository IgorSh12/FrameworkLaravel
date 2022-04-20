<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function test()
    {
        return 'Hello world';
    }

    public function index(Request $request)
    {
        return $request->ips();
    }
    #Методдля динамической ссылки
    #Будет пересылать id пользователя
    public function user(Request $request ,$id)
    {
        return 'User ID - ' . $id . '; Host' . $request->userAgent();
    }
}
