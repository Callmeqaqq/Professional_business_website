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
});
