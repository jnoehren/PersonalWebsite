<?php
session_start();
Class Admin extends DatabaseController
{ 
  public function login(){
    if(isset($_SESSION['user']))
    {
      require APP . 'view/_templates/header.php';
      echo $_SESSION['user'] . ' is already logged in';
      header("Refresh:2;url=".URL ."admin/editPage");
    }
    else
    {
      require APP . 'view/_templates/header.php';
      require APP . 'view/admin/login.php';
    }
  }

  public function logout(){
    require APP . 'view/_templates/header.php';
    unset($_SESSION['user']);
    echo "You have been logged out";
    header("Refresh:2;url=". URL);
  }

  public function editPage(){
    if(isset($_SESSION['user']))
    {
      $empCount= 1;
      $skillCount = 1;
      $eduCount = 1;
      $actCount = 1;
      $proCount = 1;
      $employmentArray = $this->model->getEmployment($_GET['user']);
      $educationArray = $this->model->getEducation($_GET['user']);
      $activitiesArray = $this->model->getActivities($_GET['user']);
      $skillsArray = $this->model->getSkills($_GET['user']);
      $projectsArray = $this->model->getProjects($_GET['user']);
      require APP . 'view/_templates/adminHeader.php';
      require APP . 'view/admin/editEducation.php';
      require APP . 'view/admin/editSkills.php';
      require APP . 'view/admin/editEmployment.php';
      require APP . 'view/admin/editActivities.php';
      require APP . 'view/admin/editProjects.php';
    }
    else
    {
      require APP . 'view/_templates/header.php';
      echo "You are not logged in";
      header("Refresh:2;url=".URL ."admin/login");
    }
  }


  public function updateEducation(){
    if(isset($_GET['submit']))
    {
      $this->model->addEducation($_GET['school'], $_GET['start'], $_GET['end'], $_GET['major'], $_GET['minor'], $_GET['graduation'], $_GET['userName']);
    }
    if(isset($_GET['update']))
    {
      $this->model->updateEducation($_GET['school'], $_GET['start'], $_GET['end'], $_GET['major'], $_GET['minor'], $_GET['graduation'], $_GET['entry'], $_GET['userName']);
    }
    if(isset($_GET['delete']))
    {
      $this->model->deleteEducation($_GET['entry'], $_GET['userName']);
    }
  }

  public function updateSkills(){
    if(isset($_GET['submit']))
    {
      $this->model->addSkill($_GET['skill'], $_GET['userName']);
    }
    if(isset($_GET['update']))
    {
      $this->model->updateSkill($_GET['skill'], $_GET['ID'], $_GET['userName']);
    }
    if(isset($_GET['delete']))
    {
      $this->model->deleteSkill($_GET['ID'], $_GET['userName']);
    }
  }

  public function updateEmployment(){
    if(isset($_GET['submit']))
    {
      $this->model->addEmployment($_GET['location'], $_GET['position'], $_GET['begin'], $_GET['end'], $_GET['description'], $_GET['userName']);
    }
    if(isset($_GET['update']))
    {
      $this->model->updateEmployment($_GET['location'], $_GET['position'], $_GET['begin'], $_GET['end'], $_GET['description'], $_GET['entry'], $_GET['userName']);
    }
    if(isset($_GET['delete']))
    {
      $this->model->deleteEmployment($_GET['entry'], $_GET['userName']);
    }
  }

  public function updateActivities(){
    if(isset($_GET['submit']))
    {
      $this->model->addActivity($_GET['title'], $_GET['begin'], $_GET['end'], $_GET['location'], $_GET['description'], $_GET['userName']);
    }
    if(isset($_GET['update']))
    {
      $this->model->updateActivity($_GET['title'], $_GET['begin'], $_GET['end'], $_GET['location'], $_GET['description'], $_GET['entry'], $_GET['userName']);
    }
    if(isset($_GET['delete']))
    {
      $this->model->deleteActivity($_GET['entry'], $_GET['userName']);
    }
  }

  public function updateProjects(){
    if(isset($_GET['submit']))
    {
      $this->model->addProject($_GET['title'], $_GET['link'], $_GET['description'], $_GET['git'], $_GET['userName']);
    }
    if(isset($_GET['update']))
    {
      $this->model->updateProject($_GET['title'], $_GET['link'], $_GET['description'], $_GET['git'], $_GET['entry'], $_GET['userName']);
    }
    if(isset($_GET['delete']))
    {
      $this->model->deleteProject($_GET['entry'], $_GET['userName']);
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
      else
      {
        echo "User " . $_SESSION['user']->getName() . " is alreayd logged on";
      }
    }
  }
}
