<?php
/*
Template Name: 3 Cards Grid
*/
get_header();
?>
<section class="news-section">
  <div class="wrap">
    <header class="news-intro">
      <h2 class="news-title">Lorem Ipsum News</h2>
      <p class="news-sub">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
    </header>

    <div class="cards-grid" role="list">
      <article class="card" role="listitem">
        <div class="card__media">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image 1.jpg" alt="News image 1">
          <span class="card__tag">LOREM</span>
        </div>
        <div class="card__body">
          <h3 class="card__title">Lorem ipsum dolor sit amet consectetur adipiscing elit</h3>
          <p class="card__desc">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <div class="card__meta">
            <span class="card__date">Lorem 18, 2024</span>
            <a class="card__link" href="#">Lorem ipsum →</a>
          </div>
        </div>
      </article>

      <article class="card" role="listitem">
        <div class="card__media">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image2.jpg" alt="News image 2">
          <span class="card__tag blue">IPSUM</span>
        </div>
        <div class="card__body">
          <h3 class="card__title">Duis aute irure dolor in reprehenderit voluptate</h3>
          <p class="card__desc">Velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
          <div class="card__meta">
            <span class="card__date">Dec 15, 2024</span>
            <a class="card__link" href="#">Lorem ipsum →</a>
          </div>
        </div>
      </article>

      <article class="card" role="listitem">
        <div class="card__media">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/image3.jpg" alt="News image 3">
          <span class="card__tag">SIT AMET</span>
        </div>
        <div class="card__body">
          <h3 class="card__title">Sed ut perspiciatis unde omnis iste natus error</h3>
          <p class="card__desc">Sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.</p>
          <div class="card__meta">
            <span class="card__date">Consectetur 12, 2024</span>
            <a class="card__link" href="#">Lorem ipsum →</a>
          </div>
        </div>
      </article>
    </div>

    <div class="center-cta">
      <a class="btn-primary" href="#">Lorem Ipsum Dolor</a>
    </div>

  </div>
</section>
<?php get_footer(); ?>