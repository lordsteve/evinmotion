<nav>
    <img src="{{ asset('storage/images/logo.png') }}" alt="Logo">
    <ul>
        <li><a href="{{ route('home') }}" class="{{ $indicators->home ? 'current' : '' }}">Home</a></li>
        <li><a href="{{ route('what-is-ev') }}" class="{{ $indicators->whatIsEv ? 'current' : '' }}">What is EV</a></li>
        <li><a href="{{ route('products') }}" class="{{ $indicators->products ? 'current' : '' }}">Products</a></li>
        <li><a href="{{ route('home') }}" class="{{ $indicators->incentives ? 'current' : '' }}">Incentives</a></li>
        <li><a href="{{ route('home') }}" class="{{ $indicators->contactUs ? 'current' : '' }}">Contact Us</a></li>
        <li><a href="{{ route('home') }}" class="{{ $indicators->aboutUs ? 'current' : '' }}">About Us</a></li>
        <li><a href="{{ route('home') }}" class="{{ $indicators->news ? 'current' : '' }}">News</a></li>
        <li><a href="https://arsservicesllc.com/" target="_blank">ARS Services</a></li>
    </ul>
</nav>
<div class="pusher"></div>