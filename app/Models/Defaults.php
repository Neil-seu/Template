<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Defaults extends Model
{
    use HasFactory;
    protected $fillable = ['firstName', 'lastName'];
}
