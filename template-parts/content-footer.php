<!-- footer starts -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-4">
        <a href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php echo get_template_directory_uri('')?>/assets/img/logo-agross.png" alt="Logo AgRoss" class="logo-footer"></a>
      </div>
      <div class="col-12 col-lg-4 cpw-flex">
        <ul class="nav-footer">
          <li><a href="">AgRoss</a></li>
          <li><a href="">Portfólio</a></li>
          <li><a href="">Vantagens</a></li>
          <li><a href="">Sou Cliente</a></li>
        </ul>
        <ul class="nav-footer">
          <li><a href="">Trabalho Conosco</a></li>
          <li><a href="">Social</a></li>
          <li><a href="">Contato</a></li>
        </ul>
      </div>
      <div class="col-12 col-lg-4">

      </div>
    </div>
  </div>
</footer>
<!-- footer ends -->
<?php get_template_part( 'template-parts/modal','aovivo' ); ?>
<?php get_template_part( 'template-parts/modal','regras' ); ?>
<?php get_template_part( 'template-parts/modal','help' ); ?>