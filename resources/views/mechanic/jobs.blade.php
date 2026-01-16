<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Job Requests') }}
        </h2>
    </x-slot>

    <style>
        /* Button visibility improvements */
        .btn-action {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border: none;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-action:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-accept {
            background-color: #10b981;
            color: white;
        }

        .btn-accept:hover {
            background-color: #059669;
        }

        .btn-decline {
            background-color: #ef4444;
            color: white;
        }

        .btn-decline:hover {
            background-color: #dc2626;
        }

        .btn-start {
            background-color: #3b82f6;
            color: white;
        }

        .btn-start:hover {
            background-color: #2563eb;
        }

        .btn-complete {
            background-color: #8b5cf6;
            color: white;
        }

        .btn-complete:hover {
            background-color: #7c3aed;
        }

        .btn-contact {
            background-color: #6b7280;
            color: white;
        }

        .btn-contact:hover {
            background-color: #4b5563;
        }

        .btn-back {
            color: #3b82f6;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: color 0.2s ease;
        }

        .btn-back:hover {
            color: #2563eb;
            text-decoration: underline;
        }

        /* Job card improvements */
        .job-card {
            border: 2px solid #e5e7eb;
            border-radius: 0.75rem;
            padding: 1.5rem;
            background: white;
            transition: all 0.3s ease;
        }

        .job-card.pending {
            border-color: #fbbf24;
            background-color: #fffbeb;
        }

        .job-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            border-radius: 9999px;
            font-size: 0.875rem;
            font-weight: 600;
        }

        .new-request {
            color: #ef4444;
            font-weight: 700;
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }

        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: .5;
            }
        }

        .button-group {
            display: flex;
            flex-wrap: wrap;
            gap: 0.75rem;
            margin-top: 1.5rem;
        }

        @media (max-width: 640px) {
            .button-group {
                flex-direction: column;
            }
            
            .btn-action {
                width: 100%;
                justify-content: center;
            }
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-4">
                <a href="{{ route('mechanic.dashboard') }}" class="btn-back">
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
                                <div class="job-card {{ $job->status === 'pending' ? 'pending' : '' }}">
                                    <div class="flex justify-between items-start">
                                        <div class="flex-1">
                                            <div class="flex items-center gap-3 mb-3">
                                                <span class="status-badge
                                                    @if($job->status === 'pending') bg-yellow-200 text-yellow-800
                                                    @elseif($job->status === 'accepted') bg-blue-200 text-blue-800
                                                    @elseif($job->status === 'in_progress') bg-purple-200 text-purple-800
                                                    @elseif($job->status === 'completed') bg-green-200 text-green-800
                                                    @else bg-gray-200 text-gray-800
                                                    @endif">
                                                    {{ ucfirst(str_replace('_', ' ', $job->status)) }}
                                                </span>
                                                @if($job->status === 'pending')
                                                    <span class="new-request">🚨 NEW REQUEST</span>
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
                                                           class="text-blue-500 hover:underline font-semibold">
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
                                    <div class="button-group">
                                        @if($job->status === 'pending')
                                            <button onclick="updateJobStatus({{ $job->id }}, 'accepted')" 
                                                    class="btn-action btn-accept">
                                                <i class="fa-solid fa-check"></i> Accept Job
                                            </button>
                                            <button onclick="updateJobStatus({{ $job->id }}, 'cancelled')" 
                                                    class="btn-action btn-decline">
                                                <i class="fa-solid fa-times"></i> Decline
                                            </button>
                                        @elseif($job->status === 'accepted')
                                            <button onclick="updateJobStatus({{ $job->id }}, 'in_progress')" 
                                                    class="btn-action btn-start">
                                                <i class="fa-solid fa-tools"></i> Start Work
                                            </button>
                                        @elseif($job->status === 'in_progress')
                                            <button onclick="updateJobStatus({{ $job->id }}, 'completed')" 
                                                    class="btn-action btn-complete">
                                                <i class="fa-solid fa-flag-checkered"></i> Mark Complete
                                            </button>
                                        @endif

                                        <a href="tel:{{ $job->customer->email }}" 
                                           class="btn-action btn-contact">
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