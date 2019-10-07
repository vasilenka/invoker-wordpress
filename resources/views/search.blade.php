@extends('layouts.app')

@section('content')

  @searchboxfull()
  @endsearchboxfull

  {{-- @include('partials.page-header') --}}

  @if (!have_posts())
  @container()
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found for', 'sage') }}{{ ' ' }} <strong>{{get_search_query()}}</strong>{{ '.' }}
    </div>
    @endcontainer
  @endif

  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-search')
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
