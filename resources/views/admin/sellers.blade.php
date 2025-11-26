<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approve Sellers - Admin</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
</head>
<body>
    <div class="container mt-5">
        <h2>Pending Seller Approvals</h2>
        
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Shop Name</th>
                    <th>Phone</th>
                    <th>Parts Category</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach(\App\Models\Seller::all() as $seller)
                <tr>
                    <td>{{ $seller->full_name }}</td>
                    <td>{{ $seller->shop_name }}</td>
                    <td>{{ $seller->phone_number }}</td>
                    <td>{{ $seller->parts_category }}</td>
                    <td>
                        @if($seller->is_approved)
                            <span class="badge bg-success">Approved</span>
                        @else
                            <span class="badge bg-warning">Pending</span>
                        @endif
                    </td>
                    <td>
                        @if(!$seller->is_approved)
                            <a href="{{ route('admin.seller.approve', $seller->id) }}" 
                               class="btn btn-success btn-sm">Approve</a>
                        @else
                            <span class="text-muted">Already Approved</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <a href="{{ route('admin.mechanics') }}" class="btn btn-primary mt-3">View Mechanics</a>
        <a href="{{ route('home') }}" class="btn btn-secondary mt-3">Back to Home</a>
    </div>
</body>
</html>