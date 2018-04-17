<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table ='participants';
    protected $fillable = ['name', 'lastname', 'phone', 'email', 'ident', 'city_id', 'department_id', 'protecteddata'];

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function department()
    {
        return $this->belongsTo('App\Department');
    }
}
