<link rel="shortcut icon" href="<?php echo ('images/icon.png') ?>" type="image/png">
<link rel="stylesheet" href="<?php echo ('adminlte4/dist/css/adminlte.css') ?>">
<link rel="stylesheet" href="<?php echo ('busy-load/busy-load.min.css') ?>">
<link rel="stylesheet" href="<?php echo ('select2/css/select2.min.css') ?>">
<link rel="stylesheet" href="<?php echo ('select2-bootstrap4-theme/select2-bootstrap4.min.css') ?>">
<link rel="stylesheet" href="<?php echo ('bootstrap-datepicker/bootstrap-datepicker.min.css') ?>">
<link rel="stylesheet" href="<?php echo ('datatables/2.1.2/dataTables.dataTables.css') ?>">
<link rel="stylesheet" href="<?php echo ('datatables/dataTables.dataTables.plugins.css') ?>">
<link rel="stylesheet" href="<?php echo ('font-awesome/css/font-awesome.min.css') ?>">
<link rel="stylesheet" href="<?php echo ('fontawesome-free/css/all-custom.css') ?>">
<link rel="stylesheet" href="<?php echo ('css/app.css') ?>">

<div class="modal fade" id="modal-input" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div id="modal-input-dialog" class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex" style="margin: 0 auto;">
                    <h5 class="modal-title" id="staticBackdropLabel"></h5>
                </div>
                <button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"></div>
        </div>
    </div>
</div>

<div class="toast-container position-fixed top-0 start-50 translate-middle-x p-3">
    <div id="globalToast" class="toast opacity-0" role="alert" aria-live="assertive" aria-atomic="true" style="--bs-bg-opacity: 0.6;">
        <div id="toastHeader" class="toast-header">
            <strong id="toastTitle" class="me-auto"></strong>
        </div>
        <div id="toastBodyContainer" class="d-flex">
            <div id="toastBody" class="toast-body"></div>
        </div>
    </div>
</div>

<script src="<?php echo ('jquery/jquery.min.js') ?>"></script>
<script type="text/javascript">
    var $ = jQuery.noConflict();
</script>
<script src="<?php echo ('popperjs/popper.min.js') ?>"></script>
<script src="<?php echo ('bootstrap/bootstrap.min.js') ?>"></script>
<script src="<?php echo ('jquery-history/jquery.history.min.js') ?>"></script>
<script src="<?php echo ('adminlte4/dist/js/adminlte.js') ?>"></script>
<script src="<?php echo ('moment/moment.js') ?>"></script>
<script src="<?php echo ('moment/locale/id.js') ?>"></script>
<script src="<?php echo ('busy-load/busy-load.min.js') ?>"></script>
<script src="<?php echo ('bootstrap-datepicker/bootstrap-datepicker.min.js') ?>"></script>
<script src="<?php echo ('select2/js/select2.full.min.js') ?>"></script>
<script src="<?php echo ('datatables/init.js') ?>"></script>
<script src="<?php echo ('datatables/2.1.2/dataTables.js') ?>"></script>
<script src="<?php echo ('datatables/dataTables.plugins.min.js') ?>"></script>
<script src="<?php echo ('jszip/jszip.min.js') ?>"></script>
<script src="<?php echo ('pdfmake/pdfmake.min.js') ?>"></script>
<script src="<?php echo ('pdfmake/vfs_fonts.js') ?>"></script>
<script src="<?php echo ('chart.js/Chart.min.js') ?>"></script>
<script src="<?php echo ('chart.js/chartjs-plugin-datalabels.js') ?>"></script>
<script src="<?php echo ('chart.js/init.js') ?>"></script>
<script src="<?php echo ('js/main.js') ?>"></script>