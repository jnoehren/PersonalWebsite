<div class = "container-fluid">

  <div class = "singleContainer">
  <h2>Edit Activities</h2>
<?php
    foreach($activitiesArray as $i)
    {
?>
      <h3>Activites Entry Number: <?php echo $actCount; $actCount++;?></h3>
      <div class = "singleContainer">
      <form class="form-horizontal" method="get" action="<?php echo URL;?>admin/updateActivities">
      <input type="hidden" name="entry" value="<?php echo $i->Number?>">
      <label class="col-sm-2">Position *</label>
      <div class="col-sm-10">
        <input type="text" name="title" value="<?php echo $i->Title?>"required="required"><br>
      </div>

      <label class="col-sm-2">Begin *</label>
      <div class="col-sm-10">
        <input type="text" name="begin" value="<?php echo $i->Begin?>"required="required"><br>
      </div>

      <label class="col-sm-2">End *</label>
      <div class="col-em-10">
        <input type="text" name="end" value="<?php echo $i->End?>" required="required"><br>
      </div>

      <label class="col-sm-2">Location *</label>
      <div class="col-sm-10">
        <input type="text" name="location" value="<?php echo $i->Location?>" required="required"><br>
      </div>

      <label class="col-sm-2">Descripion *</label>
      <div class="col-sm-10">
        <textarea name="description" cols="50" rows="4"><?php echo $i->Description?></textarea><br>
      </div>

      <input name="update" type="submit" value="Update" class="btn btn-primary">
      <input name="delete" type="submit" value="Delete" class="btn btn-danger">
      </form>
      </div>
<?php }  ?>
      <h3>New Activity</h3>
      <div class = "singleContainer">
      <form class="form-horizontal" method="get" action="<?php echo URL;?>admin/updateActivities">
      <label class="col-sm-2">Position *</label>
      <div class="col-sm-10">
        <input type="text" name="title" required="required"><br>
      </div>

      <label class="col-sm-2">Begin *</label>
      <div class="col-sm-10">
        <input type="text" name="begin" required="required"><br>
      </div>

      <label class="col-sm-2">End *</label>
      <div class="col-em-10">
        <input type="text" name="end" required="required"><br>
      </div>

      <label class="col-sm-2">Location *</label>
      <div class="col-sm-10">
        <input type="text" name="location" required="required"><br>
      </div>

      <label class="col-sm-2">Description *</label>
      <div class="col-sm-10">
        <textarea name="description" cols="50" rows="4"></textarea>
      </div>

      <input name="submit" type="submit" value="Submit" class="btn btn-success">
      </form>
      </div>

</div>
