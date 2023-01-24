<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function index(){

        // Eloquent Testモデルの全件取得
        $values = Test::all();

        // dd($values);

        // view() laravelのヘルパ関数
        // 引数は（フォルダ名.ファイル名）
        return view('tests.test', compact('values'));
    }
}
