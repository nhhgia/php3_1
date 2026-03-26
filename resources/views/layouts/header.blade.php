 <header class="home-header">
    <div class="grid-container" style="align-items: center; min-height: 64px;">
      <!-- Left Nav -->
      <nav style="grid-column: 2 / 6;" class="hidden-mobile">
        <a href="{{('/')}}" class="home-header-nav-link">Home</a>
        
        <div class="home-header-nav-item">
          <a href="#" class="home-header-nav-link">Shop by Game</a>
          <div class="home-header-dropdown">
            <a href="#">Azur Lane</a>
            <a href="#">Fate Grand Order</a>
            <a href="#">Honkai Impact</a>
            <a href="#">Zenless Zone Zero</a>
            <a href="#">Arknights</a>   
          </div>
        </div>
        <div class="home-header-nav-item">
           <a href="{{('/san-pham')}}" class="home-header-nav-link">Category</a>
          <div class="home-header-dropdown">
            <a href="#">Figure</a>
            <a href="#">Plushie</a>
            <a href="#">Acrylic Stand</a>
            <a href="#">Keychain</a>
            <a href="#">Apparel</a>
            <a href="#">Accessories</a>
          </div>
        </div>
        <a href="#" class="home-header-nav-link">Collections</a>
      </nav>
      <!-- Center Logo -->
      <div style="grid-column: 6 / 8; display: flex; align-items: center; justify-content: center;">
        <a href="#" class="home-header-logo">
          GACHA<span class="home-header-logo-accent">STORE</span>
        </a>
      </div>
      <!-- Right Icons -->
      <div style="grid-column: 10 / 12; display: flex; align-items: center; justify-content: flex-end; gap: 12px;">
        <button class="home-header-icon-btn" aria-label="Account">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
          </svg>
        </button>
        <button class="home-header-icon-btn" aria-label="Cart">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <path d="M16 10a4 4 0 0 1-8 0"></path>
          </svg>
        </button>
        <button class="home-header-icon-btn" aria-label="Search" onclick="openSearch()">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="11" cy="11" r="8"></circle>
            <path d="m21 21-4.35-4.35"></path>
          </svg>
        </button>
      </div>
    </div>
  </header>
  <!-- SEARCH OVERLAY -->
  <div id="searchOverlay" class="home-search-overlay">
    <div class="home-search-overlay-content">
      <div class="grid-container">
        <div style="grid-column: 2 / 12;">
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <input type="text" placeholder="Search products..." class="home-search-input" style="flex: 1; margin-right: 1rem;">
            <button class="home-search-close" onclick="closeSearch()">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
              </svg>
            </button>
          </div>
          
          <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 3rem;">
            <div>
              <p class="home-search-label">Quick Links</p>
              <a href="#" class="home-search-quick-link">New Arrivals</a>
              <a href="#" class="home-search-quick-link">Best Sellers</a>
              <a href="#" class="home-search-quick-link">Sale Items</a>
              <a href="#" class="home-search-quick-link">Pre-orders</a>
            </div>
            <div>
              <p class="home-search-label">Popular Products</p>
              <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem;">
                <div style="text-align: center;">
                  <img src="https://picsum.photos/seed/search1/100/100" alt="Product" style="width: 100%; margin-bottom: 0.5rem;">
                  <p style="font-size: 0.75rem;">Product 1</p>
                </div>
                <div style="text-align: center;">
                  <img src="https://picsum.photos/seed/search2/100/100" alt="Product" style="width: 100%; margin-bottom: 0.5rem;">
                  <p style="font-size: 0.75rem;">Product 2</p>
                </div>
                <div style="text-align: center;">
                  <img src="https://picsum.photos/seed/search3/100/100" alt="Product" style="width: 100%; margin-bottom: 0.5rem;">
                  <p style="font-size: 0.75rem;">Product 3</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>