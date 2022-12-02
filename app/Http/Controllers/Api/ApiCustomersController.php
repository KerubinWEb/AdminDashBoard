<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ApiCustomers;
use Illuminate\Http\Request;

class ApiCustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apiCustomers = ApiCustomers::all();

        return response()->json([
            'status' => true,
            'posts' => $apiCustomers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $apiCustomers = ApiCustomers::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Post Created successfully!",
            'post' => $apiCustomers
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApiCustomers  $apiProducts
     * @return \Illuminate\Http\Response
     */
    public function show(ApiCustomers $apiCustomers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApiCustomers  $apiProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(ApiCustomers $apiCustomers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApiCustomers  $apiProducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApiCustomers $apiCustomers)
    {
        $apiCustomers->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Post Updated successfully!",
            'post' => $apiCustomers
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApiCustomers  $apiProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApiCustomers $apiCustomers)
    {
        $apiCustomers->delete();

        return response()->json([
            'status' => true,
            'message' => "Post Deleted successfully!",
        ], 200);
    }
}
