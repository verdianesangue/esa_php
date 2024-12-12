<?php
namespace App\Models;

class Customer extends Model{
    protected $table = 'Customers';// NOM DE LA TABLE
    protected $primaryKey = 'CustomerId';
    public $timestamps = false;
    
}