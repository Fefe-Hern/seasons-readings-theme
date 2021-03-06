@extends('layouts.app')

@section('content')
  <?php
  $args = array(
      'post_type' => 'post'
  );

  $post_query = new WP_Query($args);
  ?>

  <div class="page-width">
    @include('partials.page-header')

    @if (!have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

    <div class="card-list sr_flex flex_spaced">
      @if($post_query->have_posts() )
        @for ($i = 0; $i < $post_query->found_posts; $i++)
        @php ($post_query->the_post())
        @if ($i < $post_query->found_posts / 2)
          @push('colA')
            @include('partials.content-'.$post_query->get_post_type())
          @endpush
        @else
          @push('colB')
            @include('partials.content-'.$post_query->get_post_type())
          @endpush
        @endif
        @endfor
        <div class="col-a col-md-6">@stack('colA')</div>
        <div class="col-b col-md-6">@stack('colB')</div>
      @endif
      {{--
      @while (have_posts()) @php(the_post())
      @include('partials.content-'.get_post_type())      
      @endwhile
      --}}
    </div>
    {!! get_the_posts_navigation() !!}
  </div>
@endsection
