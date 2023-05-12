<ul class= "left listnone">
    <li class="bar-item vectorlogo" >
        <img src="{{ asset('images/logo/coupon-logo.svg' ) }}" alt="Logo" class="width100 height100" onclick="window.location.href = '{{ route('start') }}';">
    </li>
    <!--@auth
    <li class="button bar-item right" onclick="window.location.href = '/';">Profilo</li>
    <li class="button bar-item right" onclick="window.location.href = '{{ route('logout') }}';">Logout</li>
    @endauth
    @guest
    <li class="button bar-item right" onclick="window.location.href = '{{ route('login') }}';">Login</li>
    @endguest-->
    <li class="button bar-item right" onclick="window.location.href = '/';">Login</li>
    <li class="button bar-item  right" onclick="window.location.href = '{{ route('FAQ') }}';">FAQ</li>
    <li class="button bar-item  right" onclick="window.location.href = '{{ route('chi_siamo') }}';">Chi siamo</li>
</ul>
<ul class= "right listnone"> 
    <li class="bar-item max-heigth52" >
        <input placeholder="Search.." class ="searchbar height36" name="search">
    </li>
    <li class="button bar-item" >
        <img src="{{ asset('images/icons/search_icon.svg' ) }}"  alt="Search" class= " width100">
    </li>
</ul>

