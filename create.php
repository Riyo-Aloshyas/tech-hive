<?php include_once 'config/init.php'; ?>

<?php require_once 'lib/Job.php';
$job = new Job();

if(isset($_POST['submit'])){
	// create job listing data array
	$data = array();
	$data['job_title'] = $_POST['job_title'];
	$data['company'] = $_POST['company'];
	$data['category_id'] = $_POST['category'];
	$data['description'] = $_POST['description'];
	$data['location'] = $_POST['location'];
	$data['salary'] = $_POST['salary'];	
	$data['contact_user'] = $_POST['contact_user'];
	$data['contact_email'] = $_POST['contact_email'];
	$data['url'] = $_POST['url'];

	if($job->create($data)){
		redirect('index.php', 'Your job has been listed!', 'success');
	} else{
		redirect('index.php', 'Something went wrong, try again.', 'error');
	}
}

require_once 'lib/Template.php';
$template = new Template('templates/job-create.php');

$template->categories = $job->getCategories();

echo $template;