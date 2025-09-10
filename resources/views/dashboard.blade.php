{{-- resources/views/dashboard/index.blade.php --}}
@extends('layout')

@section('content')
<div class="py-12 bg-gray-100 min-h-screen">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
        {{-- Role-based Dashboard Header --}}
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-gray-900">
                @if(Auth::user()->role === 'admin')
                    Admin Dashboard
                @else
                    My Dashboard
                @endif
            </h1>
            <p class="text-gray-600">Welcome back, {{ Auth::user()->name }}</p>
        </div>

        <div class="flex gap-6">
            <!-- Dynamic Sidebar based on role -->
            <aside class="w-1/4 bg-white rounded-lg shadow-md p-6 h-fit">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">Navigation</h3>
                <ul class="space-y-3">
                    <li><a href="/dashboard" class="flex items-center p-3 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition-colors">
                        <span class="mr-2">🏠</span> Dashboard
                    </a></li>
                    
                    @if(Auth::user()->role === 'admin')
                        {{-- Admin Navigation --}}
                        <li><a href="/admin/users" class="flex items-center p-3 rounded-lg hover:bg-gray-200 transition-colors">
                            <span class="mr-2">👥</span> Manage Users
                        </a></li>
                        <li><a href="/admin/loans" class="flex items-center p-3 rounded-lg hover:bg-gray-200 transition-colors">
                            <span class="mr-2">💰</span> All Loans
                        </a></li>
                        <li><a href="/admin/reports" class="flex items-center p-3 rounded-lg hover:bg-gray-200 transition-colors">
                            <span class="mr-2">📊</span> Reports & Analytics
                        </a></li>
                        <li><a href="/admin/activities" class="flex items-center p-3 rounded-lg hover:bg-gray-200 transition-colors">
                            <span class="mr-2">📋</span> System Activities
                        </a></li>
                        <li><a href="/admin/settings" class="flex items-center p-3 rounded-lg hover:bg-gray-200 transition-colors">
                            <span class="mr-2">⚙️</span> System Settings
                        </a></li>
                    @else
                        {{-- Client Navigation --}}
                        <li><a href="/profile" class="flex items-center p-3 rounded-lg hover:bg-gray-200 transition-colors">
                            <span class="mr-2">👤</span> My Profile
                        </a></li>
                        <li><a href="/loans" class="flex items-center p-3 rounded-lg hover:bg-gray-200 transition-colors">
                            <span class="mr-2">💰</span> My Loans
                        </a></li>
                        <li><a href="/payments" class="flex items-center p-3 rounded-lg hover:bg-gray-200 transition-colors">
                            <span class="mr-2">💳</span> Payments
                        </a></li>
                        <li><a href="/documents" class="flex items-center p-3 rounded-lg hover:bg-gray-200 transition-colors">
                            <span class="mr-2">📄</span> Documents
                        </a></li>
                        <li><a href="/support" class="flex items-center p-3 rounded-lg hover:bg-gray-200 transition-colors">
                            <span class="mr-2">💬</span> Support
                        </a></li>
                    @endif
                    
                    <li class="border-t pt-3 mt-3">
                        <a href="/logout" class="flex items-center p-3 rounded-lg bg-red-500 text-white hover:bg-red-600 transition-colors">
                            <span class="mr-2">🚪</span> Logout
                        </a>
                    </li>
                </ul>
            </aside>

            <!-- Main Content Area -->
            <div class="w-3/4 space-y-6">
                
                @if(Auth::user()->role === 'admin')
                    {{-- ADMIN DASHBOARD --}}
                    
                    <!-- Admin Stats Grid -->
                    <div class="grid md:grid-cols-4 gap-6">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white p-6 rounded-lg shadow-lg">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="text-sm font-medium opacity-90">Total Users</h4>
                                    <p class="text-3xl font-bold">{{ $totalUsers }}</p>
                                </div>
                                <div class="text-4xl opacity-80">👥</div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-r from-green-500 to-green-600 text-white p-6 rounded-lg shadow-lg">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="text-sm font-medium opacity-90">Active Loans</h4>
                                    <p class="text-3xl font-bold">{{ $activeLoans }}</p>
                                </div>
                                <div class="text-4xl opacity-80">💰</div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 text-white p-6 rounded-lg shadow-lg">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="text-sm font-medium opacity-90">Pending Approvals</h4>
                                    <p class="text-3xl font-bold">{{ $pendingApprovals }}</p>
                                </div>
                                <div class="text-4xl opacity-80">⏳</div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-r from-purple-500 to-purple-600 text-white p-6 rounded-lg shadow-lg">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="text-sm font-medium opacity-90">Monthly Revenue</h4>
                                    <p class="text-3xl font-bold">${{ number_format($monthlyRevenue, 0) }}</p>
                                </div>
                                <div class="text-4xl opacity-80">📈</div>
                            </div>
                        </div>
                    </div>

                    <!-- System-wide Recent Activities -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h4 class="text-xl font-semibold">🔄 System-wide Activities</h4>
                            <a href="/admin/activities" class="text-blue-600 hover:text-blue-800 text-sm font-medium">View All</a>
                        </div>
                        
                        <div class="space-y-4 max-h-96 overflow-y-auto">
                            @foreach($recentActivities as $activity)
                            <div class="flex items-start p-4 border-l-4 {{ $activity->getStatusColor() }} bg-gray-50 rounded-r-lg">
                                <div class="flex-shrink-0 mr-4">
                                    <span class="text-2xl">{{ $activity->getIcon() }}</span>
                                </div>
                                <div class="flex-grow">
                                    <p class="text-gray-800 font-medium">{{ $activity->description }}</p>
                                    <div class="flex items-center text-sm text-gray-600 mt-1">
                                        <span>{{ $activity->user->name ?? 'System' }}</span>
                                        <span class="mx-2">•</span>
                                        <span>{{ $activity->created_at->diffForHumans() }}</span>
                                        @if($activity->ip_address)
                                        <span class="mx-2">•</span>
                                        <span>{{ $activity->ip_address }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Quick Actions for Admin -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h4 class="text-xl font-semibold mb-4">⚡ Quick Actions</h4>
                        <div class="grid md:grid-cols-3 gap-4">
                            <a href="/admin/loans/pending" class="p-4 border rounded-lg hover:bg-gray-50 transition-colors">
                                <div class="text-center">
                                    <div class="text-3xl mb-2">⏳</div>
                                    <h5 class="font-medium">Review Pending Loans</h5>
                                    <p class="text-sm text-gray-600">{{ $pendingApprovals }} waiting</p>
                                </div>
                            </a>
                            <a href="/admin/users/create" class="p-4 border rounded-lg hover:bg-gray-50 transition-colors">
                                <div class="text-center">
                                    <div class="text-3xl mb-2">👤➕</div>
                                    <h5 class="font-medium">Add New User</h5>
                                    <p class="text-sm text-gray-600">Create account</p>
                                </div>
                            </a>
                            <a href="/admin/reports/generate" class="p-4 border rounded-lg hover:bg-gray-50 transition-colors">
                                <div class="text-center">
                                    <div class="text-3xl mb-2">📊</div>
                                    <h5 class="font-medium">Generate Report</h5>
                                    <p class="text-sm text-gray-600">Analytics & insights</p>
                                </div>
                            </a>
                        </div>
                    </div>

                @else
                    {{-- CLIENT/USER DASHBOARD --}}
                    
                    <!-- Client Stats Grid -->
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-gradient-to-r from-indigo-500 to-indigo-600 text-white p-6 rounded-lg shadow-lg">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="text-sm font-medium opacity-90">My Active Loans</h4>
                                    <p class="text-3xl font-bold">{{ $userActiveLoans }}</p>
                                </div>
                                <div class="text-4xl opacity-80">💰</div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-r from-green-500 to-green-600 text-white p-6 rounded-lg shadow-lg">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="text-sm font-medium opacity-90">Credit Score</h4>
                                    <p class="text-3xl font-bold">{{ $userCreditScore }}</p>
                                </div>
                                <div class="text-4xl opacity-80">⭐</div>
                            </div>
                        </div>
                        
                        <div class="bg-gradient-to-r from-red-500 to-red-600 text-white p-6 rounded-lg shadow-lg">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h4 class="text-sm font-medium opacity-90">Next Payment Due</h4>
                                    <p class="text-lg font-bold">${{ number_format($nextPaymentAmount, 2) }}</p>
                                    <p class="text-sm opacity-90">{{ $nextPaymentDate }}</p>
                                </div>
                                <div class="text-4xl opacity-80">📅</div>
                            </div>
                        </div>
                    </div>

                    <!-- User's Recent Activities -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <div class="flex items-center justify-between mb-6">
                            <h4 class="text-xl font-semibold">📋 My Recent Activities</h4>
                            <a href="/activities" class="text-blue-600 hover:text-blue-800 text-sm font-medium">View All</a>
                        </div>
                        
                        <div class="space-y-4">
                            @foreach($userRecentActivities as $activity)
                            <div class="flex items-start p-4 border-l-4 {{ $activity->getStatusColor() }} bg-gray-50 rounded-r-lg">
                                <div class="flex-shrink-0 mr-4">
                                    <span class="text-2xl">{{ $activity->getIcon() }}</span>
                                </div>
                                <div class="flex-grow">
                                    <p class="text-gray-800 font-medium">{{ $activity->description }}</p>
                                    <p class="text-sm text-gray-600">{{ $activity->created_at->format('M d, Y \a\t g:i A') }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Loan Summary for Client -->
                    @if($userLoans->count() > 0)
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h4 class="text-xl font-semibold mb-4">💰 My Loans</h4>
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3">Loan ID</th>
                                        <th class="px-6 py-3">Amount</th>
                                        <th class="px-6 py-3">Status</th>
                                        <th class="px-6 py-3">Next Payment</th>
                                        <th class="px-6 py-3">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($userLoans as $loan)
                                    <tr class="bg-white border-b hover:bg-gray-50">
                                        <td class="px-6 py-4 font-medium">#{{ $loan->id }}</td>
                                        <td class="px-6 py-4">${{ number_format($loan->amount, 2) }}</td>
                                        <td class="px-6 py-4">
                                            <span class="px-2 py-1 text-xs font-semibold rounded-full {{ $loan->getStatusClass() }}">
                                                {{ ucfirst($loan->status) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4">{{ $loan->next_payment_date ?? 'N/A' }}</td>
                                        <td class="px-6 py-4">
                                            <a href="/loans/{{ $loan->id }}" class="text-blue-600 hover:underline">View Details</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endif

                    <!-- Quick Actions for Client -->
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h4 class="text-xl font-semibold mb-4">⚡ Quick Actions</h4>
                        <div class="grid md:grid-cols-3 gap-4">
                            <a href="/loans/apply" class="p-4 border rounded-lg hover:bg-gray-50 transition-colors">
                                <div class="text-center">
                                    <div class="text-3xl mb-2">💰</div>
                                    <h5 class="font-medium">Apply for Loan</h5>
                                    <p class="text-sm text-gray-600">New application</p>
                                </div>
                            </a>
                            <a href="/payments/make" class="p-4 border rounded-lg hover:bg-gray-50 transition-colors">
                                <div class="text-center">
                                    <div class="text-3xl mb-2">💳</div>
                                    <h5 class="font-medium">Make Payment</h5>
                                    <p class="text-sm text-gray-600">Pay your loan</p>
                                </div>
                            </a>
                            <a href="/support/ticket" class="p-4 border rounded-lg hover:bg-gray-50 transition-colors">
                                <div class="text-center">
                                    <div class="text-3xl mb-2">💬</div>
                                    <h5 class="font-medium">Get Support</h5>
                                    <p class="text-sm text-gray-600">Contact us</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

{{-- Real-time updates script --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Check for real-time updates every 30 seconds
    setInterval(function() {
        fetch('/api/dashboard/updates')
            .then(response => response.json())
            .then(data => {
                if (data.hasUpdates) {
                    // Show notification or update counters
                    updateDashboardCounters(data);
                }
            })
            .catch(error => console.log('Update check failed:', error));
    }, 30000);
});

function updateDashboardCounters(data) {
    // Update various counters based on role
    @if(Auth::user()->role === 'admin')
        if (data.pendingApprovals !== undefined) {
            document.querySelector('[data-counter="pending-approvals"]').textContent = data.pendingApprovals;
        }
    @endif
}
</script>
@endsection