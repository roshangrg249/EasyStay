<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    public $table="bookings";
    protected $fillable = [
        'user_name',
        'contact',
        'addresss',
        'secondary_contact',
        'required_space',
        'house_id'
    ];
}
