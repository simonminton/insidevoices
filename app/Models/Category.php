<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\UsesUuid;

class Category extends Model
{
    use HasFactory, UsesUuid;

    public function questions()
	{
	    return $this->hasMany(Question::class)->orderBy('sort');
	}
}
