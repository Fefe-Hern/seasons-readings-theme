@include('partials/featured-image')
<article @php(post_class())>
  <div class="article-wrapper max">
    <div class="sr-post max">
      <header class="article-header">
        @include('partials/entry-meta')
        <h2 class="article-title">{{ get_the_title() }}</h2>
      </header>
      <div class="sr-article">
        @php(the_content())
      </div>
      <footer>
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
      </footer>
      @php(comments_template('/partials/comments.blade.php'))
    </div>
  </div>
</article>
