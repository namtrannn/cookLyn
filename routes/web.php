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
//Route::get('/','HiHiController@hihi');
Route::get('/','HiHiController@index');

Auth::routes();

Route::get('/chats', 'ChatsController@getIndex')->name('chat');

Route::get('/messages','ChatsController@fetchMessages');

Route::post('/messages','ChatsController@sendMessages');


// Route::get('/', function () {
// 		broadcast(new WebsocketDemoEvent('some data'));
//     return view('welcome');
// });

Route::get('send-message','RedisController@index')->name('tuongtac');
Route::post('send-message','RedisController@postSendMessage');

// Route::get('thu',function(){
// 	return view('admin.category.list');
// });

// Route::get('thu1',function(){
// 	return view('admin.login');
// });

Route::get('admin/dangnhap/','UserController@getDangNhapAdmin')->name('logins');
Route::post('admin/dangnhap','UserController@postDangNhapAdmin');
Route::get('admin/logout','UserController@getDangXuatAdmin')->name('logouts');

Route::get('admin/dangky/','UserController@getDangKy')->name('registers');
Route::post('admin/dangky','UserController@postDangKy');

Route::get('doimatkhau/{id}','UserController@getDoiMatKhau')->name('getchangepass');
Route::post('doimatkhau/{id}','UserController@postDoiMatKhau')->name('postchangepass');

Route::get('information/{id}','UserController@getInformation')->name('get-information');

Route::get('edit-thong-tin-ca-nhan/{id}','UserController@getEditInfor')->name('get-edit-thong-tin-ca-nhan');
Route::post('edit-thong-tin-ca-nhan/{id}','UserController@postEditInfor')->name('post-edit-thong-tin-ca-nhan');

Route::get('post','RecipeController@getPost')->name('post');
Route::post('post','RecipeController@post')->name('postRecipes');

Route::get('dish/{id_category}','AjaxController@getDish'); 

Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){	
	Route::group(['prefix'=>'category'],function(){
		// admin/category/list
		Route::get('list','CategoryController@getList')->name('dashboard');

		Route::get('delete/{id}','CategoryController@getDelete');

		Route::get('edit/{id}','CategoryController@getEdit')->name('editCategory');
		Route::post('edit/{id}','CategoryController@postEdit');

		Route::get('add','CategoryController@getAdd')->name('addCategory');
		Route::post('add','CategoryController@postAdd');
	});

	Route::group(['prefix'=>'dish'],function(){
		// admin/dish/list
		Route::get('list','DishController@getList');
		Route::get('otherlist','DishController@getOtherlist');

		Route::get('delete/{id}','DishController@getDelete');

		Route::get('edit/{id}','DishController@getEdit');
		Route::post('edit/{id}','DishController@postEdit');

		Route::get('add','DishController@getAdd')->name('addDish');
		Route::post('add','DishController@postAdd');
	});

	Route::group(['prefix'=>'recipes'],function(){
		// admin/recipes/list
		Route::get('list','RecipeController@getList');

		Route::get('edit/{id}','RecipeController@getEdit');
		Route::post('edit/{id}','RecipeController@postEdit');

		Route::get('add','RecipeController@getAdd')->name('addRecipes');
		Route::post('add','RecipeController@postAdd');

		Route::get('delete/{id}','RecipeController@getDelete');	
	});

	Route::group(['prefix'=>'history'],function(){
		// admin/history/list
		Route::get('list','History@getList')->name('quan-tri');

		// Route::get('sua/{id}','HoaDonController@getSua');
		// Route::post('sua/{id}','HoaDonController@postSua');

		Route::get('delete/{id}','HistoryController@getDelete');	
	});


	Route::group(['prefix'=>'comment'],function(){
		// admin/comment/list

		Route::get('delete/{id}/{id_recipe}','CommentController@getDelete');	
	});
	// Route::group(['prefix'=>'ajax'],function(){
	// 		Route::get('ajax/loaisanpham/{id_theloai}','AjaxController@getLoaiSanPham'); 	
	// });

	Route::group(['prefix'=>'user'],function(){ 
		// admin/user/list
		Route::get('list','UserController@getList');

		Route::get('edit/{id}','UserController@getEdit');
		Route::post('edit/{id}','UserController@postEdit');

		Route::get('infor/{id}','UserController@getInfor');

		Route::get('add','UserController@getAdd')->name('addUser');
		Route::post('add','UserController@postAdd');

		Route::get('delete/{id}','UserController@getDelete');	
	});

	Route::group(['prefix'=>'slide'],function(){
		// admin/slide/list
		Route::get('list','SlideController@getList');
		
		Route::get('edit/{id}','SlideController@getEdit');
		Route::post('edit/{id}','SlideController@postEdit');


		Route::get('add','SlideController@getAdd')->name('addSlide');
		Route::post('add','SlideController@postAdd');

		Route::get('delete/{id}','SlideController@getDelete');	
	});

	Route::group(['prefix'=>'tukhoa'],function(){

		Route::get('list','PageController@getList');

		Route::get('delete/{id}','PageController@getDelete');	
	});
});



Route::get('trang-chu',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);
Route::get('',[
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);

Route::get('search',[
	'as'=>'search',
	'uses'=>'PageController@getSearch'
]);

Route::get('contact',[
	'as'=>'contact',
	'uses'=>'PageController@getContact'
]);

Route::get('about',[
	'as'=>'about',
	'uses'=>'PageController@getAbout'
]);

Route::get('gallery',[
	'as'=>'gallery',
	'uses'=>'PageController@getGallery'
]);

Route::get('menu',[
	'as'=>'menu',
	'uses'=>'PageController@getMenu'
]);

Route::get('them',['as'=>'them',
	'uses'=>'PageController@them'
]);

Route::get('recipes/{id}',[
	'as'=>'recipes',
	'uses'=>'RecipeController@load'
]);

Route::get('recipes',function(){
	
	return view('page.recipes');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('comment/{id}','CommentController@postComment');

// Route::post('comment1/{id}','CommentController@postComment1');

Route::post('recipesLike/{id}','PageController@postLike');

Route::get('/filter', 'FilterController@filter')->name('filter');

Route::post('/recipe/like', 'PageController@like')->name('recipe.like');
