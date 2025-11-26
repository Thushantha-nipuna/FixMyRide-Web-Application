<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approve Mechanics - Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
</head>
<body>
    <div class="container mt-5">
        <h2>Pending Mechanic Approvals</h2>
        
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Garage</th>
                    <th>Phone</th>
                    <th>Specialty</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach(\App\Models\Mechanic::all() as $mechanic)
                <tr>
                    <td>{{ $mechanic->full_name }}</td>
                    <td>{{ $mechanic->garage_name }}</td>
                    <td>{{ $mechanic->phone_number }}</td>
                    <td>{{ $mechanic->specialty }}</td>
                    <td>
                        @if($mechanic->is_approved)
                            <span class="badge bg-success">Approved</span>
                        @else
                            <span class="badge bg-warning">Pending</span>
                        @endif
                    </td>
                    <td>
                        @if(!$mechanic->is_approved)
                            <a href="{{ route('admin.mechanic.approve', $mechanic->id) }}" 
                               class="btn btn-success btn-sm">Approve</a>
                        @else
                            <span class="text-muted">Already Approved</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>