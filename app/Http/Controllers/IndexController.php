<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }
    public function history()
    {
        return view('main/about/history');
    }
    public function vision()
    {
        return view('main/about/vision');
    }
    public function board()
    {
        return view('main/about/board');
    }
    public function office()
    {
        return view('main/about/office');
    }

    public function structure()
    {
        return view('main/about/structure');
    }

    public function register()
    {
        return view('main/service/register');
    }

    public function deposit()
    {
        return view('main/service/deposit');
    }

    public function credit()
    {
        return view('main/service/credit');
    }

    public function marry()
    {
        return view('main/welfare/marry');
    }

    public function maternity()
    {
        return view('main/welfare/maternity');
    }

    public function oldage()
    {
        return view('main/welfare/oldage');
    }

    public function medical()
    {
        return view('main/welfare/medical');
    }

    public function dead()
    {
        return view('main/welfare/dead');
    }

    public function activity()
    {
        $news = DB::table('news')->join('picture_cover', 'picture_cover.news_number', '=', 'news.news_number')->select('news.news_number', 'news.title', 'picture_cover.picture_name', 'news.dateupload')->paginate(20);
        return view('main/news/activity', compact('news'));
    }

    public function news($id)
    {
        $image_news = DB::table('picture')->where('news_number', $id)->get();
        $news = DB::table('news')->where('news_number', $id)->get()->first();
        $side_news = DB::table('news')->orderByDesc('news.dateupload')->join('picture_cover', 'picture_cover.news_number', '=', 'news.news_number')->where('news.news_number', '!=', $id)->select('news.news_number', 'news.title', 'picture_cover.picture_name', 'news.dateupload')->limit(5)->get();
        return view('main/news/news', compact('image_news', 'news', 'side_news'));
    }

    public function calendar()
    {
        return view('main/news/calendar');
    }

    public function homeList()
    {
        $asset = DB::table('asset')->where('asset.asset_type', '1')->paginate(10);
        return view('main/asset/homeList', compact('asset'));
    }
    public function vacantList()
    {
        $asset = DB::table('asset')->where('asset.asset_type', '2')->paginate(10);
        return view('main/asset/vacantList', compact('asset'));
    }
    public function condoList()
    {
        $asset = DB::table('asset')->where('asset.asset_type', '3')->paginate(10);
        return view('main/asset/condoList', compact('asset'));
    }
    public function document()
    {
        return view('main/download/document');
    }
    public function report()
    {
        return view('main/download/report');
    }

    public function withus()
    {
        return view('main/contact/withus');
    }
}
