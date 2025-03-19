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

Route::get('/', function () {
    return redirect('/admin');
});


/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/admin-users',                            'Admin\AdminUsersController@index');
    Route::get('/admin/admin-users/create',                     'Admin\AdminUsersController@create');
    Route::post('/admin/admin-users',                           'Admin\AdminUsersController@store');
    Route::get('/admin/admin-users/{adminUser}/edit',           'Admin\AdminUsersController@edit')->name('admin/admin-users/edit');
    Route::post('/admin/admin-users/{adminUser}',               'Admin\AdminUsersController@update')->name('admin/admin-users/update');
    Route::delete('/admin/admin-users/{adminUser}',             'Admin\AdminUsersController@destroy')->name('admin/admin-users/destroy');
    Route::get('/admin/admin-users/{adminUser}/resend-activation','Admin\AdminUsersController@resendActivationEmail')->name('admin/admin-users/resendActivationEmail');
});

/* Auto-generated profile routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/profile',                                'Admin\ProfileController@editProfile');
    Route::post('/admin/profile',                               'Admin\ProfileController@updateProfile');
    Route::get('/admin/password',                               'Admin\ProfileController@editPassword');
    Route::post('/admin/password',                              'Admin\ProfileController@updatePassword');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/posts',                                  'Admin\PostsController@index');
    Route::get('/admin/posts/create',                           'Admin\PostsController@create');
    Route::post('/admin/posts',                                 'Admin\PostsController@store');
    Route::get('/admin/posts/{post}/edit',                      'Admin\PostsController@edit')->name('admin/posts/edit');
    Route::post('/admin/posts/{post}',                          'Admin\PostsController@update')->name('admin/posts/update');
    Route::delete('/admin/posts/{post}',                        'Admin\PostsController@destroy')->name('admin/posts/destroy');

    Route::get('/admin/sort/posts', 'Admin\PostsController@sortIndex')->name('admin/posts/sort');
    Route::post('/admin/update-order/posts', 'Admin\PostsController@sortUpdate')->name('admin/posts/sort/update');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/translatable-articles',                  'Admin\TranslatableArticlesController@index');
    Route::get('/admin/translatable-articles/create',           'Admin\TranslatableArticlesController@create');
    Route::post('/admin/translatable-articles',                 'Admin\TranslatableArticlesController@store');
    Route::get('/admin/translatable-articles/{translatableArticle}/edit','Admin\TranslatableArticlesController@edit')->name('admin/translatable-articles/edit');
    Route::post('/admin/translatable-articles/{translatableArticle}','Admin\TranslatableArticlesController@update')->name('admin/translatable-articles/update');
    Route::delete('/admin/translatable-articles/{translatableArticle}','Admin\TranslatableArticlesController@destroy')->name('admin/translatable-articles/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/tin-tuc',                               'Admin\ArticlesController@index');
    Route::get('/admin/tin-tuc/create',                        'Admin\ArticlesController@create');
    Route::post('/admin/tin-tuc',                              'Admin\ArticlesController@store');
    Route::get('/admin/tin-tuc/{article}/edit',                'Admin\ArticlesController@edit')->name('admin/tin-tuc/edit');
    Route::post('/admin/tin-tuc/{article}',                    'Admin\ArticlesController@update')->name('admin/tin-tuc/update');
    Route::delete('/admin/tin-tuc/{article}',                  'Admin\ArticlesController@destroy')->name('admin/tin-tuc/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/tin-tuc-tech',                               'Admin\ArticlesTechController@index');
    Route::get('/admin/tin-tuc-tech/create',                        'Admin\ArticlesTechController@create');
    Route::post('/admin/tin-tuc-tech',                              'Admin\ArticlesTechController@store');
    Route::get('/admin/tin-tuc-tech/{article}/edit',                'Admin\ArticlesTechController@edit')->name('admin/tin-tuc-tech/edit');
    Route::post('/admin/tin-tuc-tech/{article}',                    'Admin\ArticlesTechController@update')->name('admin/tin-tuc-tech/update');
    Route::delete('/admin/tin-tuc-tech/{article}',                  'Admin\ArticlesTechController@destroy')->name('admin/tin-tuc-tech/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/tuyen-dung',                                'Admin\ExportsController@index');
    Route::get('/admin/tuyen-dung/create',                         'Admin\ExportsController@create');
    Route::post('/admin/tuyen-dung',                               'Admin\ExportsController@store');
    Route::get('/admin/tuyen-dung/{export}/edit',                  'Admin\ExportsController@edit')->name('admin/tuyen-dung/edit');
    Route::post('/admin/tuyen-dung/{export}',                      'Admin\ExportsController@update')->name('admin/tuyen-dung/update');
    Route::delete('/admin/tuyen-dung/{export}',                    'Admin\ExportsController@destroy')->name('admin/tuyen-dung/destroy');
    Route::get('/admin/tuyen-dung/export',                         'Admin\ExportsController@export')->name('admin/tuyen-dung/export');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/du-an-theo-danh-muc',            'Admin\ArticlesWithRelationshipController@index');
    Route::get('/admin/du-an-theo-danh-muc/create',     'Admin\ArticlesWithRelationshipController@create');
    Route::post('/admin/du-an-theo-danh-muc',           'Admin\ArticlesWithRelationshipController@store');
    Route::get('/admin/du-an-theo-danh-muc/{articlesWithRelationship}/edit','Admin\ArticlesWithRelationshipController@edit')->name('admin/du-an-theo-danh-muc/edit');
    Route::post('/admin/du-an-theo-danh-muc/{articlesWithRelationship}','Admin\ArticlesWithRelationshipController@update')->name('admin/du-an-theo-danh-muc/update');
    Route::delete('/admin/du-an-theo-danh-muc/{articlesWithRelationship}','Admin\ArticlesWithRelationshipController@destroy')->name('admin/du-an-theo-danh-muc/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/bulk-actions',                           'Admin\BulkActionsController@index');
    Route::get('/admin/bulk-actions/create',                    'Admin\BulkActionsController@create');
    Route::post('/admin/bulk-actions',                          'Admin\BulkActionsController@store');
    Route::get('/admin/bulk-actions/{bulkAction}/edit',         'Admin\BulkActionsController@edit')->name('admin/bulk-actions/edit');
    Route::post('/admin/bulk-actions/bulk-destroy',             'Admin\BulkActionsController@bulkDestroy')->name('admin/bulk-actions/bulk-destroy');
    Route::post('/admin/bulk-actions/{bulkAction}',             'Admin\BulkActionsController@update')->name('admin/bulk-actions/update');
    Route::delete('/admin/bulk-actions/{bulkAction}',           'Admin\BulkActionsController@destroy')->name('admin/bulk-actions/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/tin-tuc',                               'Admin\ArticlesController@index');
    Route::get('/admin/tin-tuc/create',                        'Admin\ArticlesController@create');
    Route::post('/admin/tin-tuc',                              'Admin\ArticlesController@store');
    Route::get('/admin/tin-tuc/{article}/edit',                'Admin\ArticlesController@edit')->name('admin/tin-tuc/edit');
    Route::post('/admin/tin-tuc/bulk-destroy',                 'Admin\ArticlesController@bulkDestroy')->name('admin/tin-tuc/bulk-destroy');
    Route::post('/admin/tin-tuc/{article}',                    'Admin\ArticlesController@update')->name('admin/tin-tuc/update');
    Route::delete('/admin/tin-tuc/{article}',                  'Admin\ArticlesController@destroy')->name('admin/tin-tuc/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/tin-tuc-tech',                               'Admin\ArticlesTechController@index');
    Route::get('/admin/tin-tuc-tech/create',                        'Admin\ArticlesTechController@create');
    Route::post('/admin/tin-tuc-tech',                              'Admin\ArticlesTechController@store');
    Route::get('/admin/tin-tuc-tech/{article}/edit',                'Admin\ArticlesTechController@edit')->name('admin/tin-tuc/edit');
    Route::post('/admin/tin-tuc-tech/bulk-destroy',                 'Admin\ArticlesTechController@bulkDestroy')->name('admin/tin-tuc/bulk-destroy');
    Route::post('/admin/tin-tuc-tech/{article}',                    'Admin\ArticlesTechController@update')->name('admin/tin-tuc/update');
    Route::delete('/admin/tin-tuc-tech/{article}',                  'Admin\ArticlesTechController@destroy')->name('admin/tin-tuc/destroy');
});

/* Auto-generated admin routes */
Route::middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    Route::get('/admin/danh-muc-du-an',                                   'Admin\TagsController@index');
    Route::get('/admin/danh-muc-du-an/create',                            'Admin\TagsController@create');
    Route::post('/admin/danh-muc-du-an',                                  'Admin\TagsController@store');
    Route::get('/admin/danh-muc-du-an/{tag}/edit',                        'Admin\TagsController@edit')->name('admin/danh-muc-du-an/edit');
    Route::post('/admin/danh-muc-du-an/bulk-destroy',                     'Admin\TagsController@bulkDestroy')->name('admin/danh-muc-du-an/bulk-destroy');
    Route::post('/admin/danh-muc-du-an/{tag}',                            'Admin\TagsController@update')->name('admin/danh-muc-du-an/update');
    Route::delete('/admin/danh-muc-du-an/{tag}',                          'Admin\TagsController@destroy')->name('admin/danh-muc-du-an/destroy');
});
