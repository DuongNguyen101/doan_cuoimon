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
