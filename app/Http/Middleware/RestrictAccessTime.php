<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;

class RestrictAccessTime
{
    public function handle(Request $request, Closure $next)
    {
        // Get current hour in 24-hour format
        $currentHour = Carbon::now()->hour;

        if ($currentHour >= 22 || $currentHour < 6) {
            return response()->json(['message' => 'Access is restricted between 10 PM and 6 AM.'], 403);
        }

        return $next($request);
    }
}
