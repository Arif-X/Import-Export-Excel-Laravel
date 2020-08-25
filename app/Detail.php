<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = "details";
    protected $fillable = ['user_id', 'nama', 'alamat'];
}
