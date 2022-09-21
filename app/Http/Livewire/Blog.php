<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;


class Blog extends Component
{
    use WithPagination;
    public int $perPage=6;


    public function addPerPage(){
        $this->perPage+=6;
    }


    public function render()
    {
        if (app()->getLocale()=='fr'){
            $blogs=\App\Models\Blog::query()->select('blogTitle','blogSummary','blogSlug','mainStory','mainPhoto','views','created_at')->paginate($this->perPage);
        }
        elseif (app()->getLocale()=='en'){
            $blogs=\App\Models\Blog::query()->select('blogTitle_en as blogTitle','blogSummary_en as blogSummary','blogSlug_en as blogSlug','mainStory_en as mainStory','mainPhoto','views','created_at')->paginate($this->perPage);
        }
        elseif (app()->getLocale()=='kiny'){
            $blogs=\App\Models\Blog::query()->select('blogTitle_kiny as blogTitle','blogSummary_kiny as blogSummary','blogSlug_kiny as blogSlug','mainStory_kiny as mainStory','mainPhoto','views','created_at')->paginate($this->perPage);
        }





        return view('livewire.blog',[
            'blogs'=>$blogs,

        ]);
    }
}
