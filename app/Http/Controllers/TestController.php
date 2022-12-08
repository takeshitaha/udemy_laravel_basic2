<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\facades\DB;

class TestController extends Controller
{
    public function index ()
    {
        //エロクワント
        $values = Test::all();

        $count = Test::count();

        $first = Test::findOrfail(1);

        $whereBBB = Test::where('text','=','bbb')->get();

        //クエリビルダ
        $queryBuilder = DB::table('tests')->where('text','=','bbb')
        ->select('id','text')
        ->get();

        dd($values,$count,$first,$whereBBB,$queryBuilder);

        return view('tests.test',compact('values'));
    }
}
