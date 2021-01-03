<?php

namespace App\Http\Controllers;


use App\Product;
use App\Category;
use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.manage_supplier', compact('Supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();


        $suppliers = Supplier::orderByDesc('id')->get();

        return view('dashboard.manage_suppliers', compact('suppliers', 'categories'));
    }

    public function validForm(Request $request)
    {
        $request->validate([


            'sup_image'            => 'required',
            'sup_name'             => 'required',
            'sup_title'            => 'required',

            'sup_desc'             => 'required',
            'sup_mobile'           => 'required',
            'sup_email'            => 'required|email',
            'sup_address'          => 'required',

        ]);
        /* $input= $request->input(); */
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

        $this->validForm($request);
        if ($request->hasFile('sup_image')) {
            //save photo in to folder
            $file_exetension = $request->sup_image->getClientOriginalExtension();
            $file_name = time() . "." . $file_exetension;
            $path = 'images/sup_images';
            $request->sup_image->move($path, $file_name);
        } else {
            $file_name = "default.png";
        }
        // insert in to database 
        $sup = new Supplier;
        $sup->sup_name  = $request->input('sup_name');
        $sup->sup_image = $file_name;
        $sup->sup_title  = $request->input('sup_title');

        $sup->sup_desc  = $request->input('sup_desc');
        $sup->sup_mobile  = $request->input('sup_mobile');


        $sup->category_id  = $request->input('cat_name');

        $sup->sup_email  = $request->input('sup_email');
        $sup->sup_address  = $request->input('sup_address');


        $sup->save();
        // dd($pro->cat_id);
        return redirect('/manage_suppliers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supplier    =   Supplier::findOrFail($id);
        $categories =   Category::all();


        $old_cat    =    $supplier->category;




        return view('dashboard.edit_suppliers', compact('supplier', 'categories', 'old_cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if ($request->hasFile('sup_image')) {
            $file_exetension = $request->sup_image->getClientOriginalExtension();
            $file_name = time() . "." . $file_exetension;
            $path = 'images/sup_images';
            $request->sup_image->move($path, $file_name);
        } else {
            $file_name = Supplier::find($id)->sup_image;
        }

        if ($request->filled(['cat_name'])) {
            $cat_name = $request->input('cat_name');
        } else {
            $cat_name = Supplier::find($id)->category_id;
        }



        Supplier::where("id", $id)->update([

            'sup_name'       =>  $request->input('sup_name'),
            'sup_image'      =>  $file_name,
            'sup_title'      =>  $request->input('sup_title'),
            'sup_desc'       =>  $request->input('sup_desc'),
            'sup_mobile'     =>  $request->input('sup_mobile'),
            'sup_email'      =>  $request->input('sup_email'),
            'sup_address'    =>  $request->input('sup_address'),
            'category_id'    =>  $cat_name,
        ]);


        return redirect('/manage_suppliers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Supplier::destroy($id);

        return redirect('/manage_suppliers');
    }
}
