<?php

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

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth'
], function() {
    Route::get('posts', 'PostController@index');
    Route::get('posts/settings', 'PostController@settings');

    Route::post('posts/store', [
    	'as' => 'posts.store',
    	'uses' => 'PostController@store'
    ]);

    Route::get('posts/{id}/fetch-data', [
    	'as' => 'posts.fetch-data',
    	'uses' => 'PostController@fetchDataAjax'
    ]);

    Route::post('posts/update', [
    	'as' => 'posts.update',
    	'uses' => 'PostController@ajaxUpdate'
    ]);

    Route::post('posts/delete', [
    	'as' => 'posts.delete',
    	'uses' => 'PostController@delete'
    ]);

    Route::post('posts/delete-permanently', [
    	'as' => 'posts.delete-permanently',
    	'uses' => 'PostController@deletePermanently'
    ]);

    Route::post('posts/delete/multiple', [
    	'as' => 'posts.delete.multiple',
    	'uses' => 'PostController@deleteMultiple'
    ]);

    Route::post('posts/trash/empty', [
    	'as' => 'posts.trash.empty',
    	'uses' => 'PostController@emptyTrash'
    ]);

    Route::post('posts/settings/store', [
        'as' => 'posts.settings.store',
        'uses' => 'PostController@settingsStore'
    ]);

    Route::post('posts/settings/update', [
        'as' => 'posts.settings.update',
        'uses' => 'PostController@settingsUpdate'
    ]);

    Route::get('posts/{id}/make-draft', [
        'as' => 'posts.make-draft',
        'uses' => 'PostController@makePostDraft'
    ]);

    Route::get('posts/{id}/publish', [
        'as' => 'posts.publish',
        'uses' => 'PostController@makePostPublish'
    ]);

    Route::get('posts/{id}/restore', [
        'as' => 'posts.restore',
        'uses' => 'PostController@restore'
    ]);

});

Route::group([
	'prefix' => 'laravel-filemanager',
	'middleware' => ['web', 'auth']
], function () {
	\UniSharp\LaravelFilemanager\Lfm::routes();
});
