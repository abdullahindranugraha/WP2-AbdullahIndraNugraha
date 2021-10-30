<section>
    <h2 class="h2">Rincian Pembayaran</h2>
    <table class="table table-hover">
        <tr>
            <td>Nama Pembeli</td>
            <td><?= $nama; ?></td>
        </tr>
        <tr>    
            <td>Nomor Handphone</td>
            <td><?= $no_hp; ?></td>
        </tr>
        <tr>
            <td>Merk Sepatu</td>
            <td><?= $merk; ?><br></td>
        </tr>
        <tr>
            <td>Ukuran</td>
            <td><?= $ukuran; ?><br></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>RP. <?= $harga; ?></td>
        </tr>
    </table>
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>Terima kasih telah berbelanja di toko kami.</p>
        </blockquote>
        <figcaption class="blockquote-footer">
            Abddullah Indra Nugraha<cite title="Source Title"> Bogor</cite>
        </figcaption>
    </figure>
    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        <a class="btn btn-success" href="<?= base_url('Tokosepatu'); ?>">Halaman Pembelian</a>
    </div>
</section>