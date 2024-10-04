<?php
  include('components/head.php');
    function defuncturiom($defuncturiom,$member_info){ ?>
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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Defuncturiom /</span> Records</h4>
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
                                <h5 class="modal-title" id="exampleModalLabel1">Add New Defuncturiom</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                </div>
                                <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Member Name</label></br>
                                    <select name="member" class="form-control">
                                        <option selected="" disabled="">Select Member Name</option>
                                        <?php foreach ($member_info as $member){
                                            $full_name = $member->firstname. ' ' . $member->lastname;
                                        ?>
                                        
                                        <option value="<?php echo $member->member_id?>"><?php echo $full_name ?></option>
                                        <?php } ?>
                                    </select>
                                  </div>
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="emailBasic" class="form-label">Date of Death</label></br>
                                    <input type="date" id="emailBasic" class="form-control" name="death_date"></br>
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Place of Death</label></br>
                                    <input type="text" id="dobBasic" class="form-control" name="place_death" placeholder="Enter Place of Death"></br>
                                  </div>
                                </div>
                                <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Informant</label></br>
                                    <input type="text" id="dobBasic" class="form-control" name="informant" placeholder="Enter informant"></br>
                                  </div>
                                  <div class="row g-2">
                                  <div class="col mb-3">
                                    <label for="nameBasic" class="form-label">Date of Burial</label>
                                    <input type="date" id="nameBasic" class="form-control" name="dateburial">
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Place of Burial</label></br>
                                    <input type="text" id="dobBasic" class="form-control" name="burialplace" placeholder="Enter Place of Burial"></br>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="sumbit" class="btn btn-primary" name="add_defuncturiom">Save changes</button>
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
                        <th style="background-color: #1589FF; color: #ffffff;">Date of Death</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Place of Death</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Informant</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Date of Burial</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Place of Burial</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Attach File</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                   
                    <?php
                      if ($defuncturiom) {
                        foreach($defuncturiom as $defunc){
                          echo "
                          <tr>
                            <td>$defunc->firstname   $defunc->lastname</td>
                            <td>$defunc->death_date</td>
                            <td>$defunc->death_place</td>
                            <td>$defunc->informant</td>
                            <td>$defunc->date_burial</td>
                            <td>$defunc->place_burial</td>
                            <td></td>
                            <td>
                            <button type='button' class='btn btn-secondary'>
                            <i class='bi bi-check-circle-fill text-light'></i> Update
                            </button>
                            <button type='submit' class='btn btn-danger delete_defuncturiom_id'  data-bs-toggle='modal' data-bs-target='#deletedefuncturiomModal".$defunc->defuncturiom_id."' name='$defunc->defuncturiom_id' >
                            <i class='bi bi-trash text-light'></i> Delete
                          </button>
                        </td>
                          </tr>

                          <!-- Delete Modal -->
                    
                          <div class='modal fade' id='deletedefuncturiomModal".$defunc->defuncturiom_id."' tabindex='-1' aria-hidden='true'>
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
                                  <input type='hidden' name='defuncturiom_id' value='".$defunc->defuncturiom_id."'/>
                                  <button type='submit' class='btn btn-danger' name='deletedefuncturiom'>Delete</button>
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