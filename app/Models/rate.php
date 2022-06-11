<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class rate extends Model
{
    use HasFactory;
    protected $table = 'rate';
    protected $fillable = ['user_id','blog_id','rating'];
    public $timestamps = true;
}
