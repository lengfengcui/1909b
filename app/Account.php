<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    // 指定表名
    protected $table = 'account';
    protected $primaryKey = 'account_id';
    // 关闭时间戳
    public $timestamps = false;
    // 黑名单
    protected $guarded = [];
}
