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