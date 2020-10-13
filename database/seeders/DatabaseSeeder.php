<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\QuestionType;
use App\Models\Category;
use App\Models\Company;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        QuestionType::create([
        	'name' => 'text',
        ]);
        QuestionType::create([
        	'name' => 'textarea',
        ]);
        QuestionType::create([
        	'name' => 'select',
        ]);
        QuestionType::create([
        	'name' => 'radio',
        ]);
        QuestionType::create([
        	'name' => 'checkboxes',
        ]);
         Category::create([
        	'name' => 'Race',
        ]);
        Company::create([
            'name' => 'Google',
        ]);
        Company::create([
            'name' => 'Airbnb',
        ]);
        Company::create([
            'name' => 'Apple',
        ]);
    }
}
