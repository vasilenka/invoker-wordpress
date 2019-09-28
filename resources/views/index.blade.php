@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @Container
    @while (have_posts()) @php the_post() @endphp
    @include('partials.content-'.get_post_type())
    @endwhile
  @endContainer

  @Container(['space' => 'post'])
    @Text(["as" => 'h3', 'class' => 'display3', 'apply' => ['secondary']])
      This is a Good Heading
    @endText
  @endContainer

  @Container(['space' => 'narrow'])
    @Text(["as" => 'h3', 'class' => 'heading4', 'apply' => ['accent']])
      This is a Good Heading
    @endText
  @endContainer

  @component('components.container', [ "as" => "div", "space" => 'narrow'])
    <p>Hello World!</p>
  @endcomponent

  @component('components.container', [ "as" => "div", "space" => 'narrow'])
    <p>Dung Dung</p>
  @endcomponent

  {!! get_the_posts_navigation() !!}
@endsection