<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catogure extends Model
{
    use HasFactory;

    protected $fillable =[
                            'name',
                            'image',
                            'description',
                          ];

    public function menus(){
        return $this->hasMany(Menu::class);
    }
}
