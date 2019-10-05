<form role="search" method="get" id="searchform" class="searchbox" action="{{ home_url( '/' ) }}">
  <label class="searchbox__label" for="searchbox">Search</label>
  <input class="searchbox__field" type="text" placeholder="{{ get_search_query() }}" name="s" id="searchbox" />
  <button type="submit" class="searchbox__submit">Leggo</button>
</form>