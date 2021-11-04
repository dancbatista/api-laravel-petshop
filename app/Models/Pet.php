<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'breed', 'is_active', 'pet_type_id', 'pet_owner_id',];
    protected $visible = ['id','name', 'age', 'breed', 'is_active', 'pet_type_id', 'pet_owner_id',];
    protected $hidden = ['',];

    public function petType() {
        return $this->hasOne(PetType::class, 'id', 'pet_type_id');
    }

    public function petOwner() {
        return $this->hasOne(PetOwner::class, 'id', 'pet_owner_id');
    }
}
