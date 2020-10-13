<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\UsesUuid;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes, UsesUuid;

    public function respondents()
	{
	    return $this->hasMany(Respondent::class);
	}
	public function industry()
	{
	    return $this->belongsTo(Industry::class);
	}
}
