@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @Segment
    @Container
      @while (have_posts()) @php the_post() @endphp
      @include('partials.content-'.get_post_type())
      @endwhile
    @endContainer
  @endSegment

  {!! get_the_posts_navigation() !!}
@endsection