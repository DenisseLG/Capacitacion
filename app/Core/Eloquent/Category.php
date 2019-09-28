<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table="categories";  //porque va relacionado a la tabla categories
    protected $connection="pgsql";
}



