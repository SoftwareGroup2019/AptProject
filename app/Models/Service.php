<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['servicename','title','username','email','password','group_id'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function apartments()
    {
        return $this->belongsToMany(Apartment::class,'apartment_services');
    }
}
