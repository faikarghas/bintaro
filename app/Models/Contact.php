<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "contact";
    protected $fillable = ['id','perihal', 'nama_depan','nama_belakang','email','pesan'];
}