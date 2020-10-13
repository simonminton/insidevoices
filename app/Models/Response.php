<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\UsesUuid;
use Illuminate\Database\Eloquent\SoftDeletes;

class Response extends Model
{
    use HasFactory, SoftDeletes, UsesUuid;

    public function questions()
	{
	    return $this->belongsTo(Question::class);
	}

	public function respondent()
	{
	    return $this->belongsTo(Respondent::class);
	}
}
