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

    public function displayBaptismal($tablename) {
        try {
            // Prepare SQL query to select baptism details along with related priest and member information
            $stmt = $this->pdo->prepare("
                SELECT 
                    baptism.baptism_id, 
                    baptism.personal_info_id, 
                    baptism.files_id, 
                    baptism.priest_id, 
                    baptism.date_of_baptism, 
                    priest_detail.firstname AS priest_firstname, 
                    priest_detail.lastname AS priest_lastname, 
                    member_info.firstname AS member_firstname, 
                    member_info.lastname AS member_lastname
                FROM 
                    {$tablename} AS baptism
                JOIN 
                    priest_detail ON baptism.priest_id = priest_detail.priest_id
                JOIN 
                    member_info ON baptism.personal_info_id = member_info.personal_info_id
            ");
            
            // Execute the query
            $stmt->execute();
            
            // Fetch all results as objects
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            // Handle exceptions (optional: log the error)
            return "Error fetching baptism records: " . $e->getMessage();
        }
    }
    

    public function count_baptism_records(){
        $stmt = $this->pdo->prepare("SELECT COUNT(*) AS total FROM baptism");
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
    

    public function updatePersonalInfo(
        $personal_info_id,
        $first_name,
        $middle_name,
        $last_name,
        $suffix,
        $gender,
        $birth_date,
        $address,
        $status,
        $fathers_first_name,
        $fathers_middle_name,
        $fathers_last_name,
        $mothers_first_name,
        $mothers_middle_name,
        $mothers_last_name
    ) {
        try {
            // Prepare the SQL statement for updating the personal_info table
            $stmt = $this->pdo->prepare("
                UPDATE personal_info 
                SET 
                    first_name = :first_name,
                    middle_name = :middle_name,
                    last_name = :last_name,
                    suffix = :suffix,
                    gender = :gender,
                    birth_date = :birth_date,
                    address = :address,
                    status = :status,
                    fathers_first_name = :fathers_first_name,
                    fathers_middle_name = :fathers_middle_name,
                    fathers_last_name = :fathers_last_name,
                    mothers_first_name = :mothers_first_name,
                    mothers_middle_name = :mothers_middle_name,
                    mothers_last_name = :mothers_last_name
                WHERE 
                    personal_info_id = :personal_info_id
            ");
    
            // Bind parameters to the statement
            $stmt->bindParam(':personal_info_id', $personal_info_id);
            $stmt->bindParam(':first_name', $first_name);
            $stmt->bindParam(':middle_name', $middle_name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':suffix', $suffix);
            $stmt->bindParam(':gender', $gender);
            $stmt->bindParam(':birth_date', $birth_date);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':status', $status);
            $stmt->bindParam(':fathers_first_name', $fathers_first_name);
            $stmt->bindParam(':fathers_middle_name', $fathers_middle_name);
            $stmt->bindParam(':fathers_last_name', $fathers_last_name);
            $stmt->bindParam(':mothers_first_name', $mothers_first_name);
            $stmt->bindParam(':mothers_middle_name', $mothers_middle_name);
            $stmt->bindParam(':mothers_last_name', $mothers_last_name);
    
            // Execute the statement
            if ($stmt->execute()) {
                return true; // Record updated successfully
            } else {
                return "Update Failed"; // Update failed for an unknown reason
            }
        } catch (PDOException $e) {
            return "Query Failed: " . $e->getMessage(); // Return the error message
        } finally {
            // Clean up statement and connection
            $stmt = null; // Release statement
            $this->pdo = null; // Release database connection
        }
    }

    public function updateBaptismalInfo($baptism_id, $personal_info_id, $files_id, $priest_id, $date_of_baptism) {
        try {
            $stmt = $this->pdo->prepare("
                UPDATE baptism 
                SET 
                    personal_info_id = :personal_info_id, 
                    files_id = :files_id, 
                    priest_id = :priest_id, 
                    date_of_baptism = :date_of_baptism 
                WHERE 
                    baptism_id = :baptism_id
            ");
    
            $stmt->bindParam(':baptism_id', $baptism_id);
            $stmt->bindParam(':personal_info_id', $personal_info_id);
            $stmt->bindParam(':files_id', $files_id);
            $stmt->bindParam(':priest_id', $priest_id);
            $stmt->bindParam(':date_of_baptism', $date_of_baptism);
    
            if ($stmt->execute()) {
                return true;
            } else {
                return "Update Failed";
            }
        } catch (PDOException $e) {
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