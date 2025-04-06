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
$setBookmarked = trim(isset($_SESSION['bookmark'][$biblio_id]) ? 'bg-success text-white rounded-lg px-2 py-1' : 'text-secondary px-2 py-1');
?>
<br>
<div class="container my-5">
  <!-- Bagian atas: Judul dan cover -->
  <div class="row mb-4 align-items-start">
    <!-- Kolom Kiri: Judul dan info -->
    <div class="col-md-9">
      <h1 class="display-5 fw-bold text-blue-dark"><?= $title; ?></h1>
      <p class="fs-5 text-muted"><?= str_replace("<br />", '; ', $authors); ?></p>
      <p class="fs-5 text-muted"><i class="fas fa-bookmark text-green"></i>  <?= $gmd_name; ?> · <?= $publish_year; ?></p>
      <p class="mt-4"><?= $notes ?: '<i>' . __('Description Not Available') . '</i>'; ?></p>
      <a href="#" data-id="<?= $biblio_id ?>" class="bookMarkBook text-decoration-none <?= $setBookmarked ?> fw-bold">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-postcard-heart" viewBox="0 0 16 16">
                        <path d="M8 4.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7Zm3.5.878c1.482-1.42 4.795 1.392 0 4.622-4.795-3.23-1.482-6.043 0-4.622ZM2.5 5a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Z"/>
                        <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2Z"/>
                    </svg>
                    <?= in_array($biblio_id, $_SESSION['bookmark']??[]) ? __('Bookmarked') : __('Bookmark') ?>
        </a>
        <a href="javascript:void(0)" data-toggle="modal" data-id="<?= $biblio_id ?>" data-title="<?= $title ?>" data-target="#mediaSocialModal" class="text-secondary fw-bold text-decoration-none">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
            <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"></path>
        </svg> <?= __('Share') ?></a>
    </div>


    <!-- Kolom Kanan: Cover -->
    <div class="col-md-3 text-center">
      <div class="border rounded p-5 shadow-sm shadow coverbc">
        <?= $image; ?>
      </div>
      <div class="mt-3 d-flex justify-content-center gap-3">
        
        </a>
      </div>
    </div>
  </div>
 <hr>
  <!-- Informasi dalam card putih -->
  <div class="row g-4">
    <!-- Kolom kiri -->
    <div class="col-md-8">
      <div class="p-4 bg-white border rounded shadow-sm">
        <h5 class="mb-3"><?= __('About this edition'); ?></h5>
        <div class="row small">
          <div class="col-sm-6 mb-2"><strong><?= __('Edition'); ?>:</strong> <?php echo ($edition) ? $edition : '-'; ?></div>
          <div class="col-sm-6 mb-2"><strong><?= __('ISBN/ISSN'); ?>:</strong> <?= $isbn_issn ?: '-'; ?></div>
          <div class="col-sm-6 mb-2"><strong><?= __('Page count'); ?>:</strong> <?= $collation ?: '-'; ?></div>
          <div class="col-sm-6 mb-2"><strong><?= __('Published'); ?>:</strong> <?= $publish_year; ?></div>
          <div class="col-sm-6 mb-2"><strong><?= __('Format'); ?>:</strong> <?= $content_type ?: '-'; ?></div>
          <div class="col-sm-6 mb-2"><strong><?= __('Publisher'); ?>:</strong> <?= $publisher_name; ?></div>
          <div class="col-sm-6 mb-2"><strong><?= __('Language'); ?>:</strong> <?= $language_name; ?></div>
          <?php if ($sor): ?>
          <div class="col-sm-12 mt-2"><strong><?= __('Statement of Responsibility'); ?>:</strong> <?= $sor; ?></div>
          <?php endif; ?>

          <?php if ($content_type): ?>
          <div class="col-sm-12 mt-2" itemprop="bookFormat"><strong><?= __('Content Type'); ?>:</strong> <?php echo ($content_type) ? $content_type : '-'; ?></div>
          <div class="col-sm-12 mt-2" itemprop="bookFormat"><strong><?= __('Media Type'); ?>:</strong> <?php echo ($media_type) ? $media_type : '-'; ?></div>
          <div class="col-sm-12 mt-2" itemprop="bookFormat"><strong><?= __('Carrier Type'); ?>:</strong> <?php echo ($carrier_type) ? $carrier_type : '-'; ?></div>
          <?php endif; ?>

          <?php if ($spec_detail_info): ?>
          <div class="col-sm-12 mt-2"><strong><?= __('Specific Detail Info'); ?>:</strong> <?php echo ($spec_detail_info) ? $spec_detail_info : '-'; ?></div>
          <?php endif; ?>
        </div>
      </div>

      <!-- About this work -->
      <div class="p-4 mt-4 bg-white border rounded shadow-sm">
        <h5 class="mb-3"><?= __('Availability'); ?></h5>
         <?= ($availability) ? $availability : '<p class="text-grey-dark">' . __('No copy data') . '</p>'; ?>
      </div>
    </div>

    <!-- Kolom kanan -->
    <div class="col-md-4">
    <!-- Subject  Info -->
<div class="p-4 bg-white border rounded shadow-sm mb-4">
  <h5 class="mb-3"><?= __('Subject(s)'); ?></h5>
  <div class="d-flex flex-wrap gap-2">
    <?php
    if ($subjects) {
        // Cari semua tag <a> dan tambahkan class Bootstrap
        $subjectLinks = explode(',', $subjects);
        foreach ($subjectLinks as $subjectLink) {
            // Tambahkan class Bootstrap ke <a> tag jika belum ada
            $subjectLink = str_replace('<a ', '<a class="btn btn-outline-secondary btn-rounded btn-sm me-1 mb-1" ', $subjectLink);
            echo $subjectLink;
        }
    } else {
        echo '<span class="text-muted">-</span>';
    }
    ?>
  </div>
</div>



      <!-- Related collection -->
      <div class="p-4 bg-white border rounded shadow-sm">
        <h5 class="mb-3"><?= __('Other version/related'); ?></h5>
         <?php echo ($related) ? $related : '<p class="text-grey-dark">' . __('No other version available') . '</p>'; ?>
      </div>
    </div>
  </div>

  <!-- File Attachment -->
  <div class="mt-5 p-4 bg-white border rounded shadow-sm">
    <h5><?= __('File Attachment'); ?></h5>
    <?= !$file_att ? '<i>' . __('No Data') . '</i>' : $file_att; ?>
  </div>

  <!-- Comments -->
  <div class="mt-4 p-4 bg-white border rounded shadow-sm">
    <h5><?= __('Comments'); ?></h5>
    <?= showComment($biblio_id); ?>
    <?php if (!isset($_SESSION['mid']) && $sysconf['comment']['enable']): ?>
      <hr>
      <a href="index.php?p=member" class="btn btn-outline-primary"><?= __('You must be logged in to post a comment'); ?></a>
    <?php endif; ?>
  </div>
</div>
