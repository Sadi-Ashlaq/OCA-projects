<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Supplier;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $suppliers = Supplier::all();

        $products = Product::orderByDesc('id')->get();

        return view('dashboard.manage_products', compact('products', 'categories', 'suppliers'));
    }





    public function validForm(Request $request)
    {
        $request->validate([


            'pro_image'         => 'required',
            'pro_name'          => 'required',
            'pro_price'         => 'required',

            'pro_desc'          => 'required',
            'pro_coupon'        => 'required',
            'cat_name'          => 'required',

            'sup_name'          => 'required',
            'property_gender'   => 'required',
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
        if ($request->hasFile('pro_image')) {
            //save photo in to folder
            $file_exetension = $request->pro_image->getClientOriginalExtension();
            $file_name = time() . "." . $file_exetension;
            $path = 'images/pro_images';
            $request->pro_image->move($path, $file_name);
        } else {
            $file_name = "default.png";
        }
        // insert in to database 
        $pro = new Product;
        $pro->pro_name  = $request->input('pro_name');
        $pro->pro_image = $file_name;
        $pro->pro_price  = $request->input('pro_price');

        $pro->pro_desc  = $request->input('pro_desc');
        $pro->pro_coupon  = $request->input('pro_coupon');


        $pro->category_id  = $request->input('cat_name');
        $pro->supplier_id  = $request->input('sup_name');


        $pro->property_gender  = $request->input('property_gender');

        $pro->save();
        // dd($pro->cat_id);
        return redirect('/manage_products');




        // $pro->cat_id  = $request->input('cat_id');
        // $pro->sup_id  = $request->input('sup_id');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $product    =   Product::findOrFail($id);
        $categories =   Category::all();
        $suppliers  =   Supplier::all();

        $old_cat    =    $product->category;

        $old_sup    =   $product->supplier;


        return view('dashboard.edit_products', compact('product', 'categories', 'suppliers', 'old_cat', 'old_sup'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        if ($request->hasFile('pro_image')) {
            $file_exetension = $request->pro_image->getClientOriginalExtension();
            $file_name = time() . "." . $file_exetension;
            $path = 'images/pro_images';
            $request->pro_image->move($path, $file_name);
        } else {
            $file_name = Product::find($id)->pro_image;
        }

        if ($request->filled(['cat_name'])) {
            $cat_name = $request->input('cat_name');
        } else {
            $cat_name = Product::find($id)->category_id;
        }

        if ($request->filled(['sup_name'])) {
            $sup_name = $request->input('sup_name');
        } else {
            $sup_name = Product::find($id)->supplier_id;
        }

        if ($request->filled(['property_gender'])) {
            $property_gender = $request->input('property_gender');
        } else {
            $property_gender = Product::find($id)->property_gender;
        }



        Product::where("id", $id)->update([

            'pro_name'        => $request->input('pro_name'),
            'pro_image'       => $file_name,
            'pro_desc'        => $request->input('pro_desc'),
            'pro_price'       => $request->input('pro_price'),
            'pro_coupon'      => $request->input('pro_coupon'),
            'category_id'          => $cat_name,
            'supplier_id'          => $sup_name,
            'property_gender' => $property_gender,



        ]);


        return redirect('/manage_products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        Product::destroy($id);

        return redirect('/manage_products');
    }


    /////////////////////////////////////
    public function shopProduct($id)
    {
        $product    =    Product::where('category_id', $id)->get();
        $productcat =    Product::find($id);
        $catname    =    Category::find($productcat)->first()->cat_name;
        // $catname   =   $productcat->category->cat_id;

        return view('shop_products', compact('product', 'catname'));
    }



    public function shopAllProduct()
    {
        $productAll    =   Product::all();
        return view('shop', compact('productAll'));
    }




    public function proDetials($id)
    {
        $productOne    =   Product::find($id);



        $allProductLikes = Product::find($productOne);
        // dd($productOne->category_id);
        return view('product-details', compact('productOne', 'allProductLikes'));
    }

    public function search()
    {
        $search = $_GET['query'];
        $poroducts = Product::where('pro_name', 'LIKE', '%' . $search . '%')->get();
        return view('public_veiw', compact('poroducts'));
    }
}
