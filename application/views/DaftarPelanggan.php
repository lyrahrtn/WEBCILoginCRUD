
<section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Daftar Pelanggan </h3>
              <hr>
              <div class="block-header">
 </div>
 </div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
     <?php 
        $notifikasi = $this->session->flashdata('notif');
        if($notifikasi != null){
            echo '<div class="alert alert-danger">'.$notifikasi.'</div>';
        }
     ?>
    <form id="form_validation" method="post" action="<?php echo base_url('index.php/Pelanggan/SendDataPelanggan') ?>">
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" name="NamaPelanggan">
                <label class="form-label">Nama Pelanggan</label>
            </div>
        </div>
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" name="NoTelp">
                <label class="form-label">No Telephone</label>
            </div>
        </div>
        <div class="form-group form-float">
            <div class="form-line">
                <input type="text" class="form-control" name="Username">
                <label class="form-label">Username</label>
            </div>
        </div>
        <div class="form-group form-float">
            <div class="form-line">
                <input type="password" class="form-control" name="Password">
                <label class="form-label">Password</label>
            </div>
        </div>
        <div class="form-group form-float">
            <div class="form-line">
                <textarea name="Alamat" cols="179" rows="5"></textarea>
                <label class="form-label">Description</label>
            </div>
        </div>
        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
    </form>
</div>
</div>
<div class="body">
<div class="row">
</div>