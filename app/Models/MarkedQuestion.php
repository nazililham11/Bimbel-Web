<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarkedQuestion extends Model
{
    protected $fillable = ['report_id', 'number', 'status'];

}
