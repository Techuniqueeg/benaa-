<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = [];
    protected $hidden = ['updated_at', 'created_at'];

    use HasFactory;
}
