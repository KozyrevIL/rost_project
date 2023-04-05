<?php

namespace App\Services\Admin\PageBlock;

use App\Models\PageBlock;

class Service
{
  public function store($data)
  {
    PageBlock::create($data);
  }

  public function update($pageBlock, $data)
  {
    $pageBlock->update($data);
  }

}