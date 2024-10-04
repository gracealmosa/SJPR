<?php
  include('components/head.php');
    function baptismal($baptismal,$member_info,$priest_info){ ?>
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
 <!-- Content -->
 <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Baptismal /</span> Records</h4>
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
                                <h5 class="modal-title" id="exampleModalLabel1">Add New Baptismal</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
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
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Member Name</label></br>
                                    <select name="member" class="form-control">
                                        <option selected="" disabled="">Select Member Name</option>
                                        <?php foreach ($member_info as $member){
                                            $member_name = $member->firstname. ' ' . $member->lastname;
                                        ?>
                                        
                                        <option value="<?php echo $member->member_id?>"><?php echo $member_name ?></option>
                                        <?php } ?>
                                    </select>
                                  </div>
                                <div class="row g-2">
                                <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Place of Birth</label></br>
                                    <input type="text" id="emailBasic" class="form-control" name="birthplace" placeholder="Enter Place of Birth"></br>
                                  </div>
                                </div>
                                  <div class="row g-2">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Father Name</label>
                                    <input type="text" id="nameBasic" class="form-control" name="fathername" placeholder="Enter Father Name">
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Father Birthplace</label></br>
                                    <input type="text" id="dobBasic" class="form-control" name="fbirthplace" placeholder="Enter Father Birthplace"></br>
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Father Homeplace</label></br>
                                    <input type="text" id="dobBasic" class="form-control" name="fhomeplace" placeholder="Enter Father Homeplace"></br>
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Mother Name</label>
                                    <input type="text" id="nameBasic" class="form-control" name="mothername" placeholder="Enter Mother Name">
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Mother Birthplace</label></br>
                                    <input type="text" id="dobBasic" class="form-control" name="mbirthplace" placeholder="Enter Mother Birthplace"></br>
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Mother Homeplace</label></br>
                                    <input type="text" id="dobBasic" class="form-control" name="mhomeplace" placeholder="Enter Mother Homeplace"></br>
                                  </div>
                                </div>
                                <div class="col mb-0">
                                <label for="exampleFormControlSelect1" class="form-label">Parent Status</label>
                                  <select class="form-select" name= "status" id="exampleFormControlSelect1" aria-label="Default select example">
                                  <option selected="Single">Single</option>
                                  <option value="Married">Married</option>
                                  <option value="Widowed">Widowed</option>
                                  <option value="Annulled">Annulled</option>
                                  <option value="Live in">Live in</option>
                                  </select>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="sumbit" class="btn btn-primary" name="add_baptismal">Save changes</button>
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
                        <th style="background-color: #1589FF; color: #ffffff;">Member Name</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Priest Name</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Birth Place</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Father Name</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Father Birthplace</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Father Homeplace</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Mother Name</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Mother Birthplace</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Mother Homeplace</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Parent Status</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Attach File</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php
                      if ($baptismal) {
                        foreach($baptismal as $baptism){
                          echo "
                          <tr>
                            <td>$baptism->member_firstname  $baptism->member_lastname </td>
                            <td>$baptism->priest_firstname  $baptism->priest_lastname</td>
                            <td>$baptism->birthplace</td>
                            <td>$baptism->f_name</td>
                            <td>$baptism->f_birthplace</td>
                            <td>$baptism->f_homeplace</td>
                            <td>$baptism->m_name</td>
                            <td>$baptism->m_birthplace</td>
                            <td>$baptism->m_homeplace</td>
                            <td>$baptism->parent_status</td>
                            <td></td>
                            <td>
                            <button type='submit' class='btn btn-secondary delete_menu_id'  data-bs-toggle='modal' data-bs-target='#updateBaptismModal".$baptism->baptismal_id."' name='$baptism->baptismal_id' >
                            <i class='bi bi-check-circle-fill text-light'></i> Update
                            </button>
                            <button type='submit' class='btn btn-danger delete_baptismal_id'  data-bs-toggle='modal' data-bs-target='#deletebaptismalModal".$baptism->baptismal_id."' name='$baptism->baptismal_id' >
                            <i class='bi bi-trash text-light'></i> Delete
                          </button>
                        </td>
                          </tr>

                          <!-- Delete Modal -->
                    
                          <div class='modal fade' id='deletebaptismalModal".$baptism->baptismal_id."' tabindex='-1' aria-hidden='true'>
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
                                  <input type='hidden' name='baptismal_id' value='".$baptism->baptismal_id."'/>
                                  <button type='submit' class='btn btn-danger' name='deletebaptismal'>Delete</button>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Update Modal -->
                          
                        
                      <div class='modal fade' id='updateBaptismModal".$baptism->baptismal_id."' tabindex='-1' aria-hidden='true'> 
                        <form method='POST'>
                          <div class='modal-dialog' role='document'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                  <h5 class='modal-title' id='exampleModalLabel1'>Update Members</h5>
                                  <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                              </div>
                            <div class='modal-body'>
                         
                              <div class='row g-2'>
                              <div class='col mb-0'>
                                  <label for='emailBasic' class='form-label'>Firstname</label></br>
                                  <input type='text' id='emailBasic' class='form-control' placeholder='Enter Firstname' name='firstname' value='".$member->firstname."'></br>
                              </div>
                              <div class='col mb-0'>
                                <label for='dobBasic' class='form-label'>Middlename</label>
                                <input type='text' id='dobBasic' class='form-control' placeholder='Enter Middlename' name='middlename' value='".$member->middlename."'>
                                </div>
                              <div class='col mb-0'>
                                <label for='dobBasic' class='form-label'>Lastname</label>
                                            <input type='text' id='dobBasic' class='form-control' placeholder='Enter Lastname' name='lastname' value='".$member->lastname."'>
                                          </div>
                                        </div>
                                        <div class='row g-2'>
                                          <div class='col mb-0'>
                                            <label for='emailBasic' class='form-label'>Birthdate</label>
                                            <input type='date' id='emailBasic' class='form-control' placeholder='Enter Birthdate' name='birthdate' value='".$member->birthdate."'>
                                          </div>
                                          <div class='col mb-0'>
                                            <label for='dobBasic' class='form-label'>Address</label></br>
                                            <input type='text' id='dobBasic' class='form-control' placeholder='Enter Address' name='p_address' value='".$member->p_address."'></br>
                                          </div>
                                        </div>
                                        <div class='col mb-3'>
                                            <label for='nameBasic' class='form-label'>Contact No.</label>
                                            <input type='text' id='nameBasic' class='form-control' placeholder='+63 975 068 7528' name='contact_no' value='".$member->contact_no."'>
                                          </div>
                                          <div class='col mb-3'>
                                            <label for='nameBasic' class='form-label'>Age</label>
                                            <input type='text' id='nameBasic' class='form-control' placeholder='' name='age' value='".$member->age."'>
                                          </div>
          
                                          <div class='col mb-3'>
                                            <label for='nameBasic' class='form-label'>Status</label>
                                            <input type='text' id='nameBasic' class='form-control' placeholder='' name='stats' value='".$member->stats."'>
                                          </div>
                                      </div>
                                     <form method='POST'>
                                      <div class='modal-footer'>
                                        <button type='button' class='btn btn-outline-secondary' data-bs-dismiss='modal'>
                                          Close
                                        </button>
                                        <input type='hidden' name='member_id' value='" . $member->member_id. "' />
                                        <button type='submit' class='btn btn-primary' name='update_member'>Update</button>
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