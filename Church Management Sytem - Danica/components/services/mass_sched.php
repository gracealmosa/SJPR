<?php
  include('components/head.php');
    function massSched($mass_sched,$priest_info){ ?>
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
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Mass /</span> Schedule</h4>
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
                                <h5 class="modal-title" id="exampleModalLabel1">Add New Mass Sched</h5>
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
                                <div class="row g-2">
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Mass</label></br>
                                    <input type="time" id="dobBasic" class="form-control" name="masstime" ></br>
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
                                    <label for="dobBasic" class="form-label">Church Name</label></br>
                                    <input type="text" id="dobBasic" class="form-control" name="churchname" placeholder="Enter Date"></br>
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Address</label></br>
                                    <input type="text" id="dobBasic" class="form-control" name="address" placeholder="Enter Date"></br>
                                  </div>
                                  <div class="col mb-0">
                                    <label for="dobBasic" class="form-label">Date</label></br>
                                    <input type="date" id="dobBasic" class="form-control" name="date" placeholder="Enter Date"></br>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                  Close
                                </button>
                                <button type="sumbit" class="btn btn-primary" name="add_massched">Save changes</button>
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
                        <th style="background-color: #1589FF; color: #ffffff;">Priest Name</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Mass Time</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Mass Language</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Church Name</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Address</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Date</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Action</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                   
                    <?php
                      if ($mass_sched) {
                        foreach($mass_sched as $massched){
                          echo "
                          <tr>
                            <td>$massched->firstname   $massched->lastname</td>
                            <td>$massched->masstime</td>
                            <td>$massched->mass_language</td>
                            <td>$massched->churchname</td>
                            <td>$massched->address</td>
                            <td>$massched->date</td>
                            <td>
                            <button type='button' class='btn btn-secondary'>
                            <i class='bi bi-check-circle-fill text-light'></i> Update
                            </button>
                            <button type='submit' class='btn btn-danger delete_sick_id'  data-bs-toggle='modal' data-bs-target='#deletesickModal".$massched->massched_id."' name='$massched->massched_id' >
                            <i class='bi bi-trash text-light'></i> Delete
                          </button>
                        </td>
                          </tr>

                          <!-- Delete Modal -->
                    
                          <div class='modal fade' id='deletesickModal".$massched->massched_id."' tabindex='-1' aria-hidden='true'>
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
                                  <input type='hidden' name='mass_id' value='".$massched->massched_id."'/>
                                  <button type='submit' class='btn btn-danger' name='deletemass'>Delete</button>
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