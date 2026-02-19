document.addEventListener('DOMContentLoaded', () => {
    // -------------------------
    // モバイルメニュー処理
    // -------------------------
    const burger = document.querySelector('#burger');
    const mobileMenu = document.querySelector('#mobileMenu');
    const mobileMenuOverlay = document.querySelector('#mobileMenuOverlay');
    const body = document.body;
  
    // 要素が見つからない場合でもメニューは動作させる（オーバーレイはオプション）
    if (burger && mobileMenu) {
      // オーバーレイがない場合は処理をスキップ
      if (!mobileMenuOverlay) {
        console.warn('mobileMenuOverlay not found, continuing without overlay');
      }
      // メニューを開く関数
      const openMenu = () => {
        burger.classList.add('is-active');
        burger.setAttribute('aria-expanded', 'true');
        burger.setAttribute('aria-label', 'メニューを閉じる');
        mobileMenu.classList.add('is-active');
        if (mobileMenuOverlay) {
          mobileMenuOverlay.classList.add('is-active');
        }
        body.classList.add('no-scroll');
        // スクロール位置をリセット
        mobileMenu.scrollTo(0, 0);
      };

      // メニューを閉じる関数
      const closeMenu = () => {
        burger.classList.remove('is-active');
        burger.setAttribute('aria-expanded', 'false');
        burger.setAttribute('aria-label', 'メニューを開く');
        mobileMenu.classList.remove('is-active');
        if (mobileMenuOverlay) {
          mobileMenuOverlay.classList.remove('is-active');
        }
        body.classList.remove('no-scroll');
      };

      // ハンバーガークリックでメニュー開閉
      burger.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();
        
        if (burger.classList.contains('is-active')) {
          closeMenu();
        } else {
          openMenu();
        }
      });

      // オーバーレイクリックでメニューを閉じる
      if (mobileMenuOverlay) {
        mobileMenuOverlay.addEventListener('click', () => {
          closeMenu();
        });
      }

      // ESCキーでメニューを閉じる
      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && mobileMenu.classList.contains('is-active')) {
          closeMenu();
        }
      });
  
      // メニュー内リンククリックでメニューを閉じる
      const mobileMenuItems = mobileMenu.querySelectorAll('a');
      mobileMenuItems.forEach(item => {
        item.addEventListener('click', () => {
          // 少し遅延させてスムーズな遷移を確保
          setTimeout(() => {
            closeMenu();
          }, 100);
        });
      });

      // メニュー外クリックで閉じる（メニュー自体のクリックは無視）
      mobileMenu.addEventListener('click', (e) => {
        e.stopPropagation();
      });

      document.addEventListener('click', (e) => {
        if (mobileMenu.classList.contains('is-active') && 
            !mobileMenu.contains(e.target) && 
            !burger.contains(e.target)) {
          closeMenu();
        }
      });
    }
  
    // -------------------------
    // ヘッダーの表示切替処理
    // -------------------------
    let lastScroll = 0;
    const header = document.querySelector('.header');
  
    if (header) {
      window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
  
        if (currentScroll > lastScroll && currentScroll > 100) {
          // 下にスクロール：ヘッダーを非表示
          header.classList.add('hide');
        } else {
          // 上にスクロール or ページ上部：ヘッダーを表示
          header.classList.remove('hide');
        }
  
        lastScroll = currentScroll;
      });
    }
  });