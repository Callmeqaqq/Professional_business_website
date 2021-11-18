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
                var total1 = $('#total-before-shipfee').html();
                var ship = $('#totalship').val();
                console.log(total1);
                $('#total-order').html();
                break;
        }
    });

    // ---------------------DistanceMatrix----------------------------
    var geocoder = new GoongGeocoder({
        accessToken: '6Em1syIO2rI54vIEhIqaXDR69cXg7QW4jaPc2BS1'
    });

    // Add geocoder to input
    geocoder.addTo('#geocoder');
    $('.mapboxgl-ctrl-geocoder--input').on('change', function () {
        geocoder.on('result', function (e) {
            var json = JSON.stringify(e.result, null, 2);
            var obj = JSON.parse(json);
            var latt = obj["result"]["geometry"]["location"]["lat"];
            var long = obj["result"]["geometry"]["location"]["lng"];

            //company lattitude,longtitude
            var lattCompany = $('#latt').val();
            var longCompany = $('#long').val();
            var Url = "https://rsapi.goong.io/DistanceMatrix?origins=" + lattCompany + "," + longCompany + "&destinations=" + latt + "," + long + "&vehicle=car&api_key=6Em1syIO2rI54vIEhIqaXDR69cXg7QW4jaPc2BS1"
            $.ajax({
                async: true,
                url: Url,
                type: 'GET',
                success: function (result) {
                    var kilometers = result['rows'][0]['elements'][0]['distance']['text'];//giá trị cuối của ajax

                    $('#kilo').html(kilometers + " so với vị trí của chúng tôi");
                    $('#shipping-km').html(kilometers);

                    kilometers = kilometers.slice(0, -2);
                    var shipfee = $('#shipfee-km').html();
                    shipfee = shipfee * kilometers;
                    var formatter = new Intl.NumberFormat().format(shipfee);
                    $('#totalship-fee').html(formatter);
                    // total-order
                },
                error: function (error) {
                    console.log(' error ${error}');
                }
            });
        });
    });

    //search map options
    $('.mapboxgl-ctrl-geocoder--input').attr("placeholder", "Nhập địa chỉ của bạn");
    $('.mapboxgl-ctrl-geocoder--input').attr('name', 'Address');
    $('.mapboxgl-ctrl-geocoder--input').attr('required', '');
});
