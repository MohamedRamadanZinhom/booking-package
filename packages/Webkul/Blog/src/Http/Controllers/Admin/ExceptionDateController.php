<?php

namespace Webkul\Blog\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Webkul\Admin\Listeners\Admin;
use Webkul\Blog\Http\Controllers\Controller;
use Webkul\Blog\Models\City;
use Webkul\Blog\Models\ExceptionDate;

class ExceptionDateController extends Controller
{
    public function index()
    {
        // Fetch all exceptions and display them
        $exceptions = ExceptionDate::where('user_id', 123)->get();
        return view('blog::admin.exceptions.index', compact('exceptions'));
    }

    public function create()
    {
        // Show the form for creating a new exception
        return view('blog::admin.exceptions.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'date' => 'required|date',
            'from' => 'required|date_format:H:i',
            'to' => 'required|date_format:H:i|after:from',
            'is_available' => 'required|boolean',
        ]);

        // Create a new exception record
        $exception = new ExceptionDate();
        $exception->date = $validatedData['date'];
        $exception->from = $validatedData['from'];
        $exception->to = $validatedData['to'];
        $exception->is_available = $validatedData['is_available'];
        $exception->user_id = 123;
        $exception->save();

        return redirect()->route('exceptions.index')->with('success', 'Exception date added successfully.');
    }

    public function edit($id)
    {
        // Show the form for editing the specified exception
        $exception = ExceptionDate::findOrFail($id);
        return view('blog::admin.exceptions.edit', compact('exception'));
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'date' => 'required|date',
            'from' => 'required|date_format:H:i',
            'to' => 'required|date_format:H:i|after:from',
            'is_available' => 'required|boolean',
        ]);

        // Update the specified exception record
        $exception = ExceptionDate::findOrFail($id);
        $exception->date = $validatedData['date'];
        $exception->from = $validatedData['from'];
        $exception->to = $validatedData['to'];
        $exception->is_available = $validatedData['is_available'];
        $exception->save();

        return redirect()->route('exceptions.index')->with('success', 'Exception date updated successfully.');
    }

    public function destroy($id)
    {
        // Delete the specified exception
        $exception = ExceptionDate::findOrFail($id);
        $exception->delete();

        return redirect()->route('exceptions.index')->with('success', 'Exception date deleted successfully.');
    }
}
