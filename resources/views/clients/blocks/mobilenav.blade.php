<div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
      <div class="ltn__utilize-menu-head">
        <div class="site-logo">
          <a href="index.html">
            <img src="{{asset('clients_assets/images/logo4.png')}}" alt="Logo">
          </a>
        </div>
        <button class="ltn__utilize-close">×</button>
      </div>
      <div class="ltn__utilize-menu-search-form">
        <form action="#">
          <input type="text" placeholder="Search...">
          <button>
            <i class="icon-magnifier"></i>
          </button>
        </form>
      </div>
      <div class="ltn__utilize-menu">
        <ul>
          <li>
            <a href="{{route('home')}}">Home</a>
          </li>
          <li>
            <a href="#">Shop</a>
            <ul class="sub-menu">
              <li>
                <a href="{{route('shop')}}">Shop</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">News</a>
            <ul class="sub-menu">
              <li>
                <a href="{{route('blog')}}">News</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Pages</a>
            <ul class="sub-menu">
              <li>
                <a href="{{route('about-us')}}">About Us</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="{{route('contact-us')}}">Contact</a>
          </li>
        </ul>
      </div>
      <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
        <ul>
          <li>
            <a href="{{ route('account') }}" title="My Account">
              <span class="utilize-btn-icon">
                <i class="icon-user"></i>
              </span> My Account </a>
          </li>
          <li>
            <a href="{{route('wishlist')}}" title="Wishlist">
              <span class="utilize-btn-icon">
                <i class="icon-heart"></i>
                <sup>3</sup>
              </span> Wishlist </a>
          </li>
          <li>
            <a href="cart.html" title="Shoping Cart">
              <span class="utilize-btn-icon">
                <i class="icon-handbag"></i>
                <sup>
                @if (session()->has('id'))
                    {{ $totalCart  }}
                @endif

</sup>
              </span> Shoping Cart </a>
          </li>
        </ul>
      </div>
      <div class="ltn__social-media-2">
        <ul>
          <li>
            <a href="#" title="Facebook">
              <i class="icon-social-facebook"></i>
            </a>
          </li>
          <li>
            <a href="#" title="Twitter">
              <i class="icon-social-twitter"></i>
            </a>
          </li>
          <li>
            <a href="#" title="Pinterest">
              <i class="icon-social-pinterest"></i>
            </a>
          </li>
          <li>
            <a href="#" title="Instagram">
              <i class="icon-social-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Utilize Mobile Menu End -->
