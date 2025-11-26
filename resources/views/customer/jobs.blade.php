<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Requests - FixMyRide</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.svg') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <style>
        .page-wrapper {
            min-height: 100vh;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 80px 0;
        }
        
        .jobs-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .page-header {
            background: white;
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        
        .job-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }
        
        .job-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.12);
        }
        
        .status-badge {
            display: inline-block;
            padding: 8px 20px;
            border-radius: 25px;
            font-weight: 700;
            font-size: 14px;
            text-transform: uppercase;
        }
        
        .status-pending { background: #fff3cd; color: #856404; }
        .status-accepted { background: #d1ecf1; color: #0c5460; }
        .status-in_progress { background: #e7d5f7; color: #6f42c1; }
        .status-completed { background: #d4edda; color: #155724; }
        .status-cancelled { background: #f8d7da; color: #721c24; }
        
        .mechanic-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }
        
        .info-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #555;
        }
        
        .info-item i {
            color: #667eea;
            width: 20px;
        }
        
        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 20px;
        }
        
        .back-btn:hover {
            color: #764ba2;
        }
        
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: #999;
        }
        
        .empty-state i {
            font-size: 64px;
            margin-bottom: 20px;
            color: #ddd;
        }
    </style>
</head>
<body>
    <div class="page-wrapper">
        <div class="jobs-container">
            <a href="{{ route('home') }}" class="back-btn">
                <i class="fa-solid fa-arrow-left"></i> Back to Home
            </a>
            
            <div class="page-header">
                <h1><i class="fa-solid fa-clipboard-list"></i> My Service Requests</h1>
                <p class="mb-0 text-muted">Track your emergency service requests and their status</p>
            </div>

            @if($jobs->isEmpty())
                <div class="job-card">
                    <div class="empty-state">
                        <i class="fa-solid fa-inbox"></i>
                        <h3>No Requests Yet</h3>
                        <p>You haven't made any emergency service requests. Click the SOS button on the map when you need help!</p>
                    </div>
                </div>
            @else
                @foreach($jobs as $job)
                    <div class="job-card">
                        <div class="d-flex justify-content-between align-items-start flex-wrap gap-3">
                            <div>
                                <h3 class="mb-2">
                                    <i class="fa-solid fa-triangle-exclamation text-danger"></i>
                                    {{ $job->problem_type }}
                                </h3>
                                <span class="status-badge status-{{ $job->status }}">
                                    @if($job->status === 'pending')
                                        ⏳ Waiting for Response
                                    @elseif($job->status === 'accepted')
                                        ✅ Accepted by Mechanic
                                    @elseif($job->status === 'in_progress')
                                        🔧 Work in Progress
                                    @elseif($job->status === 'completed')
                                        🎉 Completed
                                    @else
                                        ❌ Cancelled
                                    @endif
                                </span>
                            </div>
                            <div class="text-muted">
                                <small>{{ $job->created_at->format('M d, Y h:i A') }}</small>
                            </div>
                        </div>

                        <div class="mechanic-info">
                            <div class="info-item">
                                <i class="fa-solid fa-building"></i>
                                <span><strong>Garage:</strong> {{ $job->mechanic->garage_name }}</span>
                            </div>
                            <div class="info-item">
                                <i class="fa-solid fa-user"></i>
                                <span><strong>Mechanic:</strong> {{ $job->mechanic->full_name }}</span>
                            </div>
                            <div class="info-item">
                                <i class="fa-solid fa-phone"></i>
                                <span><strong>Phone:</strong> <a href="tel:{{ $job->mechanic->phone_number }}">{{ $job->mechanic->phone_number }}</a></span>
                            </div>
                            <div class="info-item">
                                <i class="fa-solid fa-tools"></i>
                                <span><strong>Specialty:</strong> {{ $job->mechanic->specialty }}</span>
                            </div>
                        </div>

                        @if($job->additional_notes)
                            <div class="mt-3 p-3 bg-light rounded">
                                <strong><i class="fa-solid fa-note-sticky"></i> Your Notes:</strong>
                                <p class="mb-0 mt-2">{{ $job->additional_notes }}</p>
                            </div>
                        @endif

                        @if($job->status === 'accepted')
                            <div class="mt-3 p-3 bg-success bg-opacity-10 rounded">
                                <i class="fa-solid fa-check-circle text-success"></i>
                                <strong>Great news!</strong> The mechanic accepted your request on {{ $job->accepted_at->format('M d, Y h:i A') }}
                            </div>
                        @elseif($job->status === 'completed')
                            <div class="mt-3 p-3 bg-primary bg-opacity-10 rounded">
                                <i class="fa-solid fa-flag-checkered text-primary"></i>
                                <strong>Service completed!</strong> This job was finished on {{ $job->completed_at->format('M d, Y h:i A') }}
                            </div>
                        @elseif($job->status === 'cancelled')
                            <div class="mt-3 p-3 bg-danger bg-opacity-10 rounded">
                                <i class="fa-solid fa-times-circle text-danger"></i>
                                <strong>Request cancelled.</strong> This service request was declined or cancelled.
                            </div>
                        @endif

                        <div class="mt-3">
                            <a href="https://www.google.com/maps?q={{ $job->customer_latitude }},{{ $job->customer_longitude }}" 
                               target="_blank" 
                               class="btn btn-outline-primary btn-sm">
                                <i class="fa-solid fa-map-location-dot"></i> View Your Location
                            </a>
                            <a href="https://www.google.com/maps/dir/{{ $job->customer_latitude }},{{ $job->customer_longitude }}/{{ $job->mechanic->latitude }},{{ $job->mechanic->longitude }}" 
                               target="_blank" 
                               class="btn btn-outline-success btn-sm">
                                <i class="fa-solid fa-route"></i> Get Directions to Garage
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</body>
</html>