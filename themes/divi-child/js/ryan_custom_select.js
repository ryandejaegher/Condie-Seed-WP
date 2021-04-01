document.addEventListener("change", function(event) {
    if (event.target.tagName === "SELECT") {
        getOptionId(event);
    } else if (event.target.classList.contains("input-text")) {
        updateCartQuantity(event.target.value);
    }
});

var getOptionId = function(event) {
    var selectedOption = event.target.selectedIndex;
    var optionData = event.target.options.item(selectedOption).dataset;
    var productID = optionData.productId;
    var productSKU = optionData.productSku;
    var selector = event.target.name.toLowerCase();
    console.log(selectedOption);
    updateCartButton(selector, productID, productSKU);
    console.log(event);
    console.log(selector);
    console.log(productID);
};

var updateCartButton = function(selector, id, sku) {
    var button = document.querySelector(`#${selector}`);
    button.setAttribute("data-product_sku", sku);
    button.setAttribute("data-product_id", id);
    console.log(button);
};

var updateCartQuantity = function(quantity) {
    var inoculant = document.querySelector("#inoculant");
    var primer = document.querySelector("#primer");
    var treatment = document.querySelector("#treatment");
    inoculant.setAttribute("data-quantity", quantity);
    primer.setAttribute("data-quantity", quantity);
    treatment.setAttribute("data-quantity", quantity);
    console.log(inoculant);
    console.log(treatment);
    console.log(primer);
};

console.log("ryan custom select loaded");

var discount = document.querySelector('.discount'); 
var arrow = document.querySelector('.plus');
var minus = document.querySelector('.minus');

document.addEventListener('click', e => {
    if(e.target.matches('.panel-header') || e.target.matches('.panel-title')) { 
      discount.classList.toggle('hide');
      arrow.classList.toggle('hide');
      minus.classList.toggle('hide');
    }
})

console.log('accordion loaded');