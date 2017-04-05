<?php

namespace App\Modules\Rates\Models\Repository;

use App\Modules\Rates\Models\Currency;
use App\Modules\Rates\Models\Rate as RateModel;

class Rate
{
    public function addRates($rates)
    {
        $currencies = Currency::all()->keyBy('iso_code');

        foreach ($currencies as $currency) {
            $rate = new RateModel($rates[$currency->iso_code]);

            $currency->rates()->save($rate);
        }
    }

    public function getLastRates()
    {
        return RateModel::with('Currency')->groupBy('currency_id')->get();
    }
}
