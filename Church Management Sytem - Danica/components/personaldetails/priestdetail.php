<?php
include('components/head.php');

function priestDetail($priest_info) {
?>

<body>
<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <h1>Priest Details</h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Add New Priest Modal -->
        <div class="modal fade" id="addPriestModal" tabindex="-1" role="dialog" aria-labelledby="addPriestModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form method="POST">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addPriestModalLabel">Add New Priest</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Form fields -->
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" required>
                            </div>
                            <div class="form-group">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" class="form-control" name="middle_name" placeholder="Enter Middle Name">
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" required>
                            </div>
                            <div class="form-group">
                                <label for="birth_date">Birth Date</label>
                                <input type="date" class="form-control" name="birth_date" required>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Enter Address" required>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" class="form-control" name="status" placeholder="Enter Status" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default float-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="add_priest">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Priest Details Card -->
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addPriestModal">
                    + Add New
                </button>
            </div>
            <div class="card-body">

                <!-- Priest Details Table -->
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Birth Date</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($priest_info) {
                            foreach ($priest_info as $priest) {
                                echo "
                                <tr>
                                    <td>{$priest->first_name}</td>
                                    <td>{$priest->middle_name}</td>
                                    <td>{$priest->last_name}</td>
                                    <td>{$priest->birth_date}</td>
                                    <td>{$priest->address}</td>
                                    <td>{$priest->status}</td>
                                    <td>
                                        <button class='btn btn-secondary' data-toggle='modal' data-target='#updatePriestModal{$priest->priest_info_id}'>Update</button>
                                        <button class='btn btn-danger' data-toggle='modal' data-target='#deletePriestModal{$priest->priest_info_id}'>Delete</button>
                                    </td>
                                </tr>

                                <!-- Update Priest Modal -->
                                <div class='modal fade' id='updatePriestModal{$priest->priest_info_id}' tabindex='-1' role='dialog' aria-hidden='true'>
                                    <div class='modal-dialog' role='document'>
                                        <form method='POST'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title'>Update Priest</h5>
                                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                      <span aria-hidden='true'>&times;</span>
                                                    </button>
                                                </div>
                                                <div class='modal-body'>
                                                    <!-- Form fields -->
                                                    <div class='form-group'>
                                                        <label for='first_name'>First Name</label>
                                                        <input type='text' class='form-control' name='first_name' value='{$priest->first_name}' required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='middle_name'>Middle Name</label>
                                                        <input type='text' class='form-control' name='middle_name' value='{$priest->middle_name}'>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='last_name'>Last Name</label>
                                                        <input type='text' class='form-control' name='last_name' value='{$priest->last_name}' required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='birth_date'>Birth Date</label>
                                                        <input type='date' class='form-control' name='birth_date' value='{$priest->birth_date}' required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='address'>Address</label>
                                                        <input type='text' class='form-control' name='address' value='{$priest->address}' required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='status'>Status</label>
                                                        <input type='text' class='form-control' name='status' value='{$priest->status}' required>
                                                    </div>
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-default float-left' data-dismiss='modal'>Close</button>
                                                    <input type='hidden' name='priest_info_id' value='{$priest->priest_info_id}'>
                                                    <button type='submit' class='btn btn-primary' name='update_priest'>Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- Delete Priest Modal -->
                                <div class='modal fade' id='deletePriestModal{$priest->priest_info_id}' tabindex='-1' role='dialog' aria-hidden='true'>
                                    <div class='modal-dialog' role='document'>
                                        <form method='POST'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title'>Delete Priest</h5>
                                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                      <span aria-hidden='true'>&times;</span>
                                                    </button>
                                                </div>
                                                <div class='modal-body'>
                                                    Are you sure you want to delete this priest?
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-default float-left' data-dismiss='modal'>Close</button>
                                                    <input type='hidden' name='priest_info_id' value='{$priest->priest_info_id}'>
                                                    <button type='submit' class='btn btn-danger' name='delete_priest'>Delete</button>
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
