<section>
  <!--Mulai Membuat Form input-->
  <form action="<?= base_url('tokosepatu/output'); ?>" method="post">
    <div class="form-group">
      Nama Pembeli
      <input class="form-control" type="text" name=nama placeholder="Masukkan Nama Anda">
      <div class="pesan">
        <?php echo form_error('nama'); ?>
      </div>
      Nomor Hp
      <input class="form-control" type="text" name=no_hp placeholder="Masukkan Nomor HP">
      <div class="pesan">
        <?php echo form_error('no_hp'); ?>
      </div>
      <div class="row">
        <div class="col-sm-6">
          Merk Sepatu   :
          <select class="form-select" name=merk>
            <option value="ANDA BELUM MEMILIH MERK SEPATU" selected disabled>Pilih</option>
            <option value="Nike">Nike</option>
            <option value="Adidas">Adidas</option>
            <option value="Kickers">Kickers</option>
            <option value="Eiger">Eiger</option>
            <option value="Bucherri">Bucherri</option>
          </select>
          <div class="pesan">
            <?php echo form_error('merk'); ?>
          </div>
        </div>
        <div class="col-sm-6">
          Ukuran Sepatu   :<?php
            echo "<select class=form-select name = ukuran>";
            echo "<option value=0 selected disabled>Ukuran</option>";
            for ($ukuran=32; $ukuran <=44 ; $ukuran++) { 
            echo "<option value=".$ukuran.">".$ukuran."</option>";
            }
            echo "</select>";
            ?>
          <div class="pesan">
            <?php echo form_error('ukuran'); ?>
          </div>
        </div>
      </div>
      <input class="btn btn-danger" type="reset" value="Reset"><input class="btn btn-primary" type="submit" value="Submit">
    </div>
  </form>
  <!--selesai Membuat Form input-->  
    <div class="price">
      <h4>Daftar Harga</h4>
        <table cellpadding="10">
          <tr>
            <td align="center">Merk Sepatu</td>
            <td align="center">Harga</td>
          </tr>
          <tr>
            <td>Nike</td>
            <td>Rp. 375.000</td>
          </tr>
          <tr>
            <td>Adidas</td>
            <td>Rp. 300.000</td>
          </tr>
          <tr>
            <td>Kickers</td>
            <td>Rp. 250.000</td>
          </tr>
          <tr>
            <td>Eiger</td>
            <td>Rp. 275.000</td>
          </tr>
          <tr>
            <td>Bucherri</td>
            <td>Rp. 400.000</td>
          </tr>
        </table>
    </div>
</section>