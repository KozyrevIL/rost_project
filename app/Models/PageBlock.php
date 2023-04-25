<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageBlock extends Model
{
    use HasFactory;
    protected $table = 'page_blocks';
    protected $quarded = false;
    protected $fillable=['id_page','item','page_text','pos','description','caption'];    

    static function mainSelect()
    {
       return static::where("visible",1);
    }
}
