<ul class="left listnone margin-top-10">
    <li class="bar-item vectorlogo">
        <img src="{{ asset('images/logo/coupon-logo.svg' ) }}" alt="Logo" class="width100 height100" onclick="window.location.href = '{{ route('start') }}';">
    </li>
    @can('isAdmin')
    <li><a href="{{ route('admin') }}" class="button bar-item right" title="Home Admin">Home Admin</a></li>
    @endcan
    @can('isUser')
    <li><a href="{{ route('user') }}" class="button bar-item right" title="Home User">Home User</a></li>
    @endcan
    @auth
    <li class="button bar-item right" onclick="window.location.href = '{{ route('area_personale_utente') }}';">Area personale</li>
    <li><a href="" title="Esci dal sito" class="button bar-item right" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    @endauth
    @guest
    <li class="button bar-item right" onclick="window.location.href = '{{ route('login') }}';">Login</li>
    @endguest
    <li class="button bar-item right" onclick="window.location.href = '{{ route('FAQ') }}';">FAQ</li>
    <li class="button bar-item right" onclick="window.location.href = '{{ route('chi_siamo') }}';">Chi siamo</li>
</ul>
@if (!empty($allAziende) || !empty($promos))
<ul class="right listnone margin-top-10"> 
    <li class="bar-item max-heigth52" >
        <form method="GET" action="{{ route('risultati_page') }}">
            <button type="submit" class="button bar-item search-lens right"  >
                <img src="{{ asset('images/icons/search_icon.svg' ) }}" alt="Search" class="width100">
            </button>
            <input type="text" name="azienda" placeholder="Search Azienda" class="searchbar height36" name="search">
            <input type="text" name="descrizione" placeholder="Search Descrizione" class="searchbar height36" name="search">
        </form>
    </li>
</ul>
@endif

