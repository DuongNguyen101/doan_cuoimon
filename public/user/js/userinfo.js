function previewAvatar(event) {
    const reader = new FileReader();
    reader.onload = function () {
        document.getElementById('avatarPreview').src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}

