<?php

include('config/initialize.php');
require_once('components/personaldetails/priestdetail.php');
require_once('components/personaldetails/memberdetail.php');
require_once('components/services/specialmass.php');
require_once('components/services/sickcall.php');
require_once('components/services/specialbless.php');
require_once('components/services/confessionsched.php');
require_once('components/services/mass_sched.php');
require_once('components/records/records/baptismal.php');
require_once('components/records/records/confirmation.php');
require_once('components/records/records/defuncturiom.php');
require_once('components/records/records/marriage.php');
require_once('components/dashboard.php');

/* if(!$session->is_logged_in()){
    header("Location: loginDesign.php");
} */

/*
$special_mass = $database->display_specialmass('special_mass','priest_detail');
$sick_call = $database->display_sickcall('sick_call','priest_detail');
$special_bless = $database->display_specialbless('special_bless','priest_detail');
$confess_sched = $database->display_confess('confess_sched','priest_detail');
$mass_sched = $database->display_mass('mass_sched','priest_detail');
$baptismal = $database->display_baptismal('baptismal','priest_detail','member_info');
$otalbaptismal = $database->count_baptismal_records();
$confirmation = $database->display_confirmation('confirmation','priest_detail','member_info');
$totalconfirmation = $database->count_confirmation_records();
$defuncturiom = $database->display_defuncturiom('defuncturiom','member_info');
$totaldefuncturiom = $database->count_defuncturiom_records();
$marriage = $database->display_marriage('marriage','priest_detail','member_info');
$totalmarriage = $database->count_marriage_records();
$priest_info = $database->display('priest_detail');
$member_info = $database->display('member_info');
$event_record = $database->display('event');
$admin = $database->display_admin('personal_accounts','personal_info');
*/
$priest_info = $database->display('priest_info');
HTML::head();
$current_tab = "dashboard";
if(isset($_GET['tab']))
{
  $current_tab=$_GET['tab'];
}
HTML:: sidebar($current_tab);
HTML:: navbar("J");

if($current_tab == "accountsetting")
{
  //accountSetting();
}else if($current_tab == "priestdetail"){
  priestDetail($priest_info);
}else if($current_tab == "memberdetail"){
  memberDetail($member_info);
}else if($current_tab == "dashboard"){
  //dashboard($otalbaptismal,$totalconfirmation,totaldefuncturiom: $totaldefuncturiom,$totalmarriage,$event_record);
}else if($current_tab == "specialmass"){
  specialMass($special_mass,$priest_info);
}else if($current_tab == "sickcall"){
  sickCall($sick_call,$priest_info);
}else if($current_tab == "specialbless"){
  specialBless($special_bless,$priest_info);
}else if($current_tab == "confirmsched"){
  confessionSched($confess_sched,$priest_info);
}else if($current_tab == "massched"){
  massSched($mass_sched,$priest_info);
}else if($current_tab == "baptismal"){
  baptismal($baptismal,$member_info,$priest_info);
}else if($current_tab == "confirmation"){
  confirmation($confirmation,$member_info,$priest_info);
}else if($current_tab == "defuncturiom"){
  defuncturiom($defuncturiom,$member_info);
}else if($current_tab == "marriage"){
  marriage($marriage,$member_info,$priest_info);
}
HTML:: footer();

if (isset($_POST['add_priest']) && !isset($_SESSION['priest_added'])) {
  $columns = array(
      "last_name",
      "first_name",
      "middle_name",
      "birth_date",
      "address",
      "status"
  );

  $values = array(
      $_POST['last_name'],
      $_POST['first_name'],
      $_POST['middle_name'],
      $_POST['birth_date'],
      $_POST['address'],
      $_POST['status']
  );

  $database->Create($columns, $values, "priest_info");
  $_SESSION['priest_added'] = true;
  echo '<script language="javascript">alert("A new priest is added!");</script>';
  header("Location:home.php?tab=priestdetail");
  exit;
}

