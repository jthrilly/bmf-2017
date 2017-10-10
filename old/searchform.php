<form action="<?php echo $PHP_SELF; ?>" method="get" id="searchform">
    <fieldset>
	<h3>Search</h3>
        <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
        <input type="submit" alt="Search" value="Search" />
    </fieldset>
</form>
<br />