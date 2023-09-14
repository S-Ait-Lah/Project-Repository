<?php

namespace App\Models;

use App\Enums\TableLocation;
use App\Enums\TableStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable=[
                            'first_name',
                            'last_name',
                            'gmail',
                            'tel_number',
                            'guest_number',
                            'res_date',
                            'location',
                        ];
    protected $casts=[
                        'status'=>TableLocation::class, 
                        'location'=>TableStatus::class,                     
                     ];

    public function tables(){
        return $this->hasMany(Table::class);
    }
}