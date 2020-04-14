<?php
$usernameParam = $data['username'];
$this -> st -> query("SELECT * FROM tbl_pelanggan WHERE username='$usernameParam' LIMIT 0,1;");
$pelanggan = $this -> st -> querySingle();
$this -> st -> query("SELECT * FROM tbl_level_user;");
$levelUser = $this -> st -> queryAll();
?>
<div id='divFormUpdateProfilePelanggan'>
<div class="form-group">
      <label>Username</label>
      <input type="text" class="form-control" disabled value="<?=$pelanggan['username']; ?>"  id='txtUsername'>
</div>
<div class="form-group">
      <label>Nama Pelanggan</label>
      <input type="text" class="form-control" value="<?=$pelanggan['nama_lengkap']; ?>" id='txtNama'>
</div>
<div class="form-group">
      <label>Alamat</label>
      <input type="text" class="form-control" value="<?=$pelanggan['alamat']; ?>" id='txtAlamat'>
</div>
<div class="form-group">
      <label>Hp</label>
      <input type="text" class="form-control" value="<?=$pelanggan['hp']; ?>" id='txtHp'>
</div>
<div class="form-group">
      <label>Email</label>
      <input type="text" class="form-control" value="<?=$pelanggan['email']; ?>" id='txtEmail'>
</div>
<div class="form-group">
      <label>Level User</label>
      <select class="form-control" id='txtLevelUser'>
        <option value='<?=$pelanggan['level']; ?>'><?=$pelanggan['level']; ?> (default)</option>
      <?php
      foreach ($levelUser as $lvl) {
        ?>
        <option value='<?=$lvl['kd_level']; ?>'><?=$lvl['level']; ?></option>
        <?php
      }
       ?>
     </select>
</div>
<div class="form-group" style="text-align:center;">
<a href='#!' class="btn btn-lg btn-primary" v-on:click='prosesUpdateProfile' id='btnSimpan'>Simpan</a>
</div>
</div>
<script src="<?=STYLEBASE; ?>/dasbor/formEditProfilePelanggan.js"></script>
