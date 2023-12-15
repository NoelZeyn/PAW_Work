<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Tracking;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    //condition
    // 1. 
    public function index()
    {
        $trackings = Tracking::all();
        return view('dashboard.tracking.index', compact('trackings'));
    }
    public function show($id)
    {
        $tracking = Tracking::where('id', $id)->firstOrFail();
        return view('dashboard.tracking.show', compact('tracking'));
    }
    public function update($id)
    {

        $tracking = Tracking::where('id', $id)->firstOrFail();
        $tracking->update();
        return view('dashboard.tracking.show', compact('tracking'));
    }
}
