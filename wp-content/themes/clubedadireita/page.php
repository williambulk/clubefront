<?php get_header('termos'); ?>

<style type="text/css">
	h3 {
		margin: 30px 0;
	}

	@media (max-width: 768px) {
		h4.title.text-center {
			margin-top: 30px !important;
		}
	}

	p {
		font-size: 1em;
	    font-weight: 400;
	    line-height: 24px;
		margin-bottom: 20px;
	}
</style>

<section id="como-funciona" class="services-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title pb-10">
                    <h4 class="title text-center"><?php the_title(); ?></h4>
                    <p class="black-text f13 text-center">Confira abaixo os termos de serviço prestados pelo Clube da Direita.</p>
                </div> <!-- section title -->
            </div>
        </div>
    </div>
    <hr>
    <div class="container mg50">
    	<div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
				<div class="col-lg-12">
					<div class="section-title pb-10">
						<?php the_content(); ?>
					</div>
				</div>
				<div class="col-lg-12 text-center">
            		<a href="<?php echo site_url(); ?>" class="main-btn text-center"><i class='lni lni-angle-double-left'></i></i> Voltar para o início</a>
            	</div>
			<?php endwhile;?>
        </div> <!-- row -->
    </div> <!-- conteiner -->
</section>

<?php get_footer(); ?>