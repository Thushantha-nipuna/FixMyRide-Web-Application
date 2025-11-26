<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Your Mechanic Profile - FixMyRide</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.svg') }}" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    
    <!-- All Min Css -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}" />
    
    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    
    <!-- Leaflet for Map -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    
    <style>
        .mechanic-form-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }
        
        .form-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
            padding: 40px;
            margin-bottom: 30px;
        }
        
        .form-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .form-header h2 {
            font-size: 32px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 10px;
        }
        
        .form-header p {
            color: #7f8c8d;
            font-size: 16px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-label {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 10px;
            display: block;
            font-size: 14px;
        }
        
        .form-control, .form-select {
            width: 100%;
            padding: 12px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 15px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            outline: none;
        }
        
        .location-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }
        
        .location-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }
        
        .submit-btn {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            color: white;
            border: none;
            padding: 15px 50px;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 20px;
        }
        
        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(245, 87, 108, 0.4);
        }
        
        .error-message {
            color: #e74c3c;
            font-size: 13px;
            margin-top: 5px;
        }
        
        .success-message {
            background: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            border: 1px solid #c3e6cb;
        }
        
        #locationMap {
            height: 300px;
            border-radius: 10px;
            margin-top: 15px;
            border: 2px solid #e0e0e0;
        }
        
        .coordinate-inputs {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin-top: 15px;
        }
        
        .file-upload-wrapper {
            position: relative;
            overflow: hidden;
            display: inline-block;
            width: 100%;
        }
        
        .file-upload-btn {
            background: #ecf0f1;
            color: #2c3e50;
            padding: 12px 20px;
            border-radius: 10px;
            border: 2px dashed #bdc3c7;
            width: 100%;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .file-upload-btn:hover {
            background: #d5dbdb;
            border-color: #667eea;
        }
        
        .file-upload-wrapper input[type=file] {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            cursor: pointer;
            width: 100%;
            height: 100%;
        }
        
        .back-to-home {
            display: inline-block;
            color: #667eea;
            text-decoration: none;
            margin-bottom: 20px;
            font-weight: 600;
        }
        
        .back-to-home:hover {
            color: #764ba2;
        }
    </style>
</head>
<body>
    <section class="mechanic-form-section">
        <div class="container">
            <a href="{{ route('home') }}" class="back-to-home">
                <i class="fa-solid fa-arrow-left"></i> Back to Home
            </a>
            
            <div class="form-card">
                <div class="form-header">
                    <h2>🔧 Complete Your Mechanic Profile</h2>
                    <p>Fill in your details to start receiving service requests from customers</p>
                </div>

                @if(session('success'))
                    <div class="success-message">
                        <i class="fa-solid fa-check-circle"></i> {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('mechanic.store') }}" enctype="multipart/form-data" id="mechanicForm">
                    @csrf

                    <div class="row">
                        <!-- Full Name -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Full Name *</label>
                                <input type="text" name="full_name" class="form-control" 
                                       value="{{ old('full_name', Auth::user()->name) }}" required>
                                @error('full_name')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Garage Name -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Garage Name *</label>
                                <input type="text" name="garage_name" class="form-control" 
                                       value="{{ old('garage_name') }}" 
                                       placeholder="e.g., Quick Fix Auto Repairs" required>
                                @error('garage_name')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Business Registration Number -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Business Registration Number *</label>
                                <input type="text" name="business_registration_number" class="form-control" 
                                       value="{{ old('business_registration_number') }}" 
                                       placeholder="e.g., BR123456789" required>
                                @error('business_registration_number')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Phone Number *</label>
                                <input type="tel" name="phone_number" class="form-control" 
                                       value="{{ old('phone_number') }}" 
                                       placeholder="+94 XX XXX XXXX" required>
                                @error('phone_number')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Specialty -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Specialty *</label>
                                <select name="specialty" class="form-select" required>
                                    <option value="">-- Select Your Specialty --</option>
                                    <option value="Engine Repair" {{ old('specialty') == 'Engine Repair' ? 'selected' : '' }}>Engine Repair</option>
                                    <option value="Electrical" {{ old('specialty') == 'Electrical' ? 'selected' : '' }}>Electrical Systems</option>
                                    <option value="Brake System" {{ old('specialty') == 'Brake System' ? 'selected' : '' }}>Brake System</option>
                                    <option value="Transmission" {{ old('specialty') == 'Transmission' ? 'selected' : '' }}>Transmission</option>
                                    <option value="AC Repair" {{ old('specialty') == 'AC Repair' ? 'selected' : '' }}>AC Repair</option>
                                    <option value="Tire Services" {{ old('specialty') == 'Tire Services' ? 'selected' : '' }}>Tire Services</option>
                                    <option value="Mobile Mechanic" {{ old('specialty') == 'Mobile Mechanic' ? 'selected' : '' }}>Mobile Mechanic</option>
                                    <option value="General Repair" {{ old('specialty') == 'General Repair' ? 'selected' : '' }}>General Repair</option>
                                </select>
                                @error('specialty')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Available Time -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Available Time *</label>
                                <input type="text" name="available_time" class="form-control" 
                                       value="{{ old('available_time') }}" 
                                       placeholder="e.g., Mon-Fri 8:00 AM - 6:00 PM" required>
                                @error('available_time')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Location Section -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Garage Location *</label>
                                <button type="button" id="getCurrentLocation" class="location-btn">
                                    <i class="fa-solid fa-location-crosshairs"></i>
                                    Get My Current Location
                                </button>
                                <button type="button" id="selectOnMap" class="location-btn" style="margin-left: 10px; background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);">
                                    <i class="fa-solid fa-map-marked-alt"></i>
                                    Select on Map
                                </button>
                                
                                <div id="locationMap" style="display: none;"></div>
                                
                                <div class="coordinate-inputs">
                                    <div>
                                        <label class="form-label">Latitude</label>
                                        <input type="text" name="latitude" id="latitude" class="form-control" 
                                               value="{{ old('latitude') }}" required>
                                        @error('latitude')
                                            <span class="error-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div>
                                        <label class="form-label">Longitude</label>
                                        <input type="text" name="longitude" id="longitude" class="form-control" 
                                               value="{{ old('longitude') }}" required>
                                        @error('longitude')
                                            <span class="error-message">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Photo Upload -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Profile Photo (Optional)</label>
                                <div class="file-upload-wrapper">
                                    <div class="file-upload-btn" id="fileLabel">
                                        <i class="fa-solid fa-cloud-arrow-up"></i>
                                        Click to upload photo
                                    </div>
                                    <input type="file" name="photo" id="photoInput" accept="image/*">
                                </div>
                                @error('photo')
                                    <span class="error-message">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-md-12">
                            <button type="submit" class="submit-btn">
                                <i class="fa-solid fa-check-circle"></i> Complete Registration
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Scripts -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        let map, marker;

        // File upload label update
        document.getElementById('photoInput').addEventListener('change', function(e) {
            const fileName = e.target.files[0]?.name || 'Click to upload photo';
            document.getElementById('fileLabel').innerHTML = '<i class="fa-solid fa-check-circle"></i> ' + fileName;
        });

        // Get current location
        document.getElementById('getCurrentLocation').addEventListener('click', function() {
            if (navigator.geolocation) {
                this.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Getting location...';
                const btn = this;
                
                navigator.geolocation.getCurrentPosition(function(position) {
                    document.getElementById('latitude').value = position.coords.latitude.toFixed(7);
                    document.getElementById('longitude').value = position.coords.longitude.toFixed(7);
                    btn.innerHTML = '<i class="fa-solid fa-check-circle"></i> Location Captured!';
                    
                    setTimeout(() => {
                        btn.innerHTML = '<i class="fa-solid fa-location-crosshairs"></i> Get My Current Location';
                    }, 2000);
                }, function(error) {
                    alert('Error getting location: ' + error.message);
                    btn.innerHTML = '<i class="fa-solid fa-location-crosshairs"></i> Get My Current Location';
                });
            } else {
                alert('Geolocation is not supported by your browser.');
            }
        });

        // Select location on map
        document.getElementById('selectOnMap').addEventListener('click', function() {
            const mapDiv = document.getElementById('locationMap');
            
            if (mapDiv.style.display === 'none') {
                mapDiv.style.display = 'block';
                
                // Initialize map if not already done
                if (!map) {
                    map = L.map('locationMap').setView([7.8731, 80.7718], 8);
                    
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '© OpenStreetMap contributors'
                    }).addTo(map);
                    
                    // Add click event to map
                    map.on('click', function(e) {
                        if (marker) {
                            map.removeLayer(marker);
                        }
                        
                        marker = L.marker([e.latlng.lat, e.latlng.lng]).addTo(map);
                        document.getElementById('latitude').value = e.latlng.lat.toFixed(7);
                        document.getElementById('longitude').value = e.latlng.lng.toFixed(7);
                    });
                }
                
                setTimeout(() => {
                    map.invalidateSize();
                }, 100);
            } else {
                mapDiv.style.display = 'none';
            }
        });

        // Form validation
        document.getElementById('mechanicForm').addEventListener('submit', function(e) {
            const lat = document.getElementById('latitude').value;
            const lng = document.getElementById('longitude').value;
            
            if (!lat || !lng) {
                e.preventDefault();
                alert('Please select your garage location using one of the location buttons.');
                return false;
            }
        });
    </script>
</body>
</html>