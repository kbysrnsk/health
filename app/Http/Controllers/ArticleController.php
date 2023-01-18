<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
    public function Article()
    {
        return view('/health_article/article');
    }
    
     public function Favorite()
    {
        return view('/health_article/favorite');
    }
    
}
