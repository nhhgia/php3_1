@extends('master')

@section('title', 'Danh mục sản phẩm')
@section('page', 'listpro')
@section('content')
  
<div class="site-container">
  <!-- Tiêu đề trang -->
  <h1 class="product-page-title">Danh mục sản phẩm</h1>

  <!-- Layout chính: 2 cột (Filter 25% - Content 75%) -->
  <div class="product-layout">
    
    <!-- Cột trái: Filter Panel -->
    <aside class="product-filter">
      <!-- Filter theo game -->
      <div class="product-filter-game">
        <h3>Lọc theo game</h3>
        <ul>
          <li>
            <label>
              <input type="checkbox" class="product-game-checkbox" value="Azur Lane">
              Azur Lane
            </label>
          </li>
          <li>
            <label>
              <input type="checkbox" class="product-game-checkbox" value="Arknights">
              Arknights
            </label>
          </li>
          <li>
            <label>
              <input type="checkbox" class="product-game-checkbox" value="Fate Grand Order">
              Fate Grand Order
            </label>
          </li>
          <li>
            <label>
              <input type="checkbox" class="product-game-checkbox" value="Honkai Impact">
              Honkai Impact
            </label>
          </li>
          <li>
            <label>
              <input type="checkbox" class="product-game-checkbox" value="Zenless Zone Zero">
              Zenless Zone Zero
            </label>
          </li>
        </ul>
      </div>

      <!-- Filter theo loại sản phẩm -->
      <div class="product-filter-type">
        <h3>Lọc theo loại sản phẩm</h3>
        <ul>
          <li>
            <label>
              <input type="checkbox" class="product-type-checkbox" value="Mô hình">
              Mô hình
            </label>
          </li>
          <li>
            <label>
              <input type="checkbox" class="product-type-checkbox" value="Acrylic Stand">
              Acrylic Stand
            </label>
          </li>
          <li>
            <label>
              <input type="checkbox" class="product-type-checkbox" value="Sticker">
              Sticker
            </label>
          </li>
          <li>
            <label>
              <input type="checkbox" class="product-type-checkbox" value="Keychain">
              Keychain
            </label>
          </li>
          <li>
            <label>
              <input type="checkbox" class="product-type-checkbox" value="Plushie">
              Plushie
            </label>
          </li>
          <li>
            <label>
              <input type="checkbox" class="product-type-checkbox" value="Poster">
              Poster
            </label>
          </li>
        </ul>
      </div>

      <!-- Filter theo giá -->
      <div class="product-filter-price">
        <h3>Lọc theo giá</h3>
        
        <div class="product-price-range">
          <div class="product-price-min">
            <label>Từ:</label>
            <input type="range" id="price-min" min="0" max="2000000" step="50000" value="0">
            <span id="price-min-val">0đ</span>
          </div>
          
          <div class="product-price-max">
            <label>Đến:</label>
            <input type="range" id="price-max" min="0" max="2000000" step="50000" value="2000000">
            <span id="price-max-val">2.000.000đ</span>
          </div>
        </div>
        
        <div class="product-price-display">
          Giá đã chọn: <span id="price-display">0đ - 2.000.000đ</span>
        </div>
      </div>
    </aside>

    <!-- Cột phải: Product Section -->
    <div class="product-content">
      
      <!-- Thanh công cụ trên cùng -->
      <div class="product-toolbar">
        <!-- Nút mở filter trên mobile -->
        <button class="product-mobile-filter-btn">Bộ lọc</button>
        
        <!-- Search -->
        <div class="product-search-wrapper">
          <input type="text" id="product-search" class="product-search" placeholder="Tìm sản phẩm...">
        </div>
        
        <!-- Sort -->
        <div class="product-sort-wrapper">
          <select id="product-sort" class="product-sort">
            <option value="price-asc">Giá tăng dần</option>
            <option value="price-desc">Giá giảm dần</option>
            <option value="newest">Mới nhất</option>
            <option value="bestselling">Bán chạy</option>
          </select>
        </div>
      </div>

      <!-- Product Grid -->
      <div id="product-grid" class="product-grid">
        <!-- Sản phẩm được render bằng JS -->
      </div>

      <!-- Pagination -->
      <div id="product-pagination" class="product-pagination">
        <!-- Nút phân trang được render bằng JS -->
      </div>
    </div>
  </div>
