@extends('layouts.app')

@section('content')
  <div class="page-width">
    @include('partials.page-header')

    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

    <div class="card-list sr_flex flex_spaced">
      <div class="first-col">
          @while (have_posts()) @php(the_post())
          @if (($count % 2) == 0)
            @include('partials.content-'.get_post_type())
          @endif
          @endwhile
      </div>
      <div class="second-col">
          @while (have_posts()) @php(the_post())
          @if (($count % 2) == 1)
            @include('partials.content-'.get_post_type())
          @endif
          @endwhile
      </div>
    </div>
    {!! get_the_posts_navigation() !!}
  </div>
@endsection
