<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    protected $fillable = ['aptname','password','enableads','enableservie','passcode','group_id'];


    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class,'apartment_services');
    }
}
