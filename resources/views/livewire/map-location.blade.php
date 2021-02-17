<div class="container-fluid">
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
                            <input wire:model="long" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-1">
                            <label for="longtitude" class="form-label">Jenis Lokasi</label>
                            <input wire:model="long" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-1">
                            <label for="longtitude" class="form-label">PIC 1</label>
                            <input wire:model="long" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-1">
                            <label for="longtitude" class="form-label">PIC 2</label>
                            <input wire:model="long" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-1">
                            <label for="longtitude" class="form-label">Nomor Telepon</label>
                            <input wire:model="long" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-1">
                            <label for="longtitude" class="form-label">Nama Surveyor</label>
                            <input wire:model="long" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-1">
                            <label for="longtitude" class="form-label">Tanggal Disurvey</label>
                            <input wire:model="tgl" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button class="btn btn-primary btn-block mt-3" type="button">Button</button>
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

    // Get Date Now
    arrbulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
    date = new Date();
    millisecond = date.getMilliseconds();
    detik = date.getSeconds();
    menit = date.getMinutes();
    jam = date.getHours();
    hari = date.getDay();
    tanggal = date.getDate();
    bulan = date.getMonth();
    tahun = date.getFullYear();

    // Fill Date Field
    window.addEventListener('load', function() {
    const tanggalFormatted = tanggal+" "+arrbulan[bulan]+" "+tahun;
    console.log(tanggalFormatted);
    @this.tgl = tanggalFormatted;
    });
</script>
@endpush