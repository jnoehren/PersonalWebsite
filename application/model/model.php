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

    public function deleteEducation($entry)
    {
      $sql= "DELETE FROM education
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
      $user = new UserObject($result);
      return $user;
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
class UserObject
{
  public $userName = null;
  function _construct($result)
  {
    $this->userName = $result->userName;
  }
  public function getName()
  {
    return $this->userName;
  }
}
