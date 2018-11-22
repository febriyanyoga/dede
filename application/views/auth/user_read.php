<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()?>assets/assets/images/favicon.png">
    <title>Aplikasi Repository Basis Data Tunggal Povinsi Aceh</title>
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/dist/css/style.min.css" rel="stylesheet">
    <!-- ck editor -->
    <script src="<?php echo base_url()?>assets/js/ckeditor.js"></script>
</head>
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <a class="navbar-brand" href="<?php echo site_url('beranda')?>" style="background-color: #03a9f4;">
                        <span class="logo-text" style="font-size: 12pt; color: white; text-decoration: bold; background-color: #03a9f4;">
                            <?php echo getInfoRS('nama_sistem')?>
                        </span>
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti-more"></i>
                </a>
            </div>
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <ul class="navbar-nav float-left mr-auto">
                    <li>
                        <h3 style="color: white; margin-left: -220px;">Aplikasi Repository Basis Data Tunggal Provinsi Aceh</h3>
                    </li>
                </ul>
                <ul class="navbar-nav float-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img src="<?php echo base_url()?>assets/img/dummy/u1.png" alt="user" class="rounded-circle" width="31">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        <span class="with-arrow">
                            <span class="bg-primary"></span>
                        </span>
                        <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                            <div class="">
                                <img src="<?php echo base_url()?>assets/img/dummy/u1.png" alt="user" class="img-circle" width="60">
                            </div>
                            <div class="m-l-10">
                                <h4 class="m-b-0">&nbsp;<?php echo $this->session->userdata('username');?></h4>
                                <!-- <p class=" m-b-0">admin@gmail.com</p> -->
                            </div>
                        </div>

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?php echo site_url('Auth/logout')?>">
                            <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout
                        </a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="card-title">
        <h2 class="text-center"> Detail Data</h2>
    </div><br>
    <!-- File export -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-6">
                        <h4 class="card-title">Data DED</h4>
                        <table class="table" style="border-top: 1px none;">
                            <tr>
                                <th>Nama SKPA</th>
                                <td>&nbsp;:&nbsp;<?php echo $skpa->nama_skpa;?></td>
                            </tr>
                            <tr>
                                <th>Regulasi</th>
                                <td>&nbsp;:&nbsp;<?php echo $skpa->regulasi;?></td>
                            </tr>
                        </table>
                    </div>
                    <a class="btn btn-sm btn-success" target="_blank" href="<?php echo site_url('cetak/'.$skpa->id_skpa)?>">cetak</a>
                    <hr>
                    <div class="table-responsive">
                        <table id="lele" class="table table-bordered display" data-options='{ "paging": false; "searching":false}'>
                            <thead>
                                <tr>
                                    <th class="text-center" max-width="20px">No</th>
                                    <th class="text-center">Organisasi</th>
                                    <th class="text-center">Sub Organisasi</th>
                                    <th class="text-center">Tugas</th>
                                    <th class="text-center">Fungsi</th>
                                    <th class="text-center">Objek Data</th>
                                    <th class="text-center">Nama Parameter</th>
                                    <th class="text-center">Tipe</th>
                                    <th class="text-center">Panjang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $k=1;
                                for ($m=0; $m < (sizeof($all)); $m++) { 
                                    ?>
                                    <tr>
                                        <!-- nomor -->
                                        <?php
                                        $rowspan_o = $Beranda_model->get_all_data_org($all[$m]['id_organisasi'])->num_rows();
                                        if($all[$m]['nama_organisasi'] != $all[$m-1]['nama_organisasi']){
                                            echo '<td class="text-center">'.$k.'</td>';
                                        }else{
                                            echo '<td style="border-top : 0px solid transparent; border-bottom : 0px solid transparent; text-color : transparent; color : transparent; font-size: 0pt; ">'.$k.'</td>';
                                        }
                                        ?>

                                        <!-- nama organisasi -->
                                        <?php
                                        if($all[$m]['nama_organisasi'] != $all[$m-1]['nama_organisasi']){
                                            echo '<td class="text-left">'.$all[$m]['nama_organisasi'].'</td>';
                                            $k++;
                                        }else{
                                            echo '<td style="border-top : 0px solid transparent; border-bottom : 0px solid transparent; text-color : transparent; color : transparent; font-size: 0pt;">'.$all[$m] ['nama_organisasi'].'</td>';
                                        }
                                        ?>

                                        <!-- nama sub organisasi -->
                                        <?php
                                        if($all[$m]['nama_suborganisasi'] != $all[$m-1]['nama_suborganisasi']){
                                            echo '<td class="text-left">'.$all[$m]['nama_suborganisasi'].' </td>';
                                        }else{
                                            echo '<td style="border-top : 0px solid transparent; border-bottom : 0px solid transparent; text-color : transparent; color : transparent; font-size: 0pt;">'.$all[$m] ['nama_suborganisasi'].'</td>';
                                        }
                                        ?>

                                        <!-- tugas suborganisasi -->
                                        <?php
                                        if($all[$m]['nama_suborganisasi'] == ""){
                                            echo '<td class="text-left">'.$all[$m]['tugas'].'</td>';
                                        }else{
                                            if($all[$m]['nama_suborganisasi'] != $all[$m-1]['nama_suborganisasi']){
                                                if($all[$m]['tugas'] != ""){
                                                    echo '<td class="text-left">'.$all[$m]['tugas'].'</td>';
                                                }else{
                                                    echo '<td class="text-left">'.$all[$m]['tugas_sub'].'</td>';
                                                }
                                            }else{
                                                if($all[$m]['tugas_sub'] != $all[$m-1]['tugas_sub']){
                                                    echo '<td style="min-width:300px;" class="text-left">'.$all[$m]['tugas_sub'].'</td>';
                                                }else{
                                                    echo '<td style="border-top : 0px solid transparent; border-bottom : 0px solid transparent; text-color : transparent; color : transparent; font-size: 0pt;">'.$all[$m] ['tugas_sub'].'</td>';
                                                }
                                            }
                                        }
                                        ?>

                                        <!-- fungsi suborganisasi -->
                                        <?php
                                        if($all[$m]['nama_suborganisasi'] == ""){
                                            echo '<td class="text-left">'.$all[$m]['fungsi'].'</td>';
                                        }else{
                                            if($all[$m]['nama_suborganisasi'] != $all[$m-1]['nama_suborganisasi']){
                                                if($all[$m]['fungsi'] != ""){
                                                    echo '<td class="text-left">'.$all[$m]['fungsi'].'</td>';
                                                }else{
                                                    echo '<td class="text-left">'.$all[$m]['fungsi_sub'].'</td>';
                                                }
                                            }else{
                                                if($all[$m]['fungsi_sub'] != $all[$m-1]['fungsi_sub']){
                                                    echo '<td style="min-width:300px;" class="text-left">'.$all[$m]['fungsi_sub'].'</td>';
                                                }else{
                                                    echo '<td style="border-top : 0px solid transparent; border-bottom : 0px solid transparent; text-color : transparent; color : transparent; font-size: 0pt;">'.$all[$m] ['fungsi_sub'].'</td>';
                                                }
                                            }
                                        }
                                        ?>

                                        <!-- nama objek data -->
                                        <?php
                                        if($all[$m]['nama_suborganisasi'] != $all[$m-1]['nama_suborganisasi']){
                                            echo '<td class="text-left">'.$all[$m]['objek_data'].'</td>';
                                        }else{
                                            if($all[$m]['objek_data'] != $all[$m-1]['objek_data']){
                                                echo '<td class="text-left">'.$all[$m]['objek_data'].'</td>';
                                            }else{
                                                echo '<td style="border-top : 0px solid transparent; border-bottom : 0px solid transparent; text-color : transparent; color : transparent; font-size: 0pt;">'.$all[$m] ['objek_data'].'</td>';
                                            }
                                        }
                                        ?>

                                        <!-- nama parameter -->
                                        <?php
                                        if($all[$m]['objek_data'] != ""){
                                            echo '<td class="text-left">'.$all[$m]['nama_parameter'].'</td>';
                                        }else{
                                            echo '<td></td>';
                                        }
                                        ?>

                                        <!-- tipe data -->
                                        <?php
                                        if($all[$m]['objek_data'] != ""){
                                            echo '<td class="text-left">'.$all[$m]['tipe_data'].'</td>';
                                        }else{
                                            echo '<td></td>';
                                        }
                                        ?>
                                        <!-- panjang data -->
                                        <?php
                                        if($all[$m]['objek_data'] != ""){
                                            echo '<td class="text-center">'.$all[$m]['panjang_data'].'</td>';
                                        }else{
                                            echo '<td></td>';
                                        }
                                        ?>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
<script src="<?php echo base_url()?>assets/assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url()?>assets/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- apps -->
<script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>
<script src="<?php echo base_url()?>assets/dist/js/app.init.js"></script>
<script src="<?php echo base_url()?>assets/dist/js/app-style-switcher.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url()?>assets/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="<?php echo base_url()?>assets/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url()?>assets/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url()?>assets/dist/js/custom.min.js"></script>
<!--This page plugins -->
<script src="<?php echo base_url()?>assets/assets/extra-libs/DataTables/datatables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="<?php echo base_url()?>assets/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url()?>assets/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jszip.min.js"></script>
<script src="<?php echo base_url()?>assets/js/pdfmake.min.js"></script>
<script src="<?php echo base_url()?>assets/js/vfs_fonts.js"></script>
<script src="<?php echo base_url()?>assets/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url()?>assets/js/buttons.print.min.js"></script>
<script src="<?php echo base_url()?>assets/dist/js/pages/datatable/datatable-advanced.init.js"></script>
<script src="<?php echo base_url()?>assets/dist/js/pages/datatable/datatable-basic.init.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#lele').DataTable({
          "aaSorting": [],
          "pageLength": 100
      });
    } 
    );
</script>