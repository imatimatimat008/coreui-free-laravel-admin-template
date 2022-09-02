<?php

namespace App\Http\Controllers\Parameters;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChapterAffiliateController extends Controller
{
    public function index()
    {
        return view('parameters.chapter_affiliate');
    }
}
