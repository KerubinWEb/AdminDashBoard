<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ApiProducts;
use Illuminate\Http\Request;

class ApiProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apiProducts = ApiProducts::all();

        return response()->json([
            'status' => true,
            'posts' => $apiProducts
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
        $apiProducts = ApiProducts::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Post Created successfully!",
            'post' => $apiProducts
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ApiProducts  $apiProducts
     * @return \Illuminate\Http\Response
     */
    public function show(ApiProducts $apiProducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApiProducts  $apiProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(ApiProducts $apiProducts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApiProducts  $apiProducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApiProducts $apiProducts)
    {
        $apiProducts->update($request->all());

        return response()->json([
            'status' => true,
            'message' => "Post Updated successfully!",
            'post' => $apiProducts
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApiProducts  $apiProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApiProducts $apiProducts)
    {
        $apiProducts->delete();

        return response()->json([
            'status' => true,
            'message' => "Post Deleted successfully!",
        ], 200);
    }
}
