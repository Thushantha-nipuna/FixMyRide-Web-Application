<x-app-layout>
    <div class="container mt-5">
        <h2>Spare Parts Seller Registration</h2>
        <form method="POST" action="{{ route('seller.store') }}">
            @csrf

            <div class="mb-3">
                <label for="shop_name" class="form-label">Shop Name</label>
                <input type="text" class="form-control" id="shop_name" name="shop_name" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Shop Location</label>
                <textarea class="form-control" id="location" name="location" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</x-app-layout>
