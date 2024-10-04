<?php
include('components/head.php');

function baptismDetail($baptism_info) {
?>

<body>
<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <h1>Baptism Details</h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Add New Baptism Modal -->
        <div class="modal fade" id="addBaptismModal" tabindex="-1" role="dialog" aria-labelledby="addBaptismModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form method="POST">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addBaptismModalLabel">Add New Baptism</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Form fields -->
                            <div class="form-group">
                                <label for="personal_info_id">Personal Info ID</label>
                                <input type="text" class="form-control" name="personal_info_id" placeholder="Enter Personal Info ID" required>
                            </div>
                            <div class="form-group">
                                <label for="files_id">Files ID</label>
                                <input type="text" class="form-control" name="files_id" placeholder="Enter Files ID" required>
                            </div>
                            <div class="form-group">
                                <label for="priest_id">Priest ID</label>
                                <input type="text" class="form-control" name="priest_id" placeholder="Enter Priest ID" required>
                            </div>
                            <div class="form-group">
                                <label for="date_of_baptism">Date of Baptism</label>
                                <input type="date" class="form-control" name="date_of_baptism" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default float-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="add_baptism">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Baptism Details Card -->
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addBaptismModal">
                    + Add New
                </button>
            </div>
            <div class="card-body">

                <!-- Baptism Details Table -->
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Baptism ID</th>
                            <th>Personal Info ID</th>
                            <th>Files ID</th>
                            <th>Priest ID</th>
                            <th>Date of Baptism</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($baptism_info) {
                            foreach ($baptism_info as $baptism) {
                                echo "
                                <tr>
                                    <td>{$baptism->baptism_id}</td>
                                    <td>{$baptism->personal_info_id}</td>
                                    <td>{$baptism->files_id}</td>
                                    <td>{$baptism->priest_id}</td>
                                    <td>{$baptism->date_of_baptism}</td>
                                    <td>
                                        <button class='btn btn-secondary' data-toggle='modal' data-target='#updateBaptismModal{$baptism->baptism_id}'>Update</button>
                                        <button class='btn btn-danger' data-toggle='modal' data-target='#deleteBaptismModal{$baptism->baptism_id}'>Delete</button>
                                    </td>
                                </tr>

                                <!-- Update Baptism Modal -->
                                <div class='modal fade' id='updateBaptismModal{$baptism->baptism_id}' tabindex='-1' role='dialog' aria-hidden='true'>
                                    <div class='modal-dialog' role='document'>
                                        <form method='POST'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title'>Update Baptism</h5>
                                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                      <span aria-hidden='true'>&times;</span>
                                                    </button>
                                                </div>
                                                <div class='modal-body'>
                                                    <!-- Form fields -->
                                                    <div class='form-group'>
                                                        <label for='personal_info_id'>Personal Info ID</label>
                                                        <input type='text' class='form-control' name='personal_info_id' value='{$baptism->personal_info_id}' required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='files_id'>Files ID</label>
                                                        <input type='text' class='form-control' name='files_id' value='{$baptism->files_id}' required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='priest_id'>Priest ID</label>
                                                        <input type='text' class='form-control' name='priest_id' value='{$baptism->priest_id}' required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='date_of_baptism'>Date of Baptism</label>
                                                        <input type='date' class='form-control' name='date_of_baptism' value='{$baptism->date_of_baptism}' required>
                                                    </div>
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-default float-left' data-dismiss='modal'>Close</button>
                                                    <input type='hidden' name='baptism_id' value='{$baptism->baptism_id}'>
                                                    <button type='submit' class='btn btn-primary' name='update_baptism'>Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- Delete Baptism Modal -->
                                <div class='modal fade' id='deleteBaptismModal{$baptism->baptism_id}' tabindex='-1' role='dialog' aria-hidden='true'>
                                    <div class='modal-dialog' role='document'>
                                        <form method='POST'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title'>Delete Baptism</h5>
                                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                      <span aria-hidden='true'>&times;</span>
                                                    </button>
                                                </div>
                                                <div class='modal-body'>
                                                    Are you sure you want to delete this baptism?
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-default float-left' data-dismiss='modal'>Close</button>
                                                    <input type='hidden' name='baptism_id' value='{$baptism->baptism_id}'>
                                                    <button type='submit' class='btn btn-danger' name='delete_baptism'>Delete</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Include necessary scripts -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Page specific script -->
<script>
$(document).ready(function(){
    // Initialize DataTable
    $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
    });

    // Search functionality (if needed)
    $('#searchInput').on('keyup', function(){
        var table = $('#example1').DataTable();
        table.search(this.value).draw();
    });
});

</script>

</body>
</html>

<?php
}
?>

