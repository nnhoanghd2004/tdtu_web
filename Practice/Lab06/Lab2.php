<?php
function GetNextUserID() {
    static $userID = 1;
    return $userID++; 
}
class User {
    private $username;
    private $userEmail;
    private $userID;
    private $status;

    public function __construct($newUser, $email) {
        $this->username = $newUser;
        $this->userEmail = $email;
        $this->status = 1;
        $this->userID = GetNextUserID();

    }

    public function __destruct() {
        $this->username =NULL;
        $this->userEmail =NULL;
        $this->userID =NULL;
        $this->status =NULL;
    }
    public function GetUserName() {
        return $this->username;
    }
    public function GetUserEmail() {
        return $this->userEmail;
    }    
    public function GetUserID() {
        return $this->userID;
    }
    public function GetStatus($input) {
        if ($input > 1 || $input < 0) return false;
        $this->status = $input;
        return true;
    }    

}
?>

<?php
class Person {

    private $name;
    private $nationalID;

    public function __construct($personName, $ID) {
        $this->name = strtolower($personName);
        $this->nationalID = $ID;
    }

    public function getName() {
        return strtoupper($this->name);
    }

    public function setName($newName) {
        $this->name = $newName;
    }

    public function getNationalID() {
        return $this->nationalID;
    }

}
?>
<?php
class Employee extends Person {

private $employeeID;
private $department;

public function __construct($name, $nationalID, $department) {
    parent::__construct($name, $nationalID);
    $this->employeeID = $this->generateEmployeeID();
    $this->department = $department;
}

public function getEmployeeID() {
    return $this->employeeID;
}

public function getDepartment() {
    return $this->department;
}

public function setDepartment($department) {
    $this->department = $department;
}

private function generateEmployeeID() {
    static $idGen = 1;
    return $idGen++;
}

}
?>



<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>OOP PHP - User Class</title>
</head>

<body>
    <h1>OOP PHP - User Class</h1>
    <?php
    $nguyenanh = new User("Nguyen Anh", "dinhanhvnn@gmail.com");
    $nguyenanhmore = new User("Nguyen Van A", "youremail@gmail.com");

    echo "<h2>---User info---</h2>";
    echo "<p>UserID: " . $nguyenanh->GetUserID() . "<br/>";
    echo "<p>UserName: " . $nguyenanh->GetUserName() . "<br/>";

    echo "<h2>---More user---</h2>";
    echo "<p>UserID: " . $nguyenanhmore->GetUserID() . "<br/>";
    echo "<p>UserName: " . $nguyenanhmore->GetUserName() . "<br/>";
    ?>

    <?php

echo "<h2>Thông tin cá nhân</h2>";

$person_a = new Person("Nguyễn Văn A", 123456789);

echo "<p>Tên: " . $person_a->getName() . "</p>";
echo "<p>Số CMND/CCCD: " . $person_a->getNationalID() . "</p>";

echo "<h2>Thông tin nhân viên</h2>";

$employee_a = new Employee("Nguyễn Văn B", 987654321, "Marketing");

echo "<p>Mã nhân viên: " . $employee_a->getEmployeeID() . "</p>";
echo "<p>Tên: " . $employee_a->getName() . "</p>";
echo "<p>Bộ phận: " . $employee_a->getDepartment() . "</p>";
?>

</body>

</html>