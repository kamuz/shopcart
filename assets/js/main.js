$(function() {

    // console.log('Load');

    function showCart(cart){
        $('#cart-modal .cart-modal-content').html(cart);
        $('#cart-modal').modal();

        let catQty = $('#modal-cart-qty').text() ? $('#modal-cart-qty').text() : 0;
        console.log(catQty);
        $('#mini-cart-qty').text(catQty);
    }

    $('.card-addtocart').on('click', function(e){
        e.preventDefault();
        // console.log('Click');
        let id = $(this).data('id');
        console.log(id);
        $.ajax({
            url: 'cart.php',
            type: 'GET',
            data: {
                cart: 'add',
                id: id
            },
            dataType: 'json',
            success: function(res){
                if(res.code === 'ok') {
                    showCart(res.answer);
                } else {
                    console.log(res.answer);
                }
            },
            error: function(res){
                alert('Error');
            }
        })
    });
});