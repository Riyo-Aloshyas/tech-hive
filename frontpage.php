<?php include 'inc/header.php'; ?>

      <div class="jumbotron">
        <h1>Find A Job</h1>
        <br>
        <form method="GET" action="index.php">
          <select name="category" class="form-control">
            <option value="0"> Choose Category </option>
            <?php foreach($categories as $category): ?>
            <option value="<?php echo $category->id; ?>"> <?php echo $category->name; ?> </option>
            <?php endforeach; ?>
          </select>
          <br>
          <input type="submit" class="btn btn-lg btn-success" value="FIND">
        </form>
      </div>

      <h3><?php echo $title; ?></h3>
      <?php foreach($jobs as $job): ?>
      <div class="row marketing">
        <div class="col-md-10">
          <h4><?php 
          //require_once 'lib/Job.php';
          //require_once 'index.php';
          echo $job->job_title; 
          ?></h4>
          <p><?php 
          //require_once 'lib/Job.php';
          //require_once 'index.php';
          echo $job->description; 
          ?></p>
        </div>
        <div class="col-md-10">
        	<a class="btn btn-default" href="job.php?id=<?php echo $job->id; ?>">View</a>        	
        </div>  
      </div>
    <?php endforeach; ?>      

<?php include 'inc/footer.php'; ?>