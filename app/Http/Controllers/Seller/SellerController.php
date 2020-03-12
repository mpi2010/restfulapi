<?php

namespace App\Http\Controllers\Seller;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Seller;
use App\Product;

class SellerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $seller = Product::all()->pluck('seller_id')->unique()->values()->all();
//        $sellers = User::all()->only($seller);
        $sellers = Seller::has('products')->get();

        return $this->showAll($sellers);
//        return response()->json(['data' => $sellers], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Seller $seller)
    {
//        $sellers = Product::all()->pluck('seller_id')->unique()->values()->all();
//        $seller = User::all()->only($sellers)->find($id);
//
//       $seller = Seller::has('products')->findOrFail($id);
        return $this->showOne($seller);
//       return response()->json(['data'=> $seller],200);

    }

}
