<?= form_open_multipart(base_url('admin/index/update_art/' . $artikel->id_artikel)); ?>
<div class="row">
    <div class="col-md-8">
        <div class="card shadow mb-4">
            <div class="card-header">
                <?= $title; ?>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <label>Judul <span class="text-danger">*</span></label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <input type="text" class="form-control" name="judul" value="<?= $artikel->judul; ?>">
                            <?= form_error('judul', '<span class="text-danger">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label>Kategori <span class="text-danger">*</span></label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <select name="id_kategori" class="form-control">
                                <option></option>
                                <?php foreach ($kategori as $kategori) { ?>
                                <option value="<?= $kategori->id_kategori; ?>" <?php if ($artikel->id_kategori == $kategori->id_kategori) {
																						echo "selected";
																					} ?>>
                                    <?= $kategori->nama_kategori; ?>
                                </option>
                                <?php } ?>
                            </select>
                            <?= form_error('id_kategori', '<span class="text-danger">', '</span>'); ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label>Konten <span class="text-danger">*</span></label>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="isi_artikel" id="ckeditor"
                            value="<?= $artikel->isi_artikel; ?>"><?= $artikel->isi_artikel; ?></textarea>
                        <?= form_error('isi_artikel', '<span class="text-danger">', '</span>'); ?>
                    </div>
                    <div class="col-md-3">
                        <label>Keywords <span class="text-danger">*</span></label>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <input type="text" class="form-control" name="kata_kunci"
                                value="<?= $artikel->kata_kunci; ?>">
                            <?= form_error('kata_kunci', '<span class="text-danger">', '</span>'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow mb-4">
            <div class="card-header">
                Options
            </div>
            <div class="card-body">
                <label>Status <span class="text-danger">*</span></label>
                <div class="form-group">
                    <select name="status_artikel" class="form-control">
                        <option value="Publish" <?php if ($artikel->status_artikel == "Publish") {
													echo "selected";
												} ?>>Publish</option>
                        <option value="Draft" <?php if ($artikel->status_artikel == "Draft") {
													echo "selected";
												} ?>>Draft</option>
                    </select>
                    <?= form_error('status_artikel', '<span class="text-danger">', '</span>'); ?>
                </div>
                <label>Change Image <span class="text-danger">*</span></label>
                <div class="form-group">
                    <input type="file" name="gambar"><br>
                    <img class="img img-fluid" src="<?= base_url('./assets/upload/images/' . $artikel->gambar); ?>">
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg"><i class="fa fa-save"></i>
                        Publish</button>
                </div>
            </div>
        </div>
    </div>

</div>
<?= form_close(); ?>