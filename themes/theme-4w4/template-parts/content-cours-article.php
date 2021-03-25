<?php
/**
 * Template part l'affichage des blocs de cours dans front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-4w4
 */
global $tPropriete;
?>

<article>
	<a href="<?php echo get_permalink(); ?>">
		<p><?php echo $tPropriete['sigle'] . " - " . $tPropriete['typeCours'] . " - " . $tPropriete['nbHeure']; ?></p>
		<p><?php echo $tPropriete['titrePartiel']; ?></p>
		<p>Session : <?php echo $tPropriete['session']; ?></p>
	</a>
</article>      