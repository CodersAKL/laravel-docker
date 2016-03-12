<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;
use Illuminate\Database\Eloquent\Model;

class PagesTableSeeder extends Seeder {

	public function run()
	{
//		$faker = Faker::create();
        /*factory(App\User::class, 50)->create()->each(function($u) {
            $u->page()->save(factory(App\Page::class)->make());
        });*/
//        TestDummy::build('App\Page');
        TestDummy::times(3)->create('App\PageTag');
        TestDummy::times(5)->create('App\Page');
	}

}