if (!isset($_POST['add_priest'])) {
  unset($_SESSION['priest_added']);
}

if (ISSET($_POST['add_member']) && !isset($_SESSION['member_added'])){
  $columns = array(
      "first_name",
      "middle_name",
      "last_name",
      "suffix",
      "gender",
      "birth_date",
      "status",
      "address",
      "fathers_last_name",
      "fathers_first_name",
      "fathers_middle_name",
      "mothers_last_name",
      "mothers_first_name",
      "mothers_middle_name");

  $values = array(
      $_POST['first_name'],
      $_POST['middle_name'],
      $_POST['last_name'],
      $_POST['suffix'],
      $_POST['gender'],
      $_POST['birth_date'],
      $_POST['status'],
      $_POST['address'],
      $_POST['fathers_last_name'],
      $_POST['fathers_first_name'],
      $_POST['fathers_middle_name'],
      $_POST['mothers_last_name'],
      $_POST['mothers_first_name'],
      $_POST['mothers_middle_name']);

  $database->Create($columns,$values,"personal_info");
  $_SESSION['member_added'] = true;
  echo'<script language="javascript">alert("A new member is Added!");</script>';
  header("Location: " . $_SERVER['REQUEST_URI']);
  exit;
}

if (!isset($_POST['add_member'])) {
  unset($_SESSION['member_added']);
}

