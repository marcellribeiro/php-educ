<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestadorController extends Controller
{
    public function index(Request $request)
    {
        return view('testador');
    }

    public function testar(Request $request)
    {
        $resultado='nenhum código executado';
        if (!empty($request->phpcode)) {
            $phpcode = $request->phpcode;
            $phpcode = str_replace('<?php', '', $phpcode);
            eval($phpcode);
        }
    }
}
