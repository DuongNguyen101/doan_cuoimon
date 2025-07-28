<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use App\Models\About;
use App\Models\Qna;
use App\Models\User;

class AboutController extends Controller
{
    public function index()
    {   
        $categories = Categories::all();
        $abouts = About::all();
        $questions = Qna::all();

         $teamMembers = User::whereIn('email', [
            'phamquangson0702@gmail.com',
            'Nguyenduong01@gmail.com',
            'khangvi742@gmail.com'
        ])->get();

        return view('template/user/about/index', compact('categories', 'abouts', 'teamMembers', 'questions'));
    }
}
