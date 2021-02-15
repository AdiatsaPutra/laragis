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
                                    <input type="text" class="form-control" id="lattitude">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label for="longtitude" class="form-label">Longtitude</label>
                                    <input type="password" class="form-control" id="longtitude">
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
                    <div wire:ignone id='map' style='width: 100%; height: 80vh;'></div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    const defaultLocation = ['110.32743040296015', '-7.887912013104355'];

    // Initialize Mapbox View
    mapboxgl.accessToken = '{{ env('MAPBOX_KEY') }}';
    var map = new mapboxgl.Map({
        container: 'map',
        center: defaultLocation,
        zoom: 20,
    });

    // Styling Mapbox Map
    const lightMapView = 'light-v10';
    const darkView = 'light-v10';
    const outdoorsMapView = 'outdoors-v11';
    const satelliteView = 'satellite-v9';
    const defaultMapView = 'streets-v11';

    map.setStyle(`mapbox://styles/mapbox/${satelliteView}`);

    // Add Map Controller
    map.addControl(new mapboxgl.NavigationControl())

    // Get Default Location
    map.on('click', (e) => {
        const longtitude = e.lngLat.lng;
        const lattitude = e.lngLat.lat;

        console.log(longtitude, lattitude);
    });
</script>
@endpush