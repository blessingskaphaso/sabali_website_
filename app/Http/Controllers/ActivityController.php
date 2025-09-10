<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    // Admin view - all system activities
    public function index(Request $request)
    {
        $query = Activity::with('user')->orderBy('created_at', 'desc');

        // Filter by activity type
        if ($request->filled('type')) {
            $query->where('activity_type', $request->type);
        }

        // Filter by date range
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        // Filter by user
        if ($request->filled('user_id')) {
            $query->where('user_id', $request->user_id);
        }

        $activities = $query->paginate(50);
        
        // Get activity types for filter dropdown
        $activityTypes = Activity::select('activity_type')
                                ->distinct()
                                ->orderBy('activity_type')
                                ->pluck('activity_type');

        return view('admin.activities.index', compact('activities', 'activityTypes'));
    }

    // User view - only their activities
    public function userActivities(Request $request)
    {
        $query = Activity::where('user_id', Auth::id())
                        ->orderBy('created_at', 'desc');

        // Filter by activity type
        if ($request->filled('type')) {
            $query->where('activity_type', $request->type);
        }

        // Filter by date range
        if ($request->filled('date_from')) {
            $query->whereDate('created_at', '>=', $request->date_from);
        }
        
        if ($request->filled('date_to')) {
            $query->whereDate('created_at', '<=', $request->date_to);
        }

        $activities = $query->paginate(25);
        
        // Get user's activity types for filter
        $activityTypes = Activity::where('user_id', Auth::id())
                                ->select('activity_type')
                                ->distinct()
                                ->orderBy('activity_type')
                                ->pluck('activity_type');

        return view('user.activities.index', compact('activities', 'activityTypes'));
    }

    // API endpoint for activity stats
    public function stats(Request $request)
    {
        $period = $request->get('period', '7days');
        
        $startDate = match($period) {
            '24hours' => now()->subDay(),
            '7days' => now()->subWeek(),
            '30days' => now()->subMonth(),
            '3months' => now()->subMonths(3),
            default => now()->subWeek()
        };

        $activities = Activity::where('created_at', '>=', $startDate);

        if (Auth::user()->role !== 'admin') {
            $activities->where('user_id', Auth::id());
        }

        $stats = $activities->selectRaw('
                activity_type,
                COUNT(*) as count,
                DATE(created_at) as date
            ')
            ->groupBy('activity_type', 'date')
            ->orderBy('date')
            ->get();

        return response()->json($stats);
    }
}

// Admin Activities View
{{-- resources/views/admin/activities/index.blade.php --}}
@extends('layout')

