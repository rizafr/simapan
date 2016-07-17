<?php
$mode = $this->uri->segment(3);

if ($mode == "edt" || $mode == "act_edt") {
    $act = "act_edt";
    $id = $datpil->id;
    $deskripsi = $datpil->deskripsi;
} else {
    $act = "act_add";
    $id = "";
    $deskripsi = "";
}
?>
<div class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Klasifikasi Surat
            </a>
        </div>
    </div><!-- /.container -->
</div><!-- /.navbar -->

<?php echo $this->session->flashdata("k");?>

<div class="well">

    <form action="<?php echo base_URL(); ?>referensi/sifat_surat/<?php echo $act; ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <table width="100%" class="table-form">
            <tr>
                <td width="20%">Deskripsi</td>
                <td>
                    <input type="text" name="deskripsi" required value="<?php echo $deskripsi; ?>" style="width: 700px" class="form-control" autofocus>
                </td>
            </tr>
        </table>
        <div class="row">
            <div class="col-md-12">
                <div class="right mt25">
                    <a href="<?php echo base_URL(); ?>referensi/sifat_surat" class="btn btn-success">
                        <i class="icon icon-arrow-left icon-white"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="icon icon-ok icon-white"></i> Simpan
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
