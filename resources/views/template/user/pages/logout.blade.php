<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="button" class="btn btn-sm btn-outline-danger py-0 px-2" style="font-size: 13px;" data-bs-toggle="modal" data-bs-target="#logoutConfirmModal">
    Logout
</button>
</form>