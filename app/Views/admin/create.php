<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-12 mt-5">
            <h2 class="text-center">Form Tambah Produk</h2>
        </div>
        <div class="col-8">
            <form action="/admin/save" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="brand" class="col-sm-2 col-form-label">Brand</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="brand" name="brand" value="<?= old('brand'); ?>" placeholder="Samsung">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="type" class="col-sm-2 col-form-label">Tipe</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('type')) ? 'is-invalid' : ''; ?>" id="type" name="type" value="<?= old('type'); ?>" placeholder="iPhone 12 Pro">
                        <div id="invalidCheck3Feedback" class="invalid-feedback">
                            <?= $validation->getError('type'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="price" name="price" value="<?= old('price'); ?>" placeholder="15000000">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="os" class="col-sm-2 col-form-label">OS</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="os" name="os" value="<?= old('os'); ?>" placeholder="Android 11">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="storage" class="col-sm-2 col-form-label">Storage</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="storage" name="storage" value="<?= old('storage'); ?>" placeholder="256GB">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="cpu" class="col-sm-2 col-form-label">CPU</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="cpu" name="cpu" value="<?= old('cpu'); ?>" placeholder="Snapdragon 865">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ram" class="col-sm-2 col-form-label">RAM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ram" name="ram" value="<?= old('ram'); ?>" placeholder="12GB">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-2">
                        <img src="/img/sampul_default.jpg" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('image')) ? 'is-invalid' : ''; ?>" id="image" name="image" onchange="previewImg()">
                            <div id="invalidCheck3Feedback" class="invalid-feedback">
                                <?= $validation->getError('image'); ?>
                            </div>
                            <label class="custom-file-label" for="image">Pilih gambar..</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                            </svg> Tambah Produk</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>