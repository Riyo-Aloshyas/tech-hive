<?php include_once 'config/init.php'; ?>

<?php require_once 'lib/Job.php';
$job = new Job();

require_once 'lib/Template.php';
$template = new Template('templates/frontpage.php');

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category ){
	$template->jobs = $job->getByCategory($category);
	$template->title = "Jobs In ".$job->getCategory($category)->name;
} else{
	$template->title = 'Latest Jobs';
	require_once 'lib/Job.php';
	$template->jobs = $job->getAllJobs();
}

$template->categories = $job->getCategories();

echo $template;