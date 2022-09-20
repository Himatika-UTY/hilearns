<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder {
   public function run()
   {
		$data = [
			[
				'name' => 'Basic Programming',
				'slug' => 'basic',
				'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque sed soluta, et voluptate qui quibusdam.',
				'icon' => 'fa fa-cog',
				'color' => 'info',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'Basic Web Programming',
				'slug' => 'basic-web',
				'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque sed soluta, et voluptate qui quibusdam.',
				'icon' => 'fa fa-globe',
				'color' => 'danger',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'Mobile Programming',
				'slug' => 'mobile',
				'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque sed soluta, et voluptate qui quibusdam.',
				'icon' => 'fa fa-mobile',
				'color' => 'primary',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'Frontend Programming',
				'slug' => 'frontend',
				'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque sed soluta, et voluptate qui quibusdam.',
				'icon' => 'fa fa-picture-o',
				'color' => 'warning',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'Backend Programming',
				'slug' => 'backend',
				'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque sed soluta, et voluptate qui quibusdam.',
				'icon' => 'fa fa-server',
				'color' => 'success',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'name' => 'Machine Learning Programming',
				'slug' => 'machine-learning',
				'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque sed soluta, et voluptate qui quibusdam.',
				'icon' => 'fa fa-first-order',
				'color' => 'indigo',
				'created_at' => now(),
				'updated_at' => now(),
			]
		];

		DB::table('category')->insert($data);
   }
}