@section('content')
<div class="py-12 bg-gray-100 min-h-screen">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
        <div class="mb-6 flex justify-between items-center">
            <div>
                <h1 class="text-3xl font-bold text-gray-900">System Activities</h1>
                <p class="text-gray-600">Track all activities across the platform</p>
            </div>
            <div class="flex space-x-3">
                <button onclick="exportActivities()" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
                    📊 Export
                </button>
                <button onclick="refreshActivities()" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                    🔄 Refresh
                </button>
            </div>
        </div>

        <!-- Filters -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <form method="GET" class="grid md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Activity Type</label>
                    <select name="type" class="w-full border border-gray-300 rounded-lg px-3 py-2">
                        <option value="">All Types</option>
                        @foreach($activityTypes as $type)
                            <option value="{{ $type }}" {{ request('type') === $type ? 'selected' : '' }}>
                                {{ ucwords(str_replace('_', ' ', $type)) }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">From Date</label>
                    <input type="date" name="date_from" value="{{ request('date_from') }}" 
                        class="w-full border border-gray-300 rounded-lg px-3 py-2">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">To Date</label>
                    <input type="date" name="date_to" value="{{ request('date_to') }}" 
                        class="w-full border border-gray-300 rounded-lg px-3 py-2">
                </div>
                
                <div class="flex items-end">
                    <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        🔍 Filter
                    </button>
                </div>
            </form>
        </div>

        <!-- Activity Stats Overview -->
        <div class="grid md:grid-cols-4 gap-6 mb-6">
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-sm font-medium text-gray-600">Today's Activities</h3>
                        <p class="text-2xl font-bold text-blue-600">{{ $activities->where('created_at', '>=', today())->count() }}</p>
                    </div>
                    <div class="text-3xl">📊</div>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-sm font-medium text-gray-600">This Week</h3>
                        <p class="text-2xl font-bold text-green-600">{{ $activities->where('created_at', '>=', now()->startOfWeek())->count() }}</p>
                    </div>
                    <div class="text-3xl">📈</div>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-sm font-medium text-gray-600">Active Users</h3>
                        <p class="text-2xl font-bold text-purple-600">{{ $activities->where('created_at', '>=', today())->distinct('user_id')->count('user_id') }}</p>
                    </div>
                    <div class="text-3xl">👥</div>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-sm font-medium text-gray-600">Critical Activities</h3>
                        <p class="text-2xl font-bold text-red-600">{{ $activities->whereIn('activity_type', ['loan_rejected', 'payment_overdue', 'system_error'])->count() }}</p>
                    </div>
                    <div class="text-3xl">⚠️</div>
                </div>
            </div>
        </div>

        <!-- Activities List -->
        <div class="bg-white rounded-lg shadow-md">
            <div class="p-6 border-b border-gray-200">
                <h3 class="text-lg font-semibold">Recent Activities</h3>
            </div>
            
            <div class="divide-y divide-gray-200">
                @forelse($activities as $activity)
                <div class="p-6 hover:bg-gray-50">
                    <div class="flex items-start justify-between">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <span class="text-3xl">{{ $activity->getIcon() }}</span>
                            </div>
                            <div class="flex-grow">
                                <div class="flex items-center space-x-2">
                                    <p class="text-sm font-medium text-gray-900">{{ $activity->description }}</p>
                                    <span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                        {{ ucwords(str_replace('_', ' ', $activity->activity_type)) }}
                                    </span>
                                </div>
                                <div class="mt-1 flex items-center space-x-4 text-sm text-gray-500">
                                    <span>👤 {{ $activity->user->name ?? 'System' }}</span>
                                    <span>🕒 {{ $activity->created_at->format('M d, Y g:i A') }}</span>
                                    @if($activity->ip_address)
                                    <span>🌐 {{ $activity->ip_address }}</span>
                                    @endif
                                </div>
                                @if($activity->metadata)
                                <div class="mt-2">
                                    <details class="text-xs text-gray-600">
                                        <summary class="cursor-pointer hover:text-gray-800">View Details</summary>
                                        <pre class="mt-2 p-2 bg-gray-100 rounded text-xs">{{ json_encode($activity->metadata, JSON_PRETTY_PRINT) }}</pre>
                                    </details>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="text-sm text-gray-400">
                            {{ $activity->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
                @empty
                <div class="p-6 text-center text-gray-500">
                    <div class="text-6xl mb-4">📭</div>
                    <p class="text-lg font-medium">No activities found</p>
                    <p class="text-sm">Try adjusting your filters or check back later.</p>
                </div>
                @endforelse
            </div>
        </div>

        <!-- Pagination -->
        @if($activities->hasPages())
        <div class="mt-6">
            {{ $activities->links() }}
        </div>
        @endif
    </div>
</div>

<script>
function refreshActivities() {
    window.location.reload();
}

function exportActivities() {
    const params = new URLSearchParams(window.location.search);
    params.set('export', 'csv');
    window.open(`/admin/activities/export?${params.toString()}`, '_blank');
}
</script>
@endsection

// User Activities View
{{-- resources/views/user/activities/index.blade.php --}}
@extends('layout')

@section('content')
<div class="py-12 bg-gray-100 min-h-screen">
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-900">My Activities</h1>
            <p class="text-gray-600">Track your account activities and actions</p>
        </div>

        <!-- Filters -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <form method="GET" class="grid md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Activity Type</label>
                    <select name="type" class="w-full border border-gray-300 rounded-lg px-3 py-2">
                        <option value="">All Types</option>
                        @foreach($activityTypes as $type)
                            <option value="{{ $type }}" {{ request('type') === $type ? 'selected' : '' }}>
                                {{ ucwords(str_replace('_', ' ', $type)) }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">From Date</label>
                    <input type="date" name="date_from" value="{{ request('date_from') }}" 
                           class="w-full border border-gray-300 rounded-lg px-3 py-2">
                </div>
                
                <div class="flex items-end">
                    <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        🔍 Filter
                    </button>
                </div>
            </form>
        </div>

        <!-- Activities List -->
        <div class="bg-white rounded-lg shadow-md">
            <div class="p-6 border-b border-gray-200">
                <h3 class="text-lg font-semibold">Your Recent Activities</h3>
            </div>
            
            <div class="divide-y divide-gray-200">
                @forelse($activities as $activity)
                <div class="p-6 hover:bg-gray-50">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <span class="text-2xl">{{ $activity->getIcon() }}</span>
                        </div>
                        <div class="flex-grow">
                            <p class="text-gray-900 font-medium">{{ $activity->description }}</p>
                            <div class="mt-1 flex items-center space-x-4 text-sm text-gray-500">
                                <span>🕒 {{ $activity->created_at->format('M d, Y g:i A') }}</span>
                                <span class="px-2 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">
                                    {{ ucwords(str_replace('_', ' ', $activity->activity_type)) }}
                                </span>
                            </div>
                        </div>
                        <div class="text-sm text-gray-400 flex-shrink-0">
                            {{ $activity->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
                @empty
                <div class="p-6 text-center text-gray-500">
                    <div class="text-6xl mb-4">📭</div>
                    <p class="text-lg font-medium">No activities found</p>
                    <p class="text-sm">Your account activities will appear here.</p>
                </div>
                @endforelse
            </div>
        </div>

        <!-- Pagination -->
        @if($activities->hasPages())
        <div class="mt-6">
            {{ $activities->links() }}
        </div>
        @endif
    </div>
</div>
@endsection