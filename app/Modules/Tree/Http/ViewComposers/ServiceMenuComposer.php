<?php
namespace App\Modules\Tree\Http\ViewComposers;

use Illuminate\View\View;
use App\Modules\Tree\Models\TreeRepository;

class ServiceMenuComposer
{

    protected $repository;

    public function __construct(TreeRepository $repository){
        $this->repository = $repository;
    }

    public function compose(View $view){
        $view->with('items', $this->repository->getServiceMenu());
    }
}