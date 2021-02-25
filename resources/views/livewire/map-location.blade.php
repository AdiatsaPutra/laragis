<div class="container">
  <div class="row">
    <div class="col-md-4 mb-5">
      <form>
        <div class="row">
          <div class="col-sm-6">
            <div class="mb-1">
              <label for="lattitude" class="form-label">Lattitude</label>
              <input wire:model="lat" type="text" class="form-control" placeholder="Masukkan Lattitude">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mb-1">
              <label for="longtitude" class="form-label">Longtitude</label>
              <input wire:model="long" type="text" class="form-control" placeholder="Masukkan Longtitude">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="mb-1">
              <label class="form-label">Nama Lokasi</label>
              <input type="text" class="form-control" placeholder=" Masukan Nama lokasi">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="mb-1">
              <label class="form-label">Kategori</label>
              <input type="text" class="form-control" placeholder=" Masukan Jenis Lokasi">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mb-1">
              <label class="form-label">RT</label>
              <input type="text" class="form-control" placeholder="Masukkan RT">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mb-1">
              <label class="form-label">RW</label>
              <input type="text" class="form-control" placeholder="Masukkan RW">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="mb-1">
              <label class="form-label">Kelurahan</label>
              <input type="text" class="form-control" placeholder=" Masukan Kelurahan">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="mb-1">
              <label class="form-label">Kecamatan</label>
              <input type="text" class="form-control" placeholder=" Masukan Kecamatan">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mb-1">
              <label class="form-label">PIC 1</label>
              <input type="text" class="form-control" placeholder="Masukkan PIC 1">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mb-1">
              <label class="form-label">Nomor Telepon</label>
              <input type="text" class="form-control" placeholder="Masukan No Telepon">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mb-1">
              <label class="form-label">PIC 2</label>
              <input type="text" class="form-control" placeholder="Masukkan PIC 2">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mb-1">
              <label class="form-label">Nomor Telepon</label>
              <input type="text" class="form-control" placeholder="Masukan No Telepon">
            </div>
          </div>
          <div class="col-sm-12">
            @guest
            @if (Route::has('login'))
            @endif
            @if (Route::has('register'))
            @endif
            @else
            <div class="mb-1">
              <label for="longtitude" class="form-label">Nama Surveyor</label>
              <input type="text" class="form-control" value="{{ Auth::user()->name }}">
            </div>
            @endguest
          </div>
          <div class="col-sm-12">
            <div class="mb-1">
              <label for="longtitude" class="form-label">Tanggal Disurvey</label>
              <input wire:model="tgl" type="date" class="form-control">
            </div>
          </div>
          <div class="col-sm-12">
            <button class="btn btn-primary btn-block mt-3" type="button">Submit</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8">
      <div id='map' style='width: 100%; height: 80vh;'></div>
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
    map.setStyle('mapbox://styles/mapbox/satellite-streets-v11');

    // Add Map Controller
    map.addControl(new mapboxgl.NavigationControl());

    // Get Latittude Longitude
    map.on('click', function(e) {
        const latittude = e.lngLat.lat;
        const longitude = e.lngLat.lng;

        @this.lat = latittude;
        @this.long = longitude;
    });

    // Add Marker
    const addMarkers = () => {

        // Create a marker
        var el = document.createElement('div');
        el.className = 'marker' + locationId;
        el.id = locationId;
        el.style.backgroundImage = 'url(https://cdn0.iconfinder.com/data/icons/small-n-flat/24/678111-map-marker-512.png)';
        el.style.backgroundSize = 'cover';
        el.style.width = '50px';
        el.style.height = '50px';

        // Add to the map
        new mapboxgl.Marker(el)
        .setLngLat(defaultLocation)
        .addTo(map);

        
        };
    

    // Call Add Markers
    addMarkers()

</script>
@endpush