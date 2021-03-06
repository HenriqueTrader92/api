<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CompaniesController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth', ['except' => ['index', 'show']]);
    // }

    public function index()
    {
        $companies = Company::all();
        return response()->json($companies);
    }

    public function show($id)
    {
        $company = Company::find($id);

        if(!$company) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($company);
    }

    public function store(Request $request)
    {
        $company = new Company();
        $company->fill($request->all());
        $company->save();

        return response()->json($company, 201);
    }

    public function update(Request $request, $id)
    {
        $company = Company::find($id);

        if(!$company) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $company->fill($request->all());
        $company->save();

        return response()->json($company);
    }
}
