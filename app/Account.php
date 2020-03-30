<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
<<<<<<< HEAD
    protected $table = 'account';
    protected $primaryKey = 'account_id';
    public $timestamps = false;
}
=======
    // 指定表名
    protected $table = 'account';
    protected $primaryKey = 'account_id';
    // 关闭时间戳
    public $timestamps = false;
    // 黑名单
    protected $guarded = [];
}
>>>>>>> 1da30e754affd119fdd71ee770fc89489533e779
