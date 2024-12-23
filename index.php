<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lễ Hội hoa phượng đỏ</title>
    <!-- Icon title -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/logo/icon-logo.svg" />
    <!-- fontAwesome Css -->
    <!-- <link rel="stylesheet" href="./assets/css/Library/fontawesome.min.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <!-- Swiper Css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Bootstrap Css -->
    <link rel="stylesheet" type="text/css" href="./assets/css/Library/bootstrap.min.css" />
    <!-- Fancybox Css -->
    <link rel="stylesheet" type="text/css" href="./assets/css/Library/jquery.fancybox.min.css" />
    <!-- Font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />

    <!-- Style Css -->
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <!-- Begin Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo trong thanh menu -->
                <a class="navbar-brand" href="#">
                    <img src="./assets/images/icon/logo.png" alt="" />
                </a>
                <!-- Nút toggle cho di động -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Menu chính -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="#">Trang chủ</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Giới thiệu</a></li>
                        <li class="nav-item"><a class="nav-link" href="#feature">Đặc trưng</a></li>
                        <li class="nav-item"><a class="nav-link" href="#locations">Địa điểm</a></li>
                        <li class="nav-item"><a class="nav-link" href="#gallery">Hình ảnh và Video</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End Header -->
    <!-- Begin Content -->
    <main class="home">
        <section class="banner">
            <div class="slogan">
                Hải Phòng rực rỡ sắc hoa phượng <br />
                <small>Hè này, cùng nhau đến Hải Phòng</small>
            </div>
        </section>

        <section class="about" id="about">
            <div class="about-wrapper">
                <div class="container">
                    <div class="about-header">
                        <div class="text-center mb-4">
                            <h2 class="about-header__title">Giới thiệu về Lễ hội Hoa Phượng Đỏ</h2>
                            <p class="about-header__desc">Khám phá lịch sử, ý nghĩa và những điểm đặc biệt của lễ hội.
                            </p>
                        </div>
                    </div>
                    <div class="about-detail">
                        <div class="row align-items-center">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3 class="about-detail__header fw-bold">Giới thiệu chung</h3>
                                    <p class="about-detail__text">Lễ hội Hoa Phượng Đỏ là một sự kiện văn hóa đặc sắc,
                                        được tổ chức thường niên vào mùa hè tại Hải Phòng. Lấy cảm hứng từ vẻ đẹp rực rỡ
                                        của hoa phượng – loài hoa biểu tượng cho tuổi trẻ và mùa hè, lễ hội đã trở thành
                                        điểm hẹn không thể bỏ qua của người dân Hải Phòng và du khách thập phương.</p>
                                    <h4 class="about-detail__header fw-bold mt-4">Lịch sử hình thành</h4>
                                    <p class="about-detail__text">Được khởi nguồn từ ý tưởng tôn vinh vẻ đẹp của hoa
                                        phượng và quảng bá hình ảnh thành phố, lễ hội ban đầu chỉ là một hoạt động văn
                                        hóa nhỏ. Qua thời gian, với sức hút ngày càng lớn, lễ hội đã phát triển và trở
                                        thành một sự kiện văn hóa - xã hội quan trọng của thành phố.</p>
                                    <h4 class="about-detail__header fw-bold mt-4">Ý nghĩa và mục đích</h4>

                                    <ul class="about-detail-list list-group">
                                        <li class="about-detail list-group-item">
                                            <div class="about-detail__svg">
                                                <i class="fa-solid fa-circle-dot"></i>
                                            </div>
                                            <div class="about-detail__text">Tôn vinh vẻ đẹp của hoa phượng: Hoa phượng
                                                không chỉ là loài hoa biểu tượng cho tuổi trẻ, mùa hè mà còn là biểu
                                                tượng của thành phố Hải Phòng. Lễ hội là dịp để tôn vinh vẻ đẹp rực rỡ
                                                của loài hoa này.</div>
                                        </li>
                                        <li class="about-detail list-group-item">
                                            <div class="about-detail__svg">
                                                <i class="fa-solid fa-circle-dot"></i>
                                            </div>
                                            <div class="about-detail__text">Quảng bá hình ảnh Hải Phòng: Lễ hội góp phần
                                                quảng bá hình ảnh Hải Phòng đến với bạn bè trong và ngoài nước, giới
                                                thiệu những nét đẹp văn hóa, con người và tiềm năng phát triển của thành
                                                phố.</div>
                                        </li>
                                        <li class="about-detail list-group-item">
                                            <div class="about-detail__svg">
                                                <i class="fa-solid fa-circle-dot"></i>
                                            </div>
                                            <div class="about-detail__text">Gắn kết cộng đồng: Lễ hội là dịp để người
                                                dân Hải Phòng cùng nhau sum họp, giao lưu, chia sẻ những giá trị văn hóa
                                                truyền thống, tăng cường tình đoàn kết cộng đồng.</div>
                                        </li>
                                        <li class="about-detail list-group-item">
                                            <div class="about-detail__svg">
                                                <i class="fa-solid fa-circle-dot"></i>
                                            </div>
                                            <div class="about-detail__text">Phát triển du lịch: Lễ hội thu hút một lượng
                                                lớn du khách, góp phần phát triển du lịch địa phương.</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="about-img col-lg-6">
                                    <img src="./assets/images/about/about.jpg" class="img-fluid rounded shadow"
                                        alt="Hình ảnh Hoa Phượng Đỏ" />
                                    <img src="./assets/images/about/about-1.jpg" class="img-fluid rounded shadow"
                                        alt="Hình ảnh Hoa Phượng Đỏ" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="feature" id="feature">
            <div class="feature-wrapper">
                <div class="container">
                    <div class="feature-header">
                        <h3 class="feature-header__title text-center">Đặc trưng của Lễ hội</h3>
                        <p class="feature-header__desc">
                            Lễ hội Hoa Phượng Đỏ không chỉ là một sự kiện văn hóa đơn thuần mà còn là một bản giao hưởng
                            sắc màu, âm thanh và hương vị đặc trưng của thành phố Hải Phòng. Đặc trưng nổi bật của lễ
                            hội chính là sự kết hợp hài hòa giữa truyền thống và hiện đại, giữa nét đẹp văn hóa dân tộc
                            và những xu hướng mới. Các hoạt động văn hóa, nghệ thuật đa dạng như hội diễn ca múa nhạc,
                            triển lãm ảnh, trình diễn thời trang... luôn được tổ chức quy mô lớn, thu hút đông đảo người
                            dân và du khách. Bên cạnh
                            đó, lễ hội còn là dịp để quảng bá ẩm thực đặc sản, các sản phẩm thủ công mỹ nghệ độc đáo của
                            địa phương, góp phần thúc đẩy phát triển kinh tế - xã hội. Đặc biệt, hình ảnh những bông hoa
                            phượng đỏ rực rỡ cùng với không khí sôi động, náo nhiệt của lễ hội đã trở thành một biểu
                            tượng không thể thiếu của thành phố Cảng.
                        </p>
                    </div>
                    <div class="feature-detail">
                        <div class="row">
                            <div class="col">
                                <div class="feature-popular">
                                    <div class="feature-card card">
                                        <div class="feature-img">
                                            <img src="./assets/images/feature/feature-parade.jpg" class="img-before"
                                                alt="" style="width: 100%" />
                                        </div>
                                        <div class="card-body">
                                            <div class="feature-card__title">Diễu hành nghệ thuật</div>
                                            <p class="feature-card__text card-text"><br />Các đoàn nghệ thuật trình diễn
                                                trên các tuyến phố chính, tạo nên không khí sôi động và đầy màu sắc.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="feature-popular">
                                    <div class="feature-card card">
                                        <div class="feature-img">
                                            <img src="./assets/images/feature/feature-music-perform.jpg"
                                                class="img-before" alt="" />
                                        </div>
                                        <div class="card-body">
                                            <div class="feature-card__title">Biểu diễn âm nhạc</div>
                                            <p class="feature-card__text card-text"><br />Các chương trình ca nhạc đặc
                                                sắc với sự tham gia của các nghệ sĩ nổi tiếng.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="feature-popular">
                                    <div class="feature-card card">
                                        <div class="feature-img">
                                            <img src="./assets/images/feature/feature-exhibition.jpg" class="img-before"
                                                alt="" />
                                        </div>
                                        <div class="card-body">
                                            <div class="feature-card__title">Hội chợ và triển lãm</div>
                                            <p class="feature-card__text card-text"><br />Trưng bày các sản phẩm đặc
                                                trưng của Hải Phòng, từ ẩm thực đến các mặt hàng thủ công.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="feature-popular">
                                    <div class="feature-card card">
                                        <div class="feature-img">
                                            <img src="./assets/images/feature/feature-firework.jpg" class="img-before"
                                                alt="" />
                                        </div>
                                        <div class="card-body">
                                            <div class="feature-card__title">Màn pháo hoa rực rỡ</div>
                                            <p class="feature-card__text card-text"><br />Khép lại lễ hội bằng những màn
                                                pháo hoa lung linh, đầy ý nghĩa.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Hình ảnh và video -->
                </div>
            </div>
        </section>
        <section class="media" id="gallery">
            <div class="media-wrapper">
                <div class="container">
                    <div class="media-header">
                        <h3 class="media-header__title">Hình ảnh và Video</h3>
                    </div>
                    <div class="row mt-3">
                        <!-- Hình ảnh -->
                        <div class="col-md-4 mb-3">
                            <div class="media-img">
                                <img src="./assets/images/media/meida-festival-1.jpg" class="img-fluid rounded shadow"
                                    alt="Hình ảnh lễ hội 1" />
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="media-img">
                                <img src="./assets/images/media/meida-festival-2.jpg" class="img-fluid rounded shadow"
                                    alt="Hình ảnh lễ hội 2" />
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="media-img">
                                <img src="./assets/images/media/meida-festival-3.jpg" class="img-fluid rounded shadow"
                                    alt="Hình ảnh lễ hội 3" />
                            </div>
                        </div>
                        <!-- Video -->
                        <div class="col-12">
                            <div class="ratio ratio-16x9">
                                <iframe src="https://www.youtube.com/embed/iTwC3uAbal8"
                                    title="Video về Lễ hội Hoa Phượng Đỏ" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="location" id="locations">
            <div class="location-wrapper">
                <div class="container">
                    <!-- Tiêu đề -->
                    <div class="text-center mb-4">
                        <div class="location-header">
                            <h2 class="location-header__title">Địa Điểm - Lễ Hội Hoa Phượng Đỏ</h2>
                            <p class="location-header__desc">Giới thiệu các địa điểm - Hướng dẫn di chuyển</p>
                        </div>
                    </div>
                    <div class="location-detail">
                        <!-- Nội dung chính -->
                        <div class="row">
                            <div class="col-lg-6">
                                <h3 class="location-detail__title fw-bold">Giới Thiệu Các Địa Điểm</h3>
                                <ul class="location-detail-list list-group">
                                    <li class="location-detail list-group-item">
                                        <div class="location-detail__svg">
                                            <i class="fa-solid fa-circle-dot"></i>
                                        </div>
                                        <div class="location-detail__text">Quảng trường Nhà hát thành phố Hải Phòng: Đây
                                            là trung tâm chính diễn ra các hoạt động của lễ hội, bao gồm lễ khai mạc và
                                            các buổi biểu diễn văn hóa, nghệ thuật. Nơi này nổi bật với không gian rộng
                                            rãi và kiến trúc cổ kính của Nhà hát lớn, một biểu tượng văn hóa của thành
                                            phố.</div>
                                    </li>
                                    <li class="location-detail list-group-item">
                                        <div class="location-detail__svg">
                                            <i class="fa-solid fa-circle-dot"></i>
                                        </div>
                                        <div class="location-detail__text">Công viên Tam Bạc: Một địa điểm lý tưởng để
                                            tổ chức các hoạt động triển lãm, hội chợ hoặc các sự kiện ngoài trời trong
                                            khuôn khổ lễ hội. Công viên nằm bên cạnh hồ Tam Bạc, mang đến khung cảnh thơ
                                            mộng và gần gũi.</div>
                                    </li>
                                    <li class="location-detail list-group-item">
                                        <div class="location-detail__svg">
                                            <i class="fa-solid fa-circle-dot"></i>
                                        </div>
                                        <div class="location-detail__text">Quần đảo Cát Bà: Nằm trong chương trình mở
                                            rộng của lễ hội, đây là khu vực giới thiệu vẻ đẹp thiên nhiên và văn hóa của
                                            Hải Phòng. Các hoạt động ngoài trời như triển lãm và trình diễn văn hóa
                                            thường được tổ chức tại đây.</div>
                                    </li>
                                </ul>
                                <h4 class="location-detail__title fw-bold mt-4">Hướng Dẫn Di Chuyển</h4>
                                <ul class="location-detail-list list-group">
                                    <li class="location-detail list-group-item">
                                        <div class="location-detail__svg">
                                            <i class="fa-solid fa-circle-dot"></i>
                                        </div>
                                        <div class="location-detail__text">
                                            Bằng phương tiện công cộng:
                                            <br />
                                            <div class="fw-bold">Từ Hà Nội:</div>
                                            Xe khách từ các bến Gia Lâm, Nước Ngầm, hoặc Mỹ Đình đi Hải Phòng có tần
                                            suất liên tục (khoảng 1-2 giờ/chuyến). Bạn có thể chọn các hãng xe uy tín
                                            như Hoàng Long, Hải Âu, hoặc xe limousine.
                                            <br />
                                            <div class="fw-bold">Di chuyển trong thành phố:</div>
                                            Sử dụng xe bus hoặc taxi để đến các địa điểm như Quảng trường Nhà hát, công
                                            viên Tam Bạc.
                                        </div>
                                    </li>
                                    <li class="location-detail list-group-item">
                                        <div class="location-detail__svg">
                                            <i class="fa-solid fa-circle-dot"></i>
                                        </div>
                                        <div class="location-detail__text">
                                            Bằng phương tiện cá nhân:
                                            <br />
                                            <div class="fw-bold">Từ Hà Nội:</div>
                                            Theo cao tốc Hà Nội - Hải Phòng (quốc lộ 5B), quãng đường khoảng 100 km, mất
                                            khoảng 1,5-2 giờ. <br />
                                            <div class="fw-bold">Di chuyển trong thành phố:</div>
                                            Lái xe cá nhân hoặc thuê xe máy tại trung tâm Hải Phòng để di chuyển dễ
                                            dàng.
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <img src="./assets/images/location/location.webp" class="img-fluid rounded shadow"
                                    alt="Lễ hội Hoa Phượng Đỏ" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cuisine">
            <div class="mt-5">
                <div class="cuisine-wrapper">
                    <div class="container">
                        <div class="cuisine-header">
                            <h3 class="text-center">Ẩm thực và Không gian lễ hội</h3>
                        </div>
                        <div class="cuisine-detail">
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="d-flex gap-4">
                                            <div class="cuisine-img">
                                                <img src="./assets/images/cuisine/cuisine.jpg" alt="" />
                                            </div>
                                            <div class="cuisine-content">
                                                <div class="cuisine-content__header">Ẩm thực đặc sản</div>
                                                <div class="cuisine-content__content">Trong lễ hội, các món ăn đặc sản
                                                    của Hải Phòng được bày bán tại các khu vực gian hàng. Du khách sẽ
                                                    được thưởng thức những món ăn đặc trưng như bún cá, nem cua bể, bánh
                                                    đa cua... Những món ăn này không chỉ ngon mà còn mang đậm hương vị
                                                    của miền đất cảng.</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="d-flex gap-4">
                                            <div class="cuisine-img">
                                                <img src="./assets/images/cuisine/cuisine-fish-noodile.jpg" alt="" />
                                            </div>
                                            <div class="cuisine-content">
                                                <div class="cuisine-content__header">Bún cá</div>
                                                <div class="cuisine-content__content">
                                                    Bún cá Hải Phòng là một món ăn đặc sản nổi tiếng của thành phố cảng
                                                    Hải Phòng, mang hương vị đặc trưng khó quên. Món bún này nổi bật với
                                                    nước dùng trong, ngọt thanh, được nấu từ xương cá và các loại rau
                                                    củ. Điểm nhấn đặc biệt của bún cá Hải Phòng chính là cá rán giòn,
                                                    thường là cá rô hoặc cá quả, được tẩm ướp gia vị vừa vặn, sau đó
                                                    chiên vàng thơm phức. <br />Bún được ăn kèm với rau sống tươi mát,
                                                    gồm rau xà lách, rau thơm, giá đỗ và hành lá thái nhỏ. Một số nơi
                                                    còn
                                                    thêm dọc mùng hoặc hoa chuối thái mỏng để tăng hương vị. Khi thưởng
                                                    thức, thực khách thường thêm một chút chanh, ớt tươi và dấm tỏi để
                                                    làm dậy lên vị chua cay, hấp dẫn đặc trưng. <br />Bún cá Hải Phòng
                                                    không chỉ là một món ăn ngon miệng mà còn mang đậm hương vị quê
                                                    hương, khiến ai xa xứ cũng phải nhớ nhung. Món ăn này thường được
                                                    thưởng thức vào buổi sáng hoặc trưa, mang đến cảm giác thanh mát và
                                                    trọn vẹn cho một ngày dài.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="d-flex gap-4">
                                            <div class="cuisine-img">
                                                <img src="./assets/images/cuisine/bun-oc-ha-noi.webp" alt="" />
                                            </div>
                                            <div class="cuisine-content">
                                                <div class="cuisine-content__header">Bún ốc</div>
                                                <div class="cuisine-content__content">
                                                    Bún ốc Hải Phòng là một món ăn dân dã nhưng đậm đà hương vị của vùng
                                                    đất cảng, mang nét đặc trưng riêng so với các vùng miền khác. Món ăn
                                                    này gây ấn tượng bởi sự hòa quyện tinh tế giữa nước dùng chua thanh,
                                                    thịt ốc dai giòn và các nguyên liệu tươi ngon đi kèm. <br />Nước
                                                    dùng của bún ốc Hải Phòng được chế biến từ xương hầm, thêm giấm bỗng
                                                    hoặc me để tạo độ chua nhẹ, cùng cà chua và hành phi thơm lừng. Điểm
                                                    nhấn chính là những con ốc béo ngậy, được làm sạch kỹ lưỡng,
                                                    luộc chín vừa tới để giữ nguyên độ tươi ngon, giòn ngọt. <br />Bún
                                                    ốc Hải Phòng thường được ăn kèm với rau sống như rau muống chẻ, hoa
                                                    chuối thái mỏng, rau thơm và giá đỗ, tạo sự cân bằng giữa hương vị
                                                    và màu sắc. Khi thưởng thức, thực khách có thể thêm một chút mắm
                                                    tôm, chanh, ớt hoặc sa tế để làm dậy vị cay nồng, đặc trưng của ẩm
                                                    thực Hải Phòng.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="d-flex gap-4">
                                            <div class="cuisine-img">
                                                <img src="./assets/images/cuisine/banh-duc-tau-hai-phong.webp" alt="" />
                                            </div>
                                            <div class="cuisine-content">
                                                <div class="cuisine-content__header">Bánh đúc hải phòng</div>
                                                <div class="cuisine-content__content">
                                                    Bánh đúc Hải Phòng là một món ăn dân dã nhưng lại rất độc đáo và
                                                    được lòng thực khách bởi hương vị thơm ngon, đậm đà bản sắc ẩm thực
                                                    vùng đất cảng. Khác với bánh đúc ở nhiều nơi, bánh đúc Hải Phòng
                                                    thường được chế biến với hai loại chính: bánh đúc mặn và bánh đúc
                                                    ngọt, mỗi loại mang một nét đặc trưng riêng biệt. <br />Bánh đúc mặn
                                                    Hải Phòng nổi bật với phần bánh mềm mịn, trắng tinh, được làm từ bột
                                                    gạo và bột năng, dẻo nhưng không dính. Món ăn này được phủ lên trên
                                                    một lớp nhân đậm đà gồm thịt băm, mộc nhĩ xào hành phi thơm lừng,
                                                    cùng nước mắm chua ngọt đặc trưng. Khi ăn, thực khách có thể thêm
                                                    chút rau thơm và ớt tươi để tăng hương vị. <br />Bánh đúc ngọt Hải
                                                    Phòng, thường được làm từ bột gạo pha với nước cốt dừa, có vị ngọt
                                                    dịu, thơm béo. Bánh thường được ăn kèm với mật mía hoặc đường thốt
                                                    nốt thắng sánh, tạo nên một món ăn nhẹ nhàng nhưng không kém phần
                                                    hấp dẫn.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="d-flex gap-4">
                                            <div class="cuisine-img">
                                                <img src="./assets/images/cuisine/lam-nem-cua-be.jpg" alt="" />
                                            </div>
                                            <div class="cuisine-content">
                                                <div class="cuisine-content__header">Nem của bể Hải Phòng</div>
                                                <div class="cuisine-content__content">
                                                    Nem cua bể Hải Phòng là một món ăn đặc sản nổi tiếng của thành phố
                                                    cảng, chinh phục thực khách bởi hương vị thơm ngon và cách chế biến
                                                    tỉ mỉ, công phu. Điểm đặc trưng của nem cua bể Hải Phòng là sự hòa
                                                    quyện giữa hải sản tươi ngon và các nguyên liệu truyền thống, tạo
                                                    nên món ăn đậm đà, hấp dẫn.<br />Phần nhân nem được làm từ thịt cua
                                                    bể tươi chắc thịt, kết hợp với tôm, thịt heo xay, mộc nhĩ, nấm
                                                    hương, cà rốt và giá đỗ. Các nguyên liệu được trộn đều với gia vị và
                                                    gói
                                                    trong lớp bánh đa nem mỏng, đặc biệt là bánh đa Hải Phòng, có độ dai
                                                    và giòn lý tưởng. Nem cua bể thường được gói thành hình vuông, một
                                                    điểm khác biệt so với cách gói truyền thống. <br />Khi chiên, nem
                                                    được rán ngập dầu ở nhiệt độ vừa phải để đảm bảo vỏ ngoài vàng ruộm,
                                                    giòn rụm, trong khi nhân bên trong vẫn giữ được độ ngọt tự nhiên và
                                                    thơm phức. Nem cua bể Hải Phòng thường được ăn kèm với bún, rau sống
                                                    tươi ngon và nước mắm chua ngọt pha chế tinh tế.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button swiper-button-next"></div>
                            <div class="swiper-button swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="feetback" id="feetback">
            <div class="feetback-wrapper">
                <div class="container">
                    <div class="feedback-card card">
                        <div class="card-header">
                            <h5 class="card-title">Đóng góp</h5>
                        </div>
                        <form action="./xuly.php" class="card-body" method="get">
                            <div class="personal-information">
                                <form class="personal-contact">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Họ tên *"
                                            aria-label="Example text with button addon" aria-describedby="button-addon1"
                                            name="name" />
                                    </div>

                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Số điện thoại *"
                                            aria-label="Example text with button addon" aria-describedby="button-addon1"
                                            name="phone" />
                                    </div>

                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Email *"
                                            aria-label="Example text with button addon" aria-describedby="button-addon1"
                                            name="email" />
                                    </div>
                            </div>
                            <textarea class="form-control" aria-label="With textarea" name="comment"></textarea>
                            <div class="card-footer">
                                <?php
                                  if(isset($_GET['chk'])){
                                    $check = $_GET['chk'];
                                    if ($check == 0 ){
                                      echo "<label>Thêm thát bại </label>";
                                    }
                                    if ($check == 1 ) {
                                      echo "<label>Thêm thành công</label>";
                                    }
                                    if ($check == -1 ) {
                                        echo "<label>Thiếu thông tin</label>";
                                    }
                                    if ($check == 3 ) {
                                        echo "<label></label>";
                                    }
                                    }
                                ?>
                                <button type="submit" class="feedback__btn" name="btn-submit">Gửi
                                    ngay</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
    <!-- End Content -->
    <!-- Begin Footer -->
    <footer class="footer bg-dark text-white py-4" id="contact">
        <div class="footer-wrapper">
            <div class="container">
                <!-- Tiêu đề -->
                <div class="contact-detail">
                    <!-- Thông tin liên hệ -->
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="contact-category fw-bold">Thông tin liên hệ</h4>
                            <ul class="contact-way list-unstyled">
                                <li><strong>Điện thoại:</strong> +84 123 456 789</li>
                                <li><strong>Email:</strong> info@hoaphuongdo.vn</li>
                                <li><strong>Địa chỉ:</strong> Số 123, Đường Lê Hồng Phong, Hải Phòng, Việt Nam</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h4 class="contact-category fw-bold">Mạng xã hội</h4>
                            <div class="contact-way">
                                <p class="contact-way__title">Theo dõi lễ hội trên các trang mạng xã hội để cập nhật
                                    thông tin và tham gia vào các hoạt động thú vị!</p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="https://www.facebook.com/hoaphuongdo" target="_blank"
                                            class="text-decoration-none">
                                            <i class="fa-brands fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://twitter.com/hoaphuongdo" target="_blank"
                                            class="text-decoration-none">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="https://www.instagram.com/hoaphuongdo" target="_blank"
                                            class="text-decoration-none">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- End Header-toggler -->
    <!-- Jquery JS -->
    <script type="text/javascript" src="./assets/js/Library/jquery.min.js"></script>
    <!-- Script Bootstrap -->
    <script type="text/javascript" src="./assets/js/Library/bootstrap.bundle.min.js"></script>
    <!-- General JS -->
    <script type="text/javascript" src="./assets/js/general.js"></script>
    <!-- Demo Swiper -->
    <script type="text/javascript" src="./assets/js/Library/swiper-bundle.min.js"></script>
    <script>
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    </script>
</body>

</html>