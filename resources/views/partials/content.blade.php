<div class="sr-card">
  <a href="{{ get_permalink() }}" class="card-wrapper">
    @if (has_post_thumbnail())
      <div class="card-image-wrapper" style="padding-top: 60%;">
        <div class="card-preloader"></div>
        <img src="<?=the_post_thumbnail_url(array(450, 0))?>" alt="" class="card-image fade-in" />
      </div>
    @endif
    <div class="card-info">
      <span class="card-date">@include('partials/entry-meta')</span>
      <h3 class="card-title">{{ get_the_title() }}</h2>
      
      <div class="card-summary">
        @php(the_excerpt())
      </div>
    <span class="read-more">Read More <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-arrow-right" viewBox="0 0 4 7"><path fill="#444" d="M4 3.5L0 7V0z"></path></svg></span>
    </div>
  </a>
</div>