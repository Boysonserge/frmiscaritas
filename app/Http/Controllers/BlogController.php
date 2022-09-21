<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
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
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(string $slug)
    {
        if (app()->getLocale()=='fr'){
            $selectedBlog=Blog::query()->where('blogSlug',$slug)->select('blogTitle','blogSummary','blogSlug','mainStory','mainPhoto','views','created_at')->first();
        }
        elseif (app()->getLocale()=='en'){
            $selectedBlog=Blog::query()->where('blogSlug_en',$slug)->select('blogTitle_en as blogTitle','blogSummary_en as blogummary','blogSlug_en as blogSlug','mainStory_en as mainStory','mainPhoto','views','created_at')->first();
        }
        elseif (app()->getLocale()=='kiny'){
            $selectedBlog=Blog::query()->where('blogSlug_kiny',$slug)->select('blogTitle_kiny as blogTitle','blogSummary_kiny as blogSummary','blogSlug_kiny as blogSlug','mainStory_kiny as mainStory','mainPhoto','views','created_at')->first();
        }


        return view('blog.show',['selectedBlog'=>$selectedBlog]);
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
        //
    }
}
