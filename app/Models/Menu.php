<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable =[
                            'name',
                            'image',
                            'description',
                            'catogure_id',
                         ];

    public function catogures(){
        return $this->belongsTo(Catogure::class);
    }
}
