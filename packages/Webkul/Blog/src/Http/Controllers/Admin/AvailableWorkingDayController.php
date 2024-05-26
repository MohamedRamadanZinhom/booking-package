<?php

namespace Webkul\Blog\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Webkul\Blog\Http\Controllers\Controller;
use Webkul\Blog\Models\AvailableWorkingDays;

class AvailableWorkingDayController extends Controller
{
    public function index()
    {
        $availableWorkingDays = AvailableWorkingDays::all();
        return view('blog::admin.availableworkingdays.index', compact('availableWorkingDays'));
    }

    public function show()
    {
        $workingdays = AvailableWorkingDays::where('user_id',123)->git()->first();
        
        $userDays = $workingdays->pluck('day')->toArray();
        $userFrom = $workingdays->isEmpty() ? null : $workingdays->from;
        $userTo = $workingdays->isEmpty() ? null : $workingdays->to;

        $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        return view('available-working-days.show', compact('userDays', 'userFrom', 'userTo'));
    }

    public function create()
    {
        return view('blog:admin.availableworkingdays.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'day' => 'required|array',
            'from' => 'required|date_format:H:i',
            'to' => 'required|date_format:H:i|after:from',
            'user_id' => 'required',
        ]);

        AvailableWorkingDays::create([
            'day' => implode(',', $request->input('day')), // Convert array to comma-separated string
            'from' => $request->input('from'),
            'to' => $request->input('to'),
            'user_id' => $request->input('user_id'),
        ]);

        return redirect()->route('available-working-days.index')
                         ->with('success','Available working day created successfully.');
    }

    public function edit($id)
    {
        $availableWorkingDay = AvailableWorkingDays::findOrFail($id);
        return view('available-working-days.edit', compact('availableWorkingDay'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'day' => 'required|array',
            'from' => 'required|date_format:H:i',
            'to' => 'required|date_format:H:i|after:from',
            'user_id' => 'required',
        ]);

        $availableWorkingDay = AvailableWorkingDays::findOrFail($id);
        $availableWorkingDay->update([
            'day' => implode(',', $request->input('day')), // Convert array to comma-separated string
            'from' => $request->input('from'),
            'to' => $request->input('to'),
            'user_id' => $request->input('user_id'),
        ]);

        return redirect()->route('available-working-days.index')
                         ->with('success','Available working day updated successfully.');
    }

    public function destroy($id)
    {
        AvailableWorkingDays::findOrFail($id)->delete();
        return redirect()->route('available-working-days.index')
                         ->with('success','Available working day deleted successfully.');
    }
}
