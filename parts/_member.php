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

<?php if ($is_login) : ?>

    <div class="member-area">
        <section id="section1 container-fluid">
            <header>
                
              <?php
              // ----------------------------------------------------------------------
              // include navbar part
              // ----------------------------------------------------------------------
              include '_navbar.php'; ?>
            </header>
        </section>

        <div>
          <?php echo $main_content; ?>
        </div>

    </div>

<?php else: ?>

    <div class="result-search page-member-area">
        <section id="section1 container-fluid">
            <header class="c-header">
                <div class="mask"></div>
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

        <div class="container py-4">
          <div class="row">
              <div class="col-md-8">
                <?php echo $main_content; ?>
              </div>
              <div class="col-md-4"></div>
          </div>
        </div>
    </div>

<?php endif; ?>
