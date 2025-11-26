<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Seller Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if(!$seller->is_approved)
                <div class="mb-4 bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded">
                    ⚠️ Your shop profile is pending admin approval. You'll be visible on the map once approved.
                </div>
            @endif

            <!-- Quick Actions -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <a href="{{ route('profile.edit') }}" class="bg-green-500 text-white p-6 rounded-lg hover:bg-green-600 transition">
                    <h3 class="text-2xl font-bold">Edit Profile</h3>
                    <p class="mt-2">Update your shop information</p>
                </a>
                <a href="{{ route('home') }}" class="bg-purple-500 text-white p-6 rounded-lg hover:bg-purple-600 transition">
                    <h3 class="text-2xl font-bold">View Map</h3>
                    <p class="mt-2">See your location on map</p>
                </a>
                <div class="bg-blue-500 text-white p-6 rounded-lg">
                    <h3 class="text-2xl font-bold">Coming Soon</h3>
                    <p class="mt-2">Manage your inventory</p>
                </div>
            </div>

            <!-- Profile Info -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold mb-4">{{ $seller->shop_name }}</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p><strong>Owner Name:</strong> {{ $seller->full_name }}</p>
                            <p><strong>Phone:</strong> {{ $seller->phone_number }}</p>
                            <p><strong>Parts Category:</strong> {{ $seller->parts_category }}</p>
                            <p><strong>Available:</strong> {{ $seller->available_time }}</p>
                        </div>
                        <div>
                            <p><strong>Business Reg:</strong> {{ $seller->business_registration_number }}</p>
                            <p><strong>Location:</strong> {{ $seller->latitude }}, {{ $seller->longitude }}</p>
                            <p><strong>Status:</strong> 
                                <span class="px-2 py-1 rounded {{ $seller->is_approved ? 'bg-green-200 text-green-800' : 'bg-yellow-200 text-yellow-800' }}">
                                    {{ $seller->is_approved ? 'Approved' : 'Pending' }}
                                </span>
                            </p>
                        </div>
                    </div>

                    @if($seller->photo)
                        <div class="mt-4">
                            <img src="{{ asset('storage/' . $seller->photo) }}" alt="Shop Photo" class="w-32 h-32 rounded-lg object-cover">
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>