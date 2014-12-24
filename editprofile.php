<?php
include("base.php");

if(!$_SESSION['username']) {
	header("Location: index.php");
	exit();
}

include("header.php") ; 

?>
	<div class="wrapper">
		<h1>{Student Name}</h1>
		<form action="viewprofile.html">
			<fieldset>
				<legend>Edit Profile</legend>
				
				<div class="column">
					<label class="field">
						<span class="label-text">Name</span>
						<input name="name">
					</label>
	
					<label class="field">
						<span class="label-text">Email</span>
						<input type="email" name="email">
					</label>
	
					<label class="field">
						<span class="label-text">Age</span>
						<input name="age">
					</label>
					
					<label class="field">
						<span class="label-text">Native Language</span>
						<select>
							<option>English</option>
							<option>Spanish</option>
						</select>
					</label>				
	
					<label class="field">
						<span class="label-text">Learning Language</span>
						<select>
							<option>Spanish</option>
							<option>English</option>
						</select>
					</label>
				</div>
					
				<div class="column">
					<label class="field">
						<span class="label-text">Country</span>
						<input name="country">
					</label>
	
					<label class="field">
						<span class="label-text">City</span>
						<input name="city">
					</label>
	
					<label class="field">
						<span class="label-text">School</span>
						<input name="school">
					</label>
					
					<label class="field">
						<span class="label-text">Teacher</span>
						<input name="teacher">
					</label>
	
					<label class="field">
						<span class="label-text">Grade</span>
						<input name="grade">
					</label>
				</div>
				
				<div class="column">
					<label class="field">
						<span class="label-text">Interests</span>
						<textarea name="interests"></textarea>
					</label>
	
					<label class="field">
						<span class="label-text">Activities</span>
						<textarea name="interests"></textarea>
					</label>
	
					<label class="field">
						<span class="label-text">Favorite Music</span>
						<textarea name="interests"></textarea>
					</label>				
				</div>

				<div class="field submit">
					<input type="submit" value="Save">
				</div>		
			</fieldset>
		</form>
	</div>
