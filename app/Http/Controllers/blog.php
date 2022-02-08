<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;
// MODELS


use App\Models\category;
use App\Models\articles;


class blog extends Controller
{
    //
    public function home(){
         $articles=article::OrderBy('id','DESC')->paginate(2);


        $category = category::InRandomOrder()->get();

        return view('home',[
            'categoryWidget' => $category,
            'articles'=>$articles,

        ]);
    }

public function single($category,$slug){
    $category=category::where('slug',$category)->first() ?? abort(403,'böyle bi kategori yok ');
   $articles=article::where('slug',$slug)->where('category_id',$category->id)->first() ?? abort(403,'böyle bir yazı bulunamadı');

     $articles->increment('hit');

    $categoryWidget = category::InRandomOrder()->get();
return view('single',[
    'category' => $category,
    'articles'=>$articles,
    'categoryWidget'=>$categoryWidget

]);
}
public function category($slug){

    $categoryWidget = category::InRandomOrder()->get();

    $category=category::where('slug',$slug)->first() ?? abort(403,'böyle bi kategori yok');
    $articles=article::where('category_id',$category->id)->OrderBy('updated_at','ASC')->paginate(1);
    return view('category',[
        'category'=>$category,
        'articles'=>$articles,
        'categoryWidget'=>$categoryWidget
    ]);
}



}
