<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected  $fillable = [

        'customer_id',
        'pet_name',
        'drop_off_date',
        'pick_up_date',
        'description',
        'status'
    ];

    //declares a relation
    public function customer(){
        return $this->belongsTo(User::class);
    }
}
