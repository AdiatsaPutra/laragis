<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mb-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="lattitude" class="form-label">Lattitude</label>
                                    <input wire:model="lat" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="longtitude" class="form-label">Longtitude</label>
                                    <input wire:model="long" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form</h4>
                </div>
                <div class="card-body">
                    <div id='map' style='width: 100%; height: 80vh;'></div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    // Default Lokasi Map
    const defaultLocation = ['110.36774955397762', '-7.824041452653281'];

    // Initialize Mapbox View
    mapboxgl.accessToken = '{{ env('MAPBOX_ACCESS_TOKEN') }}';
    var map = new mapboxgl.Map({
        container: 'map',
        center: defaultLocation,
        zoom: 15,
        
    });

    // Set Map Style
    map.setStyle('mapbox://styles/mapbox/dark-v10');

    // Add Map Controller
    map.addControl(new mapboxgl.NavigationControl());

    // Get Latittude Longitude
    map.on('click', function(e) {
        const latittude = e.lngLat.lat;
        const longitude = e.lngLat.lng;

        @this.lat = latittude;
        @this.long = longitude;
    });
</script>
@endpush