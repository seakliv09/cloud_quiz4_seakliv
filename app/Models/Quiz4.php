<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz4 extends Model
{
    use HasFactory;
    protected $table='quiz4';
    protected $fillable=['firstname','lastname','file'];
}
