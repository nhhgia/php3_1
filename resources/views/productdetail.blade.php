
@extends('master')
@section('title', 'Sản phẩm 1')
@section('page', 'prodetail')
@section('content')
<div class="detail-page">
  <!-- Mascot trái (sticky, opacity nhẹ) -->
  <div class="detail-mascot-left">
    <img src="{{asset('img/mascot/'. $product->game->mascos_left)}}" alt="{{ $product->name }}" class="detail-mascot-img">
  </div>

  <!-- Container chính (8 cột) -->
  <div class="site-container">
    <div class="detail-content">

      <!-- ==================== SECTION 1: Thông tin sản phẩm ==================== -->
      <section class="detail-product-section">
        <div class="detail-product-layout">

          <!-- Gallery -->
          <div class="detail-gallery">
            <!-- Ảnh chính -->
            <div class="detail-main-image-container">
              <img id="detail-main-image" 
                   src="{{asset('img/products/'. $product->image)}}" 
                   alt="Arknights Exusiai 1/7 Scale Figure" 
                   class="detail-main-image">
            </div>

            <!-- Thumbnail list -->
            <div class="detail-thumbnail-list">
              <img src="https://picsum.photos/seed/exusiai/150/150" 
                   data-large="https://picsum.photos/seed/exusiai/600/600" 
                   alt="View 1" class="detail-thumbnail active">
              <img src="https://picsum.photos/seed/exusiai-back/150/150" 
                   data-large="https://picsum.photos/seed/exusiai-back/600/600" 
                   alt="View 2" class="detail-thumbnail">
              <img src="https://picsum.photos/seed/exusiai-side/150/150" 
                   data-large="https://picsum.photos/seed/exusiai-side/600/600" 
                   alt="View 3" class="detail-thumbnail">
              <img src="https://picsum.photos/seed/exusiai-box/150/150" 
                   data-large="https://picsum.photos/seed/exusiai-box/600/600" 
                   alt="View 4" class="detail-thumbnail">
              <img src="https://picsum.photos/seed/exusiai-detail/150/150" 
                   data-large="https://picsum.photos/seed/exusiai-detail/600/600" 
                   alt="View 5" class="detail-thumbnail">
            </div>
          </div>

          <!-- Thông tin sản phẩm -->
          <div class="detail-info">
            <h1 class="detail-title">{{ $product->name }}</h1>
            
            <div class="detail-price">{{ $product->price }}</div>

            <!-- Phân loại (Variant) -->
            <div class="detail-variant">
              <p class="detail-variant-label">Version</p>
              <div class="detail-variant-buttons">
                <button class="detail-variant-btn active" data-variant="Standard">Standard</button>
                <button class="detail-variant-btn" data-variant="Deluxe">Deluxe</button>
                <button class="detail-variant-btn" data-variant="Limited">Limited</button>
              </div>
            </div>

            <!-- Số lượng -->
            <div class="detail-quantity">
              <button class="detail-qty-decrease">-</button>
              <input type="number" id="detail-qty-input" class="detail-qty-input" value="1" min="1">
              <button class="detail-qty-increase">+</button>
            </div>

            <!-- Action buttons -->
            <div class="detail-actions">
              <button class="detail-add-cart">Thêm vào giỏ hàng</button>
              <button class="detail-buy-now">Mua ngay</button>
            </div>
          </div>
        </div>
      </section>

      <!-- ==================== SECTION 2: Thông tin chi tiết ==================== -->
      <section class="detail-description">
        <h2 class="detail-section-title">Thông tin chi tiết</h2>
        <table class="detail-spec-table">
          <tr>
            <th>Hãng sản xuất</th>
            <td>Good Smile Company</td>
          </tr>
          <tr>
            <th>Game</th>
            <td>Arknights</td>
          </tr>
          <tr>
            <th>Chất liệu</th>
            <td>PVC, ABS</td>
          </tr>
          <tr>
            <th>Kích thước</th>
            <td>25cm (cao)</td>
          </tr>
          <tr>
            <th>Tỉ lệ figure</th>
            <td>1/7</td>
          </tr>
          <tr>
            <th>Ngày phát hành</th>
            <td>15/03/2025</td>
          </tr>
        </table>
      </section>

      <!-- ==================== SECTION 3: Đánh giá & bình luận ==================== -->
      <section class="detail-review">
        <h2 class="detail-section-title">Đánh giá & bình luận</h2>

        <!-- Review summary -->
        <div class="detail-review-summary">
          <div class="detail-stars">★★★★☆</div>
          <span class="detail-review-score">4.5 / 5</span>
          <span class="detail-review-count">(128 đánh giá)</span>
        </div>

        <!-- Danh sách comment -->
        <div class="detail-review-list">
          <!-- Comment 1 -->
          <div class="detail-review-item">
            <img src="https://picsum.photos/seed/avatar1/60/60" alt="Avatar" class="detail-review-avatar">
            <div class="detail-review-content">
              <div class="detail-review-header">
                <span class="detail-review-username">animefan_vn</span>
                <span class="detail-review-stars">★★★★★</span>
                <span class="detail-review-date">14/03/2026</span>
              </div>
              <p class="detail-review-text">Figure siêu đẹp, chi tiết cực nét, sơn rất mịn. Ship nhanh, đóng gói cẩn thận!</p>
            </div>
          </div>

          <!-- Comment 2 -->
          <div class="detail-review-item">
            <img src="https://picsum.photos/seed/avatar2/60/60" alt="Avatar" class="detail-review-avatar">
            <div class="detail-review-content">
              <div class="detail-review-header">
                <span class="detail-review-username">arknights_love</span>
                <span class="detail-review-stars">★★★★☆</span>
                <span class="detail-review-date">10/03/2026</span>
              </div>
              <p class="detail-review-text">Đẹp nhưng giá hơi cao so với chất lượng. Vẫn recommend cho fan Arknights!</p>
            </div>
          </div>
        </div>

        <!-- Form viết bình luận -->
        <form id="detail-review-form" class="detail-review-form">
          <p class="detail-form-label">Đánh giá của bạn</p>
          <div class="detail-star-select">
            <button type="button" class="detail-star-btn" data-value="1">★</button>
            <button type="button" class="detail-star-btn" data-value="2">★</button>
            <button type="button" class="detail-star-btn" data-value="3">★</button>
            <button type="button" class="detail-star-btn" data-value="4">★</button>
            <button type="button" class="detail-star-btn active" data-value="5">★</button>
          </div>
          <textarea placeholder="Viết bình luận của bạn..." class="detail-review-textarea"></textarea>
          <button type="submit" class="detail-review-submit">Gửi đánh giá</button>
        </form>
      </section>

      <!-- ==================== SECTION 4: Sản phẩm liên quan ==================== -->
      <section class="detail-related">
        <h2 class="detail-section-title">Sản phẩm liên quan</h2>
        <div class="detail-related-grid">
          <!-- Product 1 -->
          <div class="detail-related-card">
            <img src="https://picsum.photos/seed/product2/300/300" alt="Surtr Figure" class="detail-related-image">
            <h3 class="detail-related-name">Arknights Surtr 1/7 Scale Figure</h3>
            <p class="detail-related-price">1.350.000đ</p>
          </div>
          <!-- Product 2 -->
          <div class="detail-related-card">
            <img src="https://picsum.photos/seed/product3/300/300" alt="Amiya Figure" class="detail-related-image">
            <h3 class="detail-related-name">Arknights Amiya 1/7 Scale Figure</h3>
            <p class="detail-related-price">1.280.000đ</p>
          </div>
          <!-- Product 3 -->
          <div class="detail-related-card">
            <img src="https://picsum.photos/seed/product4/300/300" alt="SilverAsh Figure" class="detail-related-image">
            <h3 class="detail-related-name">Arknights SilverAsh 1/7 Scale Figure</h3>
            <p class="detail-related-price">1.420.000đ</p>
          </div>
          <!-- Product 4 -->
          <div class="detail-related-card">
            <img src="https://picsum.photos/seed/product5/300/300" alt="Mudrock Figure" class="detail-related-image">
            <h3 class="detail-related-name">Arknights Mudrock 1/7 Scale Figure</h3>
            <p class="detail-related-price">1.380.000đ</p>
          </div>
        </div>
      </section>

    </div>
  </div>

  <!-- Mascot phải -->
  <div class="detail-mascot-right">
    <img src="https://picsum.photos/seed/mascot2/300/600" alt="Mascot Right" class="detail-mascot-img">
  </div>
</div>
@endsection