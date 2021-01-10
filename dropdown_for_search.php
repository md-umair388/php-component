<form name="dropdown">
 <label>Search <u>E</u>ngines</label>
 <select name="list" accesskey="E">
 <option selected>Please select one</option>
 <option value="http://search.msn.com/">MSN Search</option>
 <option value="http://www.google.com/">Google</option>
 <option value="http://www.search.com/">Search.com</option>
 <option value="http://www.dogpile.com/">Dogpile</option>
 <select>
 <input type="button" value="Go" onclick="goToNewPage(document.dropdown.list)">
</form>