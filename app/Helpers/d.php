<?php
use App\Models\User;
use App\Models\Wishlist;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;


if (!function_exists('getCategories')) {
    function getCategories() {
        return Category::all();
    }
}
if (!function_exists('getWishlist')) {
    function getWishlist() {
        if (auth()->check()) {
            return Wishlist::where('user_id', auth()->id())->get();
        }
        return collect(); // empty collection if user not logged in
    }
}

if (!function_exists('getCategories')) {
    function getCategories() {
        return Category::all();
    }
}
if (!function_exists('getCategories')) {
    function getCategories()
    {

        return Category::with('subcategory')->orderBy('name', 'asc')->get();
    }
}
if (!function_exists('getWishlist')) {
    function getWishlist() {
        if (auth()->check()) {
            return Wishlist::where('user_id', auth()->id())->get();
        }
        return collect(); // empty collection if user not logged in
    }
}
if (!function_exists('getCourseCategories')) {
    function getCourseCategories()
    {
        return \App\Models\Category::all();
    }
}
if (!function_exists('isApprovedUser')) {
    function isApprovedUser()
    {
        // Example logic
        return auth()->check() && auth()->user()->is_approved == 1;
    }
}
// if (!function_exists('setSidebar')) {
//     function setSidebar($route)
//     {
//         return request()->routeIs($route) ? 'active' : '';
//     }
// }
/* Instructor Approved via admin */

if (!function_exists('isApprovedUser')) {
    function isApprovedUser()
    {
        $user_id = Auth::id();
        return User::where('role', 'instructor')
            ->where('status', '1')
            ->where('id', $user_id)
            ->first();
    }
}/** set admin sidebar active */

if (!function_exists('setSidebar')) {
    function setSidebar(array $routes): ?String
    {
        foreach ($routes as $route) {
            if (request()->routeIs($route)) {
                return 'mm-active';
            }
        }
        return null;
    }
}


/** for user Dashboard only */
if (!function_exists('setSidebarActive')) {
    function setSidebarActive(array $routes): ?String
    {
        foreach ($routes as $route) {
            if (request()->routeIs($route)) {
                return 'page-active';
            }
        }
        return null;
    }
}