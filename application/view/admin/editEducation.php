<div class = "container-fluid">
  <div class = "singleContainer">
  <h2>Edit Education</h2>
<?php
    foreach($educationArray as $i)
    {
?>
      <h3>Education Entry Number: <?php echo $eduCount; $eduCount++;?></h3>
      <div class = "singleContainer">
      <form class="form-horizontal" method="get" action="<?php echo URL;?>admin/updateEducation">
      <input type="hidden" name="entry" value="<?php echo $i->Number?>">
      <label class="col-sm-2">School *</label>
      <div class="col-sm-10">
        <input type="text" name="school" value="<?php echo $i->School?>"required="required"><br>
      </div>

      <label class="col-sm-2">Start *</label>
      <div class="col-sm-10">
        <input type="text" name="start" value="<?php echo $i->Begin ?>"required="required"><br>
      </div>

      <label class="col-sm-2">End *</label>
      <div class="col-em-10">
        <input type="text" name="end" value="<?php echo $i->End?>" required="required"><br>
      </div>

      <label class="col-sm-2">Major *</label>
      <div class="col-sm-10">
        <input type="text" name="major" value="<?php echo $i->Major?>" required="required"><br>
      </div>

      <label class="col-sm-2">Minor</label>
      <div class="col-sm-10">
        <input type="text" name="minor" value="<?php echo $i->Minor?>"><br>
      </div>

      <label class="col-sm-2">Graduation Semester *</label>
      <div class="col-sm-10">
        <input type="text" name="graduation" value="<?php echo $i->Graduation?>"required="required"><br>
      </div>

      <input name="update" type="submit" value="Update" class="btn btn-primary">
      <input name="delete" type="submit" value="Delete" class="btn btn-danger">
      </form>
      </div>
<?php }  ?>
      <h3>New Education</h3>
      <div class = "singleContainer">
      <form class="form-horizontal" method="get" action="<?php echo URL;?>admin/updateEducation">
    
      <label class="col-sm-2">School *</label>
      <div class="col-sm-10">
        <input type="text" name="school" required="required"><br>
      </div>

      <label class="col-sm-2">Start *</label>
      <div class="col-sm-10">
        <input type="text" name="start" required="required"><br>
      </div>

      <label class="col-sm-2">End *</label>
      <div class="col-em-10">
        <input type="text" name="end" required="required"><br>
      </div>

      <label class="col-sm-2">Major *</label>
      <div class="col-sm-10">
        <input type="text" name="major" required="required"><br>
      </div>

      <label class="col-sm-2">Minor</label>
      <div class="col-sm-10">
        <input type="text" name="minor"><br>
      </div>

      <label class="col-sm-2">Graduation Semester *</label>
      <div class="col-sm-10">
        <input type="text" name="graduation" required="required"><br>
      </div>
  
      <input name="submit" type="submit" value="Submit" class="btn btn-success">
      </form>
      </div>

</div>
