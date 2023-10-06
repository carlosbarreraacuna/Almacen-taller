<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'precio', 'estado'];

    public function user (){
        return $this->belongsTo(\App\ModelsUser::class);
    }
}
