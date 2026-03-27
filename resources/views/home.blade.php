
@extends('master')

@section('title', 'Trang chủ')
@section('page', 'home')
@section('content')

<section class="home-hero">
    <div class="home-hero-slide active">
      <img src="{{ asset('img/banner/azur.jpg')}}" alt="Banner 1">
      <div class="home-hero-overlay">
        <h2 class="home-hero-title">New Azur Lane Collection</h2>
        <p class="home-hero-subtitle">Premium figures & merchandise</p>
        <button class="home-btn-primary">Shop Now</button>
      </div>
    </div>
    <div class="home-hero-slide">
      <img src="{{ asset('img/banner/Arknights.webp')}}" alt="Banner 2">
      <div class="home-hero-overlay">
        <h2 class="home-hero-title">Arknights × GACHA STORE</h2>
        <p class="home-hero-subtitle">Exclusive collaboration items</p>
        <button class="home-btn-primary">Shop Now</button>
      </div>
    </div>
    <div class="home-hero-slide">
      <img src="{{ asset('img/banner/hi3.jpg')}}" alt="Banner 3">
      <div class="home-hero-overlay">
        <h2 class="home-hero-title">Honkai Impact Figures</h2>
        <p class="home-hero-subtitle">Limited edition pre-order now</p>
        <button class="home-btn-primary">Shop Now</button>
      </div>
    </div>
    <div class="home-hero-slide">
      <img src="{{ asset('img/banner/a9.jpg')}}" alt="Banner 4">
      <div class="home-hero-overlay">
        <h2 class="home-hero-title">Summer Sale — Up to 40% Off</h2>
        <p class="home-hero-subtitle">Don't miss out on your favorites</p>
        <button class="home-btn-primary">Shop Now</button>
      </div>
    </div>
    <div class="home-hero-slide">
      <img src="{{ asset('img/banner/zzz3.jpg')}}" alt="Banner 5">
      <div class="home-hero-overlay">
        <h2 class="home-hero-title">Zenless Zone Zero Launch</h2>
        <p class="home-hero-subtitle">First wave merchandise available</p>
        <button class="home-btn-primary">Shop Now</button>
      </div>
    </div>
    <div class="home-hero-dots">
      <button class="home-hero-dot active" onclick="goToSlide(0)"></button>
      <button class="home-hero-dot" onclick="goToSlide(1)"></button>
      <button class="home-hero-dot" onclick="goToSlide(2)"></button>
      <button class="home-hero-dot" onclick="goToSlide(3)"></button>
      <button class="home-hero-dot" onclick="goToSlide(4)"></button>
    </div>
  </section>
  <!-- COLLECTIONS GRID -->
  <section class="home-collections">
    <div class="grid-container">
      <div style="grid-column: 2 / 12;">
        <h2 class="home-collections-title">Featured Collections</h2>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem;">
          <div class="home-collection-card">
            <img src="{{ asset('img/featured/img(1).avif')}}" alt="Collection 1">
            <div class="home-collection-card-label">Summer Collection</div>
            <div class="home-collection-card-overlay">
              <button class="home-collection-btn">View Collection</button>
            </div>
          </div>
          <div class="home-collection-card">
            <img src="{{ asset('img/featured/img(1).jpg')}}" alt="Collection 2">
            <div class="home-collection-card-label">Collab Special</div>
            <div class="home-collection-card-overlay">
              <button class="home-collection-btn">View Collection</button>
            </div>
          </div>
          <div class="home-collection-card">
            <img src="{{ asset('img/featured/img(1).png')}}" alt="Collection 3">
            <div class="home-collection-card-label">Spring Limited</div>
            <div class="home-collection-card-overlay">
              <button class="home-collection-btn">View Collection</button>
            </div>
          </div>
          <div class="home-collection-card">
            <img src="{{ asset('img/featured/img(2).jpg')}}" alt="Collection 4">
            <div class="home-collection-card-label">Winter Drop</div>
            <div class="home-collection-card-overlay">
              <button class="home-collection-btn">View Collection</button>
            </div>
          </div>
          <div class="home-collection-card">
            <img src="{{ asset('img/featured/img(2).png')}}" alt="Collection 5">
            <div class="home-collection-card-label">Anime Collab</div>
            <div class="home-collection-card-overlay">
              <button class="home-collection-btn">View Collection</button>
            </div>
          </div>
          <div class="home-collection-card">
            <img src="{{ asset('img/featured/img(3).png')}}" alt="Collection 6">
            <div class="home-collection-card-label">Gacha Edition</div>
            <div class="home-collection-card-overlay">
              <button class="home-collection-btn">View Collection</button>
            </div>
          </div>
          <div class="home-collection-card">
            <img src="{{ asset('img/featured/img(4).png')}}" alt="Collection 7">
            <div class="home-collection-card-label">Poster Series</div>
            <div class="home-collection-card-overlay">
              <button class="home-collection-btn">View Collection</button>
            </div>
          </div>
          <div class="home-collection-card">
            <img src="{{ asset('img/featured/img(5).png')}}" alt="Collection 8">
            <div class="home-collection-card-label">Exclusive Merch</div>
            <div class="home-collection-card-overlay">
              <button class="home-collection-btn">View Collection</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- AZUR LANE SECTION -->
 <section class="home-game-section">
    <div class="grid-container">
    
      <img src="{{asset('img/banner/BG-azurland.png')}}" alt=""  
      style="position: absolute; 
             margin:0;
            left:0;
            width: 100%;
            height: 700px;  
            object-fit: cover; 
            z-index: -1;">
    

        <div style="grid-column: 2 / 12;">
        <div style="position: relative;">
        <img src="{{asset('img/banner/azur.jpg')}}" alt="Azur Lane" class="home-game-banner">
          <h1 style="position: absolute;
             top: 50%;
             left: 50%;
             transform: translate(-50%, -50%);
             color: white;
             font-size: 2.5rem;
             font-weight: 900;
             text-shadow: 2px 2px 0 black;
             z-index: 1;
             ">
          AZUR LANE
          </h1>
          </div>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; margin-bottom: 2rem;">
        @foreach($azurlane as $item)
        <div class="home-product-card" style="background-color: #ffffff66">
            <div class="home-product-card-image">
              <a href="/san-pham/{{$item->slug}}">
              <img src="{{asset('img/products/'. $item->image)}}" alt="${p.name}">
            </a>
              <button class="home-product-card-cart" aria-label="Add to cart">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                  <line x1="3" y1="6" x2="21" y2="6"></line>
                  <path d="M16 10a4 4 0 0 1-8 0"></path>
                </svg>
              </button>
            </div>
            <p class="home-product-card-name">{{$item->name}}</p>
            <p class="home-product-card-price">{{$item->price}}</p>
          </div> 
        @endforeach
        </div>
        <div style="text-align: center;">
          <button class="home-btn-outline">View More Azur Lane</button>
        </div>
      </div>
    </div>
  </section>
  <!-- zzz SECTION -->
 <section class="home-game-section">
    <div class="grid-container">
    
      <img src="{{asset('img/banner/BG-zzz.png')}}" alt=""  
      style="position: absolute; 
            margin:0;
            left:0;
            width: 100%;
            height: 700px;  
            object-fit: cover; 
            z-index: -1;">
    

        <div style="grid-column: 2 / 12;">
        <div style="position: relative;">
        <img src="{{asset('img/banner/zzz_banner.png')}}" alt="Azur Lane" class="home-game-banner" >
          <h1 style="position: absolute;
             top: 50%;
             left: 50%;
             transform: translate(-50%, -50%);
             color: #ecc900;
             font-size: 2.5rem;
             font-weight: 900;
             text-shadow: 10px 5px 0 #000000;
             z-index: 1;
             ">
          ZENLESS ZONE ZERO
          </h1>
          </div>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; margin-bottom: 2rem;">
        @foreach($zzz as $item)
        <div class="home-product-card" style="background-color: #00000066;">
            <div class="home-product-card-image">
              <a href="/san-pham/{{$item->slug}}">
              <img src="{{asset('img/products/'. $item->image)}}" alt="${p.name}">
            </a>
              <button class="home-product-card-cart" aria-label="Add to cart">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                  <line x1="3" y1="6" x2="21" y2="6"></line>
                  <path d="M16 10a4 4 0 0 1-8 0"></path>
                </svg>
              </button>
            </div>
            <p class="home-product-card-name" style="color:white;">{{$item->name}}</p>
            <p class="home-product-card-price" style="color:#FFD700; text-shadow: 2px #8B6508">{{$item->price}}</p>
          </div> 
        @endforeach
        </div>
        <div style="text-align: center;">
          <button class="home-btn-outline" >View More ZENLESS ZONE ZERO</button>
        </div>
      </div>
    </div>
  </section>
