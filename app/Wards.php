<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wards extends Model
{
    protected $table = "wards";

    protected $primaryKey = 'xaid';
    protected $guarded = [];
}
