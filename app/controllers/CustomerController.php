<?php
namespace App\Controllers;

use App\Models\Customer;


class CustomerController extends Controller{
    function index() {
        /* $data = [
            $titre = 'Customers',
            $customers = Customer::all()
        ];
        */
        
        $titre = 'Tape ton voisin tres fort';
        $customers = Customer::select('Firstname','Lastname','City','Email','CustomerId')
                   //->Where('City', '=', 'New York')
                   ->orderBy('CustomerId', 'DESC')// aussi sensible a la case
                   ->get();

        //$customers = Customer::all(); // model customer. on recupere toutes les informations pour faire un select start from.
        //dd($customers);
    
        render('customer.index',compact('customers','titre'));
        //,compact('customers','titre')

    }
 // pourquoi on quitte de customer a Customer
    function create(){
        $customer = new Customer();
        render('Customer.create',['customer'=>$customer]);
    }
    function store(){
        //dd(request()->postData());
        $data = request()->postData();
        $customer = new Customer();
        $customer->FirstName = $data['FirstName'];
        $customer->LastName = $data['LastName'];
        $customer->City = $data['City'];
        $customer->Email = $data['Email'];
        $customer->save();
        response()->redirect('customers');
        //dd($customer);


    }
    function edit(int $customerId){
        
        $customer = Customer::find($customerId);
        //dd($customer); la je recupere les informations
        render('customer.edit',compact('customer'));

    }
    function update(){
        $data = request()->postData();
        $customer = Customer::find($data['CustomerId']);
        $customer->FirstName = $data['FirstName'];
        $customer->LastName = $data['LastName'];
        $customer->City = $data['City'];
        $customer->Email = $data['Email'];
        $customer->save();
        response()->redirect(route('customers.index')); // revient dans l'index old
    }
    function destroy(){
        $data = request()->postData();
        $customer = Customer::find($data['CustomerId']);
        $customer->delete(); // requette pour supprimer fait par le 
        response()->redirect(route('customers.index'));
        //response()->redirect('customers');  marche ausi
        //dd($customer);
    }
}