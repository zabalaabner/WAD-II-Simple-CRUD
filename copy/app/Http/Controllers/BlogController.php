<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //index....


        $blogs = Blog::all();
        return view('blog.index',['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Studentnumber' => 'required',
            'Fname' => 'required',
            'Lname' => 'required',
            'Course'=> 'required',
            ]);


        $blog = new blog;
        $blog->Studentnumber = $request->Studentnumber;
        $blog->Fname = $request->Fname;
        $blog->Mname = $request->Mname;
        $blog->Lname = $request->Lname;
        $blog->Course = $request->Course;
        $blog->Address = $request->Address;
        $blog->Guardian = $request->Guardian;
        $blog->Contactnumber = $request->Contactnumber;
        $blog->save();

        return redirect()->route('blog.index')->with('alert-success','Data has been saved!');
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
        $blog = Blog::findOrFail($id);

        return view('blog.edit',compact('blog'));
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
       $this->validate($request , [
            'Studentnumber' => 'required',
            'Fname' => 'required',
            'Lname' => 'required',
            'Course'=> 'required',
            ]);

            $blog = Blog::findOrFail($id);
            $blog->Studentnumber = $request->Studentnumber;
            $blog->Fname = $request->Fname;
            $blog->Mname = $request->Mname;
            $blog->Lname = $request->Lname;
            $blog->Course = $request->Course;
            $blog->Address = $request->Address;
            $blog->Guardian = $request->Guardian;
            $blog->Contactnumber = $request->Contactnumber;
            $blog->save();
            return redirect()->route('blog.index')->with('alert-success','Data has been saved!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('blog.index')->with('alert-success' , 'Data deleted!');
    }
}
