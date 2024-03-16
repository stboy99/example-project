<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    
    protected $table = 'data';

    public static $rules = [
        'name' => 'required',
        'price' => 'required'
    ];

    protected $fillable = [
        'name',
        'price',
        'detail',
        'publish',
        'created_by',
        'updated_by',
    ];
    
}
