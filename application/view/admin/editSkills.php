<div class = "container-fluid">

  <div class = "singleContainer">
  <h2>Edit Skills</h2>
<?php
    foreach($skillsArray as $i)
    {
?>
      <h3>Skills Entry Number: <?php echo $skillCount; $skillCount++;?></h3>
      <div class = "singleContainer">
      <form class="form-horizontal" method="get" action="<?php echo URL;?>admin/updateSkills">
        <input type="hidden" name="ID" value="<?php echo $i->ID?>">
        <label class="col-sm-2">Skill *</label>
        <div class="col-sm-10">
          <input type="text" name="skill" value="<?php echo $i->Language?>"required="required"><br>
        </div>
        <input name="update" type="submit" value="Update" class="btn btn-primary">
        <input name="delete" type="submit" value="Delete" class="btn btn-primary">
      </form>
      </div>
<?php }  ?>
      <h3>New Skill</h3>
      <div class = "singleContainer">
      <form class="form-horizontal" method="get" action="<?php echo URL;?>admin/updateSkills">
    
      <label class="col-sm-2">Skill *</label>
      <div class="col-sm-10">
        <input type="text" name="skill" required="required"><br>
      </div>
 
      <input name="submit" type="submit" value="Submit" class="btn btn-primary">
      </form>
      </div>

</div>
