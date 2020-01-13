

      navigator.geolocation.getCurrentPosition(function(position, html5Error) {

            var html5Lat = position.coords.latitude; //Get latitude
            console.log("nhgfvdhn");
            console.log(html5Lat);

            var html5Lon = position.coords.longitude; //Get longitude
            // var html5TimeStamp = position.timestamp; //Get timestamp
            // var html5Accuracy = position.coords.accuracy; //Get accuracy in meters
            return {
                  html5Lat: html5Lat, 
                  html5Lon: html5Lon
            }; 
      });


// function processGeolocationResult(position) {
//       var html5Lat = position.coords.latitude; //Get latitude
//       console.log(html5Lat);

//       var html5Lon = position.coords.longitude; //Get longitude
//       // var html5TimeStamp = position.timestamp; //Get timestamp
//       // var html5Accuracy = position.coords.accuracy; //Get accuracy in meters
//       return {
//             html5Lat: html5Lat, 
//             html5Lon: html5Lon
//         }; 
// }
       //Check value is present or not & call google api function
       
      //  const data = [{ lat: 15, lon: 20 }
      //  ]
export default getCurrentPosition;
