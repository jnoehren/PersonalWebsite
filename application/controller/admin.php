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
      $employmentArray = $this->model->getEmployment();
      $educationArray = $this->model->getEducation();
      $activitiesArray = $this->model->getActivities();
      $skillsArray = $this->model->getSkills();
      $projectsArray = $this->model->getProjects();
      require APP . 'view/_templates/adminHeader.php';
      require APP . 'view/admin/selectorPage.php';
      if(isset($_GET['education'])){ 
        require APP . 'view/admin/editEducation.php';
        require APP . 'view/_templates/footer.php';
      }
      if(isset($_GET['skills'])){
        require APP . 'view/admin/editSkills.php';
        require APP . 'view/_templates/footer.php';
      }
      if(isset($_GET['employment'])){  
        require APP . 'view/admin/editEmployment.php';
        require APP . 'view/_templates/footer.php';
      }
      if(isset($_GET['activities'])){
        require APP . 'view/admin/editActivities.php';
        require APP . 'view/_templates/footer.php';
      }
      if(isset($_GET['projects'])){
        require APP . 'view/admin/editProjects.php';
        require APP . 'view/_templates/footer.php';
      }
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

  public function updateSkills(){
    if(isset($_GET['submit']))
    {
      $this->model->addSkill($_GET['skill']);
    }
    if(isset($_GET['update']))
    {
      $this->model->updateSkill($_GET['skill'], $_GET['ID']);
    }
    if(isset($_GET['delete']))
    {
      $this->model->deleteSkill($_GET['ID']);
    }
  }

  public function updateEmployment(){
    if(isset($_GET['submit']))
    {
      $this->model->addEmployment($_GET['location'], $_GET['position'], $_GET['begin'], $_GET['end'], $_GET['description']);
    }
    if(isset($_GET['update']))
    {
      $this->model->updateEmployment($_GET['location'], $_GET['position'], $_GET['begin'], $_GET['end'], $_GET['description'], $_GET['entry']);
    }
    if(isset($_GET['delete']))
    {
      $this->model->deleteEmployment($_GET['entry']);
    }
  }

  public function updateActivities(){
    if(isset($_GET['submit']))
    {
      $this->model->addActivity($_GET['title'], $_GET['begin'], $_GET['end'], $_GET['location'], $_GET['description']);
    }
    if(isset($_GET['update']))
    {
      $this->model->updateActivity($_GET['title'], $_GET['begin'], $_GET['end'], $_GET['location'], $_GET['description'], $_GET['entry']);
    }
    if(isset($_GET['delete']))
    {
      $this->model->deleteActivity($_GET['entry']);
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
