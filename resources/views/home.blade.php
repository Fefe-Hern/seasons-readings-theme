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
      @while ($post_query->have_posts())
      @php($post_query->the_post())
      @include('partials.content-'.$post_query->get_post_type())
      @endwhile
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
