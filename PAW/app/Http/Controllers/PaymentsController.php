<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payments;

class PaymentsController extends Controller
{
    public function index()
    {
        $payments = Payments::all();
        return view('payments.index', compact('payments'));
    }

    public function create()
    {
        return view('payments.create');
    }

    public function store(Request $request)
    {
        Payments::create([
            'order_id' => $request->order_id,
            'amount' => $request->amount,
            'payment_method' => $request->payment_method,
            'status' => 'pending',
        ]);
    }

    public function show($id)
    {
        $payments = Payments::findOrFail($id);
        return view('payments.show', compact('payments'));
    }
}
