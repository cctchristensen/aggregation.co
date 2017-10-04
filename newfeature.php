<?php
require("include/header.php");
require("include/nav.php");
?>

<div class="help">This is a new feature added to aggregation.co by Cole Christensen for CSCI3287.</div>

<div class="help">Simply copy/paste the url for the RSS feed you desire into the box below and it will be automatically entered in the database.
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




<?php
require("include/footer.php");
?>
