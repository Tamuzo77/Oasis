<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCustomerRequest;

class CustomerController extends Controller
{
    //

    public function index()
    {
        return \view('admin.customers.index', [
            'customers' => Customer::latest()->filter(request(['search', 'visible']))->get(),
        ]);
    }

    public function create()
    {
        auth()->user()->hasRole('Super Admin');
        return \view('admin.customers.create');
    }

    public function store(StoreCustomerRequest $request)
    {
        Customer::create($request->validated());
        return redirect()->route('admin.cv-theque.index');
    }

    public function update($id)
    {
        $customer = Customer::find($id);
        $customer->visible = !$customer->visible;

        if($customer->visible)
        {
            $state = 'visible';
        }else {
            $state = 'non visible';
        }
        $customer->save();

        return \redirect()->back()->with('warning', " Updated successfully ");


    }
}
