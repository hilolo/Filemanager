<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\File;
use App\User;

class Group extends Model
{
    protected $table = 'groups';

    public function files()
    {
        return $this->hasMany('App\File', 'group_id', 'id');
    }

    public function user()
    {
    return $this->belongsTo('App\User')->withDefault();
    }   

}
