var plus = document.querySelector(".item-qty-plus");
var minus = document.querySelector(".item-qty-minius");
var qty = document.querySelector(".item-amount");
let count = 1;

plus.onclick = () => {
    count++;
    console.log(count);
    qty.value = count;
}
minus.onclick = () => {
    if (count == 0) return;
    count--;
    console.log(count);
    qty.value = count;
}