<!-- HONKAI  SECTION -->
 <section class="home-game-section">
    <div class="grid-container">
    
      <img src="{{asset('img/banner/BG-hsr.jpeg')}}" alt=""  
      style="position: absolute; 
            margin:0;
            left:0;
            width: 100%;
            height: 700px;  
            object-fit: cover; 
            z-index: -1;">
    

        <div style="grid-column: 2 / 12;">
        <div style="position: relative;">
        <img src="{{asset('img/banner/hsr.jpg')}}" alt="Azur Lane" class="home-game-banner" >
          <h1 style="position: absolute;
             top: 50%;
             left: 50%;
             transform: translate(-50%, -50%);
             color: #ffffff;
             font-size: 2.5rem;
             font-weight: 900;
             text-shadow: 1px 1px 0 #ffc1fa;
             z-index: 1;
             ">
          HONKAI STAR RAIL
          </h1>
          </div>
        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; margin-bottom: 2rem;">
        @foreach($hsr as $item)
        <div class="home-product-card" style="background-color: #00000066;">
            <div class="home-product-card-image">
              <a href="/san-pham/{{$item->slug}}">
              <img src="{{asset('img/products/'. $item->image)}}" alt="${p.name}">
            </a>
              <button class="home-product-card-cart" aria-label="Add to cart">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                  <line x1="3" y1="6" x2="21" y2="6"></line>
                  <path d="M16 10a4 4 0 0 1-8 0"></path>
                </svg>
              </button>
            </div>
            <p class="home-product-card-name" style="color:white;">{{$item->name}}</p>
            <p class="home-product-card-price" style="color:#FFD700; text-shadow: 2px #8B6508">{{$item->price}}</p>
          </div> 
        @endforeach
        </div>
        <div style="text-align: center;">
          <button class="home-btn-outline" >View More HONKAI STAR RAIL</button>
        </div>
      </div>
    </div>
  </section>
  <!-- NEWSLETTER -->
  <section class="home-newsletter">
    <div class="grid-container">
      <div style="grid-column: 2 / 12; text-align: center;">
        <h2 class="home-newsletter-title">Subscribe to Our Newsletter</h2>
        <p class="home-newsletter-desc">Get the latest updates on new arrivals and exclusive deals</p>
        <div style="display: flex; gap: 1rem; justify-content: center; align-items: center;">
          <input type="email" placeholder="Enter your email" class="home-newsletter-input">
          <button class="home-btn-primary">Subscribe</button>
        </div>
      </div>
    </div>
  </section>




<script>
   let currentSlide = 0;
  const slides = document.querySelectorAll('.home-hero-slide');
      const dots = document.querySelectorAll('.home-hero-dot');
      const slideCount = slides.length;
      function showSlide(index) {
        slides.forEach((slide, i) => {
          slide.classList.toggle('active', i === index);
        });
        dots.forEach((dot, i) => {
          dot.classList.toggle('active', i === index);
        });
        currentSlide = index;
      }
      function nextSlide() {
        currentSlide = (currentSlide + 1) % slideCount;
        showSlide(currentSlide);
      }
      function goToSlide(index) {
        showSlide(index);
      }
      // Auto-advance slider every 5 seconds
      setInterval(nextSlide, 5000);
      // ===== SEARCH OVERLAY =====
      function openSearch() {
        document.getElementById('searchOverlay').classList.add('active');
      }
      function closeSearch() {
        document.getElementById('searchOverlay').classList.remove('active');
      }
      // Close search on ESC key
      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
          closeSearch();
        }
      });
</script>
@endsection
