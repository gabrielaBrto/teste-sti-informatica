<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Customer, City};
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{
    /**
     * Display a list of customers.
     *
     */
    public function index(Request $request){
        $customers = Customer::with('city')->get();

        return view('customers.list', compact('customers'));
    }

    /**
     * Show the form for creating a new customer.
     *
     */
    public function create(){
        $cities = City::orderBy('name')->get();

        return view('customers.create', compact('cities'));
    }

    /**
     * Store a newly created customer in storage.
     */
    public function store(CustomerRequest $request){
        $customer = Customer::create($request->all());

        return redirect('/customers')->with('success', 'Cliente cadastrado com sucesso.');
    }

    /**
     * Display the specified customer.
     *
     */
    public function show($id){
        $customer = Customer::findOrFail($id);

        return $customer;
    }

    /**
     * Show the form for editing the specified customer.
     */
    public function edit($id){
        $data = [
            'customer' => Customer::findOrFail($id),
            'cities' => City::all()
        ];

        return view('customers.edit', compact('data'));
    }

    /**
     * Update the specified customer in storage.
     */
    public function update(CustomerRequest $request, $id){
        $customer = Customer::findOrFail($id);


        $customer->update($request->all());

        return redirect('/customers')->with('success', 'Cliente alterado com sucesso.');
    }

    /**
     * Remove the specified customer from storage.
     */
    public function destroy($id){
        
        $customer = Customer::find($id);
 
        if (!$customer) {
            return back()->with('error', 'Cliente não encontrado.');
        }
 
        if($customer->trashed()) {
            $customer->restore();
            return back()->with('success', 'Cliente ativado com sucesso.');
        } else {
            $customer->delete(); 
            return back()->with('success', 'Cliente deletado com sucesso.');
        }

    }
}
