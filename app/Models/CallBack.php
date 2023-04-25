<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallBack extends Model
{
    use HasFactory;
    protected $table = 'call_backs';
    protected $quarded = false;
    protected $fillable=['fio','email','post_data','comments'];    
}
