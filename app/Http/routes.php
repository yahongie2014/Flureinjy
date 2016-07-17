<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('login');
});

define('STYLE',url('resources/views/style'));


Route::group(['middleware'=>'AdminAuth'],function(){
    Route::get('dashboard','AdminController@index');
    Route::get('dash_search','AdminController@dash_search');


// Setting Info Routes
    Route::get('info','SettingController@info');
    Route::post('info','SettingController@update');
// Extras Routes
    Route::get('extra','ExtraController@index');
    Route::get('extra/edit/{id}','ExtraController@edit');
    Route::get('add_extra','ExtraController@create');
    Route::post('add_extra','ExtraController@store');
    Route::post('extra/edit/{id}','ExtraController@update');
    Route::get('extra/show/{id}','ExtraController@show');
    Route::get('extra/delete/{id}','ExtraController@destroy');

//flowers Routes
    Route::get('flowers','FlowersController@index');
    Route::get('add_flower','FlowersController@create');
    Route::post('add_flower','FlowersController@store');
    Route::get('edit_flower/edit/{id}','FlowersController@edit');
    Route::post('edit_flower/edit/{id}','FlowersController@update');
    Route::get('flower/show/{id}','FlowersController@show');


//Order Type Routes
    Route::get('order_type','OrderTypeController@index');
    Route::get('add_order_type','OrderTypeController@create');
    Route::post('add_order_type','OrderTypeController@store');
    Route::get('order_type/edit/{id}','OrderTypeController@edit');
    Route::post('order_type/edit/{id}','OrderTypeController@update');
    Route::get('order_type/show/{id}','OrderTypeController@show');



// Customers Routes
    Route::get('customer','CustomerController@index');
    Route::get('add_customer','CustomerController@create');
    Route::post('add_customer','CustomerController@store');
    Route::get('customer/edit/{id}','CustomerController@edit');
    Route::post('customer/edit/{id}','CustomerController@update');
    Route::get('customer/show/{id}','CustomerController@show');
    Route::get('customer_report','CustomerController@customer_report');
    Route::get('customer_search','CustomerController@search');
    Route::get('delete/customer/{id}','CustomerController@destroy');





    Route::get('customer_data','CustomerController@get_customer');
    Route::get('customer_name','CustomerController@get_name');

//order Routes
    Route::get('add_order','OrderController@create');
    Route::post('add_order','OrderController@store');
    Route::get('show_all_orders','OrderController@index');
    Route::get('order_search','OrderController@search');
    Route::get('order_show/{id}','OrderController@single_order');
    Route::get('order/edit/{id}','OrderController@edit');
    Route::post('edit/order/{id}','OrderController@update');
    Route::get('delivery/order','OrderController@delivery');
    Route::get('ordertype_data/{id}','OrderController@update_order');
    //
    //Quick Order
    Route::get('quick_order','QuickController@create');
    Route::post('quick_order','QuickController@store');
    // Time Line
    Route::get('timeline_show/{id}','OrderController@timeline');
// Csv
    Route::get('csv','OrderController@csv');




//order Status
    Route::get('order_status','Order_StatusController@index');
    Route::post('order_status','Order_StatusController@store');
    Route::get('remove_order_status/{id}','Order_StatusController@destroy');


//Supplier Routes
    Route::get('add_supplier','SupplierController@create');
    Route::post('add_supplier','SupplierController@store');
    Route::get('supplier','SupplierController@index');
    Route::get('supplier/edit/{id}','SupplierController@edit');
    Route::post('supplier/edit/{id}','SupplierController@update');
    Route::get('supplier/show/{id}','SupplierController@show');

//Expendables Routes
    Route::get('expenses','ExpandController@index');
    Route::get('add_expenses','ExpandController@create');
    Route::post('add_expenses','ExpandController@store');
    Route::get('edit/expenses/{id}','ExpandController@edit');
    Route::get('expenses_search','ExpandController@search');

    //Payment Routes
    Route::get('payment','PaymentController@index');
    Route::get('payment_search','PaymentController@search');
    Route::get('payment_value','PaymentController@get_date');
    Route::get('add/payment','PaymentController@payment');
    Route::post('add/payment','PaymentController@add_payment');

    //Balance Route
    Route::get('balance','BalanceController@index');

    Route::get('add/balance','BalanceController@create');
    Route::post('add/balance','BalanceController@store');


    //logout
    Route::get('logout','LoginController@logout');
    // Users Route

    Route::get('users','UsersController@index');
    Route::get('add_user','UsersController@create');
    Route::post('add_user','UsersController@store');
    Route::get('edit_user/{id}','UsersController@edit');
    Route::post('edit_user/{id}','UsersController@update');
    Route::get('user_search','UsersController@search');
    Route::get('show/user/{id}','UsersController@show');
    Route::get('delete/user/{id}','UsersController@destroy');


    //sales Reposrt
    Route::get('sales_report','SalesController@index');
    Route::get('sales_search','SalesController@search');

    Route::get('expense_year','ExpandController@last_year');
    Route::get('expense/current_year','ExpandController@current_year');
    Route::get('expense/current_month','ExpandController@current_month');
    Route::get('expense/last_month','ExpandController@last_month');
    Route::get('expense/current_week','ExpandController@current_week');
    Route::get('expense/last_week','ExpandController@last_week');
    Route::get('expense/today','ExpandController@today');



});
//main Cpanel

// Login Routes
Route::get('login','LoginController@index');
Route::post('login','LoginController@post_login');

