<?php

namespace App\Modules\Leadership\Facades;

use App\Modules\Search\Http\Controllers\Search as BaseSearch;
use Caffeinated\Modules\Facades\Module;

class Search extends BaseSearch
{
    public $tableName = 'leadership';
    public $routeName = 'leaderships.customShow';

    public $previewField = 'description';

    public function getResult()
    {
        $sql = $this->getTable()
            ->select()
            ->where(function ($query){
                $query->where($this->getSearchSqlWhere(
                    $this->getQuery(),
                    [
                        'title',
                        'position',
                        'description'
                    ]
                ));
            })
            ->where('active', 1)
            ->where('lang', \Lang::locale())
            ->get();

        return $this->addNodes($sql, 'leaderships', trans('leadership::index.title'));
    }
}