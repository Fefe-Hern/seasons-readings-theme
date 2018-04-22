<article @php(post_class())>
  <div class="sr-post">
    <header class="article-header">
      @include('partials/entry-meta')
      <h1 class="article-title">{{ get_the_title() }}</h1>
    </header>
    <div class="sr-article">
      @php(the_content())
    </div>
    <footer>
      {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
    </footer>
    @php(comments_template('/partials/comments.blade.php'))
  </div>
</article>
