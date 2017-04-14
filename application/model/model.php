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
    
    public function addEducation($school, $start, $end, $major, $minor, $graduation)
    {
      $sql = "INSERT INTO education 
              (school, begin, end, major, minor, graduation)
              VALUES(:school, :begin, :end, :major, :minor, :graduation)";
      $query = $this->db->prepare($sql);
      $parameters = array(':school' => $school, ':begin' => $start, ':end' => $end, ':major' => $major, ':minor' => $minor, ':graduation' => $graduation);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage");
    }

    public function addSkill($skill)
    {
      $sql = "INSERT INTO skills (language) VALUES (:skill)";
      $query = $this->db->prepare($sql);
      $parameters = array(':skill' => $skill);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage");
    }    
   
    public function addEmployment($location, $position, $begin, $end, $description)
    {
      $sql = "INSERT INTO employment
              (location, position, begin, end, description)
              VALUES(:location, :position, :begin, :end, :description)";
      $query = $this->db->prepare($sql);
      $parameters = array(':location' => $location, ':position' => $position, ':begin' => $begin, ':end' => $end, ':description' => $description);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage");
    }

    public function addActivity($title, $begin, $end, $location, $description)
    {
      $sql = "INSERT INTO activities
              (title, begin, end, location, description)
              VALUES(:title, :begin, :end, :location, :description)";
      $query = $this->db->prepare($sql);
      $parameters = array(':title' => $title, ':begin' => $begin, ':end' => $end, ':location' => $location, ':description' => $description);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage");
    }
 
    public function updateEducation($school, $start, $end, $major, $minor, $graduation, $entry)
    {
      $sql = "UPDATE education 
              SET school = :school,
                  begin = :begin,
                  end = :end,
                  major = :major,
                  minor = :minor,
                  graduation = :graduation
               WHERE number = :entry";
      $query = $this->db->prepare($sql);
      $parameters = array(':school' => $school, 
                          ':begin' => $start, 
                          ':end' => $end, 
                          ':major' => $major, 
                          ':minor' => $minor, 
                          ':graduation' => $graduation, 
                          ':entry' => $entry);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage");
    }

    public function updateSkill($skill, $ID)
    {
      $sql = "UPDATE skills SET language = :skill WHERE id = :ID";
      $query = $this->db->prepare($sql);
      $parameters = array(':skill' => $skill, ':ID' => $ID);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage");
    }
    
    public function updateEmployment($location, $position, $begin, $end, $description, $entry)
    {
      $sql = "UPDATE employment
              SET location = :location,
                  position = :position,
                  begin = :begin,
                  end = :end,
                  description = :description
              WHERE number = :entry";
      $query = $this->db->prepare($sql);
      $parameters = array(':location' => $location, 
                          ':position' => $position,
                          ':begin' => $begin,
                          ':end' => $end,
                          ':description' => $description,
                          ':entry' => $entry);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage");
    }

    public function updateActivity($title, $begin, $end, $location, $description, $entry)
    {
      $sql = "UPDATE activities
              SET title = :title,
                  begin = :begin,
                  end = :end,
                  location = :location,
                  description = :description
              WHERE number = :entry";
      $query = $this->db->prepare($sql);
      $parameters = array(':title' => $title,
                          ':begin' => $begin,
                          ':end' => $end,
                          ':location' => $location,
                          ':description' => $description,
                          ':entry' => $entry);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage");
    }
 
    public function deleteEducation($entry)
    {
      $sql= "DELETE FROM education
             WHERE number = :entry";
      $query = $this->db->prepare($sql);
      $parameters = array(':entry' => $entry);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage");
    }

    public function deleteSkill($ID)
    {
      $sql = "DELETE FROM skills WHERE id = :ID";
      $query = $this->db->prepare($sql);
      $parameters = array(':ID'=> $ID);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage");
    }

    public function deleteEmployment($entry)
    {
      $sql = "DELETE FROM employment
              WHERE number = :entry";
      $query = $this->db->prepare($sql);
      $parameters = array(':entry' => $entry);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage");
    }

    public function deleteActivity($entry)
    {
      $sql = "DELETE FROM activities
              WHERE number = :entry";
      $query = $this->db->prepare($sql);
      $parameters = array(':entry' => $entry);
      $query->execute($parameters);
      header("Refresh:.05;url=".URL ."admin/editPage");
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
        header("Refresh:2;url=".URL ."admin/editPage");
      }
      return $result->userName;
    }

    public function getEducation()
    {
      $sql = "SELECT * FROM education";
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

    public function getEmployment()
    {
      $sql = "SELECT * FROM employment";
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

    public function getActivities()
    {
      $sql = "SELECT * FROM activities";
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

    public function getSkills()
    {
      $sql = "SELECT * FROM skills";
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

    public function getProjects()
    {
      $sql = "SELECT * FROM projects";
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
