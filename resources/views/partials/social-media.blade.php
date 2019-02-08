<?php $socialAcfID = returnAfcId(); ?>

<ul class="list-social-media">
<?php if (get_field('instagram-link', $socialAcfID)) {?>
	<li>
		<a href="<?php the_field('instagram-link', $socialAcfID); ?>" target="_blank">
			<i class="icon fab fa-instagram fa-2x"></i>
		</a>
	</li>
	<?php }

	 if (get_field('youtube-link', $socialAcfID)) {
	?>
	<li>
		<a href="<?php the_field('youtube-link', $socialAcfID); ?>" target="_blank">
			<i class="fab fa-youtube fa-2x"></i>
		</a>
	</li>
		<?php }

	if (get_field('vimeo-link', $socialAcfID)) {
	?>
	<li>
		<a href="<?php the_field('vimeo-link', $socialAcfID); ?>" target="_blank">
			<i class="icon fab fa-vimeo-v fa-2x"></i>
		</a>
	</li>
	<?php }

	if (get_field('linkedin-link', $socialAcfID)) {
	?>
	<li>
		<a href="<?php the_field('linkedin-link', $socialAcfID); ?>" target="_blank">
			<i class="icon fab fa-linkedin fa-2x"></i>
		</a>
	</li>

	<?php }

	if (get_field('email-link', $socialAcfID)) {
	?>
	<li>
		<a href="mailto: <?php the_field('email-link', $socialAcfID); ?>" target="_blank">
			<i class="icon far fa-envelope fa-2x"></i>
		</a>
	</li>
<?php } ?>

</ul>
