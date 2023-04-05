<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Page\UpdateRequest;
use App\Models\Page;

class UpdateController extends MainController
{
    public function __invoke(UpdateRequest $request, Page $page)
    {
        $data = $request->validated();

        $this->service->update($page, $data);

        return redirect()->route('admin.page.index');
    }
}
