<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\train;
class MainController extends Controller
{
    public function index(){

        $trains = Train::whereDate('ora_partenza',  now()->toDateString())->get();

        return view('pages.index', compact('trains'));
    }

}
