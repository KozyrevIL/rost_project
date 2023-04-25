<?php

namespace App\Http\Controllers\CallBack;

use App\Http\Requests\CallBack\StoreRequest;



class StoreController extends MainController
{
    public function __invoke(StoreRequest $request)
    {
        $data= $request->validated();

        $this->service->store($data);

        return redirect()->back()->with('message', 'Спасибо за обращение! Ваше сообщение успешно отправлено администратору сайта!');        
    }
}
