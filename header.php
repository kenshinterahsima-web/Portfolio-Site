<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="寺嶋絃真のポートフォリオサイト。Webデザイン・UI/UX・グラフィック制作など、これまでの制作実績やプロフィールを掲載しています。">
    <meta name="keywords" content="ポートフォリオ,Webデザイン,UI/UX,グラフィック,クリエイター,寺嶋絃真">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="寺嶋絃真 | Webデザイナー">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/ogp.jpg">
    <meta property="og:site_name" content="寺嶋絃真 Portfolio">
    <meta property="og:description" content="Webデザイナー寺嶋絃真のポートフォリオサイト。Webデザイン・UI/UX・グラフィック制作などの実績やプロフィールを掲載しています。">
    <!-- X (Twitter) Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="寺嶋絃真 Portfolio | Webデザイナー">
    <meta name="twitter:description" content="Webデザイナー寺嶋絃真のポートフォリオサイト。Webデザイン・UI/UX・グラフィック制作などの実績やプロフィールを掲載しています。">
    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/ogp.jpg">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel='stylesheet' id='wp-block-library-css' href='/wp-includes/css/dist/block-library/style.min.css?ver=5.3.3'/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/variable.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/index.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/component.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/about.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/service.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/privacypolicy.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/footer.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/works.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/single-works.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/hundred.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/contact.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/estimate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/web-create.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/thanks.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/soon.css">


    <title>Kenshin Terashima</title>
    <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header-inner">
        <div class="header-logo">
            <a href="/#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="Kenshin Terashima"></a>
        </div>

        <div class="nav-wrapper">
            <nav class="menu" id="menu">
                <ul class="g-nav">
                    <li class="g-nav-item"><a href="/works/">実績</a></li>
                    <li class="g-nav-item"><a href="/#price">料金</a></li>
                    <li class="g-nav-item"><a href="/#about">自己紹介</a></li>
                    <li class="g-nav-item"><a href="/#service">サービス</a></li>
                    <li class="g-nav-item"><a href="/#faq">よくある質問</a></li>
                    <li class="header-cta">
                        <a href="/estimate/" class="cta-btn">無料見積もりをする</a>
                    </li>
                    <li class="header-cta">
                        <a href="/contact/" class="cta-btn">カジュアル相談をする</a>
                    </li>
                </ul>
            </nav>
        </div>

        <button class="burger" id="burger" aria-label="メニューを開く" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="mobile-menu-overlay" id="mobileMenuOverlay"></div>

        <div class="mobile-menu" id="mobileMenu" aria-label="モバイルメニュー">
            <ul class="mobile-nav">
                <li>
                    <a href="/works/">
                        実績
                        <img class="nav-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-icon.svg" alt="矢印アイコン">
                    </a>
                </li>
                <li>
                    <a href="/#price">
                        料金
                        <img class="nav-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-icon.svg" alt="矢印アイコン">
                    </a>
                </li>
                <li>
                    <a href="/#about">
                        自己紹介
                        <img class="nav-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-icon.svg" alt="矢印アイコン">
                    </a>
                </li>
                <li>
                    <a href="/#service">
                        サービス
                        <img class="nav-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-icon.svg" alt="矢印アイコン">
                    </a>
                </li>
                <li>
                    <a href="/#faq">
                        よくある質問
                        <img class="nav-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-icon.svg" alt="矢印アイコン">
                    </a>
                </li>
                <li>
                    <a href="/estimate/" class="cta-btn">
                        無料見積もりをする
                        <img class="nav-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-icon.svg" alt="矢印アイコン">
                    </a>
                </li>
                <li>
                    <a href="/contact/" class="cta-btn">
                        カジュアル相談をする
                        <img class="nav-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-icon.svg" alt="矢印アイコン">
                    </a>
                </li>
            </ul>
        </div>

    </div>
  </header>
  
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/mobile-menu.js"></script>

