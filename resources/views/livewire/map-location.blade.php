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
              <label for="longtitude" class="form-label">Nama Lokasi</label>
              <input wire:model="long" type="text" class="form-control" placeholder=" Masukan Nama lokasi">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="mb-1">
              <label for="longtitude" class="form-label">Kategori</label>
              <input wire:model="long" type="text" class="form-control" placeholder=" Masukan Jenis Lokasi">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mb-1">
              <label for="lattitude" class="form-label">RT</label>
              <input wire:model="lat" type="text" class="form-control" placeholder="Masukkan RT">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mb-1">
              <label for="longtitude" class="form-label">RW</label>
              <input wire:model="long" type="text" class="form-control" placeholder="Masukkan RW">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="mb-1">
              <label for="longtitude" class="form-label">Kelurahan</label>
              <input wire:model="long" type="text" class="form-control" placeholder=" Masukan Kelurahan">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="mb-1">
              <label for="longtitude" class="form-label">Kecamatan</label>
              <input wire:model="long" type="text" class="form-control" placeholder=" Masukan Kecamatan">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mb-1">
              <label for="lattitude" class="form-label">PIC 1</label>
              <input wire:model="lat" type="text" class="form-control" placeholder="Masukkan PIC 1">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mb-1">
              <label for="longtitude" class="form-label">Nomor Telepon</label>
              <input wire:model="long" type="text" class="form-control" placeholder="Masukan No Telepon">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mb-1">
              <label for="lattitude" class="form-label">PIC 2</label>
              <input wire:model="lat" type="text" class="form-control" placeholder="Masukkan PIC 2">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="mb-1">
              <label for="longtitude" class="form-label">Nomor Telepon</label>
              <input wire:model="long" type="text" class="form-control" placeholder="Masukan No Telepon">
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

    const geoJson = {
      "type": "FeatureCollection",
      "features": [
        {
          "type": "Feature",
          "geometry": {
            "coordinates": [
              "106.73830754205",
              "-6.2922403995615"
            ],
            "type": "Point"
          },
          "properties": {
            "message": "Mantap",
            "iconSize": [
              50,
              50
            ],
            "locationId": 30,
            "title": "Hello new",
            "image": "1a1eb1e4106fff0cc3467873f0f39cab.jpeg",
            "description": "Mantap"
          }
        },
        {
          "type": "Feature",
          "geometry": {
            "coordinates": [
              "106.68681595869",
              "-6.3292244652013"
            ],
            "type": "Point"
          },
          "properties": {
            "message": "oke mantap Edit",
            "iconSize": [
              50,
              50
            ],
            "locationId": 29,
            "title": "Rumah saya Edit",
            "image": "0ea59991df2cb96b4df6e32307ea20ff.png",
            "description": "oke mantap Edit"
          }
        },
        {
          "type": "Feature",
          "geometry": {
            "coordinates": [
              "106.62490035406",
              "-6.3266855038639"
            ],
            "type": "Point"
          },
          "properties": {
            "message": "Update Baru",
            "iconSize": [
              50,
              50
            ],
            "locationId": 22,
            "title": "Update Baru Gambar",
            "image": "d09444b68d8b72daa324f97c999c2301.jpeg",
            "description": "Update Baru"
          }
        },
        {
          "type": "Feature",
          "geometry": {
            "coordinates": [
              "106.72391468711",
              "-6.3934163494543"
            ],
            "type": "Point"
          },
          "properties": {
            "message": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            "iconSize": [
              50,
              50
            ],
            "locationId": 19,
            "title": "awdwad",
            "image": "f0b88ffd980a764b9fca60d853b300ff.png",
            "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
          }
        },
        {
          "type": "Feature",
          "geometry": {
            "coordinates": [
              "106.67224158205",
              "-6.3884963990263"
            ],
            "type": "Point"
          },
          "properties": {
            "message": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
            "iconSize": [
              50,
              50
            ],
            "locationId": 18,
            "title": "adwawd",
            "image": "4c35cb1b76af09e6205f94024e093fe6.jpeg",
            "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
          }
        },
        {
          "type": "Feature",
          "geometry": {
            "coordinates": [
              "106.74495523289",
              "-6.3642034511073"
            ],
            "type": "Point"
          },
          "properties": {
            "message": "awdwad",
            "iconSize": [
              50,
              50
            ],
            "locationId": 12,
            "title": "adawd",
            "image": "7c8c949fd0499eb50cb33787d680778c.jpeg",
            "description": "awdwad"
          }
        }
      ]
    }
    // Add Marker
    const addMarkers = () => {
        geoJson.features.forEach((location) => {
        const {geometry, properties} = location;
        const {message, iconSize, locationId, title, image, description} = properties;

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

        
        });
    }

    // Call Add Markers
    addMarkers()

</script>
@endpush

