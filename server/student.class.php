<?php
include_once '../db.php';
class Student{

    private $DB;
    public $SY;

    function __construct(){
        $this->DB = new ConnectDB();
        $this->DB = $this->DB->connect();
    }
    public function setStudent($userid, $first_name, $last_name, $email, $password, $date){
        try{
            $stmt = $this->DB->prepare("INSERT INTO students(STUDENT_ID, FIRST_NAME, LAST_NAME, EMAIL, `PASSWORD`, `DATE`) VALUES(:userid, :firstname, :lastname, :email, :password, :date)");
            $stmt->bindValue(':userid', $userid);
            $stmt->bindValue(':firstname', $first_name);
            $stmt->bindValue(':lastname', $last_name);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':password', $password);
            $stmt->bindValue(':date', $date);
            $stmt->execute();
            echo 'Success';
        }catch(Exception $e){
            echo "Something went wrong ! \n" . $e->getMessage();
        }
    }
    public function isStudentId($studentid){
        $stmt = $this->DB->prepare("SELECT STUDENT_ID FROM students WHERE STUDENT_ID = :studentid");
        $stmt->bindValue(':studentid', $studentid);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $id = htmlentities($row['STUDENT_ID']);

        if($id == $studentid){
            return true;
        }
    }
}
?>


