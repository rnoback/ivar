<ul class="list-social-media">
<?php if (get_field('instagram-link')) {?>
	<li>
		<a href="<?php the_field('instagram-link'); ?>" target="_blank">
			<i class="icon fab fa-instagram fa-2x"></i>
		</a>
	</li>
	<?php }

	 if (get_field('youtube-link')) {
	?>
	<li>
		<a href="<?php the_field('youtube-link'); ?>" target="_blank">
			<i class="fab fa-youtube fa-2x"></i>
		</a>
	</li>
		<?php }

	if (get_field('vimeo-link')) {
	?>
	<li>
		<a href="<?php the_field('vimeo-link'); ?>" target="_blank">
			<i class="icon fab fa-vimeo-v fa-2x"></i>
		</a>
	</li>
	<?php }

	if (get_field('linkedin-link')) {
	?>
	<li>
		<a href="<?php the_field('linkedin-link'); ?>" target="_blank">
			<i class="icon fab fa-linkedin fa-2x"></i>
		</a>
	</li>

	<?php }

	if (get_field('email-link')) {
	?>
	<li>
		<a href="mailto: <?php the_field('email-link'); ?>" target="_blank">
			<i class="icon far fa-envelope fa-2x"></i>
		</a>
	</li>
<?php } ?>

</ul>
