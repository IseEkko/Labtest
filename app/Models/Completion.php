<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Completion extends Model
{
    protected $table = "completion";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];
}
