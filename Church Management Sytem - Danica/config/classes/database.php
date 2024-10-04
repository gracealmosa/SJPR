<?php
class Database {
private $pdo;
public function db_connect($dsn, $db_user, $db_pw) {
    try {
        $this->pdo = new PDO($dsn, $db_user, $db_pw);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }
    }
    //Function for authenticating username and password
    public function authenticate($username, $password,$tablename) {
        $hashedPassword = "BhsXkflnsm".md5($password)."ls0a1L2";
        $stmt = $this->pdo->prepare("SELECT * FROM {$tablename} WHERE username = ? AND password=?");
        $stmt->execute([$username,$hashedPassword]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    //Function for creating Account 
    public function Create($column, $values,$tablename) {
        $columnNames = implode(',',$column);
        $placeholders = implode(',', array_fill(0,count($column), '?'));
        $stmt = $this->pdo->prepare("INSERT INTO {$tablename}({$columnNames}) VALUES({$placeholders})");
        $stmt->execute($values);
    }

    public function display($tablename) {
        $stmt = $this->pdo->prepare("Select * FROM {$tablename}");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function display_specialmass($tablename){
        $stmt = $this->pdo->prepare("SELECT special_mass.*, priest_detail.firstname, priest_detail.lastname 
                                     FROM special_mass 
                                     INNER JOIN priest_detail ON special_mass.Priest_id = priest_detail.Priest_id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function display_sickcall($tablename){
        $stmt = $this->pdo->prepare("SELECT sick_call.*, priest_detail.firstname, priest_detail.lastname 
                                     FROM sick_call 
                                     INNER JOIN priest_detail ON sick_call.priest_id = priest_detail.priest_id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function display_specialbless($tablename){
        $stmt = $this->pdo->prepare("SELECT special_bless.*, priest_detail.firstname, priest_detail.lastname 
                                     FROM special_bless 
                                     INNER JOIN priest_detail ON special_bless.priest_id = priest_detail.priest_id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function display_confess($tablename){
        $stmt = $this->pdo->prepare("SELECT confess_sched.*, priest_detail.firstname, priest_detail.lastname 
                                     FROM confess_sched 
                                     INNER JOIN priest_detail ON confess_sched.priest_id = priest_detail.priest_id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function display_mass($tablename){
        $stmt = $this->pdo->prepare("SELECT mass_sched.*, priest_detail.firstname, priest_detail.lastname 
                                     FROM mass_sched 
                                     INNER JOIN priest_detail ON mass_sched.priest_id = priest_detail.priest_id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function display_baptismal($tablename){
        $stmt = $this->pdo->prepare("SELECT baptismal.*, priest_detail.firstname AS priest_firstname, priest_detail.lastname AS priest_lastname, 
                                     member_info.firstname AS member_firstname, member_info.lastname AS member_lastname
                                     FROM baptismal 
                                     INNER JOIN priest_detail ON baptismal.priest_id = priest_detail.priest_id
                                     INNER JOIN member_info ON baptismal.member_id = member_info.member_id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function count_baptismal_records(){
        $stmt = $this->pdo->prepare("SELECT COUNT(*) AS total FROM baptismal");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }
    
    public function display_confirmation($tablename){
        $stmt = $this->pdo->prepare("SELECT confirmation.*, priest_detail.firstname AS priest_firstname, priest_detail.lastname AS priest_lastname, 
                                     member_info.firstname AS member_firstname, member_info.lastname AS member_lastname
                                     FROM confirmation 
                                     INNER JOIN priest_detail ON confirmation.priest_id = priest_detail.priest_id
                                     INNER JOIN member_info ON confirmation.member_id = member_info.member_id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function count_confirmation_records(){
        $stmt = $this->pdo->prepare("SELECT COUNT(*) AS total FROM confirmation");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }

    public function display_defuncturiom($tablename){
        $stmt = $this->pdo->prepare("SELECT defuncturiom.*, member_info.firstname, member_info.lastname 
                                     FROM defuncturiom 
                                     INNER JOIN member_info ON defuncturiom.member_id = member_info.member_id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function count_defuncturiom_records(){
        $stmt = $this->pdo->prepare("SELECT COUNT(*) AS total FROM defuncturiom");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }

    public function display_marriage($tablename){
        $stmt = $this->pdo->prepare("SELECT marriage.*, priest_detail.firstname AS priest_firstname, priest_detail.lastname AS priest_lastname, 
                                     member_info.firstname AS member_firstname, member_info.lastname AS member_lastname, member_info.age AS member_age, member_info.birthdate AS member_birthdate,member_info.stats AS member_status
                                     FROM marriage
                                     INNER JOIN priest_detail ON marriage.priest_id = priest_detail.priest_id
                                     INNER JOIN member_info ON marriage.member_id = member_info.member_id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function count_marriage_records(){
        $stmt = $this->pdo->prepare("SELECT COUNT(*) AS total FROM marriage");
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }

    public function deleteRecord($tablename, $id,$idColumnName) {
       try{
            $stmt = $this->pdo->prepare("DELETE FROM {$tablename} WHERE {$idColumnName} = :id");
            $stmt->bindParam(':id', $id);
            if($stmt->execute()){
                $stmt = null;
                $this->pdo = null;
                return true;
            }
       }
       catch(PDOException $e){
        return "Query Failed:" .$e->getMessage();
       }
    }

    public function updatePriest($priest_info_id, $first_name, $middle_name, $last_name, $birth_date, $address, $status) {
        try {
            $stmt = $this->pdo->prepare("UPDATE priest_info SET 
                first_name = :first_name, 
                middle_name = :middle_name, 
                last_name = :last_name, 
                birth_date = :birth_date, 
                address = :address, 
                status = :status 
                WHERE priest_info_id = :priest_info_id");
    
            $stmt->bindParam(':priest_info_id', $priest_info_id);
            $stmt->bindParam(':first_name', $first_name);
            $stmt->bindParam(':middle_name', $middle_name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':birth_date', $birth_date);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':status', $status);
            
            if ($stmt->execute()) {
                $stmt = null;
                $this->pdo = null;
                return true;
            } else {
                return "Update Failed";
            }
        } catch (PDOException $e) {
            return "Query Failed: " . $e->getMessage();
        }
    }
    

    public function updateMembers($member_id,$firstname, $middlename, $lastname, $birthdate, $p_address, $contact_no, $age, $stats) {
        try {
            $stmt = $this->pdo->prepare("UPDATE member_info SET firstname = :firstname,middlename = :middlename, lastname = :lastname,birthdate = :birthdate,p_address = :p_address,contact_no = :contact_no,age = :age, stats = :stats WHERE member_id = :member_id");
    
            $stmt->bindParam(':member_id', $member_id);
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':middlename', $middlename);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':birthdate', $birthdate);
            $stmt->bindParam(':p_address', $p_address);
            $stmt->bindParam(':contact_no', $contact_no);
            $stmt->bindParam(':age', $age);
            $stmt->bindParam(':stats', $stats);
            
            
            if ($stmt->execute()) {
                $stmt = null;
                $this->pdo = null;
                return true;
           
            } else {
                return "Update Failed";
            }
        } catch(PDOException $e) {
            return "Query Failed: " . $e->getMessage();
        }
    }

    public function display_admin($tablename){
        $stmt = $this->pdo->prepare("SELECT user_account.*, personal_info.firstname, personal_info.lastname 
                                     FROM user_account 
                                     INNER JOIN personal_info ON user_account.personal_id = personal_info.personal_id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

}
?>