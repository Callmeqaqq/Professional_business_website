$(document).ready(function() {
    var btnAddToCart = $(".product-action-btn-2");
    var btnDeleteItemCart = $(".ti-trash");

    btnAddToCart.click(function(e) {
        e.preventDefault();

        var box = e.target.parentNode.parentNode.parentNode;
        var nameProd = box.lastElementChild.firstElementChild.firstElementChild;
        var slug = nameProd.getAttribute('slug');

        $.ajax({
            type : 'GET',
            url  : 'add-cart/'+slug,
        }).done(function (response) {
            // alert('Đã thêm sản phẩm vào giỏ hàng!');
            // $("#cart-main").html(response);
        });
    });

    btnDeleteItemCart.click(function(e) {
        e.preventDefault();

        var box = e.target.parentNode.parentNode.parentNode;
        var slug = box.children[1].firstElementChild.firstElementChild.getAttribute('slug');
        console.log([box]);

        $.ajax({
            type : 'GET',
            url  : 'delete-item-cart/'+slug,
        }).done(function (response) {
            if (response) {
                // alert('Xóa thành công!');
            } else {
                // alert('Thất bại!');
            }
        });
    });
});
