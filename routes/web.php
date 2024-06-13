Route::get('/products', 'ProductController@index')->name('products.index');
Route::post('/products', 'ProductController@store')->name('products.store');