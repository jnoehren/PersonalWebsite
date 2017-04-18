<?php
session_start();
class Home extends DatabaseController
{
    public function index()
    {
        $employmentArray = $this->model->getEmployment($_GET['user']);
        $educationArray = $this->model->getEducation($_GET['user']);
        $activitiesArray = $this->model->getActivities($_GET['user']);
        $skillsArray = $this->model->getSkills($_GET['user']);
        $projectsArray = $this->model->getProjects($_GET['user']);
        $userObject = $this->model->getUser($_GET['user']);
        $length = count($skillsArray);
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }
    public function formIndex()
    {
        require APP . 'view/_templates/formHeader.php';
        require APP . 'view/formPage/formIndex.php';
    }
    public function addPage()
    {
        require APP . 'view/_templates/formHeader.php';
        require APP . 'view/formPage/formFinished.php';
    }
    public function agreement()
    {
	require APP . 'view/_templates/formHeader.php';
	require APP . 'view/formPage/agreement.php';
    }
    public function finished()
    {
	require APP . 'view/_templates/formHeader.php';
	require APP . 'view/formPage/finished.php';
    }
}
