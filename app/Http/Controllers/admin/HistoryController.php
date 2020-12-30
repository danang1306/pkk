<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\History;

class HistoryController extends Controller
{
    public function index(){
        $data = History::paginate(4);
        return view('admin/history/index',['data' => $data]);
    }
}
