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

<div class="result-search pb-5">
    <section id="section1 container-fluid">
        <header>
            
          <?php
          // ----------------------------------------------------------------------
          // include navbar part
          // ----------------------------------------------------------------------
          include '_navbar.php'; ?>
        </header>
      <?php
      // ------------------------------------------------------------------------
      // include search form part
      // ------------------------------------------------------------------------
      include '_result-search-form.php'; ?>
    </section>

    <section class="container mt-8">
      <?php
      if ($_GET['p'] !== 'show_detail') {
        echo '<h2 class="mb-4">' . $page_title . '</h2><hr>';
        if ($_GET['p'] === 'librarian') {
          echo '<div class="flex flex-row flex-wrap">' . $main_content . '</div>';
        } else {
          echo $main_content;
        }
      } else {
        echo $main_content;
      }
      ?>
    </section>
</div>
