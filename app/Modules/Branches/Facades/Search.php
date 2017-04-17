<?php

namespace App\Modules\Branches\Facades;

use App\Modules\Search\Http\Controllers\Search as BaseSearch;

use Caffeinated\Modules\Facades\Module;

class Search extends BaseSearch
{
    public $tableName = 'branches';
    public $routeName = 'branches.index';
    public $previewField = '';
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
                        'region_id'
                    ]
                ));
            })
            ->where('active', 1)
            ->where('lang', \Lang::locale())
            ->get();

        return $this->addNodes($sql, 'branches', trans('branches::index.title'));
    }
}