<button type="button" class="btn btn-primary heading" data-toggle="collapse" data-target="#education">Edit Education</button>
<br>
<div id="education" class = "container-fluid collapse">
<?php
    foreach($educationArray as $i)
    {
?>
     <id class="headingGroup">
      <h3>Education Entry Number: <?php echo $eduCount; $eduCount++;?></h3>
     </id>
      <div class = "singleContainer">
      <form class="form-horizontal editForm" method="get" action="<?php echo URL;?>admin/updateEducation">
      <input type="hidden" name="userName" value="<?php echo $_GET['user']?>">
      <input type="hidden" name="entry" value="<?php echo $i->Number?>">
      <label class="col-sm-3">School *</label>
      <div class="col-sm-15">
        <input type="text" name="school" style="width:20em;" value="<?php echo $i->School?>"required="required"><br>
      </div>

      <label class="col-sm-3">Start *</label>
      <div class="col-sm-15">
        <input type="text" name="start" value="<?php echo $i->Begin ?>"required="required"><br>
      </div>

      <label class="col-sm-3">End *</label>
      <div class="col-sm-15">
        <input type="text" name="end" value="<?php echo $i->End?>" required="required"><br>
      </div>

      <label class="col-sm-3">Major *</label>
      <div class="col-sm-15">
        <input type="text" name="major" style="width:15em;" value="<?php echo $i->Major?>" required="required"><br>
      </div>

      <label class="col-sm-3">Minor</label>
      <div class="col-sm-15">
        <input type="text" name="minor" style="width:15em;"  value="<?php echo $i->Minor?>"><br>
      </div>

      <label class="col-sm-3">Graduation Semester *</label>
      <div class="col-sm-15">
        <input type="text" name="graduation" value="<?php echo $i->Graduation?>"required="required"><br>
      </div>
     
      <input name="update" type="submit" value="Update" class="btn btn-primary">
      <input name="delete" type="submit" value="Delete" class="btn btn-danger">
      </form>
      </div>
<?php }  ?>
    <id class="headingGroup">
      <h3>New Education</h3>
    </id>
      <div class = "singleContainer">
      <form class="form-horizontal editForm" method="get" action="<?php echo URL;?>admin/updateEducation">
      <input type="hidden" name="userName" value="<?php echo $_GET['user']?>">
      <label class="col-sm-3">School *</label>
      <div class="col-sm-15">
        <input type="text" name="school" style="width:20em;" required="required"><br>
      </div>

      <label class="col-sm-3">Start *</label>
      <div class="col-sm-15">
        <input type="text" name="start" required="required"><br>
      </div>

      <label class="col-sm-3">End *</label>
      <div class="col-sm-15">
        <input type="text" name="end" required="required"><br>
      </div>

      <label class="col-sm-3">Major *</label>
      <div class="col-sm-15">
        <input type="text" name="major" style="width:15em;" required="required"><br>
      </div>

      <label class="col-sm-3">Minor</label>
      <div class="col-sm-15">
        <input type="text" name="minor" style="width:15em;"><br>
      </div>

      <label class="col-sm-3">Graduation Semester *</label>
      <div class="col-sm-15">
        <input type="text" name="graduation" required="required"><br>
      </div>
  
      <input name="submit" type="submit" value="Submit" class="btn btn-success">
      </form>
      </div>

</div>
