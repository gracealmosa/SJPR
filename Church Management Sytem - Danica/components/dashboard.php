<?php
  include('components/head.php');
    function dashboard($otalbaptismal,$totalconfirmation,$totaldefuncturiom,$totalmarriage,$event_record){ ?>
    <head>
    <link href='fullcalendar/main.css' rel='stylesheet' />
    <script src='fullcalendar/main.js'></script>
    <script src='jquery.min.js'></script>
    <script src='script.js'></script>
        <style>
            .btn-cool-blues{
                background: #2193b0;
                background:-webkit-linear-gradient(to right, #6dd5ed, #2193b0);
                background: linear-gradient(to right, #6dd5ed,#2193b0);
                color:#fff;
                border: 3px solid #eee;
}
body{
margin-top:20px;
background-color: #f7f7ff;
}
.radius-10 {
    border-radius: 10px !important;
}

.border-info {
    border-left: 5px solid  #0dcaf0 !important;
}
.border-danger {
    border-left: 5px solid  #fd3550 !important;
}
.border-success {
    border-left: 5px solid  #15ca20 !important;
}
.border-warning {
    border-left: 5px solid  #ffc107 !important;
}


.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0px solid rgba(0, 0, 0, 0);
    border-radius: .25rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
}
.bg-gradient-scooter {
    background: #17ead9;
    background: -webkit-linear-gradient( 
45deg
 , #17ead9, #6078ea)!important;
    background: linear-gradient( 
45deg
 , #17ead9, #6078ea)!important;
}
.widgets-icons-2 {
    width: 56px;
    height: 56px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #ededed;
    font-size: 27px;
    border-radius: 10px;
}
.rounded-circle {
    border-radius: 50%!important;
}
.text-white {
    color: #fff!important;
}
.ms-auto {
    margin-left: auto!important;
}
.bg-gradient-bloody {
    background: #f54ea2;
    background: -webkit-linear-gradient( 
45deg
 , #f54ea2, #ff7676)!important;
    background: linear-gradient( 
45deg
 , #f54ea2, #ff7676)!important;
}

.bg-gradient-ohhappiness {
    background: #00b09b;
    background: -webkit-linear-gradient( 
45deg
 , #00b09b, #96c93d)!important;
    background: linear-gradient( 
45deg
 , #00b09b, #96c93d)!important;
}

.bg-gradient-blooker {
    background: #ffdf40;
    background: -webkit-linear-gradient( 
45deg
 , #ffdf40, #ff8359)!important;
    background: linear-gradient( 
45deg
 , #ffdf40, #ff8359)!important;
}
        </style>
    </head>
  <body>
  <div class="container-xxl flex-grow-1 container-p-y">  
 
 <div class="container">
 <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
        <div class="col">
      <div class="card radius-10 border-start border-0 border-3 border-info">
       <div class="card-body">
         <div class="d-flex align-items-center">
           <div>
             <p class="mb-0 text-secondary"><b>Total baptismal Record</b></p></br>
             <h4 class="my-1 text-info"><?php echo $otalbaptismal; ?></h4>
           </div>
           <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class="fa fa-bar-chart"></i>
           </div>
         </div>
       </div>
      </div>
      </div>
      <div class="col">
     <div class="card radius-10 border-start border-0 border-3 border-danger">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div>
              <p class="mb-0 text-secondary"><b>Total Confirmation Record</b></p></br>
              <h4 class="my-1 text-danger"><?php echo $totalconfirmation; ?></h4>
            </div>
            <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class="fa fa-users"></i>
            </div>
          </div>
        </div>
     </div>
     </div>
     <div class="col">
     <div class="card radius-10 border-start border-0 border-3 border-success">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div>
              <p class="mb-0 text-secondary"><b>Total Marriage Record</b></p></br>
              <h4 class="my-1 text-success"><?php echo $totalmarriage; ?></h4>
            </div>
            <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class="fa fa-bar-chart"></i>
            </div>
          </div>
        </div>
     </div>
     </div>
     <div class="col">
     <div class="card radius-10 border-start border-0 border-3 border-warning">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div>
              <p class="mb-0 text-secondary"><b>Total Defuncturiom</b></p></br>
              <h4 class="my-1 text-warning"><?php echo $totaldefuncturiom; ?></h4>
            </div>
            <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class="fa fa-users"></i>
            </div>
          </div>
        </div>
     </div>
     </div> 
   </div>
 </div>

<!--  <form method="POST">
 <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Add Event</h5>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Event Title</label>
                        <input type="text" class="form-control"  placeholder="Event Tiltle" name="event_title">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlReadOnlyInput1" class="form-label">Description</label>
                        <input class="form-control" type="text"  placeholder="Description" name="description">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlReadOnlyInputPlain1" class="form-label">Date of Event</label>
                        <input type="date" class="form-control-plaintext"  value="" name="date">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlReadOnlyInputPlain1" class="form-label">Time of Event</label>
                        <input type="time" class="form-control-plaintext"  value="" name="time">
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Place of Event</label>
                        <input type="text" class="form-control"  placeholder="Place of event" name="place">
                      </div class="mb-3">
                      <button type="submit" class="btn btn-primary" name="add_event" value="Add Event">Add Event</button>
                      </div>
                      </form>-->
                    </div>
                  </div>
                </div>

                
                <!--<div class="container-xxl flex-grow-1 container-p-y">  
                    <div class="card">
                    <hr class="m-0">
                <div class="table-responsive text-nowrap">
                <div class="card-body">
                  <table class="table table-striped ">
                    <thead>
                      <tr>
                        <th style="background-color: #1589FF; color: #ffffff;">Event Title</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Description</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Date</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Time</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Place</th>
                        <th style="background-color: #1589FF; color: #ffffff;">Action</th>
                      </tr>
                      
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php
                      if ($event_record) {
                        foreach($event_record as $event){
                          echo "
                          <tr>
                            <td>$event->title</td>
                            <td>$event->description</td>
                            <td>$event->date</td>
                            <td>$event->time</td>
                            <td>$event->place</td>
                            <td>
                            <button type='button' class='btn btn-secondary'>
                            <i class='bi bi-check-circle-fill text-light'></i> Update
                            </button>
                            <button type='submit' class='btn btn-danger delete_menu_id'  data-bs-toggle='modal' data-bs-target='#deletepriestModal".$event->event_id."' name='$event->event_id' >
                            <i class='bi bi-trash text-light'></i> Delete
                          </button>
                        </td>
                          </tr>

                          
                          <!-- Delete Modal -->
                    
                          <div class='modal fade' id='deletepriestModal".$event->event_id."' tabindex='-1' aria-hidden='true'>
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
                                  <input type='hidden' name='priest_id' value='".$event->event_id."'/>
                                  <button type='submit' class='btn btn-danger' name='deletepriest'>Delete</button>
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
    </div>-->
    


 
 <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js'></script>
 

</body></html>

<?php    } ?>