<div class="links">
    <a href="/">Beranda</a>
    <a href="/daftar-buku">Daftar Buku</a>
    <a href="/about">About</a>
    <a href="/help">Help</a>
    @if (Auth::check() && Auth::user()->level == 'admin')
    <a href="/buku">Buku</a>
    @endif
    
    <!-- <a href="/tambahan">Tambahan</a> -->
</div>