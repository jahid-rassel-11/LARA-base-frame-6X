<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Http\Request;

use \App\Model\Customer;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    public function __construct() {
        echo "CustomerController -> __construct()<br />";
        dump($_REQUEST);
    }

    public function index() {
        echo "CustomerController -> index()<br />";
        
        dump("request()->query('active') -> ".request()->query('active'));

        $allCustomerData = \App\Model\Customer::where('active', request()->query('active') ?? 1)->get();

        return view('customer.index', compact('allCustomerData'));
    }

    public function create() {
        echo "CustomerController -> create()<br />";

        return view('customer.create');
    }

    public function store(Request $request) {
        echo "CustomerController -> store()<br />";
        dump(request());

        /*
        //  Way 1
        $validData = $request->validate([
            'name' => 'required|unique:customers|max:255',
            'email' => 'required|unique:customers|max:255',
            'note' => ''
        ]);
        $customer = Customer::create($validData);
        */
        
        //  Way 2
        //$customer = Customer::create($this->validateData($request));

        //  Way 3
        $customer = Customer::create($this->validateDataHelper());

        //  SEND MAIL
        Mail::to($customer->email)->send(new WelcomeMail());
        
        return redirect(route('customers.show', $customer));
    }

    public function show(Customer $customer) {
        echo "CustomerController -> show()<br />";

        /*
        //  Normal Way [ START ]
        $temp1 = Customer::findorfail($customer->id);
        dump($temp1);
        echo $temp1->name;

        $temp = Customer::select('name')->where('id', $customer->id)->get();
        dump($temp);
        echo $temp[0]['name'];

        return view('customer.show', [ 
            'customer' => $customer 
        ]);
        //  Normal Way [ END ]
        */

        //  Route Model Binding
        return view('customer.show', compact('customer'));
    }

    public function edit(Customer $customer) {
        echo "CustomerController -> edit()<br />";

        //  Route Model Binding
        return view('customer.edit', compact('customer'));
    }

    public function update(Customer $customer, Request $request) {
        echo "CustomerController -> update()<br />";
        dump($request);

        //  Way 1
        /*
        $validData = $request->validate([
            'name' => 'required|unique:customers|max:255',
            'email' => 'required|unique:customers|max:255',
            'note' => ''
        ]);
        $customer->update($validData);
        */
        
        //  Way 2
        $customer->update($this->validateData($request));

        //  Way 3
        //$customer->update($this->validateDataHelper());
        
        //  Route Model Binding
        return view('customer.show', compact('customer'));
    }

    public function destroy(Customer $customer) {
        echo "CustomerController -> destroy()<br />";
        dump($customer);

        $customer->delete();
        
        //  Route Model Binding
        return redirect( route('customers') );
    }

    protected function validateData(Request $request) {
        return $request->validate([
            'name' => 'required|unique:customers|max:255',
            'email' => 'required|unique:customers|max:255',
            'note' => ''
        ]);
    }

    protected function validateDataHelper() {
        return request()->validate([
            'name' => 'required|unique:customers|max:255',
            'email' => 'required|unique:customers|max:255',
            'note' => ''
        ]);


        
    }

}
