<?php
class Model
{
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function add($firstName, $lastName)
    {
        $sql = "INSERT INTO dataTable 
               (firstName, lastName) 
               VALUES (:firstName, :lastName)";
        $query = $this->db->prepare($sql);
        $parameters = array(':firstName' => $firstName, ':lastName' => $lastName);
        $query->execute($parameters);
    }
    
    public function addEducation($school, $start, $end, $major, $minor, $graduation, $userName)
    {
      $sql = "INSERT INTO education 
              (school, begin, end, major, minor, graduation, userName)
              VALUES(:school, :begin, :end, :major, :minor, :graduation, 
                     :userName)";
      $query = $this->db->prepare($sql);
      $parameters = array(':school' => $school, ':begin' => $start, ':end' => $end, ':major' => $major, ':minor' => $minor, ':graduation' => $graduation, ':userName' => $userName);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage?user=" . $userName);
    }

    public function addSkill($skill, $userName)
    {
      $sql = "INSERT INTO skills (language, userName) VALUES (:skill, :userName)";
      $query = $this->db->prepare($sql);
      $parameters = array(':skill' => $skill, ':userName' => $userName);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage?user=" . $userName);
    }    
   
    public function addEmployment($location, $position, $begin, $end, $description, $userName)
    {
      $sql = "INSERT INTO employment
              (location, position, begin, end, description, userName)
              VALUES(:location, :position, :begin, :end, 
                     :description, :userName)";
      $query = $this->db->prepare($sql);
      $parameters = array(':location' => $location, ':position' => $position, ':begin' => $begin, ':end' => $end, ':description' => $description, ':userName' => $userName);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage?user=" . $userName);
    }

    public function addActivity($title, $begin, $end, $location, $description, $userName)
    {
      $sql = "INSERT INTO activities
              (title, begin, end, location, description, userName)
              VALUES(:title, :begin, :end, :location, :description, :userName)";
      $query = $this->db->prepare($sql);
      $parameters = array(':title' => $title, ':begin' => $begin, ':end' => $end, ':location' => $location, ':description' => $description, ':userName' => $userName);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage?user=" . $userName);
    }

    public function addProject($title, $link, $description, $git, $userName)
    {
      $sql = "INSERT INTO projects
              (title, link, description, git, userName)
              VALUES(:title, :link, :description, :git, :userName)";
      $query = $this->db->prepare($sql);
      $parameters = array(':title' => $title, ':link' => $link, ':description' => $description, ':git' => $git, 'userName' => $userName);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage?user=" . $userName);
    }
 
    public function updateEducation($school, $start, $end, $major, $minor, $graduation, $entry, $userName)
    {
      $sql = "UPDATE education 
              SET school = :school,
                  begin = :begin,
                  end = :end,
                  major = :major,
                  minor = :minor,
                  graduation = :graduation
               WHERE number = :entry AND userName = :userName";
      $query = $this->db->prepare($sql);
      $parameters = array(':school' => $school, 
                          ':begin' => $start, 
                          ':end' => $end, 
                          ':major' => $major, 
                          ':minor' => $minor, 
                          ':graduation' => $graduation, 
                          ':entry' => $entry,
                          ':userName' => $userName);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage?user=" . $userName);
    }

    public function updateSkill($skill, $ID, $userName)
    {
      $sql = "UPDATE skills SET language = :skill WHERE id = :ID AND userName = :userName";
      $query = $this->db->prepare($sql);
      $parameters = array(':skill' => $skill, ':ID' => $ID, ':userName' => $userName);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage?user=" . $userName);
    }
    
    public function updateEmployment($location, $position, $begin, $end, $description, $entry, $userName)
    {
      $sql = "UPDATE employment
              SET location = :location,
                  position = :position,
                  begin = :begin,
                  end = :end,
                  description = :description
              WHERE number = :entry AND userName = :userName";
      $query = $this->db->prepare($sql);
      $parameters = array(':location' => $location, 
                          ':position' => $position,
                          ':begin' => $begin,
                          ':end' => $end,
                          ':description' => $description,
                          ':entry' => $entry,
                          ':userName' => $userName);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage?user=" . $userName);
    }

    public function updateActivity($title, $begin, $end, $location, $description, $entry, $userName)
    {
      $sql = "UPDATE activities
              SET title = :title,
                  begin = :begin,
                  end = :end,
                  location = :location,
                  description = :description
              WHERE number = :entry AND userName = :userName";
      $query = $this->db->prepare($sql);
      $parameters = array(':title' => $title,
                          ':begin' => $begin,
                          ':end' => $end,
                          ':location' => $location,
                          ':description' => $description,
                          ':entry' => $entry,
                          ':userName' => $userName);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage?user=" . $userName);
    }

    public function updateProject($title, $link, $description, $git, $entry, $userName)
    {
      $sql = "UPDATE projects
              SET title = :title,
                  link = :link,
                  description = :description,
                  git = :git
              WHERE id = :entry AND userName = :userName";
      $query = $this->db->prepare($sql);
      $parameters = array(':title' => $title,
                          ':link' => $link,
                          ':description' => $description,
                          ':git' => $git,
                          ':entry' => $entry,
                          ':userName' => $userName);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage?user=" . $userName);
    }
 
    public function deleteEducation($entry, $userName)
    {
      $sql= "DELETE FROM education
             WHERE number = :entry AND userName = :userName";
      $query = $this->db->prepare($sql);
      $parameters = array(':entry' => $entry, ':userName' => $userName);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage?user=" . $userName);
    }

    public function deleteSkill($ID, $userName)
    {
      $sql = "DELETE FROM skills WHERE id = :ID AND userName = :userName";
      $query = $this->db->prepare($sql);
      $parameters = array(':ID'=> $ID, ':userName' => $userName);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage?user=" . $userName);
    }

