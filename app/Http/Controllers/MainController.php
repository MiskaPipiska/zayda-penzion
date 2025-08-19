<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webgang\Dfa\Models\Entry;
use Webgang\Dfa\Services\EntryNormalizer;

class MainController extends Controller
{
    public function getIndex()
    {
        return view('index');
    }
}
