<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    public $table="homes";
    protected $fillable = [
        'owner_name',
        'owner_contact',
        'home_capacity',
        'available_space'
    ];
}
