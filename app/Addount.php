<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addount extends Model
{
    protected $table = 'Admin';
    protected $primaryKey = 'admin_id';
    protected $guarded=[];
    public $timestamps = false;
}
