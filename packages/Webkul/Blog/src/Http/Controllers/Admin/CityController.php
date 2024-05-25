<?php

namespace Webkul\Blog\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Webkul\Blog\Http\Controllers\Controller;
use Webkul\Blog\Models\City;

class CityController extends Controller
{
    public function index() {
        $cities = City::all();
        return view('blog::admin.cities.index', ['cities' => $cities]);
    }

    public function create() {
        return view('blog::admin.cities.create');
    }

    public function store(Request $request) {
        // Validate the request
        $request->validate([
            'name' => 'required|unique:cities,name',
            // Add validation rules for other fields as needed
        ]);

        // Create a new city
        City::create($request->all());

        // Redirect to the index page with success message
        return redirect()->route('admin.cities.index')->with('success', 'City created successfully.');
    }

    public function edit($id){
        $city = City::findOrFail($id);
        return view('blog::admin.cities.edit', compact('city'));
    }

    public function update(Request $request, $id){
        // Validate the request
        $request->validate([
            'name' => 'required|unique:cities,name,'.$id,
            // Add validation rules for other fields as needed
        ]);

        // Find the city by id and update
        $city = City::findOrFail($id);
        $city->update($request->all());

        // Redirect to the index page with success message
        return redirect()->route('admin.cities.index')->with('success', 'City updated successfully.');
    }

    public function delete(Request $request, $id){
        // Find the city by id and delete
        $city = City::findOrFail($id);
        $city->delete();

        // Redirect to the index page with success message
        return redirect()->route('admin.cities.index')->with('success', 'City deleted successfully.');
    }
}
