<div class="modal fade none-border" id="add-new-event">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><strong><center>Tambah User</center></strong></h4>
            </div>
            <div class="modal-body">
                <form class="form-group" action="<?= site_url('user/tambah_user') ?>" method="POST" >
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
                            $query = $this->db->get('hak_akses');
                            foreach ($query->result() as $row) {
                                echo "<option value='$row->id_hak_akses'>$row->hak_akses</option>";
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
                   
                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="white-box">

            <table id="demo-foo-addrow" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                <thead>
                    <tr>

                        <th>NO</th>
                        <th data-hide="phone, tablet">Email</th>
                        <th data-hide="phone, tablet">Nama</th>
                        <th data-hide="phone, tablet">Hal Akses</th>
                        <th data-sort-ignore="true" class="min-width">Action</th>
                    </tr>
                </thead>
                <div class="form-inline padding-bottom-15">
                    <div class="row">

                        <div class="col-sm-12 text-right m-b-20">

                            <div class="form-group">

                                <a href="#" data-toggle="modal" data-target="#add-new-event"  class='btn btn-skype '>
                                    <i class='glyphicon glyphicon-plus'> Tambah</i> 
                                </a>
                                <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">

                            </div>

                        </div>
                    </div>
                </div>
                <tbody>
                    <?php
                    $no =0;
                    if ($data_user->num_rows() > 0) {
                        foreach ($data_user->result() as $row) {
                             $no++;
                            if ($row->status == 0) {
                                $link = "<a class='glyphicon glyphicon-cog' style='color:red'	href='" . site_url("user/aktif/$row->id_login") . "' ></a>";
                            } else {
                                $link = "<a class='glyphicon glyphicon-wrench ' style='color:blue' href='" . site_url("user/aktif/$row->id_login") . "' ></a>";
                            }
                            echo "
			<tr>
				<td>$no</td>
				<td>$row->user_name</td>
				<td>$row->email</td>
				<td>$row->hak_akses</td>
				<td >
					<a class='glyphicon glyphicon-pencil' 
					href='" . site_url("user/ubah/$row->id_login") . "' >	</a>
					
					<a class='glyphicon glyphicon-trash' 
                                        onclick='return confirm(\"Data Akan Di Hapus\")'
					href='" . site_url("user/hapus/$row->id_login") . "' >	</a>
					
					$link
				
				</td>
			</tr>
					";
                        }
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            <div class="text-right">
                                <ul class="pagination">
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<!-- Footable -->
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/footable/js/footable.all.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<!--FooTable init-->
<script src="<?php echo base_url(); ?>assets/js/footable-init.js"></script>