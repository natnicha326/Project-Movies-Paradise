<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Report;
use Illuminate\Http\Request;
use Inertia\Inertia;
class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $otherController1 = new AdminController();
        $otherData1 = $otherController1->getData();
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
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');

        $report = new Report;
        $report->report = $imagePath;
        $report->save();

        return response()->json(['message' => 'Image uploaded successfully']);
    }

    return response()->json(['message' => 'No image uploaded']);
}




    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }
}
