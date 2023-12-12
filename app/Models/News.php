<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    public function getNews()
    {
        $data = DB::table('news')->join('picture_cover', 'picture_cover.news_number', '=', 'news.news_number')->select('news.news_number', 'news.title', 'picture_cover.picture_name', 'news.dateupload')->paginate(20);
        return $data;
    }

    public function getImageNews($id)
    {
        $data = DB::table('picture')->where('news_number', $id)->get();
        return $data;
    }

    public function getNewsSelect($id)
    {
        $data = DB::table('news')->where('news_number', $id)->get()->first();
        return $data;
    }

    public function getSideNews($id)
    {
        $data = DB::table('news')->orderByDesc('news.dateupload')->join('picture_cover', 'picture_cover.news_number', '=', 'news.news_number')->where('news.news_number', '!=', $id)->select('news.news_number', 'news.title', 'picture_cover.picture_name', 'news.dateupload')->limit(5)->get();
        return $data;
    }
}
