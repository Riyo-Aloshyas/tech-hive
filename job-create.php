<?php include 'inc/header.php'; ?>
	<h2 class="page-header">Create Job Post</h2>
	<h4 style="text-align: right; color: red">Enter Each Field to Post Job<hr></h4>
	<form method="POST" action="create.php">
		<div class="form-group">
			<label>Company</label>
			<input type="text" class="form-control" name="company" required>
		</div>
		<div class="form-group">
			<label>Category</label>
			<select type="text" class="form-control" name="category" required>
				<option value="0">Choose Category </option>
                <?php foreach($categories as $category): ?>
                <option value="<?php echo $category->id; ?>"> <?php echo $category->name; ?> </option>
                <?php endforeach; ?>
			</select>
		</div>
		<div class="form-group">
			<label>Job Title</label>
			<input type="text" class="form-control" name="job_title" required>
		</div>
		<div class="form-group">
			<label>Job Description</label>
			<textarea type="text" class="form-control" name="description" maxlength="255" required></textarea>
		</div>
		<div class="form-group">
			<label>Location</label>
			<input type="text" class="form-control" name="location" required>
		</div>
		<div class="form-group">
			<label>Salary</label>
			<input type="text" class="form-control" name="salary" required>
		</div>
		<div class="form-group">
			<label>Contact User</label>
			<input type="text" class="form-control" name="contact_user" required>
		</div>
		<div class="form-group">
			<label>Contact Email</label>
			<input type="text" class="form-control" name="contact_email" required>
		</div>
		<div class="form-group">
			<label>URL</label>
			<input type="text" class="form-control" name="url" required>
		</div>
		<input type="submit" class="btn btn-default" value="Submit" name="submit" required>
	</form>
	<br><br>
	<a href="index.php">Go Back to Home</a>
	<br><br>
<?php include 'inc/footer.php'; ?>