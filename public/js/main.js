// Cart
$('body').on('click', '.add-to-cart-link', function(e){
    e.preventDefault();
    var id = $(this).data('id'),
        qty = $('.quantity input').val() ? $('.quantity input').val() : 1,
        mod = $('.available select').val();
        // console.log(id, qty, mod);
    $.ajax({
        url:'/cart/add',
        data:{id: id, qty: qty, mod: mod},
        type: 'GET',
        success: function(res){
            showCart(res);
        },error: function(){
            alert('Ошибка! Попробуйте позже');
        }
    })
});

function showCart(cart){
    if($.trim(cart) == '<h3>Корзинаа пуста</h3>'){
        $('#cart .modal-footer a, #cart .modal-footer .btn-danger').css('dysplay', 'none');
    }else{
        $('#cart .modal-footer a, #cart .modal-footer .btn-danger').css('dysplay', 'inline-block');
    }
    $('#cart .modal-body').html(cart);
    $('#cart').modal();
}
// Cart

$('#currency').change(function(){
    window.location = 'currency/change?curr=' + $(this).val();
    // console.log($(this).val());
});

$('.available select').on('change', function(){
    var modId = $(this).val(),
        color = $(this).find('option').filter(':selected').data('title'),
        price = $(this).find('option').filter(':selected').data('price'),
        basePrice =  $('#base-price').data('base');
    if(price){
        $('#base-price').text(symbolLeft + price + symbolRight);
    }else{
        $('#base=price').text(symbolLeft + base + symbolRight);
    }
})