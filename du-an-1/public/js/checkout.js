$(document).ready(function () {
    $('input[type=radio][name=payment_method]').on('change', function () {
        switch ($(this).val()) {
            case '2':
                $('#before').show("payment-box");
                $('#after').hide("payment-box");
                break;
            case '1':
                $('#after').show("payment-box");
                $('#before').hide("payment-box");
                let total1 = $('#total-before-shipfee').html();
                let ship = $('#totalship').val();
                console.log(total1);
                $('#total-order').html();
                break;
        }
    });

    // ---------------------DistanceMatrix----------------------------
    let geocoder = new GoongGeocoder({
        accessToken: '6Em1syIO2rI54vIEhIqaXDR69cXg7QW4jaPc2BS1'
    });
    // Add geocoder to input
    geocoder.addTo('#geocoder');
    $('.mapboxgl-ctrl-geocoder--input').on('change', function () {
        geocoder.on('result', function (e) {
            $('#kilo').html("<b>Đang tính toán...</b>");

            let json = JSON.stringify(e.result, null, 2);
            let obj = JSON.parse(json);
            let city_check = obj['result']['formatted_address'];
            if (city_check === 'Hồ Chí Minh') {
                city_check = 'Nội thành TPHCM';
                let inside_city = 1
                $.ajax({
                    type: 'GET',
                    url: '/get_shipfee/' + inside_city,
                })
                    .done(function (data) {
                        // $('#thecity').val(inside_city);
                        $('#shipfee-km').html(data);
                        $('#city_check').html(city_check);
                        let latt = obj["result"]["geometry"]["location"]["lat"];
                        let long = obj["result"]["geometry"]["location"]["lng"];

                        let lattCompany = $('#latt').val();
                        let longCompany = $('#long').val();
                        let Url = "https://rsapi.goong.io/DistanceMatrix?origins=" + lattCompany + "," + longCompany + "&destinations=" + latt + "," + long + "&vehicle=car&api_key=6Em1syIO2rI54vIEhIqaXDR69cXg7QW4jaPc2BS1"

                        $.ajax({
                            async: true,
                            url: Url,
                            type: 'GET',
                            success: function (result) {
                                let kilometers = result['rows'][0]['elements'][0]['distance']['text'];//giá trị cuối của ajax
                                $('#kilo').html(kilometers + " so với vị trí của chúng tôi");
                                $('#shipping-km').html(kilometers);
                                kilometers = kilometers.slice(0, -2);
                                let shipfee = $('#shipfee-km').html();

                                shipfee = shipfee * kilometers;

                                $('#totalship').val(shipfee);
                                let formatter = new Intl.NumberFormat().format(shipfee);
                                $('#totalship-fee').html(formatter);
                                //session value
                                $.ajax({
                                    type: 'POST',
                                    url: '/set_session',
                                    data: $("#checkout-form").serialize()
                                })
                                    .done(function () {
                                        let subtotal = $('#total-before-shipfee').val();//giá trước khi
                                        let topay = Number(subtotal) + shipfee
                                        topay = new Intl.NumberFormat().format(topay);
                                        $('#total-order').html(topay)
                                    })
                                    .fail(function () {
                                        alert("Lỗi");
                                    });
                                // to prevent refreshing the whole page page
                                return false;
                            },
                            error: function (error) {
                                console.log(' error ${error}');
                            }
                        });
                    })
                    .fail(function () {
                        alert("Lỗi");
                    });
            } else {
                city_check = 'Ngoài khu vực TPHCM';
                let outside_city = 2;
                $.ajax({
                    type: 'GET',
                    url: '/get_shipfee/' + outside_city,
                })
                    .done(function (data) {
                        // $('#thecity').val(outside_city);
                        $('#shipfee-km').html(data);
                        $('#city_check').html(city_check);
                        let latt = obj["result"]["geometry"]["location"]["lat"];
                        let long = obj["result"]["geometry"]["location"]["lng"];

                        let lattCompany = $('#latt').val();
                        let longCompany = $('#long').val();
                        let Url = "https://rsapi.goong.io/DistanceMatrix?origins=" + lattCompany + "," + longCompany + "&destinations=" + latt + "," + long + "&vehicle=car&api_key=6Em1syIO2rI54vIEhIqaXDR69cXg7QW4jaPc2BS1"

                        $.ajax({
                            async: true,
                            url: Url,
                            type: 'GET',
                            success: function (result) {
                                let kilometers = result['rows'][0]['elements'][0]['distance']['text'];//giá trị cuối của ajax
                                $('#kilo').html(kilometers + " so với vị trí của chúng tôi");
                                $('#shipping-km').html(kilometers);
                                kilometers = kilometers.slice(0, -2);
                                let shipfee = $('#shipfee-km').html();

                                shipfee = shipfee * kilometers;
                                if (shipfee > 500000) {
                                    shipfee = 500000
                                }
                                $('#totalship').val(shipfee);
                                let formatter = new Intl.NumberFormat().format(shipfee);
                                $('#totalship-fee').html(formatter);
                                //session value
                                $.ajax({
                                    type: 'POST',
                                    url: '/set_session',
                                    data: $("#checkout-form").serialize()
                                })
                                    .done(function () {
                                        let subtotal = $('#total-before-shipfee').val();//giá trước khi
                                        let topay = Number(subtotal) + shipfee
                                        topay = new Intl.NumberFormat().format(topay);
                                        $('#total-order').html(topay)
                                    })
                                    .fail(function () {
                                        alert("Lỗi");
                                    });
                                // to prevent refreshing the whole page page
                                return false;
                            },
                            error: function (error) {
                                console.log(' error ${error}');
                            }
                        });
                    })
                    .fail(function () {
                        alert("Lỗi");
                    });
            }
        });
    });

    //search map options
    $('.mapboxgl-ctrl-geocoder--input').attr("placeholder", "Nhập địa chỉ của bạn");
    $('.mapboxgl-ctrl-geocoder--input').attr('name', 'Address');
    $('.mapboxgl-ctrl-geocoder--input').attr('id', 'Address');
    $('.mapboxgl-ctrl-geocoder--input').attr('required', '');
});
