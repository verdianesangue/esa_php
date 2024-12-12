<?php
namespace App\Models;

class Employer extends Model{
    protected $table = 'employees';  // NOM DE LA TABLE
    protected $primaryKey = 'EmployeeId';
    public $timestamps = false;
    
}