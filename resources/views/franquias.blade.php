@extends('layout_fixo')
@section('styles')
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
@endsection
@section('content')
<section id="call-action" class="col-content stripe-bg page-internal sobre-empresa pb-40">
    <div class="container-fluid m-5-hor">
     <div class="row">
  
               
  
                <div class="col-md-12 onStep text-center" data-animation="fadeIn" data-time="500">
                  <div class="sp-padding prod-title">
                    <h2>Fale Conosco</h2>
                  </div>   
                </div>
             
                          
     </div>
    </div>
   </section>

   <!-- section contact -->
   <section aria-label="contact" class="whitepage">
    <div class="container-fluid m-5-hor">
      <div class="row">
        <div class="col-md-12">
            <div id="map"></div>
        </div>
      </div>
    </div>
    </section>
    <!-- end section contact -->


@endsection

@section('scripts')
<script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqEJ0Nd23GIqelve2DutuH0hMC_OfkGOs&callback=initMap&v=weekly"
defer
></script>

<script>
    // Initialize and add the map
function initMap() {
  // The location of Uluru
  
  const ivoti = { lat: -29.59541752332394, lng: -51.13654586031618 };
  const sao_paulo = { lat: -23.5505199, lng: -46.6333094 };
    const curitiba = { lat: -25.4284, lng: -49.2733 };
    const manaus = { lat: -3.1019, lng: -60.0250 };
  const brasilia = { lat: -15.794228, lng: -47.882165 };
  
  // The map, centered at ivoti
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 4,
    center: brasilia,
  });
  // The marker, positioned at ivoti
  const marker = new google.maps.Marker({
    position: ivoti,
    map: map,
    // add a text on click
    title: "Villaggio"
  });

    const marker2 = new google.maps.Marker({
        position: sao_paulo,
        map: map,
    });

    const marker3 = new google.maps.Marker({
        position: curitiba,
        map: map,
    });

    const marker4 = new google.maps.Marker({
        position: manaus,
        map: map,
    });
}

window.initMap = initMap;
</script>
@endsection