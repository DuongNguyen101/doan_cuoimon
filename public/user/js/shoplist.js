document.querySelectorAll('.topbar-dropdown .item').forEach(item => {
        item.addEventListener('click', function () {
            const sortValue = this.getAttribute('data-sort');
            const currentUrl = new URL(window.location.href);
            currentUrl.searchParams.set('sort', sortValue); 
            window.location.href = currentUrl.toString(); 
        });
    });

    const currentSort = new URLSearchParams(window.location.search).get('sort') || 'desc';
    const selectedItem = document.querySelector(`.topbar-dropdown .item[data-sort="${currentSort}"]`);
    if (selectedItem) {
        document.getElementById('destination12').textContent = selectedItem.textContent;
    }