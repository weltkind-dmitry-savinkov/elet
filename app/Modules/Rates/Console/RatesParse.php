<?php

namespace App\Modules\Rates\Console;

use Illuminate\Console\Command;

use App\Modules\Rates\RatesParser;

use App\Modules\Rates\Models\Repository\Rate as RateRepository;

class RatesParse extends Command
{
    protected $signature = 'rates:parse';

    private $parser;

    private $repository;

    public function __construct(RatesParser $parser, RateRepository $repository)
    {
        parent::__construct();

        $this->parser     = $parser;
        $this->repository = $repository;
    }

    public function handle()
    {
        $rates = $this->parser->rates();

        $this->repository->addRates($rates);
    }
}
