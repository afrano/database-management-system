<div class="row">
    <div class="col-lg-12">
        <div class="white-box">
            <h3><center><text style="color: #009999"><b>Tambah User</b></center></h3>
            <?php
            if (validation_errors()) {
                echo "<div class='alert alert-danger'>" . validation_errors() . "</div>";
            }
            ?>
            <form class="form-group" action="<?= site_url($this->uri->uri_string()) ?>" method="POST">
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" type="email" name="username" required="true" />
                </div>
                <div class="form-group">
                    <label>password</label>
                    <input class="form-control" type="password" name="password" required="true" />
                </div>
                <div class="form-group">
                    <label>Nama User</label>
                    <input class="form-control" name="nama" required="true"/>
                </div>
                <div class="form-group">
                    <label>Hak Akses</label>
                    <select name='hak_akses' class="form-control" required="true">
                        <option value="">Pilih Hak Akses</option>
                        <?php
                        $query = $this->db->get('akses');
                        foreach ($query->result() as $row) {
                            echo "<option value='$row->id_akses'>$row->nama_akses</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name='status' class="form-control" required="true">
                        <option value="">Pilih Status User</option>
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                    </select>
                </div>
                <div class='form-group'>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>