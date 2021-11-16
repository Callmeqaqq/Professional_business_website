$(document).ready(function() {
    $(".product-action-btn-2").click(function(e) {
        e.preventDefault();

        // var box = e.target.parentNode.parentNode.parentNode;
        // var nameProd = box.lastElementChild.firstElementChild.firstElementChild;
        // var slug = nameProd.getAttribute('slug');

        var slug = e.target.getAttribute('slug');

        $.ajax({
            type : 'GET',
            url  : '../add-cart/'+slug,
        }).done(function (response) {
            RenderCart(response);
            // alert('Đã thêm sản phẩm vào giỏ hàng!');
        });
    });

    $(".btn-delete-item-cart").click(function(e) {
        e.preventDefault();

        // var box = e.target.parentNode.parentNode.parentNode;
        // var slug = box.children[1].firstElementChild.firstElementChild.getAttribute('slug');
        var slug = e.target.getAttribute('slug');

        $.ajax({
            type : 'GET',
            url  : '../delete-item-cart/'+slug,
        }).done(function (response) {
            RenderCart(response);
        });
    });

    $(".btn-delete-cart").click(function(e) {
        e.preventDefault();

        // var box = e.target.parentNode.parentNode.parentNode;
        // var slug = box.children[1].firstElementChild.firstElementChild.getAttribute('slug');
        var slug = e.target.getAttribute('slug');

        $.ajax({
            type : 'GET',
            url  : 'delete-all-cart',
        }).done(function (response) {
            RenderCart(response);
        });
    });

    function RenderCart(response) {
        $('#list-cart').empty();
        $('#list-cart').html(response);
        $('#total-quantity-show').text($('#total-quantity-cart').val());
    }
});
