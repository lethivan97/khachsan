<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public $timestamps = false;
    protected $table = "payments";
    protected $fillable = [
        'name'
    ];

    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
}
