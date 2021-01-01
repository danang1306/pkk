<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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


Route::get('/',function(){
    return view('home');
});
Route::get('/dashboard',function(){
    return view('dashboard-user');
});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
],function(){
    Route::namespace('auth')->group(function(){
        Route::get('/','AdminController@viewlogin')
            ->name('view.login');
        Route::post('login','AdminController@login')
            ->name('login');
        Route::get('logout','AdminController@logout')
            ->name('logout')->middleware('auth.admin:admin');;
    });
    Route::group([
        'namespace' => 'admin',
        'middleware' => 'auth.admin:admin'
    ],function(){
        Route::get('dashboard','DashboardController@viewdashboard')
            ->name('view.dashboard');
        Route::group([
            'prefix' => 'customer',
        ],function(){
            Route::get('/','CustomerController@index')
                ->name('customer');
            Route::get('edit/{id}','CustomerController@edit')
                ->name('customer.edit');
            Route::put('update/{id}','CustomerController@update')
                ->name('customer.update');
            Route::delete('delete/{id}','CustomerController@destroy')
                ->name('customer.delete');
            Route::patch('active/{id}','CustomerController@setactive')
                ->name('customer.active');
            Route::patch('nonactive/{id}','CustomerController@setnonactive')
                ->name('customer.nonactive');
            Route::get('search','CustomerController@show')
                ->name('customer.search');
        });
        Route::group([
            'prefix' => 'supplier'
        ],function(){
            Route::get('/','SupplierController@index')
                ->name('supplier');
            Route::get('edit/{id}','SupplierController@edit')
                ->name('supplier.edit');
            Route::put('update/{id}','SupplierController@update')
                ->name('supplier.update');
            Route::delete('delete/{id}','SupplierController@destroy')
                ->name('supplier.delete');
            Route::delete('delete/bus/{id}','SupplierController@destroybus')
                ->name('supplier.bus.delete');
            Route::get('{id}/bus','SupplierController@viewbus')
                ->name('supplier.viewbus');
            Route::get('search','SupplierController@show')
                ->name('supplier.search');
        });
        Route::group([
            'prefix' => 'transaction'
        ],function(){
            Route::get('/','TransactionController@index')
                ->name('transaction');
        });
        Route::group([
            'prefix' => 'history'
        ],function(){
            Route::get('/','HistoryController@index')
                ->name('history');
        });
    });
});
