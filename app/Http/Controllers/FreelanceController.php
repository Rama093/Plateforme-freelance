<?php

namespace App\Http\Controllers;

use App\Models\Freelance;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FreelanceController extends Controller
{
    public function index()
    {
        $freelances = Freelance::all();

        $count = DB::select('select count(*) as total from freelances ');

        return view('freelances.index', ['count' => $count], compact('freelances'));
    }

    public function create()
    {
        return view('freelances.create');
    }
}
