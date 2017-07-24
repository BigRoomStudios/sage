<div class="fullscreen" style="background-image:url('<?= the_post_thumbnail_url('full'); ?>')">
  <div class="fullscreen-center">
​    <div class="slide-wrapper wrapper wrapper-sm ph">
      <div class="slide-content">
        <h1 class="slide-heading"><?= acfField('slide_title'); ?></h1>
        <p class="fz- sm-fz lg-fz++"><?= acfField('slide_subtitle'); ?></p>
        <a href="<?= acfField('slide_button_link'); ?>" class="btn btn-hollow btn-hollow-inverse btn-round"><?= acfField('slide_button_text'); ?></a>
      </div>
    </div>
  </div>
</div>
