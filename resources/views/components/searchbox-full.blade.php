<form role="search" method="get" id="searchform" class="searchbox--full" action="{{ home_url( '/' ) }}">
  <input class="searchbox--full__field" type="text" value="{{ get_search_query() }}" name="s" id="searchbox--full" />
  <button type="submit" class="searchbox--full__submit">Leggo</button>
</form>