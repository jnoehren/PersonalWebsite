<div class="home" id="home">
  <div class="middle-panel">
    <p>Jeffrey Noehren</p>
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
  <id class="singleProject">
    <a href="<?php echo URL;?>home/formIndex">
      <h2>CSC 642: Form Project</h2>
    </a>
    <p>
      This was a project that we worked on to teach us how to write forms that
      are good for user interface. We worked on skills like making sure that 
      the alignment was right and that each field is sized corrrectly and
      had a default value to help the user know what is required. 
    </p>
  </id>

  <id class="singleProject">
    <a href="http://ec2-52-53-204-167.us-west-1.compute.amazonaws.com/home/index">
      <h2>CSC 648: Gator Market</h2>
    </a>
    <p>
      As team leader of a group of four of my peers, we created a website that
      works like craigslist in the sense that users can buy and sell items
      that they own. However, our site is marketed toward San Francisco State
      students. After assessing each indiviuals skills I split the team up 
      between front end and back. I took the time to sit with each memeber 
      individually so they would understand how the project worked.
    </p>
  </id>
</div>
</div>
<br><br><br>
</body>