    public function deleteEmployment($entry, $userName)
    {
      $sql = "DELETE FROM employment
              WHERE number = :entry AND userName = :userName";
      $query = $this->db->prepare($sql);
      $parameters = array(':entry' => $entry, ':userName' => $userName);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage?user=" . $userName);
    }

    public function deleteActivity($entry, $userName)
    {
      $sql = "DELETE FROM activities
              WHERE number = :entry AND userName = :userName";
      $query = $this->db->prepare($sql);
      $parameters = array(':entry' => $entry, ':userName' => $userName);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage?user=" . $userName);
    }

    public function deleteProject($entry, $userName)
    {
      $sql  = "DELETE FROM projects
              WHERE id = :entry AND userName = :userName";
      $query = $this->db->prepare($sql);
      $parameters = array(':entry' => $entry, ':userName' => $userName);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage?user=" . $userName);

    }

    public function verifyUser($userName, $password)
    {
      $sql = "SELECT * FROM login WHERE userName = '$userName' AND password = '$password'";
      $query = $this->db->prepare($sql);
      $query->execute();
      $result = $query->fetch(PDO::FETCH_OBJ);
      if($result == null)
      {
        echo "You have entered the wrong information";
        exit();
      }
      else
      {
        echo "You have logged in successfully";
        header("Refresh:2;url=".URL ."admin/editPage?user=" . $userName);
      }
      return $result->userName;
    }

    public function getEducation($userName)
    {
      $sql = "SELECT * FROM education WHERE userName = '$userName'";
      $query = $this->db->prepare($sql);
      $query->execute();
      $result = $query->fetchAll();
      $educationResult = array();
      foreach($result as $i)
      {
        $newObject = new EducationObject($i);
        $educationResult[] = $newObject;
      }
      return $educationResult;
    }

    public function getEmployment($userName)
    {
      $sql = "SELECT * FROM employment WHERE userName = '$userName'";
      $query = $this->db->prepare($sql);
      $query->execute();
      $result = $query->fetchAll();
      $employmentResult = array();
      foreach($result as $i)
      {
        $newObject = new EmploymentObject($i);
        $employmentResult[] = $newObject;
      }
      return $employmentResult;
    }

    public function getActivities($userName)
    {
      $sql = "SELECT * FROM activities WHERE userName = '$userName'";
      $query = $this->db->prepare($sql);
      $query->execute();
      $result = $query->fetchAll();
      $activityResult = array();
      foreach($result as $i)
      {
        $newObject = new ActivityObject($i);
        $activityResult[] = $newObject;
      }
      return $activityResult;
    }

    public function getSkills($userName)
    {
      $sql = "SELECT * FROM skills WHERE userName = '$userName'";
      $query = $this->db->prepare($sql);
      $query->execute();
      $result = $query->fetchAll();
    
      $skillsResult = array();
      foreach($result as $i)
      {
        $newObject = new SkillObject($i);
        $skillsResult[] = $newObject;
      }
      return $skillsResult;
    }  

    public function getProjects($userName)
    {
      $sql = "SELECT * FROM projects WHERE userName = '$userName'";
      $query = $this->db->prepare($sql);
      $query->execute();
      $result = $query->fetchAll();

      $skillsResult = array();
      foreach($result as $i)
      {
        $newObject = new ProjectObject($i);
        $projectResult[] = $newObject;
      }
      return $projectResult;

    }
    
    public function getUser($userName)
    {
      $sql = "SELECT * FROM login WHERE userName = '" . $userName ."';";
      $query = $this->db->prepare($sql);
      $query->execute();
      $result = $query->fetch();

      $userObject = new UserObject($result);
      return $userObject;
    }
}

class UserObject
{
  public $Name = null;
  public $Facebook = null;
  public $LinkedIn = null;
  
  function __construct($result)
  {
    $this->Name = $result->name;
    $this->Facebook = $result->facebook;
    $this->LinkedIn = $result->linkedIn;
  }
}

class ProjectObject
{
  public $ID = null;
  public $Link = null;
  public $Title = null;
  public $Description = null;
  public $Git = null;

  function __construct($result)
  {
    $this->ID = $result->id;
    $this->Link = $result->link;
    $this->Title = $result->title;
    $this->Description = $result->description;
    $this->Git = $result->git;
  }
}

class SkillObject
{
  public $ID = null;
  public $Language = null;
  function __construct($result)
  {
    $this->ID = $result->id;
    $this->Language = $result->language;
  }
}
class ActivityObject
{
  public $Title = null;
  public $Begin = null;
  public $End = null;
  public $Location = null;
  public $Description = null;
  public $Number = null;
  function __construct($result)
  {
    $this->Title = $result->title;
    $this->Begin = $result->begin;
    $this->End = $result->end;
    $this->Location = $result->location;
    $this->Description =  $result->description;
    $this->Number = $result->number;
  }
}
class EmploymentObject
{
  public $Location =null;
  public $Position = null;
  public $Begin = null;
  public $End = null;
  public $Description = null;
  public $Number = null;
  function __construct($result)
  {
    $this->Location = $result->location;
    $this->Position = $result->position;
    $this->Begin = $result->begin;
    $this->End = $result->end;
    $this->Description = $result->description;
    $this->Number = $result->number;
  }
}
class EducationObject
{
  public $School = null;
  public $Begin = null;
  public $End = null;
  public $Major = null;
  public $Minor = null;
  public $Graduation = null;
  public $Number = null;
  function __construct($result)
  {
    $this->School = $result->school;
    $this->Begin = $result->begin;
    $this->End = $result->end;
    $this->Major = $result->major;
    $this->Minor = $result->minor;
    $this->Graduation = $result->graduation;
    $this->Number = $result->number;
  }
}
