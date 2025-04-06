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
    // Count Biblio ID All
    $biblioc = $dbs->query('SELECT COUNT(biblio_id)FROM biblio');
    $bibliocount = $biblioc->fetch_row();
?>

<div class="description-search left-border-blue container">
    <div class="col-md-6">
        <p class="mb-1 text-center-mobile">
            Saat ini kami memiliki <a href="/Search/Results"><span
                    class="fw-bold font-size-20 text-blue"><?php echo $bibliocount['0'];?></span></a> Judul dengan berbagai penerbit dan pengarang berkualitas yang siap memenuhi kebutuhan literasi mu. Kini akses katalog kami lebih mudah!<br>
            <a class="text-decoration-underline font-size-15 text-center-mobile" href="index.php?search=search&keywords=">Lihat Semua</a>
        </p>
    </div>
</div>