
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/navbar.js') }}"></script>

<li class="vectorlogo right logo">
    <img src="{{ asset('images/logo/coupon-logo.svg' ) }}" alt="Logo" class="width100 height100" onclick="window.location.href = '{{ route('start') }}';">
</li>

<ul class="left listnone margin-top-10 ">
    @auth
    <li href="" title="Esci dal sito" class="button bar-item right" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    @endauth

    @can('isUser')
    <li class="button bar-item right" onclick="window.location.href = '{{ route('area_personale_utente') }}';">Area Utente</li>
    @endcan
    @can('isStaff')
    <li class="button bar-item right" onclick="window.location.href = '{{ route('area_personale_staff') }}';">Area Staff</li>
    @endcan
    @can('isAdmin')
    <li class="button bar-item right" onclick="window.location.href = '{{ route('area_personale_admin') }}';">Area Admin</li>
    @endcan

    @guest
    <li class="button bar-item right" onclick="window.location.href = '{{ route('login') }}';">Login</li>
    @endguest
    <li class="button bar-item right" onclick="window.location.href = '{{ route('FAQ') }}';">FAQs</li>
    <li class="button bar-item right" onclick="window.location.href = '{{ route('chi_siamo') }}';">Chi siamo</li>
    <li class="button bar-item right"onclick="window.location.href = '{{ route('start') }}';"> Home </li>

</ul>
@if (!empty($allAziende) || !empty($promos))

<li class="bar-item max-heigth52 search" >
    <form method="GET" action="{{ route('risultati_page') }}">
        <button type="submit" class="button bar-item search-lens right"  >
            <img src="{{ asset('images/icons/search_icon.svg' ) }}" alt="Search" class="width100">
        </button>
        <input type="text" name="azienda" placeholder="Cerca per Azienda"  class="searchbar height36" name="search" value="{{ request()->input('azienda') }}">
        <input type="text" name="descrizione" placeholder="Cerca per Descrizione"  class="searchbar height36" name="search" value="{{ request()->input('descrizione') }}">
    </form>
</li>


@endif

