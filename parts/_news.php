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

<section class="w-full greybc p-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 text-center-mobile pt-5">
                <span class="font-size-25 fw-bold left-border-blue ps-2"><?php echo __('News');?></span><br>
                <small class="subtitle-section"><?php echo __('Tetap Update berita menarik dan berguna buat kamu');?></small><br><br>
                <slims-group-subject url="index.php?p=api/subject/latest"></slims-group-subject>
                <a href="?p=news" class="btn btn-primary">Lihat Semua Berita</a>
            </div>
            <div class="col-12 col-md-10">
                <div class="row">
                  <?php
                    // Array warna latar belakang
                    $colors = ['#FFB6C1', '#87CEEB', '#FFD700', '#90EE90', '#FFA07A', '#9370DB', '#00CED1', '#F08080'];

                    // Query untuk mendapatkan berita utama
                    $current_news = "SELECT content_id, content_title, content_desc, content_path, is_news, last_update 
                                     FROM content 
                                     WHERE is_news IS NOT NULL 
                                     ORDER BY input_date DESC LIMIT 8";
                    $current_news_q = $dbs->query($current_news);

                    if ($current_news_q && $current_news_q->num_rows > 0) {
                        $i = 0;
                        while ($current_news_d = $current_news_q->fetch_assoc()) {
                            $notes = is_null($current_news_d['content_desc']) 
                                ? '<i style="color:#f00;">Tidak ada deskripsi</i>'
                                : substr($current_news_d['content_desc'], 0, 100) . '...';

                            // Pilih warna berdasarkan indeks (looping jika lebih dari jumlah warna)
                            $bgColor = $colors[$i % count($colors)];

                            // Ambil huruf pertama dari judul
                            $firstLetter = strtoupper(substr($current_news_d['content_title'], 0, 1));
                            
                            echo '
                            <div class="col-md-3 mb-3">
                                <div class="card shadow-sm">
                                    <div class="card-img-top d-flex align-items-center justify-content-center" 
                                         style="height: 200px; background-color: ' . $bgColor . '; color: white; font-size: 96px; font-weight: bold; text-align: center;">
                                         ' . $firstLetter . '
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">' . $current_news_d['content_title'] . '</h5>
                                        <p class="card-text">' . $notes . '</p>
                                        <p class="text-muted"><small>Terakhir diperbarui: ' . $current_news_d['last_update'] . '</small></p>
                                        <a href="?p=' . $current_news_d['content_path'] . '" class="btn btn-primary">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>';
                            
                            $i++;
                        }
                    } else {
                        echo '<p class="text-center">Tidak ada berita utama yang ditemukan.</p>';
                    }
                    ?>  
                </div>
            </div>
        </div>
    </div>
</section>