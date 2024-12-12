<?php
namespace App\Controllers;

use App\Models\Customer;
use App\Models\Employer;

class EmployerController extends Controller{
    function index() {
       
        $titre = 'mes employers';
        $employers = Employer::select('Firstname','Lastname','Country','BirthDate','EmployeeId','Tiltle')
                   //->Where('Country', '=', 'Brazil')
                   ->orderBy('EmployeeId', 'DESC')
                   ->get();
        render('employer.index',compact('employers','titre'));
      

    }
    function create(){
        $employer = new Employer();
        render('employer.create',['employer'=>$employer]);
    }
    function store(){
        $data = request()->postData();
        $employer = new Employer();
        $employer->FirstName = $data['FirstName'];
        $employer->LastName = $data['LastName'];
        $employer->Country = $data['Country'];
        $employer->BirthDate = $data['BirthDate'];
        $employer->Title = $data['Title'];
        $employer->save();
        response()->redirect('employers');



    }
    function edit(int $employerID){
        
        $employer = Employer::find($employerID);
        render('employer.edit',compact('employer'));

    }
    function update(){
        $data = request()->postData();
        $employer = Employer::find($data['EmployeeId']);
        $employer->FirstName = $data['FirstName'];
        $employer->LastName = $data['LastName'];
        $employer->Country = $data['Country'];
        $employer->BirthDate = $data['BirthDate'];
        $employer->Title = $data['Title'];
        $employer->save();
        response()->redirect(route('employers.index')); // revient dans l'index old
    }
    function destroy(){
        $data = request()->postData();
        $employer = Employer::find($data['EmployeeId']);
        $employer->delete(); 
        response()->redirect(route('employers.index'));
        //response()->redirect('employers');  marche ausi
        //dd($employers);
    }
}