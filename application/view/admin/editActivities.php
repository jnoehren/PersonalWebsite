<button type="button" class="btn btn-primary heading" data-toggle="collapse" data-target="#activities">Edit Activities </button>
<br>
<div id="activities" class = "container-fluid collapse">

<?php
    foreach($activitiesArray as $i)
    {
?>
  <id class = "headingGroup">
      <h3>Activites Entry Number: <?php echo $actCount; $actCount++;?></h3>
  </id>
      <div class = "singleContainer">
      <form class="form-horizontal editForm" method="get" action="<?php echo URL;?>admin/updateActivities">
      <input type="hidden" name="userName" value="<?php echo $_GET['user']?>">
      <input type="hidden" name="entry" value="<?php echo $i->Number?>">
      <label class="col-sm-3">Position *</label>
      <div class="col-sm-15">
        <input type="text" name="title" style="width:20em;" value="<?php echo $i->Title?>"required="required"><br>
      </div>

      <label class="col-sm-3">Begin *</label>
      <div class="col-sm-15">
        <input type="text" name="begin" value="<?php echo $i->Begin?>"required="required"><br>
      </div>

      <label class="col-sm-3">End *</label>
      <div class="col-sm-15">
        <input type="text" name="end" value="<?php echo $i->End?>" required="required"><br>
      </div>

      <label class="col-sm-3">Location *</label>
      <div class="col-sm-15">
        <input type="text" name="location" style="width:20em;" value="<?php echo $i->Location?>" required="required"><br>
      </div>

      <label class="col-sm-3">Descripion *</label>
      <div class="col-sm-15">
        <textarea name="description" cols="80" rows="4"><?php echo $i->Description?></textarea><br>
      </div>

      <input name="update" type="submit" value="Update" class="btn btn-primary">
      <input name="delete" type="submit" value="Delete" class="btn btn-danger">
      </form>
      </div>
<?php }  ?>
    <id class="headingGroup">
      <h3>New Activity</h3>
    </id>
      <div class = "singleContainer">
      <form class="form-horizontal editForm" method="get" action="<?php echo URL;?>admin/updateActivities">
      <input type="hidden" name="userName" value="<?php echo $_GET['user']?>">
      <label class="col-sm-3">Position *</label>
      <div class="col-sm-15">
        <input type="text" name="title" style="width:20em;" required="required"><br>
      </div>

      <label class="col-sm-3">Begin *</label>
      <div class="col-sm-15">
        <input type="text" name="begin" required="required"><br>
      </div>

      <label class="col-sm-3">End *</label>
      <div class="col-sm-15">
        <input type="text" name="end" required="required"><br>
      </div>

      <label class="col-sm-3">Location *</label>
      <div class="col-sm-15">
        <input type="text" name="location" style="width:20em;" required="required"><br>
      </div>

      <label class="col-sm-3">Description *</label>
      <div class="col-sm-15">
        <textarea name="description" cols="80" rows="4"></textarea>
      </div>

      <input name="submit" type="submit" value="Submit" class="btn btn-success">
      </form>
      </div>

</div>
