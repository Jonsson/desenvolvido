<?php get_header();?>
	<?php
	if(have_posts()){
		while(have_posts()){
			the_post();

?>
<div class="row">
	<div class="col-md-12"
		<div class="jumbotron">
			<h2><?php the_title(); ?></h2
		</div>
	</div>
</div>
<?php if(!is_page('contato')){ ?>

<div class="row">
	<div class="col-md-12">
		<?php the_content(); ?>
	</div>
</div>
<?php } //fim do if se nao é contato ?>

<?php if(is_page('contato')){ ?>
<div class="row">
	<div class="col-md-4">
		<?php the_content(); ?>
	</div>
	<div class="col-md-8">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.9661732920463!2d-46.50891558549942!3d-24.032257985033993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1f79fee2cc37%3A0x6ec2fc95ba763c29!2sEtec+de+Praia+Grande!5e0!3m2!1spt-BR!2sbr!4v1537315519008" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	</div>
	<?php } //fim do if se é contato ?>
	<?php
		}
	}
?>

<?php get_footer();?>
