<!--
# ===============================
# Ios Like Theme SLiMS
# ===============================
# @Author: Erwan Setyo Budi
# @Email:  erwans818@gmail.com
# @Date:   2025-04-06T11:25:57+07:00
# @Last modified by:   Erwan Setyo Budi
# @Last modified time:  2025-04-06T11:25:57+07:00
-->
<?php

if ($opac->invalid_token) {
    //die($opac->error('invalid CSRF token'));
}
?>

<div role="main" class="main template-dir-search template-name-home">
    <div id="content">
        <section class="search">

        <div class="bg-blue-rounded max-1245">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="text-content">
                    <h2 class="text-white fw-bold font-size-27 text-center-mobile"><?php echo $sysconf['library_name']; ?></h2>
                        <p class="text-white mb-0 font-size-18 text-center-mobile"><?php echo $sysconf['library_subname']; ?></p>
                        <hr class="text-white">
                    <p class="text-white mb-0 font-size-18 text-center-mobile">Temukan setiap halaman yang menunggu untuk dibaca, setiap pengetahuan yang siap mengubah dunia.</p><br>
                </div>
                <div class="searchHomeContent">
                    <div class="well well-lg clearfix" role="search">
                        <form class="searchForm navbar-form navbar-left flip" action="index.php" method="get" @submit.prevent="searchSubmit">
                            <div class="search-form row">
                                <div class="col-12 col-md-10">
                                    <input type="hidden" name="search" value="search">
                                    <input
                                        class="searchForm_lookfor form-control rounded-23 search-query"  autocomplete="off"
                                        ref="keywords" value="<?= htmlentities(getQuery('keywords')) ?>" v-model.trim="keywords"
                                       @focus="searchOnFocus" @blur="searchOnBlur" type="text" id="search-input"
                                       name="keywords" autocomplete="off"
                                       placeholder="<?= __('Enter keyword to search collection...');?>"/>
                                </div>
                                
                                <div class="col-12 col-md-2 text-center my-3 my-md-0">
                                    <button submit="" class="btn-search-column px-5">Cari</button>
                                </div>
                                
                            </div>
                        </form>
                        <!-- Trigger ubah dari <a> ke <span> untuk bisa pakai JS -->
                        <span id="advancedSearchBtn"
                        class="text-white pt-3 ml-2 desktop-only" 
                        style="cursor: pointer;"><a class="btn-daftar font-size-15">Pencarian Lanjutan</a></span>


                        <!-- Modal Pencarian Spesifik -->
                        <div class="modal fade" role="dialog" id="advancedSearchModal" tabindex="-1" aria-labelledby="advancedSearchLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content p-4">
                              <div class="modal-header">
                                <h5 class="modal-title" id="advancedSearchLabel"><?=__('Advanced Search'); ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                              </div>
                              <div class="modal-body" role="document">
                                <form action="index.php" method="get">
                                  <div class="row g-3">
                                    <div class="col-md-6">
                                      <label for="adv-titles"><?=__('Title'); ?></label>
                                      <input type="text" name="title" class="form-control" id="adv-titles" placeholder="<?=__('Enter title'); ?>">
                                    </div>
                                    <div class="col-md-6">
                                      <label for="adv-author"><?=__('Author(s)');?></label>
                                      <input type="text" name="author" class="form-control" id="adv-author" placeholder="<?=__('Enter author(s) name'); ?>">
                                    </div>
                                    <div class="col-md-6">
                                      <label for="adv-subject"><?=__('Subject(s)');?></label>
                                      <input type="text" name="subject" class="form-control" id="adv-subject" placeholder="<?=__('Enter subject'); ?>">
                                    </div>
                                    <div class="col-md-6">
                                      <label for="adv-isbn"><?=__('ISBN/ISSN');?></label>
                                      <input type="text" name="isbn" class="form-control" id="adv-isbn" placeholder="<?=__('Enter ISBN/ISSN'); ?>">
                                    </div>
                                    <div class="col-md-6">
                                      <label for="adv-publishyear"><?=__('Publish Year');?></label>
                                      <input type="text" name="publishyear" class="form-control" id="adv-publishyear" placeholder="<?=__('Enter publish year'); ?>">
                                    </div>
                                    <div class="col-md-6">
                                      <label for="adv-location"><?=__('Location');?></label>
                                      <select id="adv-location" name="location" class="form-control"> <?= commonList('location'); ?></select>
                                    </div>
                                    <div class="col-md-6">
                                      <label for="adv-gmd"><?=__('GMD');?></label>
                                      <select id="adv-gmd" name="gmd" class="form-control"><?= commonList('gmd'); ?></select>
                                    </div>
                                    <div class="col-md-6">
                                      <label for="adv-coll-type"><?=__('Collection Type');?></label>
                                      <select name="colltype" class="form-control" id="adv-coll-type"><?= commonList('collection'); ?></select>
                                    </div>
                                  </div>
                                  <div class="mt-4 text-end">
                                    <button type="submit" name="search" value="search" class="btn btn-primary"><?=__('Find Collection');?></button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>

                <img class="w-100-mobile mobile-only" src="<?php echo assets('images/online-library.png'); ?>" alt="">
            </div>
            <div class="col-md-5 position-relative desktop-only rakmargin">
                <img width="400px" class="position-absolute end-0" src="<?php echo assets('images/online-library.png'); ?>" alt="">
            </div>
        </div>
    </div>
</div>
</div>
</div>
<script>
  document.getElementById("advancedSearchBtn").addEventListener("click", function () {
    var myModal = new bootstrap.Modal(document.getElementById("advancedSearchModal"));
    myModal.show();
  });
</script>

