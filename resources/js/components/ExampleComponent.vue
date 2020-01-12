<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    
                    <div class="card-body">
                        <div id="realtimemap" style="height:500px;width:700px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
    data(){
        return {
            map:null,
            marker:null,
            data:null,
            center: {lat: 18, lng: 73},
            lineCoordinates: []

        }
    },
    methods: {
        mapInit(){
         this.map = new google.maps.Map(document.getElementById('realtimemap'), {
         center: this.center,
         zoom: 15
         });

         this.marker = new google.maps.Marker({
            map: this.map,
            position: this.center,
            animation: "bounce",
         });
        },

        updateMap(){
            let newPosition = { lat:this.data.lat, lng:this.data.long };
            console.log(newPosition);
            this.map.setCenter(newPosition);
            this.marker.setPosition(newPosition);

            this.lineCoordinates.push(new google.maps.LatLng(newPosition.lat, newPosition.lng));

            var lineCoordinatesPath = new google.maps.Polyline({ 
              path: this.lineCoordinates,
              geodesic: true,
              map: this.true,
              strokeColor: #FF0000,
              strokeOpacity: 1.0,
              strokeWeight: 2
            });
        }
    },

    updateLocation(){
    let randomNumber=Math.random();
        let position = {
            lat:18+randomNumber,
            long:73+randomNumber
        };
        axios.post('/api/map',position).then(response=>{
            console.log(response);
        })
    }
        mounted() {
            console.log('Component mounted.')
            this.mapInit();
            
        },
        created(){
            
            Echo.channel('location')
            .listen('SendPosition', (e) => {
                this.data=e.location;
                this.updateMap();
                console.log(e);
            });
        }
    }
</script>
