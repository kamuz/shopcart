$(function() {

    function showCart(cart){
        $('#cart-modal .cart-modal-content').html(cart);
        $('#cart-modal').modal();

        let catQty = $('#modal-cart-qty').text() ? $('#modal-cart-qty').text() : 0;
        $('#mini-cart-qty').text(catQty);
    }

    $('.card-addtocart').on('click', function(e){
        e.preventDefault();
        let id = $(this).data('id');
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

    $('#get-cart').on('click', function(e){
        e.preventDefault();
        $.ajax({
            url: 'cart.php',
            type: 'GET',
            data: {
                cart: 'show',
            },
            success: function(res){
                showCart(res);
            },
            error: function(res){
                alert('Error');
            }
        })
    });

    $('#cart-modal .cart-modal-content').on('click', '#clear-cart', function(){
        console.log('click');
        $.ajax({
            url: 'cart.php',
            type: 'GET',
            data: {
                cart: 'clear',
            },
            success: function(res){
                showCart(res);
            },
            error: function(res){
                alert('Error');
            }
        })
    });
});