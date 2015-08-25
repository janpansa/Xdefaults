<?php
/*
 * 
 * Normal Page - Airteam
 * 
 */
?>
<header id="navbar" role="banner" class="<?php print $navbar_classes; ?>">
  <div class="container">
    <div class="navbar-header">
      <?php if ($logo): ?>
      <a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
      <?php endif; ?>

      <?php if (!empty($site_name)): ?>
      <a class="name navbar-brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
      <?php endif; ?>

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
      <div class="navbar-collapse collapse">
        <nav role="navigation">
          <?php if (!empty($primary_nav)): ?>
            <?php print render($primary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($secondary_nav)): ?>
            <?php print render($secondary_nav); ?>
          <?php endif; ?>
          <?php if (!empty($page['navigation'])): ?>
            <?php print render($page['navigation']); ?>
          <?php endif; ?>
        </nav>
      </div>
    <?php endif; ?>
  </div>
</header>

<?php if (!empty($page['carousel'])): ?>
<section id="section-carousel">
    <div class="container-fluid">
        <div class="row">
            <?php print render($page['carousel']); ?>
        </div>
    </div>
</section>
<?php endif; ?>

<div class="morespace"></div>

<div class="morespace-contact"></div>
<?php if (!empty($page['sidebar_sales']) || !empty($page['content'])): ?>
<section id="section-contact">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9" ><?php print render($page['content']); ?></div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" ><?php print render($page['sidebar_sales']); ?></div>
        </div>
    </div>
</section>
<?php endif; ?>

<div class="morespace"></div>
<?php if (!empty($page['footer1_1']) || !empty($page['footer1_2']) || !empty($page['footer1_3']) || !empty($page['footer1_4'])): ?>
<section id="section-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" ><?php print render($page['footer1_1']); ?></div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" ><?php print render($page['footer1_2']); ?></div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3"><?php print render($page['footer1_3']); ?></div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" ><?php print render($page['footer1_4']); ?></div>
        </div>
    </div>
</section>
<?php endif; ?>

<section id="section-footer-bottom">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" ><?php print render($page['footer_bottom']); ?></div>
        </div>
    </div>
</section>
