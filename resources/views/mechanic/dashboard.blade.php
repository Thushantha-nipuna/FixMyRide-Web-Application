<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mechanic Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if(!$mechanic->is_approved)
                <div class="mb-4 bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded">
                    ⚠️ Your profile is pending admin approval. You'll be visible on the map once approved.
                </div>
            @endif

            <!-- Quick Actions -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <a href="{{ route('mechanic.jobs') }}" class="bg-blue-500 text-white p-6 rounded-lg hover:bg-blue-600 transition">
                    <h3 class="text-2xl font-bold">View Job Requests</h3>
                    <p class="mt-2">Manage incoming requests</p>
                </a>
                <a href="{{ route('profile.edit') }}" class="bg-green-500 text-white p-6 rounded-lg hover:bg-green-600 transition">
                    <h3 class="text-2xl font-bold">Edit Profile</h3>
                    <p class="mt-2">Update your information</p>
                </a>
                <a href="{{ route('home') }}" class="bg-purple-500 text-white p-6 rounded-lg hover:bg-purple-600 transition">
                    <h3 class="text-2xl font-bold">View Map</h3>
                    <p class="mt-2">See your location on map</p>
                </a>
            </div>

            <!-- Profile Info -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold mb-4">{{ $mechanic->garage_name }}</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p><strong>Full Name:</strong> {{ $mechanic->full_name }}</p>
                            <p><strong>Phone:</strong> {{ $mechanic->phone_number }}</p>
                            <p><strong>Specialty:</strong> {{ $mechanic->specialty }}</p>
                            <p><strong>Available:</strong> {{ $mechanic->available_time }}</p>
                        </div>
                        <div>
                            <p><strong>Business Reg:</strong> {{ $mechanic->business_registration_number }}</p>
                            <p><strong>Location:</strong> {{ $mechanic->latitude }}, {{ $mechanic->longitude }}</p>
                            <p><strong>Status:</strong> 
                                <span class="px-2 py-1 rounded {{ $mechanic->is_approved ? 'bg-green-200 text-green-800' : 'bg-yellow-200 text-yellow-800' }}">
                                    {{ $mechanic->is_approved ? 'Approved' : 'Pending' }}
                                </span>
                            </p>
                        </div>
                    </div>

                    @if($mechanic->photo)
                        <div class="mt-4">
                            <img src="{{ asset('storage/' . $mechanic->photo) }}" alt="Profile Photo" class="w-32 h-32 rounded-lg object-cover">
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>