<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{

	protected $fillable = [
		'name',
        'division_id',
        'district_id',
        'category_id',
    ];

    public function district()
    {

        return $this->belongsto('App\District');
    }
}