</div>
<script>
    const products = [
  { id: 1, name: "Mô hình Azur Lane - Enterprise", price: 1250000, image: "https://picsum.photos/seed/enterprise/300/300", game: "Azur Lane", type: "Mô hình", popularity: 85 },
  { id: 2, name: "Acrylic Stand Azur Lane - Belfast", price: 320000, image: "https://picsum.photos/seed/belfast/300/300", game: "Azur Lane", type: "Acrylic Stand", popularity: 60 },
  { id: 3, name: "Figure Arknights - Amiya", price: 980000, image: "https://picsum.photos/seed/amiya/300/300", game: "Arknights", type: "Mô hình", popularity: 90 },
  { id: 4, name: "Sticker Pack Honkai Impact", price: 150000, image: "https://picsum.photos/seed/honkai1/300/300", game: "Honkai Impact", type: "Sticker", popularity: 40 },
  { id: 5, name: "Keychain Zenless Zone Zero - Nicole", price: 180000, image: "https://picsum.photos/seed/nicole/300/300", game: "Zenless Zone Zero", type: "Keychain", popularity: 55 },
  { id: 6, name: "Plushie Fate Grand Order - Mash", price: 650000, image: "https://picsum.photos/seed/mash/300/300", game: "Fate Grand Order", type: "Plushie", popularity: 75 },
  { id: 7, name: "Poster Azur Lane - Prinz Eugen", price: 250000, image: "https://picsum.photos/seed/prinz/300/300", game: "Azur Lane", type: "Poster", popularity: 30 },
  { id: 8, name: "Mô hình Arknights - Exusiai", price: 1450000, image: "https://picsum.photos/seed/exusiai/300/300", game: "Arknights", type: "Mô hình", popularity: 95 },
  { id: 9, name: "Acrylic Stand Honkai Impact - Raiden Mei", price: 280000, image: "https://picsum.photos/seed/mei/300/300", game: "Honkai Impact", type: "Acrylic Stand", popularity: 70 },
  { id: 10, name: "Sticker Zenless Zone Zero Pack", price: 120000, image: "https://picsum.photos/seed/zzz1/300/300", game: "Zenless Zone Zero", type: "Sticker", popularity: 45 },
  { id: 11, name: "Keychain Fate Grand Order - Saber", price: 200000, image: "https://picsum.photos/seed/saber/300/300", game: "Fate Grand Order", type: "Keychain", popularity: 65 },
  { id: 12, name: "Plushie Azur Lane - Akagi", price: 780000, image: "https://picsum.photos/seed/akagi/300/300", game: "Azur Lane", type: "Plushie", popularity: 80 }
];

// ==================== BIẾN TOÀN CỤC ====================
let currentPage = 1;
const itemsPerPage = 8;
let currentSort = "price-asc";

// ==================== HÀM ĐỊNH DẠNG GIÁ ====================
function formatPrice(price) {
  return price.toLocaleString('vi-VN') + 'đ';
}

// ==================== RENDER PRODUCT CARD ====================
function renderProducts(filteredProducts) {
  const grid = document.getElementById('product-grid');
  grid.innerHTML = '';

  const start = (currentPage - 1) * itemsPerPage;
  const end = start + itemsPerPage;
  const pageItems = filteredProducts.slice(start, end);

  pageItems.forEach(product => {
    const cardHTML = `
      <div class="product-card">
        <img src="${product.image}" alt="${product.name}">
        <div class="product-info">
          <h3>${product.name}</h3>
          <p class="product-price">${formatPrice(product.price)}</p>
          <button class="product-add-to-cart" data-id="${product.id}">
            Thêm vào giỏ
          </button>
        </div>
      </div>
    `;
    grid.insertAdjacentHTML('beforeend', cardHTML);
  });

  // Gắn sự kiện Add to Cart
  document.querySelectorAll('.product-add-to-cart').forEach(btn => {
    btn.addEventListener('click', () => {
      const id = parseInt(btn.dataset.id);
      const product = products.find(p => p.id === id);
      alert(`✅ Đã thêm "${product.name}" vào giỏ hàng!`);
    });
  });
}

// ==================== RENDER PAGINATION ====================
function renderPagination(totalItems) {
  const pagination = document.getElementById('product-pagination');
  pagination.innerHTML = '';

  const totalPages = Math.ceil(totalItems / itemsPerPage);
  if (totalPages <= 1) return;

  // Nút Prev
  const prevBtn = document.createElement('button');
  prevBtn.textContent = '‹';
  prevBtn.disabled = currentPage === 1;
  prevBtn.addEventListener('click', () => {
    if (currentPage > 1) {
      currentPage--;
      applyFiltersAndSort();
    }
  });
  pagination.appendChild(prevBtn);

  // Các số trang
  for (let i = 1; i <= totalPages; i++) {
    const btn = document.createElement('button');
    btn.textContent = i;
    if (i === currentPage) btn.classList.add('active');
    btn.addEventListener('click', () => {
      currentPage = i;
      applyFiltersAndSort();
    });
    pagination.appendChild(btn);
  }

  // Nút Next
  const nextBtn = document.createElement('button');
  nextBtn.textContent = '›';
  nextBtn.disabled = currentPage === totalPages;
  nextBtn.addEventListener('click', () => {
    if (currentPage < totalPages) {
      currentPage++;
      applyFiltersAndSort();
    }
  });
  pagination.appendChild(nextBtn);
}

