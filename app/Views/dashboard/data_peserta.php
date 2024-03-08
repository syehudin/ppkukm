<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Data Pengguna QRIS</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>/assets/img/bsc.png">
    <script src="<?php echo base_url() ?>/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['<?php echo base_url() ?>/assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/atlantis.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/demo.css">
</head>
<body>
    <div class="wrapper">
        <div class="main-header">
            <div class="logo-header" data-background-color="blue">
                <a href="#" class="logo">
                    <img src="<?php echo base_url() ?>/assets/img/jakarta.png" style="width: 100%; height:45px" alt="navbar brand" class="navbar-brand">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                <div class="container-fluid">
                    <div class="collapse" id="search-nav">
                        <h3 class="text-white" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Data Pengguna QRIS DKI Jakarta</h3>
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="<?php echo base_url() ?>/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="<?php echo base_url() ?>/assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4>Pengguna</h4>
                                                <p class="text-muted">Administrator</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="fas fa-info-circle"></i> Bantuan</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="fas fa-arrow-circle-right"></i> Keluar</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                        <a data-toggle="dropdown" href="#" aria-expanded="false">
                            <span class="caret text-white"></span>
                        </a>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- index -->
        
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="<?php echo base_url() ?>/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a>
                                <span>Pengguna 
                                    <span class="user-level">Administrator</span>
                                </span>
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item">
                            <a href="/">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="/data_peserta">
                                <i class="fa fa-users"></i>
                                <p>Data Peserta</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/data_transaksi">
                                <i class="fa fa-credit-card"></i>
                                <p>Data Transaksi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="#base">
                                <i class="fa fa-calendar"></i>
                                <p>Data Bulanan</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="<?php echo base_url('/januari') ?>">
                                            <span class="sub-item">Januari</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('/februari') ?>">
                                            <span class="sub-item">Februari</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('/maret') ?>">
                                            <span class="sub-item">Maret</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('/april') ?>">
                                            <span class="sub-item">April</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('/mei') ?>">
                                            <span class="sub-item">Mei</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('/juni') ?>">
                                            <span class="sub-item">Juni</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('/juli') ?>">
                                            <span class="sub-item">Juli</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('/agustus') ?>">
                                            <span class="sub-item">Agustus</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('/september') ?>">
                                            <span class="sub-item">September</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('/oktober') ?>">
                                            <span class="sub-item">Oktober</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('/november') ?>">
                                            <span class="sub-item">November</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('/desember') ?>">
                                            <span class="sub-item">Desember</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="main-panel">
            <div class="content">
                <div class="panel-header bg-primary-gradient">
                    <div class="page-inner py-5">
                        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                            <div>
                                <h2 class="text-white pb-2 fw-bold">Data Peserta QRIS</h2>
                                <h5 class="text-white op-7 mb-2">Data Peserta QRIS dengan jumlah total transaksi QRIS dari setiap peserta</h5>
                            </div>
                            <div class="ml-md-auto py-2 py-md-0">
                                <a href="#" class="btn btn-white btn-border btn-round mr-2">Tambah Data</a>
                                <a href="#" class="btn btn-secondary btn-round">Export Data</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page-inner mt--5">
                    <div class="row mt--2">
                        <div class="col-md-12">
                            <div class="card full-height">
                                <div class="card-body">
                                    <h2>Tabel Data Peserta QRIS</h2><br>
                                    <div class="table-responsive">
                                        <table id="multi-filter-select" class="display table table-striped table-hover">
                                            <thead>
                                                <tr class="bg-secondary text-white">
                                                    <th style="width: 5%">No.</th>
                                                    <th>NIK</th>
                                                    <th>Nama Pemilik</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Jenis Bisnis</th>
                                                    <th>Total Transaksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $number = 1;
                                                foreach ($datas as $data => $i) {
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $number++ . "."; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $i['nik']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $i['pemilik_qris']; ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if($i['jenis_kelamin'] == "2"){
                                                                echo "Perempuan";
                                                            } else {
                                                                echo "Laki-laki";
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $i['nama_bisnis']; ?>
                                                        </td>
                                                        <td>
                                                            
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>NIK</th>
                                                    <th>Pemilik</th>
                                                    <th>Bisnis</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Total Transaksi</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- table -->
            </div>
            <!-- nav foot -->
            <footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            Copyright <i class="fas fa-copyright"></i>
            Dinas PPKUKM DKI Jakarta
        </nav>
        <div class="copyright ml-auto">
            Versi 1.0.01
        </div>
    </div>
</footer>
</div>
</div>
<script src="<?php echo base_url() ?>/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/core/popper.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/core/bootstrap.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/plugin/chart.js/chart.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/plugin/chart-circle/circles.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/plugin/datatables/datatables.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<script src="<?php echo base_url() ?>/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/atlantis.min.js"></script>

<script src="<?php echo base_url() ?>/assets/js/setting-demo.js"></script>
<script src="<?php echo base_url() ?>/assets/js/demo.js"></script>
<script src="<?php echo base_url() ?>assets/js/plugin/datatables/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#basic-datatables').DataTable({});

        $('#multi-filter-select').DataTable({
            "pageLength": 5,
            initComplete: function() {
                this.api().columns().every(function() {
                    var column = this;
                    var select = $('<select class="form-control"><option value=""></option></select>')
                        .appendTo($(column.footer()).empty())
                        .on('change', function() {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });

                    column.data().unique().sort().each(function(d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>')
                    });
                });
            }
        });

        // Add Row
        $('#add-row').DataTable({
            "pageLength": 5,
        });

        var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

        $('#addRowButton').click(function() {
            $('#add-row').dataTable().fnAddData([
                $("#addName").val(),
                $("#addPosition").val(),
                $("#addOffice").val(),
                action
            ]);
            $('#addRowModal').modal('hide');

        });
    });
</script>
</body>

</html>