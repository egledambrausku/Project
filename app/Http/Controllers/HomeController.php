<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Company;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\Traits\FileUploadTrait;

class HomeController extends Controller
{
    use FileUploadTrait;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderBy('id', 'desc')->limit(5)->get();
        $employees = Employee::orderBy('id', 'desc')->limit(5)->get();
        return view('home', compact('companies', 'employees'));
    }
}
