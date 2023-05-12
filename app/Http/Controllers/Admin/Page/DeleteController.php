<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Page\UpdateRequest;
use App\Models\Page;

class DeleteController extends MainController
{
    public function __invoke(Page $page)
    {
        $this->service->delete($page);

        return redirect()->route('admin.page.index')->with('message', 'Запись удалена!');        ;
    }
}
