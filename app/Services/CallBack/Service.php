<?php

namespace App\Services\CallBack;

use App\Models\CallBack;

class Service
{
  public function store($data)
  {
    CallBack::create($data);
  }

  public function update($callBack, $data)
  {
    $callBack->update($data);
  }

  public function delete($callBack)
  {
    $callBack->delete();
  }

  public function select()
  {
    return CallBack::orderBy('created_at','DESC')->paginate(50);
  }

}