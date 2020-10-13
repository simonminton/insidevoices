<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\UsesUuid;
use Illuminate\Database\Eloquent\SoftDeletes;

class Respondent extends Model
{
    use HasFactory, SoftDeletes, UsesUuid;

    /**
	* Get the Company that the Respondent belongs to.
	*/
	public function company()
	{
	    return $this->belongsTo(Company::class);
	}


    /**
	* Get the Answers owned by the Respondent.
	*/
	public function responses()
	{
	    return $this->hasMany(Responses::class);
	}

}
