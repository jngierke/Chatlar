<?php
include("base.php");

if(!$_SESSION['Username']) {
	header("Location: index.php");
	exit();
}

include("header.php") ; 

?>

	<div class="wrapper">
		<form action="livechat.html">
			<fieldset class="standalone">
				<legend>Start A Conversation</legend>
	
				<label class="field">
					<span class="label-text">Find a native speaker of&hellip;</span>
					<select name="language">
						<option>Catalan</option>
						<option>English</option>
						<option>French</option>
						<option>German</option>
						<option>Italian</option>
						<option>Portuguese</option>
						<option>Spanish</option>	
					</select>
				</label>
	
				<div class="field submit">
					<input type="submit" value="Start">
				</div>

				<ul class="">
					<li><a href="newnotebook.php">Create a new Notebook post</a></li>
					<li><a href="editprofile.php">Edit my profile</a></li>
				</ul>	
			</fieldset>
		</form>
	
	</div>
