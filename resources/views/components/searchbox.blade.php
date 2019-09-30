<form role="search" method="get" id="searchform" class="searchbox" action="/">
  <label class="screen__label" for="searchbox">Search</label>
  <input class="searchbox__field" type="text" value="{{ get_search_query() }}" name="searchbox" id="searchbox" />
  <button class="searchbox__submit" type="submit">Search</button>
</form>