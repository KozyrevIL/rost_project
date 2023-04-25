<?php

namespace App\Http\Controllers\Admin\CallBack;

use App\Http\Controllers\CallBack\MainController;
use App\Http\Requests\CallBack\UpdateRequest;
use App\Models\CallBack;

class UpdateController extends MainController
{
    public function __invoke(UpdateRequest $request, CallBack $callBack)
    {
       
        $data = $request->validated();

        $this->service->update($callBack, $data);

        return redirect()->back()->with('message', 'Комментарий успешно изменен!');        
    }
}
