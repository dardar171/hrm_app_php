<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeeDetail extends Model
{
    protected $fillable=[
        'mobile','dob','gender','address'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
