<x-app-layout>
    <div class="container mt-5">
        <h2>Mechanic Registration Details</h2>
        <form method="POST" action="{{ route('mechanic.store') }}">
            @csrf

            <div class="mb-3">
                <label for="shop_name" class="form-label">Garage / Workshop Name</label>
                <input type="text" class="form-control" id="shop_name" name="shop_name" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Contact Number</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-app-layout>
