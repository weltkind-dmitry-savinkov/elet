<?php

namespace App\Modules\Rates;

use phpQuery;

use App\Modules\Rates\Models\Currency;

class RatesParser
{

    public $currencies;

    public $rates = [];

    private $urlWithMainCurrencies = 'http://nbkr.kg';

    private $urlWithAdditionalCurrencies = 'http://nbkr.kg/index1.jsp?item=1562&lang=RUS';

    private $selectorMainCurrencies = 'div#sticker-exrates > div.sticker-body > table > tbody > tr';

    private $selectorAdditionalCurrencies = '#item-RUS-1562-0-1 table';

    public function __construct()
    {
        $this->currencies = Currency::all()->keyBy('iso_code');;
    }

    public function rates()
    {
        $this->mainCurrencies();
        $this->additionalCurrencies();

        return $this->rates;
    }

    public function mainCurrencies()
    {
        $parsedCurrencies = $this->getParsedCurrencies(
            $this->urlWithMainCurrencies,
            $this->selectorMainCurrencies
        );

        foreach ($parsedCurrencies as $currency) {
            $pqCurrency    = pq($currency);
            $isoCode       = $pqCurrency->find('td.excurr')->text();
            $isoCode       = explode('/', $isoCode)[0];

            if(!isset($this->currencies[$isoCode])){
                continue;
            }

            $courseChanges = $pqCurrency->find('td.exrate');
            $course        = (float)pq($courseChanges->elements[0])->text();
            $change        = (float)$pqCurrency->find(':last')->text();

            $this->rates[$isoCode] = [
                'course' => $course,
                'change' => $change
            ];
        }

        phpQuery::unloadDocuments();
    }

    public function additionalCurrencies()
    {
        $parsedCurrencies = $this->getParsedCurrencies(
            $this->urlWithAdditionalCurrencies,
            $this->selectorAdditionalCurrencies
        )->find('tr');

        foreach ($parsedCurrencies as $currency) {
            $pqCurrency = pq($currency);
            $isoCode    = $pqCurrency->find(':first')->text();

            if(!isset($this->currencies[$isoCode])){
                continue;
            }

            $courseChanges = $pqCurrency->find('td.stat-right');
            $course        = (float)pq($courseChanges->elements[0])->text();
            $change        = (float)$pqCurrency->find(':last')->text();

            $this->rates[$isoCode] = [
                'course' => $course,
                'change' => $change
            ];
        }

        phpQuery::unloadDocuments();
    }

    private function getParsedCurrencies($url, $selector)
    {
        $html = file_get_contents($url);

        phpQuery::newDocumentHtml($html);

        return pq($selector);
    }
}
