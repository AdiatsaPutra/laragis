<div id='map' style='width: 100%; height: 800px;'></div>

@push('scripts')
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiYWRpYXRzYSIsImEiOiJja2w1eWhlOXMxcHdxMnBvZXVkcmhnaXF6In0.kZ56zJwTnSp0r5VH3cIKEg';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11'
    });
</script>
@endpush