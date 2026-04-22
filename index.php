<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title( "|", true, "right" ); bloginfo("name"); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;800;900&family=Be+Vietnam+Pro:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  
<?php wp_head(); ?>
</head>

<body>

  <div class="progress-bar" id="progressBar"></div>

  <!-- NAV -->
  <nav>
    <div class="nav-logo">
      <span>m</span>
      MINI AI
    </div>
    <ul class="nav-links">
      <li><a href="#intro">Giới thiệu</a></li>
      <li><a href="#industries">Ngành nghề</a></li>
      <li><a href="#solutions">Giải pháp</a></li>
      <li><a href="#zalooa">Zalo OA</a></li>
      <li><a href="#roadmap">Lộ trình</a></li>
      <li><a href="#why">Tại sao chọn?</a></li>
      <li><a href="#cases">Case Study</a></li>
      <li><a href="https://docs.miniai.vn/">Hướng dẫn kỹ thuật</a></li>
      <li><a href="https://miniapp.edu.vn/congdong">Cộng đồng học tập</a></li>
      <li><a href="#cta">Liên hệ</a></li>
    </ul>
  </nav>

  <!-- HERO -->
  <section id="hero">
    <div class="hero-bg-dots"></div>
    <div class="hero-bg-circle"></div>

    <div class="hero-left">
      <div class="hero-tag fade-in">🇻🇳 Zalo Ecosystem Partner</div>
      <div class="hero-brand fade-in fade-in-delay-1">Học viện</div>
      <div class="hero-sub fade-in fade-in-delay-2">Mini AI</div>
      <p class="hero-desc fade-in fade-in-delay-3">
        Trung tâm chia sẻ kinh nghiệm cho người mới bắt đầu triển khai giải pháp <strong>Zalo Mini App</strong>,
        <strong>Zalo OA</strong>, <strong>Zalo ZBS</strong>, <strong>Zalo ADS</strong> và <strong>Social CRM</strong> —
        giúp doanh nghiệp bán hàng, chăm sóc khách hàng và khai thác data trên hệ sinh thái Zalo.
      </p>
      <div style="display: flex; flex-direction: column; gap: 16px; align-items: flex-start;">
        <a href="https://miniapp.edu.vn/edu/9b.html" class="hero-cta fade-in fade-in-delay-4">
          Khám phá mô hình 9b <span class="hero-cta-arrow">→</span>
        </a>
        <div style="display: flex; gap: 16px; flex-wrap: wrap;">
          <a href="https://minicrm.edu.vn" target="_blank" class="btn-outline fade-in fade-in-delay-5"
            style="font-size: 14px; padding: 12px 24px;">
            Mini CRM khai thác data kiểu mới <span class="hero-cta-arrow">→</span>
          </a>
          <a href="https://aicrm.edu.vn" target="_blank" class="btn-outline fade-in fade-in-delay-5"
            style="font-size: 14px; padding: 12px 24px;">
            AI CRM miễn phí <span class="hero-cta-arrow">→</span>
          </a>
        </div>
      </div>
    </div>

    <div class="hero-right fade-in fade-in-delay-3">
      <div class="hero-phone-mock">
        <div class="phone-screen-header">
          <div class="app-icon">📱</div>
          <span>Mini AI — Zalo App</span>
        </div>
        <div class="phone-features">
          <div class="phone-feat-card">
            <div class="icon">🛒</div>
            <div class="label">E-Commerce</div>
          </div>
          <div class="phone-feat-card">
            <div class="icon">🎯</div>
            <div class="label">Mini Game</div>
          </div>
          <div class="phone-feat-card">
            <div class="icon">⭐</div>
            <div class="label">Loyalty</div>
          </div>
          <div class="phone-feat-card">
            <div class="icon">📊</div>
            <div class="label">Analytics</div>
          </div>
          <div class="phone-feat-card">
            <div class="icon">🤝</div>
            <div class="label">Affiliate</div>
          </div>
          <div class="phone-feat-card">
            <div class="icon">⚡</div>
            <div class="label">Automation</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- INTRO -->
  <section id="intro">
    <div class="section-eyebrow fade-in">Về chúng tôi</div>
    <h2 class="section-title fade-in fade-in-delay-1">Giới thiệu <span class="accent">Mini AI</span></h2>

    <div class="intro-grid">
      <div class="intro-card fade-in fade-in-delay-1">
        <h3>🏢 Về Mini AI</h3>
        <p>Là công ty công nghệ chuyên cung cấp dịch vụ tư vấn và triển khai giải pháp Mini App trên nền tảng siêu ứng
          dụng <strong>Zalo, Momo, Telegram, Line, Kakao</strong>...</p>
      </div>
      <div class="intro-card fade-in fade-in-delay-2">
        <h3>🎯 Sứ Mệnh</h3>
        <p>Sứ mệnh giúp 130.000 thương hiệu Việt tăng trưởng bền vững cùng Mini AI.</p>
      </div>
    </div>
  </section>

  <!-- CLIENTS MARQUEE -->
  <section id="clients">
    <div class="clients-title">
      <div class="section-eyebrow fade-in" style="justify-content:center">Khách hàng tiêu biểu</div>
      <h2 class="section-title fade-in fade-in-delay-1">Được <span class="accent">100+ thương hiệu</span> tin chọn</h2>
    </div>
    <div class="marquee-wrap">
      <div class="marquee">
        <div class="client-chip">🦁 Highlands Coffee</div>
        <div class="client-chip">🌿 Cỏ Cây Hoa Lá</div>
        <div class="client-chip">🏭 Vedan</div>
        <div class="client-chip">🍗 KFC Vietnam</div>
        <div class="client-chip">🛵 Yadea</div>
        <div class="client-chip">💊 PharmaDI</div>
        <div class="client-chip">🏦 VNPT</div>
        <div class="client-chip">☕ Novo Japan</div>
        <div class="client-chip">🏠 Sabirama</div>
        <div class="client-chip">📚 Alpha Books</div>
        <div class="client-chip">🌟 Nerman</div>
        <div class="client-chip">🍺 Pernod Ricard</div>
        <div class="client-chip">🏥 Nhà Khoa Việt Mỹ</div>
        <div class="client-chip">🌾 Mekong</div>
        <div class="client-chip">🦁 Highlands Coffee</div>
        <div class="client-chip">🌿 Cỏ Cây Hoa Lá</div>
        <div class="client-chip">🏭 Vedan</div>
        <div class="client-chip">🍗 KFC Vietnam</div>
        <div class="client-chip">🛵 Yadea</div>
        <div class="client-chip">💊 PharmaDI</div>
      </div>
      <div class="marquee marquee2" style="margin-top:16px">
        <div class="client-chip">🎨 Nhu Khang</div>
        <div class="client-chip">🏋️ Felix</div>
        <div class="client-chip">🏘️ Khang Thinh Land</div>
        <div class="client-chip">🌱 Giọt Nắng</div>
        <div class="client-chip">🧴 Hoff</div>
        <div class="client-chip">🔧 82X</div>
        <div class="client-chip">🎓 Embassy Language</div>
        <div class="client-chip">🛍️ Happy Baker</div>
        <div class="client-chip">🏡 La Maison</div>
        <div class="client-chip">🌺 Lavender Hotel</div>
        <div class="client-chip">🌿 NaDaOils</div>
        <div class="client-chip">🎮 SBOT</div>
        <div class="client-chip">💡 Hector</div>
        <div class="client-chip">🌾 Đất Hùa Spa</div>
        <div class="client-chip">🎨 Nhu Khang</div>
        <div class="client-chip">🏋️ Felix</div>
        <div class="client-chip">🏘️ Khang Thinh Land</div>
        <div class="client-chip">🌱 Giọt Nắng</div>
      </div>
    </div>
  </section>

  <!-- INDUSTRIES -->
  <section id="industries">
    <div class="section-eyebrow fade-in">Phạm vi phục vụ</div>
    <h2 class="section-title fade-in fade-in-delay-1">Hỗ trợ <span class="accent">đa ngành</span></h2>

    <div class="services-row fade-in fade-in-delay-2">
      <a href="https://miniai.vn" style="text-decoration:none;" class="service-badge">
        <div class="dot"></div>Zalo Mini App
      </a>
      <a href="https://miniai.vn" style="text-decoration:none;" class="service-badge">
        <div class="dot"></div>Zalo Official Account
      </a>
      <a href="https://miniai.vn" style="text-decoration:none;" class="service-badge">
        <div class="dot"></div>Zalo Ads
      </a>
      <a href="https://zbs.edu.vn" style="text-decoration:none;" class="service-badge">
        <div class="dot"></div>ZBS Template Message
      </a>
      <a href="https://socialcrm.vn" style="text-decoration:none;" class="service-badge">
        <div class="dot"></div>Social CRM
      </a>
      <a href="https://minigift.vn" style="text-decoration:none;" class="service-badge">
        <div class="dot"></div>Mini gift
      </a>
    </div>

    <div class="industries-grid">
      <div class="industry-card fade-in fade-in-delay-1">
        <div class="icon">🛒</div>
        <div class="name">Thương mại điện tử</div>
      </div>
      <div class="industry-card fade-in fade-in-delay-2">
        <div class="icon">🍜</div>
        <div class="name">F&B</div>
      </div>
      <div class="industry-card fade-in fade-in-delay-3">
        <div class="icon">🏪</div>
        <div class="name">Bán lẻ</div>
      </div>
      <div class="industry-card fade-in fade-in-delay-4">
        <div class="icon">🎓</div>
        <div class="name">Giáo dục</div>
      </div>
      <div class="industry-card fade-in fade-in-delay-1">
        <div class="icon">✈️</div>
        <div class="name">Du lịch</div>
      </div>
      <div class="industry-card fade-in fade-in-delay-2">
        <div class="icon">🏠</div>
        <div class="name">Bất động sản</div>
      </div>
      <div class="industry-card fade-in fade-in-delay-3">
        <div class="icon">💆</div>
        <div class="name">Dịch vụ</div>
      </div>
      <div class="industry-card fade-in fade-in-delay-4">
        <div class="icon">⚡</div>
        <div class="name">& Nhiều ngành khác</div>
      </div>
    </div>
  </section>

  <!-- CHALLENGES -->
  <section id="challenges">
    <div class="section-eyebrow fade-in">Vấn đề thực tế</div>
    <h2 class="section-title fade-in fade-in-delay-1">Thách thức <span class="accent">ngành bán lẻ</span></h2>
    <p class="section-desc fade-in fade-in-delay-2">Những rào cản phổ biến đang kìm hãm tăng trưởng doanh nghiệp Việt
    </p>

    <div class="challenges-grid">
      <div class="challenge-card fade-in fade-in-delay-1">
        <div class="challenge-num">01</div>
        <h3>🔗 Kết nối Online – Offline rời rạc</h3>
        <p>Khó đồng bộ trải nghiệm khách hàng giữa kênh online và offline. CRM phân mảnh, dữ liệu nằm chết trong nhiều
          hệ thống khác nhau. Không có chiến lược giữ chân dài hạn.</p>
      </div>
      <div class="challenge-card fade-in fade-in-delay-2">
        <div class="challenge-num">02</div>
        <h3>📉 Phương thức thu hút bão hòa</h3>
        <p>Phát voucher, phát tờ rơi, roadshow... không đủ hấp dẫn để thu hút khách hàng mới. Không thu được data xác
          thực, không đo lường được hiệu quả marketing.</p>
      </div>
    </div>
  </section>

  <!-- SOLUTIONS -->
  <section id="solutions">
    <div class="section-eyebrow fade-in">Hệ sinh thái giải pháp</div>
    <h2 class="section-title fade-in fade-in-delay-1">Giải pháp <span class="accent">toàn diện</span> trên Zalo</h2>

    <div class="solutions-grid">
      <div class="solution-card fade-in fade-in-delay-1">
        <div class="sol-icon">🛍️</div>
        <h3>E-Commerce Bán Hàng</h3>
        <p>App bán hàng hoàn chỉnh trên Zalo — thông tin sản phẩm, giỏ hàng, mua hàng, quản lý đơn hàng. Giảm phụ thuộc
          sàn TMĐT, tăng biên lợi nhuận.</p>
        <div class="tags">
          <span class="tag">App bán hàng</span>
          <span class="tag">Quản lý đơn</span>
          <span class="tag">Thanh toán</span>
        </div>
      </div>

      <div class="solution-card fade-in fade-in-delay-2">
        <div class="sol-icon">⭐</div>
        <h3>Loyalty & CSKH</h3>
        <p>Tích điểm qua mua hàng, điểm danh, chia sẻ. Đổi voucher & ưu đãi. Thiết lập hạng thành viên. Theo dõi lịch sử
          điểm realtime.</p>
        <div class="tags">
          <span class="tag">Tích điểm</span>
          <span class="tag">Hạng thành viên</span>
          <span class="tag">Voucher</span>
        </div>
      </div>

      <div class="solution-card fade-in fade-in-delay-3">
        <div class="sol-icon">🎯</div>
        <h3>Mini Game Marketing</h3>
        <p>Biến chiến dịch thành trải nghiệm giải trí bùng nổ. Vòng quay may mắn, mini quiz tích điểm — tăng follow OA
          và chuyển đổi thành doanh số tự nhiên.</p>
        <div class="tags">
          <span class="tag">Vòng quay</span>
          <span class="tag">Tích điểm</span>
          <span class="tag">Viral</span>
        </div>
      </div>

      <div class="solution-card fade-in fade-in-delay-4">
        <div class="sol-icon">📋</div>
        <h3>Mini Form Thu Thập Data</h3>
        <p>Form khảo sát tích hợp e-voucher thương hiệu. Thu thập data xác thực, phát voucher tự động, tăng follow OA —
          không cần hậu kỳ thủ công.</p>
        <div class="tags">
          <span class="tag">Thu thập data</span>
          <span class="tag">E-Voucher</span>
          <span class="tag">Tự động hóa</span>
        </div>
      </div>

      <div class="solution-card fade-in fade-in-delay-1">
        <div class="sol-icon">🤝</div>
        <h3>Affiliate Marketing</h3>
        <p>Biến khách hàng thành kênh bán hàng. Chính sách affiliate rõ ràng, theo dõi hoa hồng realtime, bảng xếp hạng,
          định danh khách hàng chuyên sâu.</p>
        <div class="tags">
          <span class="tag">Hoa hồng</span>
          <span class="tag">Đại sứ</span>
          <span class="tag">Leaderboard</span>
        </div>
      </div>

      <div class="solution-card fade-in fade-in-delay-2">
        <div class="sol-icon">⚡</div>
        <h3>Automation Marketing & ZBS</h3>
        <p>Gửi tin Broadcast miễn phí. Automation ZBS theo kịch bản CSKH & upsell. Chatbot tự động 24/7. Tăng tương tác,
          giảm chi phí vận hành đội ngũ.</p>
        <div class="tags">
          <span class="tag">Broadcast</span>
          <span class="tag">ZBS</span>
          <span class="tag">Chatbot</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ZALO OA -->
  <section id="zalooa">
    <div class="section-eyebrow fade-in">Kênh xu hướng 2026</div>
    <h2 class="section-title fade-in fade-in-delay-1">Zalo Official <span class="accent">Account</span></h2>
    <p class="section-desc fade-in fade-in-delay-2">Điểm chạm trung tâm trong hành trình khách hàng trên hệ sinh thái
      Mini AI</p>

    <div class="stats-row">
      <div class="stat-card fade-in fade-in-delay-1">
        <div class="stat-num">78M+</div>
        <div class="stat-label">Người dùng<br>Zalo tại Việt Nam</div>
      </div>
      <div class="stat-card fade-in fade-in-delay-2">
        <div class="stat-num">17,000+</div>
        <div class="stat-label">Zalo Official Accounts<br>đang hoạt động</div>
      </div>
      <div class="stat-card fade-in fade-in-delay-3">
        <div class="stat-num">40M+</div>
        <div class="stat-label">Người theo dõi<br>các Zalo OA</div>
      </div>
      <div class="stat-card fade-in fade-in-delay-4">
        <div class="stat-num">13M+</div>
        <div class="stat-label">Người dùng<br>Mini App trên Zalo</div>
      </div>
    </div>

    <div class="oa-features">
      <div class="oa-feat fade-in fade-in-delay-1">
        <div class="icon">✅</div>
        <h4>Xác thực thương hiệu</h4>
        <p>Nâng cao uy tín, tạo niềm tin với khách hàng qua badge xác thực chính thức của Zalo.</p>
      </div>
      <div class="oa-feat fade-in fade-in-delay-2">
        <div class="icon">📡</div>
        <h4>Kết nối đa chiều</h4>
        <p>Kênh kết nối và chăm sóc khách hàng hiệu quả — trung tâm của toàn bộ hành trình khách hàng.</p>
      </div>
      <div class="oa-feat fade-in fade-in-delay-3">
        <div class="icon">🗄️</div>
        <h4>Thu thập data xác thực</h4>
        <p>Dữ liệu khách hàng xác thực qua số điện thoại Zalo — không lo data ảo, không lo thất thoát.</p>
      </div>
    </div>
  </section>

  <!-- ROADMAP -->
  <section id="roadmap">
    <div class="section-eyebrow fade-in">Triển khai</div>
    <h2 class="section-title fade-in fade-in-delay-1">Lộ trình <span class="accent">6 tháng</span> xây kênh Zalo</h2>

    <div class="roadmap-grid">
      <div class="phase-card fade-in fade-in-delay-1">
        <div class="phase-num">1</div>
        <div class="phase-time">Tháng 1</div>
        <h3>Setup & Làm Quen</h3>
        <ul class="phase-items">
          <li>Set up Zalo OA + Mini App</li>
          <li>Kích hoạt tệp followers hiện tại</li>
          <li>Tạo thói quen truy cập Mini App</li>
          <li>Setup menu CSKH tự động</li>
          <li>Broadcast + ZBS tặng điểm đăng ký</li>
          <li>Mini Game vòng quay may mắn</li>
        </ul>
      </div>

      <div class="phase-card fade-in fade-in-delay-2">
        <div class="phase-num">2</div>
        <div class="phase-time">Tháng 2 – 3</div>
        <h3>Mở Rộng Đa Kênh</h3>
        <ul class="phase-items">
          <li>Thu hút từ Facebook, TikTok, TMĐT</li>
          <li>Zalo thành kênh tương tác trung tâm</li>
          <li>Triển khai Mini Gift & Mini Form</li>
          <li>Gom Zalo cá nhân về 1 tài khoản</li>
          <li>Phân luồng hội thoại, theo dõi KPIs</li>
          <li>Giảm chi phí sàn, tăng doanh số</li>
        </ul>
      </div>

      <div class="phase-card fade-in fade-in-delay-3">
        <div class="phase-num">3</div>
        <div class="phase-time">Tháng 4 – 6</div>
        <h3>Đại Sứ Thương Hiệu</h3>
        <ul class="phase-items">
          <li>Thiết kế cơ chế Đại sứ Thương hiệu</li>
          <li>Triển khai chương trình Affiliate</li>
          <li>Biến KH thân thiết → Đại sứ</li>
          <li>Campaign tuyển dụng đại sứ đa kênh</li>
          <li>Nhân bản đội ngũ bán hàng</li>
          <li>Lan tỏa thương hiệu organically</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- WHY -->
  <section id="why">
    <div class="section-eyebrow fade-in">Lý do lựa chọn</div>
    <h2 class="section-title fade-in fade-in-delay-1">Tại sao chọn <span class="accent">Mini AI?</span></h2>

    <div class="why-grid">
      <div class="why-card fade-in fade-in-delay-1">
        <div class="why-num">01</div>
        <div class="why-icon">💰</div>
        <h3>Tăng doanh thu</h3>
        <p>Thêm nhiều giải pháp bán hàng hiệu quả, biến mỗi khách hàng thành một kênh bán hàng với hệ thống Affiliate
          chuyên sâu.</p>
      </div>
      <div class="why-card fade-in fade-in-delay-2">
        <div class="why-num">02</div>
        <div class="why-icon">🛡️</div>
        <h3>Hiệu quả ổn định</h3>
        <p>Đội ngũ giàu kinh nghiệm quảng cáo & TMĐT. Ưu tiên khách hàng trong mọi ý tưởng, backup dữ liệu và kiểm tra
          sản phẩm kỹ lưỡng.</p>
      </div>
      <div class="why-card fade-in fade-in-delay-3">
        <div class="why-num">03</div>
        <div class="why-icon">🎯</div>
        <h3>Tối ưu trải nghiệm KH</h3>
        <p>Cá nhân hóa trải nghiệm khách hàng, tăng sự gắn kết và giữ chân khách hàng lâu dài với hành trình được thiết
          kế thông minh.</p>
      </div>
      <div class="why-card fade-in fade-in-delay-4">
        <div class="why-num">04</div>
        <div class="why-icon">🔧</div>
        <h3>Linh hoạt mở rộng</h3>
        <p>Thiết kế linh hoạt, tích hợp dễ dàng với hệ thống hiện có. Mở rộng tính năng và tương thích trên mọi nền
          tảng.</p>
      </div>
      <div class="why-card fade-in fade-in-delay-5">
        <div class="why-num">05</div>
        <div class="why-icon">🕐</div>
        <h3>Hỗ trợ 24/7</h3>
        <p>Cam kết hỗ trợ liên tục 24/7, giúp doanh nghiệp giải quyết vấn đề kịp thời và hiệu quả, bất kể thời gian hay
          ngày nghỉ.</p>
      </div>
      <div class="why-card fade-in fade-in-delay-1">
        <div class="why-num">06</div>
        <div class="why-icon">📉</div>
        <h3>Tiết kiệm chi phí</h3>
        <p>Tự động hóa quy trình bán & chăm sóc khách hàng 24/7 — giảm sai sót, nâng cao hiệu suất và gia tăng lợi
          nhuận.</p>
      </div>
    </div>
  </section>

  <!-- CASE STUDIES -->
  <section id="cases">
    <div class="section-eyebrow fade-in">Thực tiễn</div>
    <h2 class="section-title fade-in fade-in-delay-1">Case Study <span class="accent">nổi bật</span></h2>

    <div class="cases-hero-stats">
      <div class="case-stat fade-in fade-in-delay-1">
        <div class="num">11,400</div>
        <div class="label">Lượt quan tâm OA<br>trong 1 chiến dịch</div>
      </div>
      <div class="case-stat fade-in fade-in-delay-2">
        <div class="num">1,200</div>
        <div class="label">Lượt khách đến<br>khai trương siêu thị</div>
      </div>
      <div class="case-stat fade-in fade-in-delay-3">
        <div class="num">4 Tỷ+</div>
        <div class="label">Doanh thu<br>từ Affiliate</div>
      </div>
      <div class="case-stat fade-in fade-in-delay-4">
        <div class="num">2,000</div>
        <div class="label">Đội ngũ đại sứ<br>thương hiệu</div>
      </div>
    </div>

    <div class="cases-grid">
      <div class="case-card fade-in fade-in-delay-1">
        <div class="case-brand">VEDAN</div>
        <div class="case-badge">FMCG</div>
        <p>Triển khai Zalo OA làm kênh kết nối trực tiếp với người tiêu dùng. Phục vụ truyền thông sản phẩm, chăm sóc
          khách hàng và tiếp nhận phản hồi tập trung.</p>
      </div>
      <div class="case-card fade-in fade-in-delay-2">
        <div class="case-brand">Highlands Coffee</div>
        <div class="case-badge">F&B — CPG</div>
        <p>Ứng dụng Zalo Mini App để tăng cường tương tác với khách hàng đại chúng, triển khai chiến dịch tích điểm, ưu
          đãi và mở rộng thu thập dữ liệu ở quy mô lớn.</p>
      </div>
      <div class="case-card fade-in fade-in-delay-3">
        <div class="case-brand">Cỏ Cây Hoa Lá</div>
        <div class="case-badge">Bán lẻ</div>
        <p>Sử dụng Zalo Mini App làm kênh bán và CSKH, tư vấn sản phẩm, duy trì mối quan hệ lâu dài và xây dựng cộng
          đồng khách hàng thân thiết.</p>
      </div>
    </div>
  </section>

  <!-- TEAM -->
  <section id="team">
    <div class="section-eyebrow fade-in">Con người</div>
    <h2 class="section-title fade-in fade-in-delay-1">Đội ngũ <span class="accent">Mini AI</span></h2>

    <div class="team-grid">
      <div class="team-card fade-in fade-in-delay-1">
        <div class="team-icon">⚙️</div>
        <div class="team-num">40</div>
        <div class="team-label">Nhân sự Kỹ thuật</div>
      </div>
      <div class="team-card fade-in fade-in-delay-2">
        <div class="team-icon">🤝</div>
        <div class="team-num">70</div>
        <div class="team-label">Nhân sự Sale</div>
      </div>
      <div class="team-card fade-in fade-in-delay-3">
        <div class="team-icon">📣</div>
        <div class="team-num">10</div>
        <div class="team-label">Nhân sự Marketing</div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section id="cta">
    <div class="cta-inner">
      <div class="section-eyebrow fade-in" style="justify-content:center; margin-bottom:20px">Bắt đầu ngay</div>
      <h2 class="section-title fade-in fade-in-delay-1">
        Sẵn sàng <span class="accent">bùng nổ</span><br>trên hệ sinh thái Zalo?
      </h2>
      <p class="section-desc fade-in fade-in-delay-2">
        Đội ngũ Mini AI sẵn sàng tư vấn giải pháp phù hợp nhất cho mô hình kinh doanh của bạn — từ setup đến tăng trưởng
        dài hạn.
      </p>

      <div class="cta-buttons fade-in fade-in-delay-3">
        <a href="https://miniai.vn/" target="_blank" class="btn-primary">🌐 Xem website</a>
        <a href="http://zalo.me/2174110725254403241?src=qr" class="btn-outline">💬 Chat Zalo ngay</a>
        <a href="https://zalo.me/s/2154115009024146489/?navigation=%2F%3Fshare%3Dtrue&referral=66781aff85abd4cdd56779a6&affCode=lzOkdvhxc2"
          target="_blank" class="btn-outline">📱 Vào Mini APP</a>
      </div>

      <div class="contact-info fade-in fade-in-delay-4">
        <div class="contact-item">
          <div class="ci-icon">📍</div>
          <div class="ci-text">
            <div class="ci-label">Địa chỉ</div>
            <div class="ci-val">152 Đường 16, KĐT Vạn Phúc, Thủ Đức, TP.HCM</div>
          </div>
        </div>
        <div class="contact-item">
          <div class="ci-icon">🌐</div>
          <div class="ci-text">
            <div class="ci-label">Website</div>
            <div class="ci-val">miniai.vn</div>
          </div>
        </div>
        <div class="contact-item">
          <div class="ci-icon">📧</div>
          <div class="ci-text">
            <div class="ci-label">Email</div>
            <div class="ci-val">duongchau@miniai.vn</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div>© 2026 Mini AI Technology. All rights reserved.</div>
    <div>Zalo Mini App · Zalo OA · Social CRM · Automation Marketing</div>
  </footer>

  <script>
    // Scroll progress
    const bar = document.getElementById('progressBar');
    window.addEventListener('scroll', () => {
      const pct = (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
      bar.style.width = pct + '%';
    });

    // Fade-in on scroll
    const fadeEls = document.querySelectorAll('.fade-in');
    const obs = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); }
      });
    }, { threshold: 0.12 });
    fadeEls.forEach(el => obs.observe(el));

    // Nav active state
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.nav-links a');
    const navObs = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          navLinks.forEach(l => l.style.background = '');
          const active = document.querySelector(`.nav-links a[href="#${e.target.id}"]`);
          if (active) active.style.background = 'rgba(39,98,236,0.3)';
        }
      });
    }, { rootMargin: '-30% 0px -60% 0px' });
    sections.forEach(s => navObs.observe(s));
  </script>
<?php wp_footer(); ?>
</body>

</html>