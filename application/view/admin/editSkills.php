<div class = "container-fluid">

  <id class = "headingGroup">
  <h2>Edit Skills</h2>
  </id>
<?php
    foreach($skillsArray as $i)
    {
?>
      <div class = "singleContainer">
      <form class="form-horizontal editForm" method="get" action="<?php echo URL;?>admin/updateSkills">
        <input type="hidden" name="ID" value="<?php echo $i->ID?>">
        <div class="col-sm-3">
          <input type="text" name="skill" value="<?php echo $i->Language?>"required="required"><br>
        </div>
        <div class="col-sm-4">
        <input name="update" type="submit" value="Update" class="btn btn-primary">
        </div>
        <div class="col-sm-4">
        <input name="delete" type="submit" value="Delete" class="btn btn-danger">
        </div>
      </form>
      </div>
      <br><br><br>
<?php }  ?>
    <id class="headingGroup">
      <h3>New Skill</h3>
    </id>
      <br>
      <div class = "singleContainer">
      <form class="form-horizontal editForm" method="get" action="<?php echo URL;?>admin/updateSkills">
    
      <div class="col-sm-3">
        <input type="text" name="skill" required="required"><br>
      </div>
      <div class ="col-sm-4">
      <input name="submit" type="submit" value="Submit" class="btn btn-success">
      </div>
      </form>
      </div>

</div>
