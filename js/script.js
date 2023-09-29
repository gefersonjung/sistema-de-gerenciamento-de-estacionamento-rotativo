//Mapa Stacione


class OverlayMap {
    constructor(tileSize){
        this.tileSize = tileSize;       
    }
    getTile(coord, zoom, ownerDocument){
        var div = ownerDocument.createElement('div');
        div.style.width = this.tileSize.width+'px';
        div.style.height = this.tileSize.height+'px';
        div.style.fontSize = '10px'; 
        div.style.borderStyle = 'solid';
        div.style.borderWidth = '1px';
        div.style.borderColor = '#333';      
        return div;
    }
}
showMap = () => {
    const map = new google.maps.Map(document.getElementById('editor'), {
       center: { lat: -7.2245007, lng: -35.8798429}, zoom: 8
    });
}
const editor = document.getElementById('editor');
showPaineEditor = () => {
    const painel = new google.maps.Map(document.getElementById('painel-editor'), {
       center: { lat: -7.2245007, lng: -35.8798429}, zoom: 8
    });
}
const painel_editor = document.getElementById('painel-editor');

var map;
    function initMap() {
        var mapOptions = {
            center: {lat:-29.462076, lng: -51.966669},
            zoom: 15,
            styles: [
                {
                    featureType: 'poi',
                    stylers:[
                        {visibility: 'off'}
                    ]
                }
            ]                  
        };
       map = new google.maps.Map(document.getElementById('map'),mapOptions);        
        
       map.controls[google.maps.ControlPosition.TOP_CENTER].push(editor);  
       map.controls[google.maps.ControlPosition.TOP_RIGHT].push(painel_editor);   
    }
      
