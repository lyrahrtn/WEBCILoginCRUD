
<section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Data Pelanggan </h3>
              <hr>
              <div class="block-header">
 </div>
 </div>
  <div class="row" style="padding: 1% 5% 23% 5%";>
                    <?php 
                        $notifikasi = $this->session->flashdata('notif');
                        if($notifikasi != null){
                            echo '<div class="alert alert-danger">'.$notifikasi.'</div>';
                        }
                    ?>
                <div class="body table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pembeli</th>
                            <th>Alamat</th>
                            <th>No. HP</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i = 0;
                                foreach ($AllDataPelanggan as $pelanggan){
                                    $i++;
                                    echo "<tr>
                                                <th scope='row'>$i</th>
                                                <td>$pelanggan->nama_pembeli</td>
                                                <td>$pelanggan->alamat</td>
                                                <td>$pelanggan->no_telp</td>
                                                <td>$pelanggan->username</td>
                                                <td>$pelanggan->password</td>
                                                <td>
                                                    <button class='btn btn-success waves-effect' type='button' data-toggle='modal' data-target='#defaultModal".$i."'>Edit</button>
                                                    <a class='btn btn-danger waves-effect' href='".base_url('index.php/pelanggan/HapusDataPelanggan/'.$pelanggan->id_pembeli.'')."'>Delete</a>
                                                </td>
                                                </tr>

                                                <div class='modal fade' id='defaultModal".$i."' tabindex='-1' role='dialog'>
                                            <div class='modal-dialog' role='document'>
                                                <div class='modal-content'>
                                                    <div class='modal-header'>
                                                        <h4 class='modal-title' id='defaultModalLabel'>Edit Pelanggan</h4>
                                                    </div>
                                                    <div class='modal-body'>
                                                        <form id='form_validation' method='POST' action='".base_url('index.php/pelanggan/SendUpdateDataPelanggan')."'>
                                                            <input type='text' style='display:none' name='ID' value='".$pelanggan->id_pembeli."'>
                                                            <div class='form-group form-float'>
                                                                <div class='form-line'>
                                                                    <input type='text' class='form-control' name='NamaPelanggan' value='".$pelanggan->nama_pembeli."'>
                                                                    <label class='form-label'>Nama Pelanggan</label>
                                                                </div>
                                                            </div>
                                                            <div class='form-group form-float'>
                                                                <div class='form-line'>
                                                                    <input type='text' class='form-control' name='NoTelp' value='".$pelanggan->no_telp."'>
                                                                    <label class='form-label'>No Telphon</label>
                                                                </div>
                                                            </div>
                                                            <div class='form-group form-float'>
                                                                <div class='form-line'>
                                                                    <input type='text' class='form-control' name='Username' value='".$pelanggan->username."'>
                                                                    <label class='form-label'>Username</label>
                                                                </div>
                                                            </div>
                                                            <div class='form-group form-float'>
                                                                <div class='form-line'>
                                                                    <input type='password' class='form-control' name='Password' value='".$pelanggan->password."'>
                                                                    <label class='form-label'>Password</label>
                                                                </div>
                                                            </div>
                                                            <div class='form-group form-float'>
                                                                <div class='form-line'>
                                                                    <textarea name='Alamat' cols='30' rows='5' class='form-control no-resize'>".$pelanggan->alamat."</textarea>
                                                                    <label class='form-label'>Description</label>
                                                                </div>
                                                            </div>
                                                            <button class='btn btn-primary waves-effect' type='submit'>SAVE CHANGES</button>
                                                        </form>
                                                    </div>
                                                    <div class='modal-footer'>
                                                        <button type='button' class='btn btn-danger waves-effect' data-dismiss='modal'>CLOSE</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        ";
                                }
                            ?>
                        </tbody>
                    </table>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>