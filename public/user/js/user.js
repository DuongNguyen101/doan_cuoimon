function showLogoutConfirm() {
    document.getElementById('logoutConfirmBox').style.display = 'block';
}

function hideLogoutConfirm() {
    document.getElementById('logoutConfirmBox').style.display = 'none';
}

function submitLogout() {
    document.getElementById('logoutForm').submit();
}

document.getElementById('searchRedirectForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const searchTerm = document.getElementById('searchInput').value.trim();
    if (searchTerm) {
        const url = `/template/user/shop/search?search=${encodeURIComponent(searchTerm)}`;
        window.location.href = url;
    }
});

document.addEventListener("DOMContentLoaded", function () {
    const stars = document.querySelectorAll("#star-rating i");
    const ratingInput = document.getElementById("rating");

    stars.forEach((star, index) => {
        star.addEventListener("click", function () {
            const rating = star.getAttribute("data-value");
            ratingInput.value = rating;

            // Cập nhật giao diện
            stars.forEach((s, i) => {
                if (i < rating) {
                    s.classList.remove("bi-star");
                    s.classList.add("bi-star-fill");
                } else {
                    s.classList.remove("bi-star-fill");
                    s.classList.add("bi-star");
                }
            });
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    if (window.location.hash === '#nav-review') {
        const reviewTab = document.querySelector('button[data-bs-target="#nav-review"]');
        if (reviewTab) {
            new bootstrap.Tab(reviewTab).show();
        }
    }
});

$(document).on('click', '.add-to-wishlist', function (e) {
    e.preventDefault();

    const productId = $(this).data('product-id');

    // Tìm input wishlist-qty nằm trong cùng function-bar
    const qty = $(this).closest('.function-bar').find('.wishlist-qty').val() || 1;

    $.ajax({
        url: `/template/user/shop/wishlist/add/${productId}`,
        method: 'GET', // hoặc 'POST' nếu bạn muốn bảo mật hơn
        data: {
            quantity: qty
        },
        success: function (res) {
            alert(res.message || `Added ${qty} to wishlist!`);
        },
        error: function (xhr) {
            console.error('Error:', xhr.responseText);
            alert('Failed to add to wishlist.');
        }
    });
});

$(document).on('click', '.add-to-cart', function (e) {
    e.preventDefault();

    const productId = $(this).data('product-id');
    const qty = $(this).closest('.function-bar').find('.wishlist-qty').val() || 1;

    $.ajax({
        url: `/template/user/shop/cart/add/${productId}`,
        method: 'GET',
        data: {
            quantity: qty
        },
        success: function (res) {
            alert(res.message || `Added ${qty} to cart!`);
        },
        error: function (xhr) {
            alert('Failed to add to cart.');
            console.error(xhr.responseText);
        }
    });
});


