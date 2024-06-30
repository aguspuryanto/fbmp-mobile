<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h2 class="mt-0">Tambah Artikel</2>

        <div class="card">
            <div class="card-body">

                <?= $this->include('admin/articles/_form') ?>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script>
function slugify(content) {
	return content.toLowerCase().replace(/ /g,'-').replace(/[^\w-]+/g,'');
}

$(document).ready(function() {
    $("input#judul").change(function(){
        $('input#slug').val(slugify($(this).val()));
    });
});
</script>

<?= $this->endSection() ?>