function showLogoutConfirm() {
    document.getElementById('logoutConfirmBox').style.display = 'block';
}

function hideLogoutConfirm() {
    document.getElementById('logoutConfirmBox').style.display = 'none';
}

function submitLogout() {
    document.getElementById('logoutForm').submit();
}