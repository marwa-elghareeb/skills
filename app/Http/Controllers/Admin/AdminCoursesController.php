<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Courses;


class AdminCoursesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $allData = Courses::all();
        return view('admin.courses.list')->with(['allData' => $allData]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.courses.create');
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
          //validation
          $request->validate([
           
            'name_ar' => 'required|max:255',
            'name_en' => 'required|max:255',
            'price' => 'required',
            'desc_ar' => 'required',
            'desc_en' => 'required',
         
      
        
        ]);
             //Store
             $data = new Courses();
             $data->name_ar = $request->name_ar;
             $data->name_en = $request->name_en;
             $data->desc_ar = $request->desc_ar;
             $data->desc_en = $request->desc_en;
             $data->price = $request->price;
             if ($request->file('images')) {
                $file = $request->file('images');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload'), $filename);
            }
            $data->image = $filename;
            $data->slug = Str::slug($request->name_ar);
             $data->save();
             return redirect()->route('all-courses.index');

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
        $editData = Courses::where('id', $id)->first();
        return view('admin.courses.edit')->with(['editData' => $editData]);
      
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
         //validation
         $request->validate([
            'name_ar' => 'required|max:255',
            'name_en' => 'required|max:255',
            'price' => 'required',
            'desc_ar' => 'required',
            'desc_en' => 'required',
         
        
        ]);
           //Update
           $data = Courses::find($id);

           $data->name_ar = $request->name_ar;
           $data->name_en = $request->name_en;
           $data->desc_ar = $request->desc_ar;
           $data->desc_en = $request->desc_en;
           $data->price = $request->price;
           if ($request->file('images')) {
            $file = $request->file('images');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload'), $filename);
            $data->image = $filename;
        } else {
        }
        $data->slug = Str::slug($request->name_ar);
           $data->save();
           return redirect()->route('all-courses.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Courses::destroy($id);
        return redirect()->route('all-courses.index')->with('flash_message', 'Item deleted!');

    }



}
