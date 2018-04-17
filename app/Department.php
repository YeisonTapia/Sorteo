<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table ='departments';
    protected $fillable = ['name'];

    public function Participants()
    {
        return $this->hasMany('App\Participant');
    }
}