// ==================== LẤY GIÁ TRỊ FILTER ====================
function getFilters() {
  const selectedGames = Array.from(document.querySelectorAll('.product-game-checkbox:checked'))
    .map(cb => cb.value);

  const selectedTypes = Array.from(document.querySelectorAll('.product-type-checkbox:checked'))
    .map(cb => cb.value);

  const minPrice = parseInt(document.getElementById('price-min').value);
  const maxPrice = parseInt(document.getElementById('price-max').value);

  const searchTerm = document.getElementById('product-search').value.toLowerCase().trim();

  return { selectedGames, selectedTypes, minPrice, maxPrice, searchTerm };
}

// ==================== ÁP DỤNG FILTER + SORT + PAGINATION ====================
function applyFiltersAndSort() {
  const { selectedGames, selectedTypes, minPrice, maxPrice, searchTerm } = getFilters();

  let filtered = products.filter(product => {
    // Lọc game (nếu không chọn thì bỏ qua)
    const gameMatch = selectedGames.length === 0 || selectedGames.includes(product.game);
    
    // Lọc loại (nếu không chọn thì bỏ qua)
    const typeMatch = selectedTypes.length === 0 || selectedTypes.includes(product.type);
    
    // Lọc giá
    const priceMatch = product.price >= minPrice && product.price <= maxPrice;
    
    // Lọc search
    const searchMatch = searchTerm === '' || 
      product.name.toLowerCase().includes(searchTerm);

    return gameMatch && typeMatch && priceMatch && searchMatch;
  });

  // Sort
  filtered.sort((a, b) => {
    switch (currentSort) {
      case 'price-asc':
        return a.price - b.price;
      case 'price-desc':
        return b.price - a.price;
      case 'newest':
        return b.id - a.id;
      case 'bestselling':
        return b.popularity - a.popularity;
      default:
        return 0;
    }
  });

  // Render
  renderProducts(filtered);
  renderPagination(filtered.length);
}

// ==================== CẬP NHẬT HIỂN THỊ GIÁ ====================
function updatePriceDisplay() {
  const minVal = parseInt(document.getElementById('price-min').value);
  const maxVal = parseInt(document.getElementById('price-max').value);
  
  // Đảm bảo min <= max
  if (minVal > maxVal) {
    document.getElementById('price-min').value = maxVal;
  }
  
  document.getElementById('price-min-val').textContent = formatPrice(minVal);
  document.getElementById('price-max-val').textContent = formatPrice(maxVal);
  document.getElementById('price-display').textContent = 
    `${formatPrice(Math.min(minVal, maxVal))} - ${formatPrice(Math.max(minVal, maxVal))}`;
}

// ==================== KHỞI TẠO ====================
document.addEventListener('DOMContentLoaded', () => {
  // Khởi tạo giá range
  const minSlider = document.getElementById('price-min');
  const maxSlider = document.getElementById('price-max');
  
  minSlider.addEventListener('input', () => {
    updatePriceDisplay();
    applyFiltersAndSort();
  });
  
  maxSlider.addEventListener('input', () => {
    updatePriceDisplay();
    applyFiltersAndSort();
  });

  // Checkbox thay đổi
  document.querySelectorAll('.product-game-checkbox, .product-type-checkbox').forEach(cb => {
    cb.addEventListener('change', applyFiltersAndSort);
  });

  // Search realtime
  const searchInput = document.getElementById('product-search');
  let timeout = null;
  searchInput.addEventListener('input', () => {
    clearTimeout(timeout);
    timeout = setTimeout(applyFiltersAndSort, 300);
  });

  // Sort change
  document.getElementById('product-sort').addEventListener('change', (e) => {
    currentSort = e.target.value;
    applyFiltersAndSort();
  });

  // Mobile filter toggle
  const mobileBtn = document.querySelector('.product-mobile-filter-btn');
  const filterPanel = document.querySelector('.product-filter');
  
  mobileBtn.addEventListener('click', () => {
    filterPanel.classList.toggle('active');
    mobileBtn.textContent = filterPanel.classList.contains('active') 
      ? 'Ẩn bộ lọc' 
      : 'Bộ lọc';
  });

  // Khởi tạo lần đầu
  updatePriceDisplay();
  applyFiltersAndSort();
});
</script>
@endsection