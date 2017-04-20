<?php

namespace App\Modules\Roles\Http\Middleware;

use Closure;
use Permission;
use Auth;

class Verification
{
    public function handle($request, Closure $next)
    {

        $user = Auth::user();

        $allowed = Permission::allowed($user, module(), action());

        if (!$allowed) {
            abort(403, 'У вас нету прав доступа.');
        }

        return $next($request);
    }
}