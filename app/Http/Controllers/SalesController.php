<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('interface.sales.sales');
    }
    public function product()
    {
        return view('interface.sales.product');
    }
    public function sale()
    {
        return view('interface.sales.sale');
    }
    public function preview()
    {
        return view('interface.sales.preview');
    }
    public function print()
    {
        return view('interface.sales.print');
    }
    public function profile()
    {
        return view('interface.sales.profile');
    }
    public function calendar()
    {
        return view('interface.sales.calendar');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sales $sales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sales $sales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sales $sales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sales $sales)
    {
        //
    }
}
