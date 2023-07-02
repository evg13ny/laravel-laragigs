<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        'heading'  => 'Latest Listings',
        'listings' => [
            [
                'id'          =>  1,
                'title'       => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum animi quod sunt rem aliquid excepturi repellat odit dolore! Rem repudiandae illum vitae saepe temporibus dolorum magnam autem, sunt numquam aspernatur.'
            ],
            [
                'id'          =>  2,
                'title'       => 'Listing Two',
                'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vel fugiat saepe dolorum eum voluptate accusantium minima, maiores est odio ad tempore ea? Distinctio velit, accusamus suscipit provident molestias rerum voluptatibus porro labore aspernatur rem eaque culpa maiores, illum sapiente quos.'
            ]
        ]
    ]);
});

/* Route::get('/hello', function () {
    return response('<h1>Hello World!</h1>', 200)
        ->header('Content-Type', 'text/plain')
        ->header('foo', 'bar');
});

Route::get('/posts/{id}', function ($id) {
    // ddd($id);
    return response('Post ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function (Request $request) {
    return $request->name . ' ' . $request->city;
}); */
