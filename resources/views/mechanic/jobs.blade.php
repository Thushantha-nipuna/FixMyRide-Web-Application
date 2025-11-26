<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Job Requests') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4">
                <a href="{{ route('mechanic.dashboard') }}" class="text-blue-500 hover:underline">
                    ← Back to Dashboard
                </a>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-4">Emergency Job Requests</h3>

                    @if($jobs->isEmpty())
                        <p class="text-gray-500 text-center py-8">No job requests yet. They will appear here when customers send emergency requests.</p>
                    @else
                        <div class="space-y-4">
                            @foreach($jobs as $job)
                                <div class="border rounded-lg p-6 {{ $job->status === 'pending' ? 'border-yellow-400 bg-yellow-50' : 'border-gray-200' }}">
                                    <div class="flex justify-between items-start">
                                        <div class="flex-1">
                                            <div class="flex items-center gap-3 mb-3">
                                                <span class="px-3 py-1 rounded-full text-sm font-semibold
                                                    @if($job->status === 'pending') bg-yellow-200 text-yellow-800
                                                    @elseif($job->status === 'accepted') bg-blue-200 text-blue-800
                                                    @elseif($job->status === 'in_progress') bg-purple-200 text-purple-800
                                                    @elseif($job->status === 'completed') bg-green-200 text-green-800
                                                    @else bg-gray-200 text-gray-800
                                                    @endif">
                                                    {{ ucfirst($job->status) }}
                                                </span>
                                                @if($job->status === 'pending')
                                                    <span class="text-red-500 font-bold animate-pulse">🚨 NEW REQUEST</span>
                                                @endif
                                            </div>

                                            <h4 class="text-xl font-bold mb-2">
                                                <i class="fa-solid fa-triangle-exclamation text-red-500"></i>
                                                {{ $job->problem_type }}
                                            </h4>

                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 text-gray-700">
                                                <div>
                                                    <p><strong><i class="fa-solid fa-user"></i> Customer:</strong> {{ $job->customer->name }}</p>
                                                    <p><strong><i class="fa-solid fa-envelope"></i> Email:</strong> {{ $job->customer->email }}</p>
                                                    <p><strong><i class="fa-solid fa-clock"></i> Requested:</strong> {{ $job->created_at->diffForHumans() }}</p>
                                                </div>
                                                <div>
                                                    <p><strong><i class="fa-solid fa-location-dot"></i> Location:</strong> 
                                                        <a href="https://www.google.com/maps?q={{ $job->customer_latitude }},{{ $job->customer_longitude }}" 
                                                           target="_blank" 
                                                           class="text-blue-500 hover:underline">
                                                            View on Map
                                                        </a>
                                                    </p>
                                                    @if($job->customer_location)
                                                        <p><strong>Address:</strong> {{ $job->customer_location }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            @if($job->additional_notes)
                                                <div class="mt-3 p-3 bg-gray-100 rounded">
                                                    <strong>Additional Notes:</strong>
                                                    <p class="mt-1">{{ $job->additional_notes }}</p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- Action Buttons -->
                                    <div class="mt-4 flex gap-2">
                                        @if($job->status === 'pending')
                                            <button onclick="updateJobStatus({{ $job->id }}, 'accepted')" 
                                                    class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
                                                <i class="fa-solid fa-check"></i> Accept Job
                                            </button>
                                            <button onclick="updateJobStatus({{ $job->id }}, 'cancelled')" 
                                                    class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                                                <i class="fa-solid fa-times"></i> Decline
                                            </button>
                                        @elseif($job->status === 'accepted')
                                            <button onclick="updateJobStatus({{ $job->id }}, 'in_progress')" 
                                                    class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                                <i class="fa-solid fa-tools"></i> Start Work
                                            </button>
                                        @elseif($job->status === 'in_progress')
                                            <button onclick="updateJobStatus({{ $job->id }}, 'completed')" 
                                                    class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">
                                                <i class="fa-solid fa-flag-checkered"></i> Mark Complete
                                            </button>
                                        @endif

                                        <a href="tel:{{ $job->customer->email }}" 
                                           class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                                            <i class="fa-solid fa-phone"></i> Contact Customer
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateJobStatus(jobId, status) {
            if (!confirm(`Are you sure you want to ${status} this job?`)) {
                return;
            }

            fetch(`/mechanic/jobs/${jobId}/status`, {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ status: status })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert(data.message);
                    location.reload();
                } else {
                    alert('Failed to update status. Please try again.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred. Please try again.');
            });
        }
    </script>
</x-app-layout>