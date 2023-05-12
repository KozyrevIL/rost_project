<?php

namespace App\Services\Admin\Page;

use App\Models\Page;
use App\Models\PageBlock;

class Service
{
  public function store($data)
  {
    Page::create($data);
  }

  public function update($page, $data)
  {
    $page->update($data);
  }

  public function delete($page)
  {
    PageBlock::where("id_page", $page->id)->delete();
    $page->delete();
  }
}
