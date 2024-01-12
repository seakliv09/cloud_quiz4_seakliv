<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz3 extends Model
{
    use HasFactory;
    protected $table='quiz3s';
    protected $fillable=['firstname','lastname','file'];
}
