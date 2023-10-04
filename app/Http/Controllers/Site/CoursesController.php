<?php
namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Courses;


class CoursesController extends Controller
{
    //
    public function courses()
    {
      

       $allData = Courses::all();
        return view('site.courses')->with([
            'allData' => $allData
           
        ]);
    }
}
