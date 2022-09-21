<?php

namespace App\Http\Livewire;

use Livewire\Component;


class Blog extends Component
{
    public int $perPage=6;


    public function render()
    {
        if (app()->getLocale()=='fr'){
            $blogs=\App\Models\Blog::query()->select('blogTitle','blogSlug','mainStory','mainPhoto','views','created_at')->paginate($this->perPage);
        }
        elseif (app()->getLocale()=='en'){
            $blogs=\App\Models\Blog::query()->select('blogTitle_en as blogTitle','blogSlug_en as blogSlug','mainStory_en as mainStory','mainPhoto','views','created_at')->paginate($this->perPage);
        }
        elseif (app()->getLocale()=='kiny'){
            $blogs=\App\Models\Blog::query()->select('blogTitle_kiny as blogTitle','blogSlug_kiny as blogSlug','mainStory_kiny as mainStory','mainPhoto','views','created_at')->paginate($this->perPage);
        }


        return view('livewire.blog',[
            'blogs'=>$blogs,

        ]);
    }
}
