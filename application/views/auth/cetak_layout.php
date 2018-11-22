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
                    <hr>
                    <div>
                        <table class="table table-bordered" style="margin-right: 10px;" data-options='{ "paging": false; "searching":false}'>
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
                                            echo '<td style="border-top : 0px solid white; border-bottom : 0px solid white; text-color : white; color : white; font-size: 0pt; ">'.$k.'</td>';
                                        }
                                        ?>

                                        <!-- nama organisasi -->
                                        <?php
                                        if($all[$m]['nama_organisasi'] != $all[$m-1]['nama_organisasi']){
                                            echo '<td class="text-left">'.$all[$m]['nama_organisasi'].'</td>';
                                            $k++;
                                        }else{
                                            echo '<td style="border-top : 0px solid white; border-bottom : 0px solid white; text-color : white; color : white; font-size: 0pt;">'.$all[$m] ['nama_organisasi'].'</td>';
                                        }
                                        ?>

                                        <!-- nama sub organisasi -->
                                        <?php
                                        if($all[$m]['nama_suborganisasi'] != $all[$m-1]['nama_suborganisasi']){
                                            echo '<td class="text-left">'.$all[$m]['nama_suborganisasi'].' </td>';
                                        }else{
                                            echo '<td style="border-top : 0px solid white; border-bottom : 0px solid white; text-color : white; color : white; font-size: 0pt;">'.$all[$m] ['nama_suborganisasi'].'</td>';
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
                                                    echo '<td style="border-top : 0px solid white; border-bottom : 0px solid white; text-color : white; color : white; font-size: 0pt;">'.$all[$m] ['tugas_sub'].'</td>';
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
                                                    echo '<td style="border-top : 0px solid white; border-bottom : 0px solid white; text-color : white; color : white; font-size: 0pt;">'.$all[$m] ['fungsi_sub'].'</td>';
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
                                                echo '<td style="border-top : 0px solid white; border-bottom : 0px solid white; text-color : white; color : white; font-size: 0pt;">'.$all[$m] ['objek_data'].'</td>';
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

    <script>
        var css = '@page { size: landscape; }',
            head = document.head || document.getElementsByTagName('head')[0],
            style = document.createElement('style');

        style.type = 'text/css';
        style.media = 'print';

        if (style.styleSheet){
          style.styleSheet.cssText = css;
        } else {
          style.appendChild(document.createTextNode(css));
        }

        head.appendChild(style);
        window.print();
    </script>

</body>
</html>
<!-- All Jquery -->
<!-- ============================================================== -->
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
<script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
