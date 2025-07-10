document.addEventListener("DOMContentLoaded", function () {
    // Hàm tính lại toàn bộ giỏ hàng
    function recalcCart() {
        let subtotalAll = 0;

        document.querySelectorAll("tr.table-row").forEach(row => {
            const qtyInput = row.querySelector('input[name="quantity"]');
            const price = parseFloat(row.querySelector('.quantity-wrap').dataset.price);
            let qty = parseInt(qtyInput.value) || 1;

            // Giới hạn từ min đến max
            const min = parseInt(qtyInput.getAttribute('min'));
            const max = parseInt(qtyInput.getAttribute('max'));
            if (qty < min) qty = min;
            if (qty > max) qty = max;
            qtyInput.value = qty;

            // Cập nhật subtotal của hàng này
            const rowSubtotal = price * qty;
            row.querySelector('.subtotal').textContent = `$${rowSubtotal.toFixed(2)}`;
            subtotalAll += rowSubtotal;
        });

        // Lấy phí vân chuyển và giảm giá
        const shipping = parseFloat(document.getElementById('shipping-value').textContent.replace('$', '')) || 0;
        const discount = parseFloat(document.getElementById('discount-value').textContent.replace('-', '').replace('$', '')) || 0;
        const grandTotal = subtotalAll + shipping - discount;

        // Cập nhật các giá trị ở Cart Total
        document.getElementById('subtotal-value').textContent = `$${subtotalAll.toFixed(2)}`;
        document.getElementById('total-value').textContent = `$${grandTotal.toFixed(2)}`;
    }

    // Gắn listener cho mỗi ô quantity
    document.querySelectorAll('input[name="quantity"]').forEach(input => {
        const min = parseInt(input.getAttribute('min'));
        const max = parseInt(input.getAttribute('max'));

        // Khi người dùng nhập (input event)
        input.addEventListener('input', () => {
            let val = parseInt(input.value) || min;
            if (val < min) val = min;
            if (val > max) val = max;
            input.value = val;
            recalcCart();
        });

        // Khi người dùng nhấn Enter
        input.addEventListener('keydown', e => {
            if (e.key === 'Enter') {
                e.preventDefault();
                let val = parseInt(input.value) || min;
                if (val < min) val = min;
                if (val > max) val = max;
                input.value = val;
                recalcCart();
                input.blur(); // bỏ focus tránh quay lại form
            }
        });

        // Khi người dùng rời khỏi ô input
        input.addEventListener('blur', () => {
            let val = parseInt(input.value) || min;
            if (val < min) val = min;
            if (val > max) val = max;
            input.value = val;
            recalcCart();
        });
    });

    // Tính lần đầu khi load trang
    recalcCart();
});
