<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approve Mechanics - Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <style>
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
            --dark: #1f2937;
            --light: #f9fafb;
        }
        
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            padding: 2rem 0;
        }
        
        .admin-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 3rem;
            margin: 0 auto;
            max-width: 1200px;
        }
        
        .header-section {
            display: flex;
            align-items: center;
            margin-bottom: 2.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 2px solid #e5e7eb;
        }
        
        .header-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1.5rem;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
        }
        
        .header-icon i {
            color: white;
            font-size: 28px;
        }
        
        .header-title h2 {
            margin: 0;
            color: var(--dark);
            font-weight: 700;
            font-size: 2rem;
        }
        
        .header-title p {
            margin: 0;
            color: #6b7280;
            font-size: 0.95rem;
        }
        
        .alert {
            border: none;
            border-radius: 12px;
            padding: 1rem 1.5rem;
            margin-bottom: 2rem;
            animation: slideDown 0.3s ease;
        }
        
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .table-container {
            background: #f9fafb;
            border-radius: 15px;
            padding: 1.5rem;
            overflow: hidden;
        }
        
        .table {
            margin: 0;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .table thead {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
        }
        
        .table thead th {
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            padding: 1.2rem 1rem;
            border: none;
        }
        
        .table tbody tr {
            transition: all 0.3s ease;
            border-bottom: 1px solid #f3f4f6;
        }
        
        .table tbody tr:hover {
            background: #f9fafb;
            transform: translateX(5px);
            box-shadow: -5px 0 0 var(--primary);
        }
        
        .table tbody td {
            padding: 1.2rem 1rem;
            vertical-align: middle;
            color: #374151;
            font-size: 0.95rem;
        }
        
        .badge {
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.8rem;
            letter-spacing: 0.3px;
        }
        
        .badge.bg-success {
            background: linear-gradient(135deg, #10b981, #059669) !important;
            box-shadow: 0 2px 10px rgba(16, 185, 129, 0.3);
        }
        
        .badge.bg-warning {
            background: linear-gradient(135deg, #f59e0b, #d97706) !important;
            box-shadow: 0 2px 10px rgba(245, 158, 11, 0.3);
        }
        
        .btn {
            border-radius: 8px;
            padding: 0.5rem 1.2rem;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            font-size: 0.9rem;
        }
        
        .btn-success {
            background: linear-gradient(135deg, var(--success), #059669);
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        }
        
        .btn-success:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
        }
        
        .text-muted {
            color: #9ca3af !important;
            font-style: italic;
        }
        
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            color: #9ca3af;
        }
        
        .empty-state i {
            font-size: 4rem;
            margin-bottom: 1rem;
            opacity: 0.3;
        }
        
        .stats-badge {
            display: inline-block;
            background: #fef3c7;
            color: #92400e;
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-left: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="admin-container">
            <div class="header-section">
                <div class="header-icon">
                    <i class="fas fa-wrench"></i>
                </div>
                <div class="header-title">
                    <h2>
                        Mechanic Approvals
                        <span class="stats-badge">{{ \App\Models\Mechanic::where('is_approved', false)->count() }} Pending</span>
                    </h2>
                    <p>Review and approve mechanic registrations</p>
                </div>
            </div>
            
            @if(session('success'))
                <div class="alert alert-success">
                    <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                </div>
            @endif
            
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th><i class="fas fa-user me-2"></i>Name</th>
                            <th><i class="fas fa-warehouse me-2"></i>Garage</th>
                            <th><i class="fas fa-phone me-2"></i>Phone</th>
                            <th><i class="fas fa-tools me-2"></i>Specialty</th>
                            <th><i class="fas fa-info-circle me-2"></i>Status</th>
                            <th><i class="fas fa-bolt me-2"></i>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse(\App\Models\Mechanic::all() as $mechanic)
                        <tr>
                            <td><strong>{{ $mechanic->full_name }}</strong></td>
                            <td>{{ $mechanic->garage_name }}</td>
                            <td>{{ $mechanic->phone_number }}</td>
                            <td>{{ $mechanic->specialty }}</td>
                            <td>
                                @if($mechanic->is_approved)
                                    <span class="badge bg-success">
                                        <i class="fas fa-check me-1"></i>Approved
                                    </span>
                                @else
                                    <span class="badge bg-warning">
                                        <i class="fas fa-clock me-1"></i>Pending
                                    </span>
                                @endif
                            </td>
                            <td>
                                @if(!$mechanic->is_approved)
                                    <a href="{{ route('admin.mechanic.approve', $mechanic->id) }}" 
                                       class="btn btn-success btn-sm">
                                        <i class="fas fa-check me-1"></i>Approve
                                    </a>
                                @else
                                    <span class="text-muted">
                                        <i class="fas fa-check-double me-1"></i>Approved
                                    </span>
                                @endif
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">
                                <div class="empty-state">
                                    <i class="fas fa-inbox"></i>
                                    <h4>No Mechanics Found</h4>
                                    <p>There are no mechanic registrations at the moment.</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>