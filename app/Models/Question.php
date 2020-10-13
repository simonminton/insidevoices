<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Concerns\UsesUuid;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory, SoftDeletes, UsesUuid;
	public $casts = [
	    'options' => 'array'
	];
    public function responses()
	{
	    return $this->hasMany(Response::class);
	}
	public function question_type()
	{
	    return $this->belongsTo(QuestionType::class);
	}
	public function category()
	{
	    return $this->belongsTo(Category::class);
	}
	public function parent()
	{
	    return $this->belongsTo(Question::class);
	}
	public function children()
	{
	    return $this->hasMany(Question::class, 'parent_id');
	}
}
