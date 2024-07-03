<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>
    
    <!-- Begin Page Content -->
    <div class="container my-5">

        <?php if (session('msg') !== null) : ?>
            <?= session('msg'); ?>
        <?php endif; ?>

        <!-- Page Heading -->
        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
            <h2 class="mt-0">Produk</h2>
            <div class="text-right">
                <a href="/produk/create" class="btn btn-primary mb-3">Tambah Produk</a>
            </div>
        </div>

        <div class="card mb-5">
            <div class="card-body m-0">

                <?= $this->include('admin/products/_grid') ?>
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col">
                <button type="button" class="btn btn-warning btn-lg btn-block btn-post">Posting</button>
            </div>
            <div class="col">
                <button type="button" class="btn btn-warning btn-lg btn-block btn-hapus">Hapus</button>
            </div>
        </div>
        <a href="<?= base_url('dashboard') ?>" class="btn btn-warning btn-lg btn-block">Menu Utama</a>
    </div>

<?= $this->endSection() ?>


<?= $this->section('styles') ?>
<!-- <link href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" rel="stylesheet"> -->
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<!-- <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script> -->
<script>
    // new DataTable('#example');
    $(function(){
        $('.checkAll').click(function(){
            if (this.checked) {
                $(".checkboxes").prop("checked", true);
            } else {
                $(".checkboxes").prop("checked", false);
            }	
        });

        $('.btn-post').click(function(){
            var selectedPost = new Array();
            $('input[name="row"]:checked').each(function() {
                selectedPost.push(this.value);
            });
            // console.log(selectedPost.length)
            if(selectedPost.length == 0) {
                alert('Silahkan pilih Produk untuk di Posting')
            } else {
                // publish
                console.log(selectedPost, '_selected');
                $.ajax({
                    url: '<?= base_url('produk/publish') ?>',
                    type: 'POST',
                    data: {
                        ids: selectedPost,
                    },
                    success: function (data) {
                        console.log(data)
                    },
                    error: function (error) {
                        console.log(error)
                    },
                })
            }
        });

        $('.btn-hapus').click(function(){
            var selectedPost = new Array();
            $('input[name="row"]:checked').each(function() {
                selectedPost.push(this.value);
            });
            // console.log(selectedPost.length)
            if(selectedPost.length == 0) {
                alert('Silahkan pilih Produk untuk di Hapus')
            } else {
                // publish
                console.log(selectedPost, '_selected');
                $.ajax({
                    url: '<?= base_url('produk/delete') ?>',
                    type: 'POST',
                    data: {
                        ids: selectedPost,
                    },
                    success: function (data) {
                        console.log(data)
                    },
                    error: function (error) {
                        console.log(error)
                    },
                })
            }
        });
    });
</script>
<?= $this->endSection() ?>