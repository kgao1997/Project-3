<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the 

routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to 

execute when that URI is requested.
|
*/


Route::get('/', function()
{
	return View::make('hello');
});
Route::get('lorenIpsum', function(){
    echo 'Loren Ipsum is computer text used by programmers to act as temporary text /n
	 for their applications.  It is meant to test how a program interface looks, the text /n
	 is not meant to be read';
});


Route::get('/lorenIpsum/{number}', function($number) {

    $generator = new Badcow\LoremIpsum\Generator();
    $paragraphs = $generator->getParagraphs($number);
     echo implode('<p>', $paragraphs);

});

Route::get('/randomUser', function(){
  echo 'Will generate a random user name.';
});

Route::get('/randomUser/{number}', function($number){

    $faker = Faker\Factory::create();
    for ($i=0; $i < $number; $i++) {
      echo $faker->name, "\n";}
});