document.addEventListener('DOMContentLoaded', function () {
    const inputs = document.querySelectorAll('input[name="quantity"]');

    function updateTotals() {
        let subtotal = 0;

        inputs.forEach(input => {
            const price = parseFloat(input.dataset.price) || 0;
            const qty = parseInt(input.value) || 0;
            subtotal += price * qty;
        });

        const shipping = parseFloat(document.getElementById('shipping-value')?.innerText || 0);
        const discount = parseFloat(document.getElementById('discount-value')?.innerText || 0);
        const total = subtotal + shipping - discount;

        document.getElementById('subtotal-value').innerText = '$' + subtotal.toFixed(2);
        document.getElementById('total-value').innerText = '$' + total.toFixed(2);
    }

    function syncPreview(productId, quantity) {
        const previewNumber = document.querySelector(`.preview-number[data-product-id="${productId}"]`);
        if (previewNumber) {
            previewNumber.textContent = quantity;
        }
    }
    inputs.forEach(input => {
        const min = parseInt(input.min);
        const max = parseInt(input.max);

        function handleQtyChange() {
            let qty = parseInt(input.value);
            if (isNaN(qty)) qty = min;
            qty = Math.min(Math.max(qty, min), max);
            input.value = qty;

            const row = input.closest('tr');
            const price = parseFloat(input.dataset.price);
            const subtotal = price * qty;

            const subtotalCell = row.querySelector('.subtotal');
            if (subtotalCell) {
                subtotalCell.innerText = '$' + subtotal.toFixed(2);
            }

            const productId = input.dataset.productId;
            syncPreview(productId, qty);

            updateTotals();
        }

        input.addEventListener('input', handleQtyChange);
        input.addEventListener('blur', handleQtyChange);
        input.addEventListener('keydown', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                handleQtyChange();
                input.blur();
            }
        });
    });

    updateTotals();
});
