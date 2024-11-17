let map;

function initMap() {

    const sebase= {lat: 24.851419, lng: -80.738007};
    const island = {lat: 24.6218, lng: -81.3929};
    map = new google.maps.Map(document.getElementById("map"), {
    center: sebase,
    zoom: 10
  });

  new google.maps.Marker({
    position: sebase,
    map,
    title: "Welcome to seabase",
  });

  new google.maps.Marker({
    position: island,
    map,
    title:"The island of big munson",
  });
}


window.initMap = initMap;