<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Repositories\CartRepository;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = (new CartRepository())->content();
        $cartCount = (new CartRepository())->count();

        return response()->json([
            'cartContent'=>$content,
            'cartCount'=>$cartCount
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product= Product::where('id',$request->productId)->first();
        $count=(new CartRepository())->add($product);
         return response()->json([
            'count'=>$count
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        (new CartRepository)->remove($id);

    }

    public function count()
    {
        $items = (new CartRepository)->count();
        return response()->json([
            'itemsCount'=>$items
        ]);
    }


    public function increase($id)
    {
        (new CartRepository)->increase($id);
    }

    public function decrease($id)
    {
        (new CartRepository)->decrease($id);
    }

}
