
<header class="hidden-print">
  <section class="header bg-ios text-white py-2">
    <div class="container">
      <nav class="d-flex justify-content-between align-items-center">

        <!-- Logo -->
        <div class="d-flex align-items-center gap-3">
          <a href="index.php">
            <?php
              if (isset($sysconf['logo_image']) && $sysconf['logo_image'] != '' && file_exists('images/default/'.$sysconf['logo_image'])) {
                  echo '<img class="h-16 mb-2" src="images/default/'.v($sysconf['logo_image']).'">';
              } elseif (file_exists(__DIR__ . '/../assets/images/logo.png')) {
                  echo '<img class="h-12 w-12 mb-2" src="' . assets(v('images/logo.png')) . '">';
              } else {
                  echo '
                                            <svg
                                  class="fill-current text-grey-lighter block h-12 w-12 mb-2"
                                  version="1.1"
                                  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                  viewBox="0 0 118.4 135" style="enable-background:new 0 0 118.4 135;"
                                  xml:space="preserve">
                            <path d="M118.3,98.3l0-62.3l0-0.2c-0.1-1.6-1-3-2.3-3.9c-0.1,0-0.1-0.1-0.2-0.1L61.9,0.8c-1.7-1-3.9-1-5.4-0.1l-54,31.1
                            l-0.4,0.2C0.9,33,0.1,34.4,0,36c0,0.1,0,0.2,0,0.3l0,62.4l0,0.3c0.1,1.6,1,3,2.3,3.9c0.1,0.1,0.2,0.1,0.2,0.2l53.9,31.1l0.3,0.2
                            c0.8,0.4,1.6,0.6,2.4,0.6c0.8,0,1.5-0.2,2.2-0.5l53.9-31.1c0.3-0.1,0.6-0.3,0.9-0.5c1.2-0.9,2-2.3,2.1-3.7c0-0.1,0-0.3,0-0.4
                            C118.4,98.6,118.3,98.5,118.3,98.3z M114.4,98.8c0,0.3-0.2,0.7-0.5,0.9c-0.1,0.1-0.2,0.1-0.2,0.1l-20.6,11.9L59.2,92.1l-33.9,19.6
                            L4.6,99.7l0,0l0,0C4.2,99.5,4,99.2,4,98.8l0-62.5l0,0l0-0.1c0-0.4,0.2-0.7,0.5-0.9l20.8-12l33.9,19.6l33.9-19.6l20.6,11.9l0.1,0
                            c0.3,0.2,0.5,0.5,0.6,0.9l0,62.3L114.4,98.8L114.4,98.8z M95.3,68.6v39.4L23.1,66.4V26.9L95.3,68.6z"/>
                        </svg>';
              }
            ?>
          </a>

          <!-- Navigation Links -->
          <div class="nav-link-list d-none d-md-flex gap-4">
            <a href="index.php" class="nav-link text-white">Beranda</a>
            <a href="index.php?p=libinfo" class="nav-link text-white">Tentang Kami</a>
            <a href="index.php?p=news" class="nav-link text-white">Berita</a>
            <li class="nav-item dropdown mega-dropdown position-static ztop" style="list-style: none;">
              <a class="nav-link dropdown-toggle text-white" href="#" id="megaMenuKoleksi" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                E-Resources
              </a>
              <div class="dropdown-menu mega-menu p-4" aria-labelledby="megaMenuKoleksi">
                <div class="row">
                <div class="col-md-2">
                    <div class="col-megamenu">
                        <img class="position-absolutey" 
                    src="<?php echo assets('images/rak-singgle.png'); ?>" alt="">
                    </div>
                </div>

                  <!-- Indonesiana -->
                  <div class="col-md-2">
                    <div class="col-megamenu">
                      <h6 class="title w-bold text-blue font-size-20">Indonesiana</h6>
                      <ul class="list-unstyled">
                        <li><a href="http://bataviadigital.perpusnas.go.id" target="_blank">Batavia Digital</a></li>
                        <li><a href="http://candi.perpusnas.go.id" target="_blank">Candi di Indonesia</a></li>
                        <li><a href="http://perfilman.perpusnas.go.id" target="_blank">Dokumentasi Perfilman Indonesia</a></li>
                        <li><a href="http://sastra.perpusnas.go.id" target="_blank">Dokumentasi Sastra Indonesia</a></li>
                        <li><a href="http://kepustakaan-presiden.perpusnas.go.id" target="_blank">Kepustakaan Presiden RI</a></li>
                        <li><a href="http://keraton.perpusnas.go.id" target="_blank">Keraton Nusantara</a></li>
                        <li><a href="http://pernaskahan.perpusnas.go.id" target="_blank">Pernaskahan Nusantara</a></li>
                        <li><a href="http://kepustakaan-tokoh.perfilman.perpusnas.go.id" target="_blank">Kepustakaan Tokoh Perfilman</a></li>
                        <li><a href="http://khastara.perpusnas.go.id" target="_blank">Khasanah Pustaka Nusantara</a></li>
                        <li><a href="http://perpuspedia.perpusnas.go.id" target="_blank">Perpuspedia</a></li>
                      </ul>
                    </div>
                  </div>

                  <!-- Pencarian -->
                  <div class="col-md-2">
                    <div class="col-megamenu">
                      <h6 class="title w-bold text-blue font-size-20">Pencarian</h6>
                      <ul class="list-unstyled">
                        <li><a href="https://doaj.org/">DOAJ</a></li>
                        <li><a href="https://scholar.google.com/">Google Scholar</a></li>
                        <li><a href="https://jdihn.go.id/">JDIH</a></li>
                        <li><a href="https://bni.perpusnas.go.id/">Bibliografi Nasional Indonesia</a></li>
                        <li><a href="https://kin.perpusnas.go.id/">Katalog Induk Nasional</a></li>
                        <li><a href="https://www.idx.co.id/">Bursa Efek Indonesia</a></li>
                      </ul>
                    </div>
                  </div>

                  <!-- Alat -->
                  <div class="col-md-2">
                    <div class="col-megamenu">
                      <h6 class="title w-bold text-blue font-size-20">Alat</h6>
                      <ul class="list-unstyled">
                        <li><a href="https://www.mendeley.com/">Mendeley</a></li>
                        <li><a href="https://www.zotero.org/">Zotero</a></li>
                        <li><a href="https://harzing.com/resources/publish-or-perish">Publish or Perish</a></li>
                        <li><a href="https://www.vosviewer.com/">Vos Viewer</a></li>
                      </ul>
                    </div>
                  </div>

                  <!-- Sumber Belajar -->
                  <div class="col-md-2">
                    <div class="col-megamenu">
                      <h6 class="title w-bold text-blue font-size-20">Sumber Belajar</h6>
                      <ul class="list-unstyled">
                        <li><a href="https://ipusnas.id/">Perpustakaan Digital</a></li>
                        <li><a href="https://www.ted.com/">TED</a></li>
                        <li><a href="https://experiments.withgoogle.com/">Google Experiments</a></li>
                        <li><a href="https://sumber.belajar.kemdikbud.go.id/">Sumber Belajar Kemdikbud</a></li>
                        <li><a href="https://www.pdfdrive.com/">Ebook</a></li>
                      </ul>
                    </div>
                  </div>

                </div> <!-- .row -->
              </div> <!-- .dropdown-menu -->
            </li>
            <a href="index.php?p=help" class="nav-link text-white">Bantuan</a>
          </div>
        </div>

        <!-- Right Section -->
        <ul class="nav d-none d-md-flex align-items-center gap-3 mb-0 ztop">
          <?php
          $menu_member_active = isset($_GET['p']) && $_GET['p'] === 'member' ? 'active' : '';
          if ($is_login) {
              $count_basket = count($_SESSION['m_mark_biblio']);
              ?>
              <li class="nav-item <?= $menu_member_active ?>">
                <a class="nav-link text-white" href="index.php?p=member&sec=title_basket">
                  <i class="fas fa-shopping-basket"></i>
                  <sup id="count-basket" class="badge bg-danger"><?= $count_basket ?></sup>
                </a>
              </li>
              <li class="nav-item dropdown <?= $menu_member_active ?>">
                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img class="rounded-circle me-2" width="28" height="28" src="<?= $member_image_path ?>" alt="Avatar">
                  <?= $_SESSION['m_name']; ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="index.php?p=member"><i class="fas fa-user-circle me-2"></i> Profil</a></li>
                  <li><a class="dropdown-item" href="index.php?p=member&sec=bookmark"><i class="fas fa-bookmark me-2"></i> Bookmark</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="index.php?p=member&logout=1"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
                </ul>
              </li>
          <?php } else { ?>
              <li class="nav-item">
                <a class="btn-daftar" href="index.php?p=member">Member Area</a>
              </li>
          <?php } ?>
        </ul>

        <!-- Mobile Dropdown Button -->
        <div class="dropdown d-md-none">
          <a class="btn dropdown-toggle" href="#" role="button" id="mobileMenu" data-bs-toggle="dropdown" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" viewBox="0 0 16 16">
              <path d="M2 12h12v1H2v-1zm0-5h12v1H2V7zm0-5h12v1H2V2z"/>
            </svg>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="mobileMenu">
            <li><a class="dropdown-item" href="index.php">Beranda</a></li>
            <li><a class="dropdown-item" href="index.php?p=libinfo">Tentang Kami</a></li>
            <li><a class="dropdown-item" href="index.php?p=news">Berita</a></li>
            <li><a class="dropdown-item" href="index.php?p=help">Bantuan</a></li>
          </ul>
        </div>

      </nav>
    </div>
  </section>
</header>
<script src="<?php echo assets('js/bootstrap.bundle.min.js'); ?>"></script>