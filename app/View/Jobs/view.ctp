<?php 

?>

<div>
    <h3>Job Title: <?php echo $job['Job']['title']; ?></h3>
</div>
<div>
    <h4>Company: <?php echo $job['Job']['company']; ?></h4>
</div>
<div>
    <p><b>Job Descriptions</b></p>
    <p><?php echo $job['Job']['descriptions']; ?></p>
</div>
<div>
    <p><b>Job Requirements</b></p>
    <p><?php echo $job['Job']['requirements']; ?></p>
</div>
<div>
        <button type="button" class="btn btn-warning" 
          data-loading-text="Processing">Apply Now!</button>
</div>