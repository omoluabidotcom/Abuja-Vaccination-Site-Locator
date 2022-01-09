@extends('../layouts.copy')

@section('content')

    <div id="map" ></div>

        <script>

            var gen = @json($main);

            var markerFirst = [];
            var res = Object.values(gen);

            for (const ite of res) {
                
                markerFirst.push(ite);
            }

            var markerSec = []
            for (let i = 0; i < markerFirst.length; i++) {

                markerSec.push(markerFirst[i]['data'])
            } 

            // console.log(markerSec);
        </script>

        <script>

            function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                center:{lat: 9.0765, lng: 7.3986}, 
                zoom:14
            })

            function addMarker(params) {
                
                var marker = new google.maps.Marker({
                position:params.cords,
                map:map,    
            });


                if(params.iconImage) {

                    marker.setIcon(params.iconimage)
                }


                if(params.content) {

                    var InfoWindow = new google.maps.InfoWindow({
                        content:params.content
                    });

                    marker.addListener('click', function(){

                        InfoWindow.open(map, marker)
                    });
                }
            
            }


                var marker = []            ;
                for(i = 0; i < markerSec.length; i++) {

                    marker.push({
                        cords: {lat: markerSec[i]['lat'], lng: markerSec[i]['lng']},
                        content: "<h1>" + markerSec[i]['sitename'] + "</h1>"
                        // iconImage: "https://drive.google.com/file/d/1gJcj169SSSVP0gVq9QJWBJzjNDzdiKKh/view?usp=sharing"
                    })
                }

                for(j = 0; j < marker.length; j++) { 
                    
                    addMarker(marker[j])
            }
        }
        </script>

        <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaW-bVgN8vpXVNU1qG207LMFT87eXr7jM&callback=initMap">
        </script>
        <h2 class="flex justify-center bg-black text-white mt-20"> Built with love from Yahaya <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg> <h2>
@endsection