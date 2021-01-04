<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

use App\Supplier;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        //

        // $categories = Category::all();
        $categories = Category::orderByDesc('id')->get();

        return view('dashboard.manage_categories', compact('categories'));
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
        if ($request->hasFile('cat_image')) {
            //save photo in to folder
            $file_exetension = $request->cat_image->getClientOriginalExtension();
            $file_name = time() . "." . $file_exetension;
            $path = 'images/cat_images';
            $request->cat_image->move($path, $file_name);
        } else {
            $file_name = "default.png";
        }
        // insert in to database 
        $cat = new Category;
        $cat->cat_name  = $request->input('cat_name');
        $cat->cat_image = $file_name;
        $cat->cat_type  = $request->input('cat_type');
        $cat->save();
        return redirect('/manage_categories');
    }




    public function validForm(Request $request)
    {
        $request->validate([


            'cat_name'   => 'required',
            'cat_image'  => 'required',
            'cat_type'   => 'required',
        ]);
        /* $input= $request->input(); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('dashboard.edit_categories', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //save photo in to folder
        if ($request->hasFile('cat_image')) {
            $file_exetension = $request->cat_image->getClientOriginalExtension();
            $file_name = time() . "." . $file_exetension;
            $path = 'images/cat_images';
            $request->cat_image->move($path, $file_name);
        } else {
            $file_name = Category::find($id)->cat_image;
        }

        if ($request->filled(['cat_type'])) {
            $cat_type = $request->input('cat_type');
        } else {
            $cat_type = Category::find($id)->cat_type;
        }

        Category::where("id", $id)->update([

            'cat_name'  => $request->input('cat_name'),
            'cat_image' => $file_name,
            'cat_type'  => $cat_type,


        ]);


        return redirect('/manage_categories');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Category::destroy($id);

        return redirect('/manage_categories');
    }
}
