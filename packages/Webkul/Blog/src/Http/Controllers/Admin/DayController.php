<?php

namespace Webkul\Blog\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Webkul\Blog\Http\Controllers\Controller;
use Webkul\Blog\Models\Day;

class DayController extends Controller
{
    public function index()
    {
        $days = Day::all();

        return view('blog::admin.days.index', compact('days'));
    }

    public function create()
    {
        return view('blog::admin.days.create');
    }

    public function store(Request $request)
    {
        // Add validation logic if needed
        Day::create($request->all());

        return redirect()->route('admin.days.index')->with('success', 'Day created successfully');
    }

    public function edit($id)
    {
        $day = Day::findOrFail($id);

        return view('blog::admin.days.edit', compact('day'));
    }

    public function update(Request $request, $id)
    {
        // Add validation logic if needed
        $day = Day::findOrFail($id);
        $day->update($request->all());

        return redirect()->route('admin.days.index')->with('success', 'Day updated successfully');
    }

    public function destroy($id)
    {
        $day = Day::findOrFail($id);
        $day->delete();

        return redirect()->route('admin.days.index')->with('success', 'Day deleted successfully');
    }
}
