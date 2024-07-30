<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerStoreRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class CustomerController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = DB::select("select * from customers");
        $customers = collect($customers)->toArray();
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerStoreRequest $request)
    {
        try {
            $customerData = $request->customerData();
            $name = $customerData['name'];
            $email = $customerData['email'];
            $city = $customerData['city'];
            $state = $customerData['state'];
            DB::insert("INSERT INTO CUSTOMERS (name, email , city , state) VALUE('$name', '$email', '$city', '$state')");
            return redirect()->route('customer.index');
        } catch (\Throwable $exception) {
//
        }
    }

    public function downloadPdf()
    {
        $customers = DB::select("select * from customers");
        $customers = collect($customers)->toArray();
        $pdf = Pdf::loadView('pdf.customer', compact('customers'));
        return $pdf->download('customer.pdf');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
