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

<div id="slims-home">

<?php if ($sysconf['template']['classic_new_collection']) : ?>
<section class="w-full contributor greybc">
    <div class="container">
    <div class="row">
        <div class="col-sm-2 text-center-mobile pt-5">
            <span class="font-size-25 fw-bold left-border-blue ps-2"><?php echo __('New collections + updated');?></span><br>
            <small class="subtitle-section"><?php echo __('These are new collections list. Hope you like them. Maybe not all of them are new. But in term of time, we make sure that these are fresh from our processing oven');?></small><br><br>
            <slims-group-subject url="index.php?p=api/subject/latest"></slims-group-subject>
        </div>
        <div class="col-12 col-md-10">
            <div class="row">
                
                <slims-collection url="index.php?p=api/biblio/latest"></slims-collection>
            </div>
        </div>
    </div>
    </div>
</section>
<?php endif; ?>
<section class="w-full">
<center><img class="max-1245" src="<?php echo assets('images/g12.png'); ?>" alt=""></center>
</section>

<?php if ($sysconf['template']['classic_top_reader']) : ?>
<section class="contributor container">
    <div class="row">
        <div class="col-sm-2  text-center-mobile">
            <span class="font-size-25 fw-bold left-border-blue ps-2"><?php echo __('Top reader of the year');?></span><br>
            <small class="subtitle-section"><?php echo __('Our best users, readers, so far. Continue to read if you want your name being mentioned here');?></small><br><br>
            
        </div>
        <div class="col-12 col-md-10">
            <div class="row">
                
                <slims-group-member url="index.php?p=api/member/top"></slims-group-member>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<br>
<?php if ($sysconf['template']['classic_map']) : ?>
<section class="w-full greybc">
    <div class="container">
    <div class="row align-items-center">
        <div class="col-md-6">
            <iframe class="embed-responsive p-5"
                    src="<?= $sysconf['template']['classic_map_link']; ?>"
                    height="420" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-md-6 pt-8 md:pt-0">
            <h4><?= $sysconf['library_name']; ?></h4>
            <p><?= $sysconf['template']['classic_map_desc']; ?></p>
            <p class="d-flex flex-row pt-2">
                <a target="_blank" href="<?= $sysconf['template']['classic_fb_link'] ?>" class="btn btn-primary mr-2" name="button"><i class="fab fa-facebook-square text-white"></i></a>
                <a target="_blank" href="<?= $sysconf['template']['classic_twitter_link'] ?>" class="btn btn-info mr-2" name="button"><i class="fab fa-twitter-square text-white"></i></a>
                <a target="_blank" href="<?= $sysconf['template']['classic_youtube_link'] ?>" class="btn btn-danger mr-2" name="button"><i class="fab fa-youtube text-white"></i></a>
                <a target="_blank" href="<?= $sysconf['template']['classic_instagram_link'] ?>" class="btn btn-dark mr-2" name="button"><i class="fab fa-instagram text-white"></i></a>
            </p>
        </div>
    </div>
    </div>
</section>
<?php endif; ?>

</div>