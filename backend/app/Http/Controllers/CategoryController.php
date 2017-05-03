<?php

namespace App\Http\Controllers;

use App\Category;
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
        $categorys = Category::orderBy('updated_at','desc')->get();
        return view('category.index', compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Category();
        $header_text = 'เพิ่มประเภทสินค้า';
        $mode = 'create';
        $form_action = '/category';
        return view('category.form', compact('category', 'header_text', 'mode', 'form_action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'name' => 'required'
        //     ]);

        // dd($request->all());
        // Category::create($request->all());

        try{
            Category::create([
                'name' => $request->input('name'),
                'detail' => $request->input('detail')
                ]);
        } catch (\Exception $ex) {

        }
        
        return redirect('/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        // dd($category);
        $header_text = 'แก้ไขประเภทสินค้า';
        $mode = 'edit';
        $form_action = '/category/'.$category->id;
        return view('category.form', compact('category', 'header_text', 'mode', 'form_action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)  //
    {
        try{
            $category->name = $request->input('name');
            $category->detail = $request->input('detail');
            $category->save();
        } catch (\Exception $ex) {

        }
        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        dd($category);
        // try{
        //     $category->delete();
        // } catch (\Exception $ex) {

        // }
        // //notify()->flash('Deleted','error',['text' => 'Word Deleted Succesfully']);
        // return redirect('/category');
    }
}
