<button type="button" class="btn btn-primary heading" data-toggle="collapse" data-target="#projects">Edit Projects</button>
<br>
<div id="projects" class = "container-fluid collapse">

<?php
    foreach($projectsArray as $i)
    {
?>
  <id class = "headingGroup">
      <h3>Project Entry Number: <?php echo $proCount; $proCount++;?></h3>
  </id>
      <div class = "singleContainer">
      <form class="form-horizontal editForm" method="get" action="<?php echo URL;?>admin/updateProjects">
      <input type="hidden" name="userName" value="<?php echo $_GET['user']?>">
      <input type="hidden" name="entry" value="<?php echo $i->ID?>">
      <label class="col-sm-3">Title *</label>
      <div class="col-sm-15">
        <input type="text" name="title" style="width:20em;" value="<?php echo $i->Title?>"required="required"><br>
      </div>

      <label class="col-sm-3">Link *</label>
      <div class="col-sm-15">
        <input type="text" name="link" value="<?php echo $i->Link?>"required="required"><br>
      </div>

      <label class="col-sm-3">Descripion *</label>
      <div class="col-sm-15">
        <textarea name="description" cols="80" rows="4"><?php echo $i->Description?></textarea><br>
      </div>

      <label class="col-sm-3">Git Link </label>
      <div class="col-sm-15">
        <input type="text" name="git" style="width:20em;" value="<?php echo $i->Git?>"><br>
      </div>

      <input name="update" type="submit" value="Update" class="btn btn-primary">
      <input name="delete" type="submit" value="Delete" class="btn btn-danger">
      </form>
      </div>
<?php }  ?>
    <id class="headingGroup">
      <h3>New Project</h3>
    </id>
      <div class = "singleContainer">
      <form class="form-horizontal editForm" method="get" action="<?php echo URL;?>admin/updateProjects">
      <input type="hidden" name="userName" value="<?php echo $_GET['user']?>">
      <label class="col-sm-3">Title *</label>
      <div class="col-sm-15">
        <input type="text" name="title" style="width:20em;" required="required"><br>
      </div>

      <label class="col-sm-3">Link *</label>
      <div class="col-sm-15">
        <input type="text" name="link" required="required"><br>
      </div>

      <label class="col-sm-3">Description *</label>
      <div class="col-sm-15">
        <textarea name="description" cols="80" rows="4"></textarea>
      </div>

      <label class="col-sm-3">Git Link</label>
      <div class="col-sm-15">
        <input type="text" name="git" style="width:20em;"><br>
      </div>

      <input name="submit" type="submit" value="Submit" class="btn btn-success">
      </form>
      </div>

</div>
