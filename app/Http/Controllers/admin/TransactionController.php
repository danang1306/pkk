<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transaction;

class TransactionController extends Controller
{
    public function index(){
        $data = Transaction::paginate(4);
        return view('admin/transaction/index',['data' => $data]);
    }
}
