<?php

use Leaf\Router;

Router::get('/',[
    'MainController@home',
    'name' => 'main.home' // vue
]);
Router::get('/about',[ // route vers quoi ça pointe
    'MainController@home',
    'name' => 'main.about' // vue
]);

app()->get('/','MainController@home');
app()->get('/about','MainController@about');
app()->get('/customers',
[
    'CustomerController@index',
    'name' => 'customers.index']);

app()->get('/customers/create','CustomerController@create');
app()->post('/customers/create','CustomerController@store');

Router::post('/customers/delete', [
    'CustomerController@destroy',
    'name' => 'customers.destroy'
]);
Router::get('/customers/{CustomerId}/edit', [
    'CustomerController@edit',
    'name' => 'customers.edit'
]);
Router::post('/customers/update', [
    'CustomerController@update',
    'name' => 'customers.update'
]);

//employers

app()->get('/employers',
[
    'EmployerController@index',
    'name' => 'employers.index']);

app()->get('/employers/create','EmployerController@create');
app()->post('/employers/create','EmployerController@store');

Router::post('/employers/delete', [
    'EmployerController@destroy',
    'name' => 'employers.destroy'
]);
Router::get('/employers/{EmployeeId}/edit', [
    'EmployerController@edit',
    'name' => 'employers.edit'
]);
Router::post('/employers/update', [
    'EmployerController@update',
    'name' => 'employers.update'
]);

