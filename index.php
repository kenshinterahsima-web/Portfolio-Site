<?php get_header(); ?>
<main>
  <section class="fv-top" id="fv">
    <div class="fv-top__bg"></div>
    <div class="fv-top__content inner">
      <div class="fv-top__title">
        <div class="fv-top__text">
          <p class="fv-top__sub">限られた時間と予算でも、"成果につながる"サイトをつくります。</p>
          <p class="fv-top__copy">中小企業のための、短期間・高品質Web制作</p>
        </div>
      </div>
    </div>
  </section>
  

  <section class="works fade-in-up">
    <div class="section-title inner">
      <div class="top-text">
        <p>製作事例</p>
      </div>
      <div class="bottom-text">
        WORKS
      </div>
    </div>

    <div class="works-copy inner">
      <p>戦略設計からデザイン、その後のサポートやご相談にも対応しております。<br>
         事業を深掘りし、最適なご提案をいたします。</p>
    </div>

    <div class="works-list">
      <?php
      $args = array(
        'post_type' => 'works',
        'posts_per_page' => 4, // 最新4件だけ表示
        'orderby' => 'date',
        'order' => 'DESC'
      );
      $works_query = new WP_Query($args);
      if ($works_query->have_posts()):
        while ($works_query->have_posts()):
          $works_query->the_post();
          $work_name = get_field('item-name'); // ACF
          $work_place = get_field('item-place'); // ACF
          $image = get_field('item-img'); // ACF画像フィールド

          // 優先順のスラッグ配列
          $role_order = ['direction', 'design', 'coding', 'photo'];

          // 投稿に紐づく担当部分を取得
          $roles = get_the_terms(get_the_ID(), 'works_role');
          $roles_assoc = [];
          if ($roles && !is_wp_error($roles)) {
            foreach ($roles as $role) {
              $roles_assoc[$role->slug] = $role;
            }
          }

          // アイコン画像のパスをスラッグごとに指定
          $role_icons = [
            'direction' => get_template_directory_uri() . '/assets/images/logo-direction.svg',
            'design'    => get_template_directory_uri() . '/assets/images/logo-design.svg',
            'coding'    => get_template_directory_uri() . '/assets/images/logo-code.svg',
            'photo'     => get_template_directory_uri() . '/assets/images/logo-camera.svg',
          ];
      ?>
        <div class="work-card">
          <div class="work-card__visual">
            <?php if ($image): ?>
              <a href="<?php the_permalink(); ?>" class="work-thumb">
                <?php echo wp_get_attachment_image($image['ID'], 'large'); ?>
              </a>
            <?php endif; ?>
          </div>
          <div class="work-card__info">
            <div class="work-card__client"><?php echo esc_html($work_place); ?></div>
            <div class="work-card__title"><?php echo esc_html($work_name); ?></div>
            <?php if (!empty($roles_assoc)): ?>
              <div class="work-card__tags">
                <?php foreach ($role_order as $slug): ?>
                  <?php if (isset($roles_assoc[$slug])): ?>
                    <span class="work-tag work-tag--<?php echo esc_attr($slug); ?>">
                      <?php echo esc_html($roles_assoc[$slug]->name); ?>
                    </span>
                  <?php endif; ?>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php
        endwhile;
        wp_reset_postdata();
      endif;
      ?>
    </div>
    <a href="<?php echo esc_url( home_url( '/works/' ) );?>" class="main-btn">
      WORKS一覧を見る
    </a>
  </section>

  <section class="price" id="price">
    <div class="inner">
      <div class="section-title">
        <div class="top-text">
          <p>料金</p>
        </div>
        <div class="bottom-text">
          PRICE
        </div>
      </div>
      <div class="price-card-wrapper">
        <div class="price-card">
          <div class="price-card__header">
            <h3 class="price-card__title">WEB制作伴走プラン</h3>
            <div class="price-card__price">
              <span class="price-card__amount">20万円〜</span>
              <span class="price-card__unit">/ 制作</span>
            </div>
          </div>
          <div class="price-card__content">
            <p class="price-card__desc">
              コーポレートサイトやランディングページなど、目的に合わせたWEBサイトを制作いたします。
              デザイン〜公開後サポートまで一貫して対応し、お客様と伴走しながら最適な形を共につくり上げていきます。
            </p>
            <ul class="price-card__features">
              <li>ヒアリング</li>
              <li>競合・市場調査</li>
              <li>コンセプト立案</li>
              <li>チャネル設計</li>
              <li>掲載情報の整理</li>
              <li>サイトマップ制作</li>
              <li>ワイヤーフレーム制作</li>
              <li>デザイン制作</li>
              <li>配色設計</li>
              <li>コーディング</li>
              <li>写真撮影</li>
              <li>テスト</li>
              <li>運用保守(月々)</li>
              <li>WordPress構築</li>
              <li>入稿マニュアル作成</li>
            </ul>
            <div class="price-card__button">
              <a href="<?php echo esc_url( home_url( '/estimate' ) );?>" class="main-btn">
                無料お見積もりをする
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="price-note">
        <p>※ 料金は目安となります。詳細なご要望や規模により変動する場合がございます。<br>
           ※ お見積もりは無料です。まずはお気軽にお問い合わせください。</p>
      </div>
    </div>
  </section>

  <section class="about fade-in-up" id="about">
    <div class="about-inner inner">
      <div class="section-title">
        <div class="top-text">
          <p>自己紹介</p>
        </div>
      <div class="bottom-text">
        ABOUT ME
      </div>
      </div>
      <div class="about-copy">
        岐阜県を拠点に活動しているフリーランスWEBデザイナー、寺嶋絃真（テラシマ ケンシン）と申します。<br>
        「自分という一人の人間が誰かの役に立つこと」――その瞬間をやりがいに、日々の仕事に向き合っています。<br>
        WEBデザイナーとして単にデザインやサイトを納品するのではなく、お客様が抱える小さな不安や困りごとにも寄り添い、解決のお手伝いができる存在でありたいと考えています。
      </div>
    </div>
    <!-- <a href="<?php echo esc_url( home_url( '/coming-soon' ) );?>" class="main-btn">
        私を構成する100のコト
    </a> -->
    <div class="about-images inner">
      <div class="div1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/me-2.png" alt="" />
      </div>
      <div class="div2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/me-1.png" alt="" />
      </div>
    </div>
  </section>

  <section class="service" id="service">
    <div class="inner">
      <div class="section-title">
        <div class="top-text">
          <p>サービス</p>
        </div>
        <div class="bottom-text">
          SERVICE
        </div>
      </div>
      <ul class="service-list">
        <li class="service-block">
          <div class="service-block__inner">
            <div class="service-block__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-web.png" alt="WEB制作イメージ">
            </div>
            <div class="service-block__content">
              <div class="service-block__number">01</div>
              <h2 class="service-block__title">WEB制作</h2>
              <!-- <div class="service-block__img-sp">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/service-web.png" alt="WEB制作イメージ">
              </div> -->
              <p class="service-block__desc">
                目的に合わせて、伝わるデザインと動線設計を。<br>
                ただ見た目がきれいなだけでなく、伝えたい情報がしっかり届き、次のアクションにつながる構成を意識して制作します。<br>
                スマホ対応や更新のしやすさはもちろん、「誰に何を届けるか」を丁寧に考えながら、お客様と伴走するWEBサイトをお作りします。
              </p>
              <a href="<?php echo esc_url( home_url( '/web-create' ) );?>" class="main-btn">
                くわしくみる
              </a>
            </div>
          </div>
        </li>
        <li class="service-block">
          <div class="service-block__inner">
            <div class="service-block__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/visual-design.png" alt="WEB制作イメージ">
            </div>
            <div class="service-block__content">
              <div class="service-block__number">02</div>
              <h2 class="service-block__title">ビジュアルデザイン制作</h2>
              <p class="service-block__desc">
                「わかりやすさ」と「伝える力」にこだわった資料づくり。<br>
                名刺・会社紹介・営業資料・社内マニュアルなど、情報を整理し、視覚的にも理解しやすいデザインで仕上げます。<br>
                「内容はあるけど、伝え方に悩んでいる」という方に、企画段階から丁寧に寄り添います。<br>
              </p>
              <a href="<?php echo esc_url( home_url( '/visual-design' ) );?>" class="main-btn">
                くわしくみる
              </a>
            </div>
          </div>
        </li>
        <li class="service-block">
          <div class="service-block__inner">
            <div class="service-block__img">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-design.png" alt="WEB制作イメージ">
            </div>
            <div class="service-block__content">
              <div class="service-block__number">03</div>
              <h2 class="service-block__title">ロゴ制作</h2>
              <p class="service-block__desc">
                想いをかたちにし、ブランドの"らしさ"を引き出します。<br>
                ヒアリングをもとに、事業やサービスの本質をデザインに落とし込みます。<br>
                シンボル・タイポグラフィ・色などのバランスを考えながら、長く使えるロゴをご提案します。<br>
                名刺やWebなどでの展開も想定し、使いやすさにも配慮しています。
              </p>
              <a href="<?php echo esc_url( home_url( '/logo-create' ) );?>" class="main-btn">
                くわしくみる
              </a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="faq" id="faq">
    <div class="inner">
      <div class="section-title">
        <div class="top-text">
          <p>よくある質問</p>
        </div>
        <div class="bottom-text">
          FAQ
        </div>
      </div>
      <div class="faq-list">
        <div class="faq-item">
          <div class="faq-question">
            <h3>制作期間はどのくらいかかりますか？</h3>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>プロジェクトの規模や内容により異なりますが、一般的にコーポレートサイトの場合、約2〜3ヶ月程度かかります。詳細なスケジュールについては、お見積もりの際にご相談いただけます。</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-question">
            <h3>料金の目安を教えてください</h3>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>WEB制作伴走プランは20万円〜から対応しております。お客様のご要望や規模に応じて、お見積もり時に詳細をご提示いたします。まずはお気軽にご相談ください。</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-question">
            <h3>スマートフォンにも対応していますか？</h3>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>はい、レスポンシブ対応でスマートフォン・タブレット・PCすべてのデバイスで快適に閲覧できるサイトを制作いたします。現在、スマートフォンからのアクセスが主流となっているため、モバイルファーストの考え方で設計いたします。</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-question">
            <h3>修正回数に制限はありますか？</h3>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>デザイン修正は3回まで無料で対応いたします。それ以上のご希望がある場合は、別途お見積もりをご提示いたします。お客様にご満足いただけるサイトを作るため、納品前までしっかりとご相談いただけます。</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-question">
            <h3>SEO対策は含まれていますか？</h3>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>基本的なSEO対策（構造化マークアップ、メタタグ設定、サイトマップ作成など）は制作に含まれています。より詳細なSEO対策や広告運用については、別途ご相談いただけます。</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-question">
            <h3>公開後のサポートはありますか？</h3>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>はい、公開後のサポートにも対応しております。月々の保守費用をご用意しておりますので、詳細についてはお気軽にお問い合わせください。内容更新やバックアップ、セキュリティ対応など、安心してサイトを運用していただけます。</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-question">
            <h3>WordPressを使わない場合も対応できますか？</h3>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>はい、静的HTMLサイトも対応可能です。お客様のご要望や運用方法に合わせて最適な方法をご提案いたします。WordPressを使わない場合でも、更新しやすい仕組みをご提案できます。</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-question">
            <h3>デザインの提案は何案出してもらえますか？</h3>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>初回デザイン提案は1案で進めさせていただきますが、お客様のご要望をお聞きしながら、3回までの修正で最適なデザインにブラッシュアップしていきます。お客様のビジネスに合ったデザインを一緒に作り上げていきます。</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-question">
            <h3>お支払い方法を教えてください</h3>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>お支払いは銀行振込でお願いしております。一般的には契約時に50%、納品時に50%の分割払いが可能です。詳細については、お見積もり時にご相談いただけます。</p>
          </div>
        </div>

        <div class="faq-item">
          <div class="faq-question">
            <h3>制作の進め方やコミュニケーション方法を教えてください</h3>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq-answer">
            <p>お客様のご都合に合わせて、メール・電話・オンラインミーティングなど、柔軟に対応いたします。制作中も定期的に進捗をご報告し、お客様のご意見を反映しながら進めていきます。小さなことでもお気軽にご相談ください。</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cta fade-in-up">
    <div class="section-title">
      <div class="top-text">
        <p>お問い合わせ</p>
      </div>
      <div class="bottom-text">
        CONTACT
      </div>
    </div>
    <div class="contact-copy">
      「こんなことってお願いできる？」そんな段階でも大丈夫です。<br>
      ご相談・お見積もりはもちろん無料ですので、お気軽にお問い合わせください。
    </div>
    <div class="cta-buttons">
      <a href="<?php echo esc_url( home_url( '/estimate' ) );?>" class="sub-btn">
        無料見積もりをする
      </a>
      <a href="<?php echo esc_url( home_url( '/contact' ) );?>" class="sub-btn">
        無料相談をする
      </a>
    </div>
  </section>
</main>
<?php get_footer(); ?>    