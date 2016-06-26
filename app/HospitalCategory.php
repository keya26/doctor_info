<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class HospitalCategory extends Model
{
     protected $fillable = ['name'];

     public function district()
    {

    	// $divisions = Division::all(); 
     //    $division_id = Input::get('id');
        return $this->belongsto('App\District');
    }
}
