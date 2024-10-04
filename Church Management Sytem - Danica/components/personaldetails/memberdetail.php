<?php
include('components/head.php');

function personalInfoDetail($personal_info) {
?>

<body>
<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <h1>Personal Information Details</h1>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Add New Personal Info Modal -->
        <div class="modal fade" id="addPersonalInfoModal" tabindex="-1" role="dialog" aria-labelledby="addPersonalInfoModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form method="POST">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addPersonalInfoModalLabel">Add New Person</h5>
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
                                <label for="suffix">Suffix</label>
                                <input type="text" class="form-control" name="suffix" placeholder="Enter Suffix">
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <input type="text" class="form-control" name="gender" placeholder="Enter Gender" required>
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
                            <div class="form-group">
                                <label for="fathers_first_name">Father's First Name</label>
                                <input type="text" class="form-control" name="fathers_first_name" placeholder="Enter Father's First Name" required>
                            </div>
                            <div class="form-group">
                                <label for="fathers_middle_name">Father's Middle Name</label>
                                <input type="text" class="form-control" name="fathers_middle_name" placeholder="Enter Father's Middle Name">
                            </div>
                            <div class="form-group">
                                <label for="fathers_last_name">Father's Last Name</label>
                                <input type="text" class="form-control" name="fathers_last_name" placeholder="Enter Father's Last Name" required>
                            </div>
                            <div class="form-group">
                                <label for="mothers_first_name">Mother's First Name</label>
                                <input type="text" class="form-control" name="mothers_first_name" placeholder="Enter Mother's First Name" required>
                            </div>
                            <div class="form-group">
                                <label for="mothers_middle_name">Mother's Middle Name</label>
                                <input type="text" class="form-control" name="mothers_middle_name" placeholder="Enter Mother's Middle Name">
                            </div>
                            <div class="form-group">
                                <label for="mothers_last_name">Mother's Last Name</label>
                                <input type="text" class="form-control" name="mothers_last_name" placeholder="Enter Mother's Last Name" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default float-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="add_person">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Personal Info Details Card -->
        <div class="card">
            <div class="card-header">
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addPersonalInfoModal">
                    + Add New
                </button>
            </div>
            <div class="card-body">

                <!-- Personal Info Table -->
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Suffix</th>
                            <th>Gender</th>
                            <th>Birth Date</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Father's Name</th>
                            <th>Mother's Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($personal_info) {
                            foreach ($personal_info as $person) {
                                echo "
                                <tr>
                                    <td>{$person->first_name}</td>
                                    <td>{$person->middle_name}</td>
                                    <td>{$person->last_name}</td>
                                    <td>{$person->suffix}</td>
                                    <td>{$person->gender}</td>
                                    <td>{$person->birth_date}</td>
                                    <td>{$person->address}</td>
                                    <td>{$person->status}</td>
                                    <td>{$person->fathers_first_name} {$person->fathers_middle_name} {$person->fathers_last_name}</td>
                                    <td>{$person->mothers_first_name} {$person->mothers_middle_name} {$person->mothers_last_name}</td>
                                    <td>
                                        <button class='btn btn-secondary' data-toggle='modal' data-target='#updatePersonalInfoModal{$person->personal_info_id}'>Update</button>
                                        <button class='btn btn-danger' data-toggle='modal' data-target='#deletePersonalInfoModal{$person->personal_info_id}'>Delete</button>
                                    </td>
                                </tr>

                                <!-- Update Personal Info Modal -->
                                <div class='modal fade' id='updatePersonalInfoModal{$person->personal_info_id}' tabindex='-1' role='dialog' aria-hidden='true'>
                                    <div class='modal-dialog' role='document'>
                                        <form method='POST'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title'>Update Person</h5>
                                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                      <span aria-hidden='true'>&times;</span>
                                                    </button>
                                                </div>
                                                <div class='modal-body'>
                                                    <!-- Form fields -->
                                                    <div class='form-group'>
                                                        <label for='first_name'>First Name</label>
                                                        <input type='text' class='form-control' name='first_name' value='{$person->first_name}' required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='middle_name'>Middle Name</label>
                                                        <input type='text' class='form-control' name='middle_name' value='{$person->middle_name}'>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='last_name'>Last Name</label>
                                                        <input type='text' class='form-control' name='last_name' value='{$person->last_name}' required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='suffix'>Suffix</label>
                                                        <input type='text' class='form-control' name='suffix' value='{$person->suffix}'>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='gender'>Gender</label>
                                                        <input type='text' class='form-control' name='gender' value='{$person->gender}' required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='birth_date'>Birth Date</label>
                                                        <input type='date' class='form-control' name='birth_date' value='{$person->birth_date}' required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='address'>Address</label>
                                                        <input type='text' class='form-control' name='address' value='{$person->address}' required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='status'>Status</label>
                                                        <input type='text' class='form-control' name='status' value='{$person->status}' required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='fathers_first_name'>Father's First Name</label>
                                                        <input type='text' class='form-control' name='fathers_first_name' value='{$person->fathers_first_name}' required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='fathers_middle_name'>Father's Middle Name</label>
                                                        <input type='text' class='form-control' name='fathers_middle_name' value='{$person->fathers_middle_name}'>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='fathers_last_name'>Father's Last Name</label>
                                                        <input type='text' class='form-control' name='fathers_last_name' value='{$person->fathers_last_name}' required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='mothers_first_name'>Mother's First Name</label>
                                                        <input type='text' class='form-control' name='mothers_first_name' value='{$person->mothers_first_name}' required>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='mothers_middle_name'>Mother's Middle Name</label>
                                                        <input type='text' class='form-control' name='mothers_middle_name' value='{$person->mothers_middle_name}'>
                                                    </div>
                                                    <div class='form-group'>
                                                        <label for='mothers_last_name'>Mother's Last Name</label>
                                                        <input type='text' class='form-control' name='mothers_last_name' value='{$person->mothers_last_name}' required>
                                                    </div>
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-default float-left' data-dismiss='modal'>Close</button>
                                                    <input type='hidden' name='personal_info_id' value='{$person->personal_info_id}'>
                                                    <button type='submit' class='btn btn-primary' name='update_person'>Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <!-- Delete Personal Info Modal -->
                                <div class='modal fade' id='deletePersonalInfoModal{$person->personal_info_id}' tabindex='-1' role='dialog' aria-hidden='true'>
                                    <div class='modal-dialog' role='document'>
                                        <form method='POST'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <h5 class='modal-title'>Delete Person</h5>
                                                    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                                      <span aria-hidden='true'>&times;</span>
                                                    </button>
                                                </div>
                                                <div class='modal-body'>
                                                    Are you sure you want to delete this person?
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-default float-left' data-dismiss='modal'>Close</button>
                                                    <input type='hidden' name='personal_info_id' value='{$person->personal_info_id}'>
                                                    <button type='submit' class='btn btn-danger' name='delete_person'>Delete</button>
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
