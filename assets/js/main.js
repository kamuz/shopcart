$(function() {

    // console.log('Load');

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
                    console.log(res.answer);
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