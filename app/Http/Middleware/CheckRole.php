<?php

namespace App\Http\Middleware;

use App\Models\Role;
use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */


    public function handle(Request $request, Closure $next)
    {
        $roles = $this->getRoles();

        if (session()->has('role')) {
            if (in_array(session('role'), $roles, true)) {
                if (session('role') === 2) {

                    return response()->view('Employee.index');
                }
                if (session('role') === 3) {
                    return redirect()->route('Admin.index');
                }
            }
        }
        return $next($request);
    }

    public function getRoles(): array
    {
        $ids = Role::all('id');
        foreach ($ids as $id) {
            $roles[] = $id['id'];
        }
        return $roles;
    }

    public function is_admin($role)
    {

    }
}
