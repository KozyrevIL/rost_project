<?php

namespace App\Services\Admin\Page;

use App\Models\Page;

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

}