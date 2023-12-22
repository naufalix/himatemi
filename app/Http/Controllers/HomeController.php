<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Meta;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private function meta(){
        $meta = Meta::$data_meta;
        $meta['title'] = 'HIMATEMI';
        $meta['description'] = 'Himpunan Mahasiswa Teknik Elektromedis Indonesia';
        return $meta;
    }

    public function index(){
        return view('home',[
            "meta" => $this->meta(),
            // "contents" => Content::all(),
            // "faqs" => Faq::whereShow(1)->orderBy("sort")->get(),
            // "sponsors" => Sponsor::orderBy("sort")->get(),
        ]);
    }

    public function eic(){
        return view('eic',[
            "meta" => $this->meta(),
            "cards" => Card::whereShow(1)->orderBy("sort")->get(),
            "categories" => EicCategory::whereStatus(1)->get(),
            "contents" => Content::all(),
            "galleries" => Gallery::whereType(1)->orderBy("sort")->get(),
            "sponsors" => Sponsor::orderBy("sort")->get(),
        ]);
    }

    public function semnas(){
        return view('semnas',[
            "meta" => $this->meta(),
            "contents" => Content::all(),
            "galleries" => Gallery::whereType(1)->orderBy("sort")->get(),
            "sponsors" => Sponsor::orderBy("sort")->get(),
        ]);
    }
}
