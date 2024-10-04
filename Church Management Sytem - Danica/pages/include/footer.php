<?php
function renderFooter($version = "3.0.4", $startYear = 2014, $endYear = 2019) {
    ?>
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> <?php echo htmlspecialchars($version); ?>
        </div>
        <strong>Copyright &copy; <?php echo $startYear . "-" . $endYear; ?> 
            <a href="http://adminlte.io">AdminLTE.io</a>.
        </strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    </body>
    </html>
    <?php
}
?>
