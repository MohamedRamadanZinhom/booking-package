<?php

namespace Webkul\Blog\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Webkul\Blog\Http\Controllers\Controller;
use Webkul\Blog\Models\Day;

class CityController extends Controller
{
    
    public function index() {
        $blogs = Day::all();

        return view('blog::admin.index', ['blogs' => $blogs]);
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        
    }

    public function edit($id){
       
        
    }

    public function update(Request $request){

    }

    public function delete(Request $request){

    }
}
