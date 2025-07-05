document.addEventListener('DOMContentLoaded', function () {
    const toggleMain = document.getElementById('togglePassword');
    const inputMain = document.getElementById('password');

    const toggleConfirm = document.getElementById('toggleConfirmPassword');
    const inputConfirm = document.getElementById('password_confirmation');

    toggleMain.addEventListener('click', function () {
        const type = inputMain.type === 'password' ? 'text' : 'password';
        inputMain.type = type;
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });

    toggleConfirm.addEventListener('click', function () {
        const type = inputConfirm.type === 'password' ? 'text' : 'password';
        inputConfirm.type = type;
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });
});