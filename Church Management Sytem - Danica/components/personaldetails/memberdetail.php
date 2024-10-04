<?php
  include('components/head.php');
    function memberDetail($member_info){ ?>

  <body>
    <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Member /</span> Details</h4>
              <!-- Bootstrap modals -->
              <div class="card mb-4">
                <div class="card-body">
                    <!-- Default Modal -->
                    <div class="col-lg-0 col-md-0">
                      <div class="mt-3">

                    <!-- Search -->
                  <div class="searchbar" style="position: relative;">


                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-cool-blues" data-bs-toggle="modal" data-bs-target="#basicModal" >
                          + Add New
                        </button>
                    
                        <!--Add New Member Modal -->
                        <form method="POST">
                        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel1">Add New Member</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Firstname</label></br>
                                    <input type="text" id="emailBasic" class="form-control" name="firstname" placeholder="Enter Firstname"></br>
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Middlename</label>
                                    <input type="text" id="dobBasic" class="form-control" name="middlename" placeholder="Enter Middlename">
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Lastname</label>
                                    <input type="text" id="dobBasic" class="form-control" name="lastname" placeholder="Enter Lastname">
                                  </div>
                                </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Birthdate</label>
                                    <input type="date" id="emailBasic" class="form-control" name="birthdate" placeholder="Enter Birthdate">
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Address</label></br>
                                    <input type="text" id="dobBasic" class="form-control" name="p_address" placeholder="Enter Address"></br>
                                  </div>
                                </div>
                                <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Contact No.</label>
                                    <input type="text" id="nameBasic" class="form-control" name="contact_no" placeholder="+63 975 068 7528">
                                  </div>
                                  <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Age</label>
                                    <input type="text" id="emailBasic" class="form-control" name="age" placeholder="Enter Age">
                                  </div>
                                  <div class="col mb-0">
                                <label for="exampleFormControlSelect1" class="form-label">Status</label>
                                  <select class="form-select" name= "stats" id="exampleFormControlSelect1" aria-label="Default select example">
                                  <option selected="Single">Single</option>
                                  <option value="Married">Married</option>
                                  <option value="Widowed">Widowed</option>
                                  <option value="Annulled">Annulled</option>
                                  </select>
                                </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="submit" class="btn btn-primary" name="add_member" value="Add Member">Save changes</button>
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
                        <th style="background-color: #1589FF; color: #ffffff;">Firstname</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Middlename</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Lastname</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Birthdate</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Address</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Contact No</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Age</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Status</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                    <?php
                      if ($member_info) {
                        foreach($member_info as $member){
                          echo "
                          <tr>
                            <td>$member->firstname</td>
                            <td>$member->middlename</td>
                            <td>$member->lastname</td>
                            <td>$member->birthdate</td>
                            <td>$member->p_address</td>
                            <td>$member->contact_no</td>
                            <td>$member->age</td>
                            <td>$member->stats</td>
                            <td>
                            <button type='submit' class='btn btn-secondary delete_menu_id'  data-bs-toggle='modal' data-bs-target='#updatememberModal".$member->member_id."' name='$member->member_id' >
                            <i class='bi bi-check-circle-fill text-light'></i> Update
                            </button>
                            <button type='submit' class='btn btn-danger delete_member_id'  data-bs-toggle='modal' data-bs-target='#deletememberModal".$member->member_id."' name='$member->member_id' >
                            <i class='bi bi-trash text-light'></i> Delete
                          </button>
                        
                          </div>
                          </td>
                          </tr>

                          <!-- Delete Modal -->
                    
                          <div class='modal fade' id='deletememberModal".$member->member_id."' tabindex='-1' aria-hidden='true'>
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
                                  <input type='hidden' name='member_id' value='".$member->member_id."'/>
                                  <button type='submit' class='btn btn-danger' name='deletemember'>Delete</button>
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                      <!-- Update Modal -->
                          
                        
            <div class='modal fade' id='updatememberModal".$member->member_id."' tabindex='-1' aria-hidden='true'> 
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

