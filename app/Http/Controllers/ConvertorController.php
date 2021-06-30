<?php

namespace App\Http\Controllers;

use App\classes\RealConvertor;
use App\Http\Requests\ConvertorRequest;

class ConvertorController extends Controller
{

    public function submit(ConvertorRequest $req)
    {
        $realConvertor = new RealConvertor();
        $from = $req->input('from') ?? '';
        $from = strtoupper($from);
        $to = $req->input('to') ?? '';
        $to = strtoupper($to);
        $amount = $req->input('amount') ?? '';
        $result = [];
        if ($from && $to && $amount) {
            $result['result'] = number_format($realConvertor->convert($from, $to, $amount), 2, ',', '');
            $result['from'] = $realConvertor->getRealName($from);
            $result['to'] = $realConvertor->getRealName($to);
            $result['amount'] = number_format($amount, 2, ',', '');
        }
        return view('convertor', ['result' => $result]);
    }
}
