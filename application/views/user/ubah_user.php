
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <center><label><h4><strong>Edit User</strong></h4></label></center>
            <?php
            if (validation_errors()) {
                echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
            }
            ?>
            <form class="form-group" action="<?= site_url($this->uri->uri_string()) ?>" method="POST">
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" value="<?= $row->username ?>" name="username" type="email" required="true" />
                </div>
                <div class="form-group">
                    <label>Nama User</label>
                    <input class="form-control" name="nama" value="<?= $row->nama ?>" required="true"/>
                </div>
                <div class="form-group">
                    <label>Hak Akses</label>
                    <select name='hak_akses' class="form-control" required="true">
                        <option value="">Pilih Hak Akses</option>
                        <?php
                        $query = $this->db->get('akses');
                        foreach ($query->result() as $row1) {
                            if ($row1->id_akses == $row->hak_akses) {
                                echo "<option selected value='$row1->id_akses'>$row1->nama_akses</option>";
                            } else {
                                echo "<option value='$row1->id_akses'>$row1->nama_akses</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name='status' class="form-control" required="true">
                        <option value="">Pilih Status User</option>
                        <option value="1" <?php if ($row->status == 1) echo "selected" ?> >Aktif</option>
                        <option value="0" <?php if ($row->status == 0) echo "selected" ?> >Tidak Aktif</option>
                    </select>
                </div>
                <div class='form-group'>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>