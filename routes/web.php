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
    return view('welcome');
});

Route::get('customer/{id}',function($id){
	$customer = App\Customer::find($id);
	echo $customer->name;
	echo "<ul>";
	foreach ($customer->orders as $orders){
	    echo "<li>".$orders->name."</li>";
    }
    echo "</ul>";
});
Route::get('home', 'CustomerController@home');

Route::get('orders',function(){
	$orders = App\Order::all();
	foreach ($orders as $key => $order) {
//		$customer=App\Customer::find($order->customer_id);
		echo $order->name." belongs to ".$order->customer->name."<br>";
	}
});

// Route::get('hello', function () {
//     echo "Hello again";
// });

// //Create an item
// Route::post('test', function(){
// echo "We just created an item";
// });
// //Read an item
// Route::get('test', function(){
// 	echo '<form action="test" method="post">';
// 	echo '<input type="submit">';
// 	echo '<input type="hidden" value="'.csrf_token().'" name="_token">';
// 	echo '<input type="hidden" value="_method" name="put">';
// 	echo '</form>';
// });
// //put an item
// Route::put('test', function(){
//     echo "We just Updated an item";
// });
// //delete an item
// Route::delete('test', function(){
//     echo "We just Delete an item";
// });