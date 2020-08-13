<!DOCTYPE html>
<html>
<head>
	<title>Tech Hive</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/3.4/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/3.4/assets/css/ie10-viewport-bug-workaround.css">
	<link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/3.4/examples/jumbotron-narrow/jumbotron-narrow.css">

</head>
<body>
	<div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="create.php">Post Jobs</a></li>
            <li role="presentation"><a href="#">About</a></li>
          </ul>
        </nav>
        <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>
      </div>
      <?php displayMessage(); ?>