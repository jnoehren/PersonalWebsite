<?php
Class Admin extends DatabaseController
{
  public function login(){
    require APP . 'view/_templates/header.php';
    require APP . 'view/admin/login.php';
  }
  public function editPage(){
    $count= 1;
    $employmentArray = $this->model->getEmployment();
    $educationArray = $this->model->getEducation();
    $activitiesArray = $this->model->getActivities();
    $skillsArray = $this->model->getSkills();

    require APP . 'view/_templates/header.php';
    require APP . 'view/admin/editEducation.php';
//    require APP . 'view/admin/editSkills.php';
//    require APP . 'view/admin/editEmployment.php';
//    require APP . 'view/admin/editActivities.php';

  }
  public function updateEducation(){
    if(isset($_GET['submit']))
    {
      $this->model->addEducation($_GET['school'], $_GET['start'], $_GET['end'], $_GET['major'], $_GET['minor'], $_GET['graduation']);
    }
    if(isset($_GET['update']))
    {
      $this->model->updateEducation($_GET['school'], $_GET['start'], $_GET['end'], $_GET['major'], $_GET['minor'], $_GET['graduation'], $_GET['entry']);
    }
    if(isset($_GET['delete']))
    {
      $this->model->deleteEducation($_GET['entry']);
    }
  }
  public function verifyUser()
  {
    if(isset($_POST['submit']))
    {
    require APP . 'view/_templates/header.php';
      if(!isset($_SESSION['user']))
      {
        $_SESSION['user'] = $this->model->verifyUser($_POST['userName'],$_POST['password']);
      }
    }
  }
}
