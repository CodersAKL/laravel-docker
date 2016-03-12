<?php

/**
 * @global $factory
 */

$factory('App\User', [
    'name' => $faker->name,
    'email' => $faker->email,
    'password' => $faker->password
]);

$factory('App\Tag', [
    'title' => $faker->word,
]);

$factory('App\PageTag', [
    'page_id' => 'factory:App\Page',
    'tag_id' => 'factory:App\Tag'
]);



$factory('App\Page', [
    'user_id' => 'factory:App\User',
    'title' => $faker->sentence,
    'body' => $faker->paragraph
]);
