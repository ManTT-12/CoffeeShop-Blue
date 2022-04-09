$("#manager .item-qty-plus").on('click', function () {
    let qtySelector = $(this).siblings('.item-amount');
    let currentQty = parseInt(qtySelector.val());
    qtySelector.val(currentQty + 1);
})

$("#manager .item-qty-minius").on('click', function () {
    let qtySelector = $(this).siblings('.item-amount');
    let currentQty = parseInt(qtySelector.val());
    if (currentQty <= 0) return;
    qtySelector.val(currentQty - 1);
})

$('#cart-empty, #cart-update, #cart-checkout, #manager .item-button-remove').on('click', function () {
    $('#cart-empty, #cart-update, #cart-checkout, #manager .item-button-remove').attr('disabled', true);
});

function removeProduct(coffeeId)
{
    const data = {
        action: 'remove-product',
        data: coffeeId
    }
    $('#manager').load('cart.php', data);
}

function cartUpdate()
{
    const formData = new FormData($("#cart-form")[0]);
    const coffeeListId = [];
    for(let pair of formData.entries()) {
        const id = pair[0].replace('coffee-id-', '');
        const qty = pair[1];
        coffeeListId.push({id: id, qty: qty});
    }

    const data = {
        action: 'update-cart', 
        data: coffeeListId
    }
    $('#manager').load('cart.php', data);
}

function emptyCart()
{
    const data = {
        action: 'empty-cart', 
    }
    $('#manager').load('cart.php', data);
}