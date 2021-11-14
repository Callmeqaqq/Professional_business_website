$(document).ready(function () {
    $('input[type=radio][name=payment_method]').on('change', function () {
        switch ($(this).val()) {
            case 'before':
                $('#before').show("payment-box");
                $('#after').hide("payment-box");
                break;
            case 'after':
                $('#after').show("payment-box");
                $('#before').hide("payment-box");
                break;
        }
    });

    // ---------------------DistanceMatrix----------------------------
    //company lattitude,longtitude
    var geocoder = new GoongGeocoder({
        accessToken: '6Em1syIO2rI54vIEhIqaXDR69cXg7QW4jaPc2BS1'
    });
    geocoder.addTo('#geocoder');

    // Get the geocoder results container.
    var results = document.getElementById('result');

    $('.mapboxgl-ctrl-geocoder--input').on('change', function () {
        // Add geocoder result to container.
        geocoder.on('result', function (e) {
            var json = JSON.stringify(e.result, null, 2);
            // chuyển json thành mảng js
            var obj = JSON.parse(json);
            var latt = obj["result"]["geometry"]["location"]["lat"];
            var long = obj["result"]["geometry"]["location"]["lng"];
            $('#latt_user').val(latt);
            $('#long_user').val(long);
            var lattCompany = $('#latt').val();
            var longCompany = $('#long').val();
            console.log(latt);
            var Url = "https://rsapi.goong.io/DistanceMatrix?origins=" + lattCompany + "," + longCompany + "&destinations=" + latt + "," + long + "&vehicle=car&api_key=6Em1syIO2rI54vIEhIqaXDR69cXg7QW4jaPc2BS1"
            $.ajax({
                async: true,
                url: Url,
                type: 'GET',
                success: function (result) {
                    var json = JSON.stringify(result, null, 2);
                    var obj = JSON.parse(json);
                    var kilometers = obj['rows'][0]['elements'][0]['distance']['text'];
                    // kilometers = kilometers.slice(0, -3);
                    $('#kilo').html(kilometers + " so với vị trí của chúng tôi");
                    $('#shipping-km').html(kilometers);
                },
                error: function (error) {
                    console.log(' error ${error}');
                }
            });
        });

        // Clear results container when search is cleared.
        geocoder.on('clear', function () {
            results.innerText = '';
        });

        //search map options
        $('.mapboxgl-ctrl-geocoder--input').attr("placeholder", "Nhập địa chỉ của bạn");
    });
});
