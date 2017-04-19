<?php

namespace App\Http\Middleware;

use Closure;
use App\Modules\Tree\Helpers\Breadcrumbs as Facade;
use App\Modules\Tree\Models\Tree;

class Breadcrumbs
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $renderEntity = true)
    {
        $page = $request->get('page');

        if ($page) {

            $routeName = $request->route()->getName();

            if (strpos($routeName, '.') > -1 && strpos($routeName, 'customShow') > -1) {
                $entity_id = (int)$request->route()->getParameter('id');

                if ($entity_id) {
                    //dd($slug);
                    $item = Tree::where('module', $routeName)->where('entity_id', $entity_id)->first();

                    $page = $item ? $item : $page;
                }
            }

            $ancestors = $page->ancestorsAndSelf()->get();
            //dd($ancestors);
            foreach ($ancestors as $ancestor) {

                if ($ancestor->slug) {
                    $url = route($ancestor->slug);
                } else {
                    $url = home();
                }

                Facade::add($ancestor->title, $url);

            }
        }



        $entity = $request->get('entity');

        if ($entity && $renderEntity===true) {
            Facade::add($entity->title, route($page->slug . '.show', ['id' => $entity->id]));
        }


        return $next($request);


    }
}
