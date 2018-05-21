<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5S8SVJJ"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class='site'>
      @php(do_action('get_header'))
      @include('partials.header')
      <div class="wrap max" role="document">
        <div class="content max">
          <main class="main max">
            @yield('content')
          </main>
          @if (App\display_sidebar())
            <aside class="sidebar">
              @include('partials.sidebar')
            </aside>
          @endif
        </div>
      </div>
      @php(do_action('get_footer'))
      @include('partials.footer')
      @php(wp_footer())
    </div>
  </body>
</html>