if (ISSET($_POST['add_specialmass'])){
  $columns = array(
      "Priest_id",
      "parishioner_name",
      "address",
      "contact_no",
      "typeofmass",
      "date");

  $values = array(
      $_POST['priest'],
      $_POST['parishioner_name'],
      $_POST['address'],
      $_POST['contactnum'],
      $_POST['typeofmass'],
      $_POST['date']);

  $database->Create($columns,$values,'special_mass');
  echo'<script language="javascript">alert("Special Mass Added!");</script>';
  header("Location:home.php");
}else if (ISSET($_POST['add_sickcall'])){
  $columns = array(
      "priest_id",
      "parishioner_name",
      "address",
      "requestedby",
      "date");

  $values = array(
      $_POST['priest'],
      $_POST['parishioner_name'],
      $_POST['address'],
      $_POST['requestedby'],
      $_POST['date']);

  $database->Create($columns,$values,'sick_call');
  echo'<script language="javascript">alert("Sick Call Added!");</script>';
  header("Location:home.php");
}else if (ISSET($_POST['add_specialbless'])){
  $columns = array(
      "priest_id",
      "parishioner_name",
      "address",
      "contact_no",
      "date");

  $values = array(
      $_POST['priest'],
      $_POST['parishioner_name'],
      $_POST['address'],
      $_POST['contactnum'],
      $_POST['date']);

  $database->Create($columns,$values,'special_bless');
  echo'<script language="javascript">alert("Special Bless Added!");</script>';
  header("Location:home.php");
}else if (ISSET($_POST['add_confeshed'])){
  $columns = array(
      "priest_id",
      "timefrom",
      "timeto",
      "orgname",
      "address",
      "date");

  $values = array(
      $_POST['priest'],
      $_POST['timefrom'],
      $_POST['timeto'],
      $_POST['orgname'],
      $_POST['address'],
      $_POST['date']);

  $database->Create($columns,$values,'confess_sched');
  echo'<script language="javascript">alert("Confession Schedule Added!");</script>';
  header("Location:home.php");
}else if (ISSET($_POST['add_massched'])){
  $columns = array(
      "priest_id",
      "masstime",
      "mass_language",
      "churchname",
      "address",
      "date");

  $values = array(
      $_POST['priest'],
      $_POST['masstime'],
      $_POST['language'],
      $_POST['churchname'],
      $_POST['address'],
      $_POST['date']);

  $database->Create($columns,$values,'mass_sched');
  echo'<script language="javascript">alert("Mass Schedule Added!");</script>';
  header("Location:home.php");

  
}else if (ISSET($_POST['add_baptismal'])){
  $columns = array(
      "member_id",
      "priest_id",
      "birthplace",
      "f_name",
      "f_birthplace",
      "f_homeplace",
      "m_name",
      "m_birthplace",
      "m_homeplace",
      "parent_status");

  $values = array(
      $_POST['member'],
      $_POST['priest'],
      $_POST['birthplace'],
      $_POST['fathername'],
      $_POST['fbirthplace'],
      $_POST['fhomeplace'],
      $_POST['mothername'],
      $_POST['mbirthplace'],
      $_POST['mhomeplace'],
      $_POST['status']);

  $database->Create($columns,$values,'baptismal');
  echo'<script language="javascript">alert("Baptismal Record Added!");</script>';
  header("Location:home.php");
}else if (ISSET($_POST['add_confirmation'])){
  $columns = array(
      "member_id",
      "priest_id",
      "birthplace",
      "f_name",
      "m_name",
      "date_confirm");

  $values = array(
      $_POST['member'],
      $_POST['priest'],
      $_POST['birthplace'],
      $_POST['fathername'],
      $_POST['mothername'],
      $_POST['dateconfirm']);

  $database->Create($columns,$values,'confirmation');
  echo'<script language="javascript">alert("Confirmation Record Added!");</script>';
  header("Location:home.php");
}else if (ISSET($_POST['add_defuncturiom'])){
  $columns = array(
      "member_id",
      "death_date",
      "death_place",
      "informant",
      "date_burial",
      "place_burial");

  $values = array(
      $_POST['member'],
      $_POST['death_date'],
      $_POST['place_death'],
      $_POST['informant'],
      $_POST['dateburial'],
      $_POST['burialplace']);

  $database->Create($columns,$values,'defuncturiom');
  echo'<script language="javascript">alert("Defuncturiom Record Added!");</script>';
  header("Location:home.php");
}else if (ISSET($_POST['add_marriage'])){
  $columns = array(
      "member_id",
      "b_occupation",
      "g_occupation",
      "b_religion",
      "g_religion",
      "b_fname",
      "g_fname",
      "b_fcitizen",
      "g_fcitizen",
      "b_mname",
      "g_mname",
      "b_mcitizen",
      "g_mcitizen",
      "b_citizen",
      "g_citizen",
      "b_lastmass",
      "g_lastmass",
      "b_birthplace",
      "g_birthplace",
      "address",
      "language",
      "date_marriage",
      "time_marriage",
      "priest_id",
      "mem_id");

  $values = array(
      $_POST['brideinfo'],
      $_POST['boccupation'],
      $_POST['goccupation'],
      $_POST['bReligion'],
      $_POST['gReligion'],
      $_POST['bfathername'],
      $_POST['gfathername'],
      $_POST['bfcitizenship'],
      $_POST['gfcitizenship'],
      $_POST['bmothername'],
      $_POST['gmothername'],
      $_POST['bmcitizenship'],
      $_POST['gmcitizenship'],
      $_POST['bcitizen'],
      $_POST['gcitizen'],
      $_POST['blastmass_attend'],
      $_POST['glastmass_attend'],
      $_POST['bplace_birth'],
      $_POST['gplace_birth'],
      $_POST['address'],
      $_POST['language'],
      $_POST['date'],
      $_POST['time'],
      $_POST['priest'],
      $_POST['groominfo'],);

  $database->Create($columns,$values,'marriage');
  echo'<script language="javascript">alert("Marriage Record Added!");</script>';
  header("Location:home.php");


}else if (ISSET($_POST['add_event'])){
  $columns = array(
      "title",
      "description",
      "date",
      "time",
      "place");

  $values = array(
      $_POST['event_title'],
      $_POST['description'],
      $_POST['date'],
      $_POST['time'],
      $_POST['place']);

  $database->Create($columns,$values,'event');
  echo'<script language="javascript">alert("Event Record Added!");</script>';
  header("Location:home.php");
}


