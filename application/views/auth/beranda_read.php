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
                <div class="container-fluid">
                    <div class="table-responsive">
                        <table id="lele" width="100%" class="table table-bordered display" data-options='{ "paging": false; "searching":false}'>
                            <thead>
                                <tr>
                                    <th class="text-center" max-width="5%">No</th>
                                    <th class="text-center" max-width="10%">Organisasi</th>
                                    <th class="text-center" max-width="10%">Sub Organisasi</th>
                                    <th class="text-center" max-width="20%">Tugas</th>
                                    <th class="text-center" max-width="20%">Fungsi</th>
                                    <th class="text-center" max-width="10%">Objek Data</th>
                                    <th class="text-center" max-width="10%">Nama Parameter</th>
                                    <th class="text-center" max-width="10%">Tipe</th>
                                    <th class="text-center" max-width="5%">Panjang</th>
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
</div>
<script src="<?php echo site_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
<script src="<?php echo site_url('assets/datatables/jquery.dataTables.js') ?>"></script>
<script src="<?php echo site_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
