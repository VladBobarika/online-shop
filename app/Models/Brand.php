<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name', 'description', 'status', 'creation_year', 'logo'];
    //protected $guarded = ['id'];

    use HasFactory;
}