if(isset($_POST['delete_priest'])){
  $priests = $_POST['priest_info_id'];
  $database->deleteRecord('priest_info',$priests,'priest_info_id');
}
if(isset($_POST['deletemember'])){
  $members = $_POST['member_id'];
  $database->deleteRecord('member_info',$members,'member_id');
}
if(isset($_POST['deletebaptismal'])){
  $baptize = $_POST['baptismal_id'];
  $database->deleteRecord('baptismal',$baptize,'baptismal_id');
}
if(isset($_POST['deleteconfirmation'])){
  $confirmed = $_POST['confirmation_id'];
  $database->deleteRecord('confirmation',$confirmed,'confirmation_id');
}
if(isset($_POST['deletedefuncturiom'])){
  $death = $_POST['defuncturiom_id'];
  $database->deleteRecord('defuncturiom',$death,'defuncturiom_id');
}
if(isset($_POST['deletemarriage'])){
  $married = $_POST['marriage_id'];
  $database->deleteRecord('marriage',$married,'marriage_id');
}
if(isset($_POST['deleteservicemass'])){
  $smass = $_POST['servicemass_id'];
  $database->deleteRecord('special_mass',$smass,'Servicemass_id');
}
if(isset($_POST['deletesickcall'])){
  $scall = $_POST['sickcall_id'];
  $database->deleteRecord('sick_call',$scall,'sickcall_id');
}
if(isset($_POST['deletebless'])){
  $bless = $_POST['sbless_id'];
  $database->deleteRecord('special_bless',$bless,'specialbless_id');
}
if(isset($_POST['deleteconfess'])){
  $confess = $_POST['confess_id'];
  $database->deleteRecord('confess_sched',$confess,'confess_id');
}
if(isset($_POST['deletemass'])){
  $mass = $_POST['mass_id'];
  $database->deleteRecord('mass_sched',$mass,'massched_id');
}

if (isset($_POST['update_priest'])) {
  // Check if all required fields are set in $_POST
  if (isset($_POST['priest_info_id'], $_POST['first_name'], $_POST['middle_name'], $_POST['last_name'], $_POST['birth_date'], $_POST['address'], $_POST['status'])) {
      $priest_info_id = $_POST['priest_info_id'];
      $first_name = $_POST['first_name'];
      $middle_name = $_POST['middle_name'];
      $last_name = $_POST['last_name'];
      $birth_date = $_POST['birth_date'];
      $address = $_POST['address'];
      $status = $_POST['status'];

      // Proceed with updating the priest record based on new columns
      $result = $database->updatePriest($priest_info_id, $first_name, $middle_name, $last_name, $birth_date, $address, $status);

      if ($result === true) {
          // Record updated successfully
          echo '<script>alert("Priest details updated successfully!");</script>';
          header("Location: " . $_SERVER['REQUEST_URI']);  // Refresh the page to show updated data
          exit;
      } else {
          // Handle error
          echo $result;
      }
  } else {
      echo "Error: One or more required fields are not provided.";
  }
}


if (isset($_POST['update_member'])) {
  // Check if all required fields are set in $_POST
  if (isset($_POST['member_id'], $_POST['firstname'], $_POST['middlename'], $_POST['lastname'], $_POST['birthdate'], $_POST['p_address'], $_POST['contact_no'], $_POST['age'], $_POST['stats'])) {
    $member_id = $_POST['member_id'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['p_address'];
    $contact_no = $_POST['contact_no'];
    $age = $_POST['age'];
    $stats = $_POST['stats'];

     $result = $database->updateMembers($member_id, $firstname, $middlename, $lastname, $birthdate, $p_address, $contact_no, $age, $stats);
      if ($result === true) {
          // Record updated successfully
          // Redirect or show a success message
      } else {
          // Handle error
          echo $result;
      }
  }  
  else {
      echo "Error: One or more required fields are not provided.";
  }
}

?>

