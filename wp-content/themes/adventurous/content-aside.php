<?php
/**
 * The template for displaying posts in the Aside post format
 *
 * @package Catch Themes
 * @subpackage Adventurous
 * @since Adventurous 1.0
 */
 
//Getting data from Theme Options Panel
$options = adventurous_get_options();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-container post-format">
    
    	<div class="aside">
            <header class="entry-header">
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'adventurous' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            </header><!-- .entry-header -->
            
            <div class="entry-content">
                <?php the_content(); ?>
                <?php wp_link_pages( array( 
					'before'		=> '<div class="page-link"><span class="pages">' . __( 'Pages:', 'adventurous' ) . '</span>',
					'after'			=> '</div>',
					'link_before' 	=> '<span>',
					'link_after'   	=> '</span>',
				) ); 
				?>
            </div><!-- .entry-content --> 
        </div>

        <footer class="entry-meta">
            <?php adventurous_post_format_meta(); ?>   
            <?php if ( comments_open() ) : ?>
            	<span class="sep"> | </span>
            	<span class="comments-link"><?php comments_popup_link(__('Leave a reply', 'adventurous'), __('1 Reply', 'adventurous'), __('% Replies;', 'adventurous')); ?></span>
            <?php endif; ?>
            <?php edit_post_link( __( 'Edit', 'adventurous' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
        </footer><!-- .entry-meta -->
        
   	</div><!-- .entry-container -->
         
</article><!-- #post-<?php the_ID(); ?> -->