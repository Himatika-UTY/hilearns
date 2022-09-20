<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulSeeder extends Seeder {
   public function run()
   {
		$data = [
			[
				'id_category' => 2,
				'name' => 'Tutorial Dasar HTML',
				'slug' => 'html',
				'level' => 'Dasar',
				'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae voluptas iusto repellendus? Excepturi assumenda nihil quis ut veritatis amet? Enim!',
				'image' => 'html.jpg',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'id_category' => 2,
				'name' => 'Tutorial Dasar CSS',
				'slug' => 'css',
				'level' => 'Dasar',
				'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae voluptas iusto repellendus? Excepturi assumenda nihil quis ut veritatis amet? Enim!',
				'image' => 'css.png',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'id_category' => 2,
				'name' => 'Tutorial Dasar Javascript',
				'slug' => 'javascript',
				'level' => 'Dasar',
				'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae voluptas iusto repellendus? Excepturi assumenda nihil quis ut veritatis amet? Enim!',
				'image' => 'js.png',
				'created_at' => now(),
				'updated_at' => now(),
			],
			[
				'id_category' => 2,
				'name' => 'Tutorial Dasar PHP',
				'slug' => 'php',
				'level' => 'Dasar',
				'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vitae voluptas iusto repellendus? Excepturi assumenda nihil quis ut veritatis amet? Enim!',
				'image' => 'php.png',
				'created_at' => now(),
				'updated_at' => now(),
			]
		];

		DB::table('modul')->insert($data);
   }
}

