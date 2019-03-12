<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $table = 'thread';
    public $primaryKey = 'ThreadID';
    public $timestamps  = false;

}
