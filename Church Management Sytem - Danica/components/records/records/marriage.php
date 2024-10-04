<?php
  include('components/head.php');
    function marriage($marriage,$member_info,$priest_info){ ?>
    <head>
        <style>
            .btn-cool-blues{
                background: #2193b0;
                background:-webkit-linear-gradient(to right, #6dd5ed, #2193b0);
                background: linear-gradient(to right, #6dd5ed,#2193b0);
                color:#fff;
                border: 3px solid #eee;
}
.sb-search {
  float: right;
  overflow: hidden;
}

.sb-search-input {
  border: none;
  outline: none;
  background: #fff;
  width: 100%;
  height: 60px;
  margin: 0;
  z-index: 10;
  padding: 20px 65px 20px 20px;
  font-family: inherit;
  font-size: 20px;
  color: #2c3e50;
}
        </style>
    </head>
  <body><div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Marriage /</span> Records</h4>
              <!-- Bootstrap modals -->
              <div class="card mb-4">
                <div class="card-body">
                    <!-- Default Modal -->
                    <div class="col-lg-0 col-md-0">
                      <div class="mt-3">

                    <!-- Search -->
                  <div class="searchbar" style="position: relative;">
                  <div id="sb-search" class="sb-search">
                  <form>  
                  <div class="input-group mb-3">
                        <input type="text" class="form-control" id="searchInput" placeholder="Search...">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                  </div>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                  <script>
                    $(document).ready(function(){
                    $("#searchInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("tbody tr").filter(function() {
                    $(this).toggle(
                    $(this).find("td:first-child, td:nth-child(2)").text().toLowerCase().indexOf(value) > -1
                    );
                  });
                });
                });
                </script>
                  </form>
                  </div>
                  
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-cool-blues" data-bs-toggle="modal" data-bs-target="#basicModal" >
                          + Add New
                        </button>

                        <!-- Modal -->
                        <form method="POST">
                        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Add New Marriage</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                </div>
                                <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Bride Personal Details</label></br>
                                    <select name="brideinfo" class="form-control">
                                        <option selected="" disabled="">Select Personal Details</option>
                                        <?php foreach ($member_info as $member){
                                            $bride_name = $member->firstname. ' ' . $member->lastname. ' ' . $member->age. ' ' . $member->birthdate. ' ' . $member->status;
                                        ?>
                                        
                                        <option value="<?php echo $member->member_id?>"><?php echo $bride_name ?></option>
                                        <?php } ?>
                                    </select>
                                        </div>  
                                        <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Groom Personal Details</label></br>
                                    <select name="groominfo" class="form-control">
                                        <option selected="" disabled="">Select Groom Details</option>
                                        <?php foreach ($member_info as $member){
                                            $groom_name = $member->firstname. ' ' . $member->lastname. ' ' . $member->age. ' ' . $member->birthdate. ' ' . $member->status;
                                        ?>
                                        
                                        <option value="<?php echo $member->member_id?>"><?php echo $groom_name ?></option>
                                        <?php } ?>
                                    </select>
                                        </div>  
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Bride Occupation</label></br>
                                    <input type="text" id="emailBasic" class="form-control" name="boccupation" placeholder ="enter occupation"></br>
                                  </div>
                                  <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Groom Occupation</label></br>
                                    <input type="text" id="emailBasic" class="form-control" name="goccupation" placeholder ="enter occupation"></br>
                                  </div>
                                </div>
                                <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Bride Religion</label></br>
                                    <input type="text" id="dobBasic" class="form-control" name="bReligion" placeholder="Enter Religion"></br>
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Groom Religion</label></br>
                                    <input type="text" id="dobBasic" class="form-control" name="gReligion" placeholder="Enter Religion"></br>
                                  </div>
                                </div>
                                  <div class="row g-2">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Bride Father Name</label>
                                    <input type="text" id="nameBasic" class="form-control" name="bfathername" placeholder="Enter Father Name">
                                  </div>
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Groom Father Name</label>
                                    <input type="text" id="nameBasic" class="form-control" name="gfathername" placeholder="Enter Father Name">
                                  </div>
                                </div>
                                <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Bride Father Ctizenhip</label></br>
                                    <input type="text" id="dobBasic" class="form-control" name="bfcitizenship" placeholder="Enter Father Citizenship"></br>
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Bride Father Ctizenhip</label></br>
                                    <input type="text" id="dobBasic" class="form-control" name="gfcitizenship" placeholder="Enter Father Citizenship"></br>
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Bride Mother Name</label>
                                    <input type="text" id="nameBasic" class="form-control" name="bmothername" placeholder="Enter Mother Name">
                                  </div>
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Bride Mother Name</label>
                                    <input type="text" id="nameBasic" class="form-control" name="gmothername" placeholder="Enter Mother Name">
                                  </div>
                                </div>
                                <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Bride Mother Ctizenhip</label></br>
                                    <input type="text" id="dobBasic" class="form-control" name="bmcitizenship" placeholder="Enter Mother Citizenship"></br>
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Groom Mother Ctizenhip</label></br>
                                    <input type="text" id="dobBasic" class="form-control" name="gmcitizenship" placeholder="Enter Mother Citizenship"></br>
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Bride Citizenship</label>
                                    <input type="text" id="nameBasic" class="form-control" name="bcitizen" placeholder="Enter Bride Citizenship">
                                  </div>
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Groom Citizenship</label>
                                    <input type="text" id="nameBasic" class="form-control" name="gcitizen" placeholder="Enter Groom Citizenship">
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Bride Last Mass Attended</label></br>
                                    <input type="date" id="dobBasic" class="form-control" name="blastmass_attend"></br>
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Groom Last Mass Attended</label></br>
                                    <input type="date" id="dobBasic" class="form-control" name="glastmass_attend"></br>
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Bride Place of Birth</label></br>
                                    <input type="text" id="emailBasic" class="form-control" name="bplace_birth" placeholder ="enter place of birth"></br>
                                  </div>
                                  <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Groom Place of Birth</label></br>
                                    <input type="text" id="emailBasic" class="form-control" name="gplace_birth" placeholder ="enter place of birth"></br>
                                  </div>
                                </div>
                                <div class="col mb-0">
                                    <center><label for="emailBasic" class="form-label">Other Additional Information</label></center></br>
                                  </div>
                                  <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Address</label></br>
                                    <input type="text" id="emailBasic" class="form-control" name="address" placeholder ="enter address"></br>
                                  </div>
                                  <div class="col mb-0">
                                <label for="exampleFormControlSelect1" class="form-label">Mass Language</label>
                                  <select class="form-select" name= "language" id="exampleFormControlSelect1" aria-label="Default select example">
                                  <option selected="Cebuano">Cebuano</option>
                                  <option value="Tagalog">Tagalog</option>
                                  <option value="English">English</option>
                                  <option value="Spanish">Spanish</option>
                                  </select>
                                </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Date of Marriage</label></br>
                                    <input type="date" id="emailBasic" class="form-control" name="date" placeholder ="enter date of marriage"></br>
                                  </div>
                                  <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Time of Marriage</label></br>
                                    <input type="time" id="emailBasic" class="form-control" name="time" placeholder ="enter time of marriage"></br>
                                  </div>
                                </div>
                                <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Priest Name</label></br>
                                    <select name="priest" class="form-control">
                                        <option selected="" disabled="">Select Priest Name</option>
                                        <?php foreach ($priest_info as $priest){
                                            $full_name = $priest->firstname. ' ' . $priest->lastname;
                                        ?>
                                        
                                        <option value="<?php echo $priest->priest_id?>"><?php echo $full_name ?></option>
                                        <?php } ?>
                                    </select>

                                  </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="sumbit" class="btn btn-primary" name="add_marriage">Save changes</button>
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

               
                <div class="container-xxl flex-grow-1 container-p-y">  
                    <div class="card">
                    <hr class="m-0">
                <div class="table-responsive text-nowrap">
                  <div class="card-body">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th style="background-color: #1589FF; color: #ffffff;">Bride Name | Age | Birthdate | Status</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Bride Occupation</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Bride Religion</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Bride Father Name</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Bride Father Citizenship</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Bride Mother Name</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Bride Mother Citizenship</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Bride Citizenship</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Bride Last Mass Attended</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Bride Place of Birth</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Groom Name | Age | Birthdate | Status</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Groom Occupation</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Groom Religion</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Groom Father Name</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Groom Father Citizenship</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Groom Mother Name</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Groom Mother Citizenship</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Groom Bride Citizenship</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Groom Last Mass Attended</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Groom Place of Birth</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Address</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Language</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Date Marriage</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Time Marriage</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Priest Name</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Attach File</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                   
                    <?php
                      if ($marriage) {
                        foreach($marriage as $mary){
                          echo "
                          <tr>
                          <td>$mary->member_firstname  $mary->member_lastname $mary->member_age $mary->member_birthdate $mary->member_status</td>
                          <td>$mary->b_occupation </td>
                          <td>$mary->b_religion</td>
                          <td>$mary->b_fname</td>
                          <td>$mary->b_fcitizen</td>
                          <td>$mary->b_mname</td>
                          <td>$mary->b_mcitizen</td>
                          <td>$mary->b_citizen</td>
                          <td>$mary->b_lastmass</td>
                          <td>$mary->b_birthplace</td>
                          <td>$mary->member_firstname  $mary->member_lastname $mary->member_age $mary->member_birthdate $mary->member_status</td>
                          <td>$mary->g_occupation </td>
                          <td>$mary->g_religion</td>
                          <td>$mary->g_fname</td>
                          <td>$mary->g_fcitizen</td>
                          <td>$mary->g_mname</td>
                          <td>$mary->g_mcitizen</td>
                          <td>$mary->g_citizen</td>
                          <td>$mary->g_lastmass</td>
                          <td>$mary->g_birthplace</td>
                          <td>$mary->address</td>
                          <td>$mary->language</td>
                          <td>$mary->date_marriage</td>
                          <td>$mary->time_marriage</td>
                          <td>$mary->priest_firstname  $mary->priest_lastname</td>
                          <td></td>
                            <td>
                            <button type='button' class='btn btn-secondary'>
                            <i class='bi bi-check-circle-fill text-light'></i> Update
                            </button>
                            <button type='submit' class='btn btn-danger delete_marriage_id'  data-bs-toggle='modal' data-bs-target='#deletemarriageModal".$mary->marriage_id."' name='$mary->marriage_id' >
                            <i class='bi bi-trash text-light'></i> Delete
                          </button>
                        </td>
                          </tr>

                          <!-- Delete Modal -->
                    
                          <div class='modal fade' id='deletemarriageModal".$mary->marriage_id."' tabindex='-1' aria-hidden='true'>
                          <form method='POST'>
                            <div class='modal-dialog' role='document'>
                              <div class='modal-content'>
                                <div class='modal-header'>
                                  <h5 class='modal-title' id='DeleteModal'>Delete?</h5>
                                  <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                </div>
                                <div class='modal-body'>Are you sure you want to delete?</div>
                                <div class='modal-footer'>
                                  <button type='button' class='btn btn-outline-secondary' data-bs-dismiss='modal'>
                                    Close
                                  </button>
                                  <input type='hidden' name='marriage_id' value='".$mary->marriage_id."'/>
                                  <button type='submit' class='btn btn-danger' name='deletemarriage'>Delete</button>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                          ";
                        }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                  </div>
              </div>
    </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Bootstrap modals -->
            </div>
</body></html>

<?php    } ?>