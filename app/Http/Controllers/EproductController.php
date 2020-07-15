<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eproduct;
use App\Product;

class EproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $eproducts = Eproduct::all();

        return view('eproducts.index',compact('eproducts'));
    }

    public function mastermain(){
        $eproducts = Eproduct::all();
        return view('eproducts.master',compact('eproducts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('eproducts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'ename'=>'required',
            'eamount'=>'required',
        ]);

        $eproducts = new Eproduct([
            'ename' => $request->get('ename'),
            'eamount' => $request->get('eamount'),
        ]);

        $eproducts->save();
        return redirect('/eproducts')->with('success', 'Contact saved!');

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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $eproducts = Eproduct::find($id);
        return view('eproducts.edit',compact('eproducts'));

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
        $request->validate([
            'ename'=>'required',
            'eamount'=>'required',
        ]);

        $eproducts = Eproduct::find($id);
        $eproducts->ename = $request->get('ename');
        $eproducts->eamount = $request->get('eamount');
        $eproducts->save();
        return redirect('/eproducts')->with('success', 'Contact updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $eproducts = Eproduct::find($id);
        $eproducts->delete();

        return redirect('/eproducts')->with('success', 'Contact deleted!');
    }

    public function mastereshop(){
        return view('eproductsdev.eshopbase');
    }

    public function eshopdevmain(){
        $products = Product::all();

        // foreach($products as $prod)
        // {
        //     dd($prod->name);
        // };

        return view('eproductsdev.eshopmain',compact('products'));
    }

    public function eshopdevcart(){
        return view('eproductsdev.eshopcart');
    }

    public function eshopdevcreate(){
        return view('eproductsdev.eshopcreatedev');
    }

    public function eshopdevstore(Request $request){
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'amount'=>'required',
            'categories'=>'required',
            'status'=>'required'
        ]);

        $products = new Product([
            'name'=>$request->get('name'),
            'desc'=>$request->get('desc'),
            'amount'=>$request->get('amount'),
            'categories'=>$request->get('categories'),
            'status'=>$request->get('status'),
        ]);

        $products->save();
        
        return redirect('/')->with('success', 'Product saved!');
    }

    public function eshopdevedit($id){
        $products = Product::find($id);
        return view('eproductsdev.eshopeditdev',compact('products'));
    }

    public function eshopdevupdate(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'desc'=>'required',
            'amount'=>'required',
            'categories'=>'required',
            'status'=>'required'
        ]);

        $products = Product::find($id);
        $products->name = $request->get('name');
        $products->desc = $request->get('desc');
        $products->amount = $request->get('amount');
        $products->categories = $request->get('categories');
        $products->status = $request->get('status');
        $products->save();

        return redirect('/')->with('success', 'Product updated!');
    }

    public function eshopdevdestroy($id){
        $products = Product::find($id);
        $products->delete();

        return redirect('/')->with('success','Product deleted');
    }


}
