<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    public function getDescriptionAttribute($value)
    {
    	return ucfirst($value);
    }

    public function getCategoryAttribute($value)
    {
    	return ucfirst($value);
    }

    protected $primaryKey='income_id';

}
