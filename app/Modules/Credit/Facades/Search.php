<?php

namespace App\Modules\Credit\Facades;

use App\Modules\Search\Http\Controllers\Search as BaseSearch;

use Caffeinated\Modules\Facades\Module;

class Search extends BaseSearch
{
    public $tableName = 'credits';
    public $routeName = 'credit.customShow';
    public $previewField = 'description';
    public $dateField = 'created_at';

    public function getResult()
    {
        $sql = $this->getTable()
            ->select()
            ->where(function ($query){
                $query->where($this->getSearchSqlWhere(
                    $this->getQuery(),
                    [
                        'title',
                        'description'
                    ]
                ));
            })
            ->where('active', 1)
            ->where('lang', \Lang::locale())
            ->get();

        return $this->addNodes($sql, 'credit', trans('credit::index.title'));
    }
}