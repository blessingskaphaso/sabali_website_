<?php

namespace App\Http\Middleware;

use App\Models\Activity;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrackActivity
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Track specific routes and actions
        $this->trackRouteActivity($request);

        return $response;
    }

    private function trackRouteActivity(Request $request)
    {
        $route = $request->route();
        if (!$route) return;

        $routeName = $route->getName();
        $method = $request->method();
        
        // Define trackable routes
        $trackableRoutes = [
            'loans.store' => ['type' => 'loan_applied', 'description' => 'New loan application submitted'],
            'payments.store' => ['type' => 'payment_made', 'description' => 'Payment made'],
            'profile.update' => ['type' => 'profile_updated', 'description' => 'Profile information updated'],
            'documents.upload' => ['type' => 'document_uploaded', 'description' => 'Document uploaded'],
        ];

        if (isset($trackableRoutes[$routeName]) && Auth::check()) {
            $config = $trackableRoutes[$routeName];
            Activity::logActivity(
                $config['type'],
                $config['description'],
                Auth::id(),
                ['route' => $routeName, 'method' => $method]
            );
        }
    }
}