<section id="section-01" class="cpw-padding-section">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8 m-lg-auto">
        <ul class="nav-streaming">
          <li><a data-toggle="modal" data-target="#mofalAoVivo">Assistir ao vivo</a></li>
          <li><a data-toggle="modal" data-target="#mofalRegras" >Regras</a></li>
          <li><a data-toggle="modal" data-target="#mofalHelp" >Ajuda</a></li>
          <li><a href="#section-02">Como participar</a></li>
          <li><a href="#section-03">Vídeos</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
<div class="section-01 container-fluid p-0">
  <div id="item-default" class="col-12 col-lg-8 m-lg-auto">
    <h2>A TV AgRoss inicia em:</h2>
    <?php get_template_part( 'template-parts/content','flipclock' ); ?>
  </div>
  <div id="item-on" class="cpw-hide col-12 col-lg-8 m-lg-auto cpw-flex cpw-justify-center">
    <div><img src="<?php echo get_template_directory_uri('')?>/assets/img/seta-no-ar.webp" alt="Seta no ar"></div>
    <div><img src="<?php echo get_template_directory_uri('')?>/assets/img/gif---NO-AR.gif" alt="Gif no ar"></div>
  </div>
  <div id="item-off" class="cpw-hide"><img src="<?php echo get_template_directory_uri('')?>/assets/img/banner-aviso-tv.jpg" alt="Banner aviso"></div>
</div>
<!-- ends section 01 -->