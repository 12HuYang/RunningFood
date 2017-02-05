function httpGetAsync(theUrl, callback) {
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function () {
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
            callback(xmlHttp.responseText);
    }
    xmlHttp.open("GET", theUrl, true); // true for asynchronous 
    xmlHttp.send(null);
}

function translateStringToCoordinates(addressInString, callback){
    httpGetAsync("https://maps.googleapis.com/maps/api/geocode/json?address=" + 
        addressInString + "&key=AIzaSyCcEeyb3kXOHpTYQshMKbL2i6c0qWTMExo", callback);
}

function fsubmit() {
    var address = document.getElementById("searchLocation").value;
    var arrayOfStrings = address.split(',');
    var allFloat = false;
    if (arrayOfStrings.length === 2) {
        var lat1 = parseFloat(arrayOfStrings[0]);
        var lgn1 = parseFloat(arrayOfStrings[1]);
        if (lat1 != undefined && lat1 != NaN && lgn1 != undefined && lgn1 != NaN)
            allFloat = true;
    }
    if (!allFloat) {
        httpGetAsync("https://maps.googleapis.com/maps/api/geocode/json?address=" + 
        address + "&key=AIzaSyCcEeyb3kXOHpTYQshMKbL2i6c0qWTMExo", fsubmitCoordinate);
    }
    return false;
}

function fsubmitCoordinate(addressIncoordinatesInJSON){
    $.ajax({
        url: 'server.php',
        type: 'POST',
        data: addressIncoordinatesInJSON,
        dataType: 'JSON',
        cache: false,
        processData: false,
        contentType: false
    }).done(function (ret) {
        if (ret['isSuccess']) {
            //
        } else {
            //alert('提交失敗');
        }
    });
    return false;
}