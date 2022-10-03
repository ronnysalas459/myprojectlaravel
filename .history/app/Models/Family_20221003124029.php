<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Family extends Model
{
    // use HasFactory;

     public const IS_ALIVE_SELECT = ['1' => ":-)",'0' => ":' - ("];
     protected $fillable = ['name', 'relationship', 'age', 'is_alive'];

    protected $connection = 'mongodb';
    protected $ollection = 'families';
}
