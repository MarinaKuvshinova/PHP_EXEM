<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'create_at',
        'update_at',
    ];
    protected $rules=[
        'title'=>['required','max:100'],
    ];
}
