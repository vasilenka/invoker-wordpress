@container()
  <form role="search" method="get" id="searchform-full" class="searchbox--full" action="{{ home_url( '/' ) }}">
    <input class="searchbox--full__field" type="text" placeholder="{{ get_search_query() ? get_search_query() : "Search" }}" value="{{ get_search_query() }}" name="s" id="searchbox--full" />
    <button type="submit" class="searchbox--full__submit">@include('icons.arrow-right')</button>
  </form>
@endcontainer