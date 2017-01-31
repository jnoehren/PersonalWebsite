<div class="home" id="#home">
  <div class="middle-panel">
    <p>Jeffrey Noehren</p>
  </div>
</div>


<div class="about" id="#about">
  <div class="title">
     About Me
  </div>

  <p>Education</p>

<?php 
  foreach($educationArray as $i)
  { ?>
    <div class="content">
      <a><?php echo $i->School?></a>, <?php echo $i->Begin?> - <?php echo $i->End?><br>
      Major: <?php echo $i->Major?>, Minor: <?php echo $i->Minor?><br>
      Expected Graduation: <?php echo $i->Graduation?><br>
    </div>
<?php
  } ?>

  <p>Technical Skills</p> 

  <div class="content">
<?php
  $count = 0;
  foreach($skillsArray as $i)
  {
  $count++; 
  echo $i->Language;
    if($count!=$length)
    {?>, <?php
    }
  }  ?>

<br>
  </div>

  <p>Employment History</p>

<div class="content">
<?php
  foreach($employmentArray as $i)
  {  ?>
  <a><?php echo $i->Location?>: <?php echo $i->Position?></a>, <?php echo $i->Begin?> - <?php echo $i->End?><br>
  <?php echo $i->Description?><br><br>
<?php
  }  ?>
</div>

  <p>Activities and Interests</p> 

  <div class="content">
<?php
  foreach($activitiesArray as $i)
  {  ?>
    <a><?php echo $i->Title?></a>, <?php echo $i->Begin?> - <?php echo $i->End?><br>
    <?php echo $i->Location?><br>
    <?php echo $i->Description?><br><br>
<?php
  }  ?>
  </div>
</div>

<div class="projects container" id="#projects">
<div class="title">
   Projects
</div>
<!-- Maybe look into using php and sql to store this information then populate when the page loads just for practice -->

<div class="singleProject">
<a href="<?php echo URL;?>home/formIndex">
<h2>CSC 642 Form Project</h2>
</a>
</div>

<div class="singleProject">
<a href="<?php echo URL;?>home/formIndex">
CSC 642 Form Project
</a>
</div>


</div>


