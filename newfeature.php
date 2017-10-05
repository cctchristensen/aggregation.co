<?php
require("include/header.php");
require("include/nav.php");
?>

<div class="help">This is a new feature added to aggregation.co by Cole Christensen for CSCI3287.</div>

<div class="help">Simply copy/paste the url for the RSS feed you desire to add or remove into the appropriate form below.
</div>


<html>
<body>
<form action="addfeed.php" method="post">
	<p>
		<input name="add_new_feed"  value=""/>
		<input type="submit" name="my_form_submit_button" 
		value="Add new feed!"/>
	<p>
</form>
</body>
</html>

<html>
<body>
<form action="removefeed.php" method="post">
	<p>
		<input name="remove_feed"  value=""/>
		<input type="submit" name="my_form_submit_button" 
		value="Remove a feed url :("/>
	<p>
</form>
</body>
</html>


<?php
require("include/footer.php");
?>
