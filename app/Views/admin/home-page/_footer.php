<div class="card">
    <div class="card-header">
      <ul class="nav nav-pills mb-0" id="footer-tab" role="tablist">
          <li class="nav-item">
              <a class="nav-link active" id="footer-profil-tab" data-toggle="pill" href="#footer-profil" role="tab" aria-controls="footer-profil" aria-selected="true">Profile</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" id="footer-sosmed-tab" data-toggle="pill" href="#footer-sosmed" role="tab" aria-controls="footer-sosmed" aria-selected="false">Social Media</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" id="footer-copyright-tab" data-toggle="pill" href="#footer-copyright" role="tab" aria-controls="footer-copyright" aria-selected="false">Copyright</a>
          </li>
      </ul>
    </div>
    <div class="card-body">
      <div class="tab-content" id="footer-tabContent">
        <div class="tab-pane fade show active" id="footer-profil" role="tabpanel" aria-labelledby="footer-profil-tab">
          <?= $this->include('admin/home-page/_footer_profil') ?>
        </div>
        <div class="tab-pane fade" id="footer-sosmed" role="tabpanel" aria-labelledby="footer-sosmed-tab">
          <?= $this->include('admin/home-page/_footer_sosmed') ?>
        </div>
        <div class="tab-pane fade" id="footer-copyright" role="tabpanel" aria-labelledby="footer-copyright-tab">    
          <?= $this->include('admin/home-page/_footer_copyright', ['footer_copyright' => $footer_copyright]) ?>
        </div>
      </div>
    </div>
</div>