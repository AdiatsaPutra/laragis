<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mb-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form</h4>
                </div>
                <div class="card-body">
                    <p class="card-text">Text</p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form</h4>
                </div>
                <div class="card-body">
                    <div wire:ignone id='map' style='width: 100%; height: 80vh;'></div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    const defaultLocation = ['110.32743040296015', '-7.887912013104355'];

    // Initialize MapBox View
    mapboxgl.accessToken = '{{ env('MAPBOX_KEY') }}';
    var map = new mapboxgl.Map({
        container: 'map',
        center: defaultLocation,
        zoom: 13,
        style: 'mapbox://styles/mapbox/streets-v11'
    });

    // Get Default Location
    map.on('click', (e) => {
        const longtitude = e.lngLat.lng;
        const lattitude = e.lngLat.lat;

        console.log(longtitude, lattitude);
    });
</script>
@endpush