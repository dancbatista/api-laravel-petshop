<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetOwner extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone',];
    protected $visible = ['id', 'name', 'phone',];
    protected $hidden = ['',];

}
