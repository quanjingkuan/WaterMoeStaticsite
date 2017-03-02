<?php

namespace App\Http\Controllers\View;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CaseController extends Controller
{
    public function index()
    {
        return view ('home.case.index');
    }

    public function show($id)
    {
        return $id;
    }
}
