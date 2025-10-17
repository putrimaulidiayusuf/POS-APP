<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = ['name', 'email', 'address', 'phone'];

    public function orders()
    {
        return $this->hasMany(order::class);
    }
}
