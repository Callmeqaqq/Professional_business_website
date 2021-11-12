$(document).ready(function() {
    var submit = $(".product-action-btn-2");

    submit.click(function(e) {
        e.preventDefault();

        var box = e.target.parentNode.parentNode.parentNode;
        var nameProd = box.lastElementChild.firstElementChild.firstElementChild;
        var slug = nameProd.getAttribute('href');
        // var imageProd = box.firstElementChild.firstElementChild;

        $.ajax({
            type : 'GET',
            url  : 'add-cart/'+slug,
        }).done(function (response) {

        });
    });
});
