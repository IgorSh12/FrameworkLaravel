<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TokenValid
{
    /**
     * Handle an incoming request.
     *
     * Проверка полььзователя на имеющийся в адресной строке ключа токена
     * Пример: http://localhost/?token=ключ
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        #Проверка на совпадение ключа из token
        #Получаем из запроса ключ токена и сравниваем его значение
        if ($request->query('token') == 'qaz-asd-edc'){
            #отправляем пользователя куда он следовал
            return  $next($request);
        }

        #Если токен не соответствует, выведем текст Нет доступа и вернем ошибек 401
        #401 ялвяется ошибкой не авторизован
        return response('нет доступа', 401);
    }
}
