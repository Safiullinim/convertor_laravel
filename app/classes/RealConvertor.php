<?php

namespace App\Classes;

use App\Models\Currencies;

class RealConvertor extends Convertor
{
    public function loadRates()
    {
        $currensies = new Currencies();
        date_default_timezone_set("Europe/Moscow");
        $realCurrencie = $currensies->all();
        $real = true;
        foreach ($realCurrencie as $elem) {
            if (mb_substr($elem->created_at, 0, -6) == strftime("%G-%m-%d %H")) {
                $realCurrencies = $elem->currency;
                $real = false;
                break;
            } else {
                $elem->delete();
            }
        }
        if ($real) {
            $realCurrencies = file_get_contents("https://api.exchangerate.host/latest?base=USD");
            $currensies->currency = $realCurrencies;
            $currensies->save();
        }
        $realCurrencies = json_decode($realCurrencies, true);
        foreach ($realCurrencies['rates'] as $key => $val) {
            $this->currencies[$key] = $val;
        }
    }
    public function __construct()
    {
        $this->loadRates();
    }
}
