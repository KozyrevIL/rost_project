<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Page\StoreRequest;
use App\Models\Page;

class StoreController extends MainController
{
    public function __invoke(StoreRequest $request)
    {
        $data= $request->validated();

        $this->service->store($data);

        return redirect()->route('admin.page.index');
    }
}
