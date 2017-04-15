<div class="home" id="home">
  <div class="middle-panel">
    <p><?php echo $userObject->Name?></p>
  </div>
</div>

<div id="about" class="about">
  <div class="title">
     About Me
  </div>

  <p>Education</p>

<?php 
  foreach($educationArray as $i)
  { ?>
    <div class="content">
      <id class="heading"><?php echo $i->School?></id>, <?php echo $i->Begin?> - <?php echo $i->End?><br>
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
  <id class="heading"><?php echo $i->Location?>: <?php echo $i->Position?></id>, <?php echo $i->Begin?> - <?php echo $i->End?><br>
  <?php echo $i->Description?><br><br>
<?php
  }  ?>
</div>

  <p>Activities and Interests</p> 

  <div class="content">
<?php
  foreach($activitiesArray as $i)
  {  ?>
    <id class="heading"><?php echo $i->Title?></id>, <?php echo $i->Begin?> - <?php echo $i->End?><br>
    <?php echo $i->Location?><br>
    <?php echo $i->Description?><br><br>
<?php
  }  ?>
  </div>
</div>

<div class="projects container" id="projects">
<br><br>
  <div class="title">
     Projects
  </div>
  <br><br>
<div class="projectGroup">
<?php
  foreach($projectsArray as $i)
  {
?>
  <id class="singleProject">
    <a href="<?php echo $i->Link?>">
      <h2><?php echo $i->Title?></h2>
    </a>
    <p>
      <?php echo $i->Description?> 
    </p>
    <?php if($i->Git !== null)
      {?>
    <a href="<?php echo $i->Git?>">
      <h4>Github</h4>
    </a>
    <?php
      }
    ?>
  </id>
<?php
  }
?>

</div>
</div>
<br><br><br>
</body>

