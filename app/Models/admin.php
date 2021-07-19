<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as authenticatableContract; 

class admin extends Model implements authenticatableContract
{
    use HasFactory;
    use Authenticatable;
}
