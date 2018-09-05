<?php 
/* 
Template name: Customizable Page
*/
get_header(); ?>

<main class="main" role="main">
<?php // open the WordPress loop
if (have_posts()) : while (have_posts()) : the_post();

  // are there any rows within within our flexible content?
  if( have_rows('page_content') ): 

    // loop through all the rows of flexible content
    while ( have_rows('page_content') ) : the_row();

      print_r(get_row_layout());
    // Product Callout 
    if( get_row_layout() == 'product_callout' )
      get_template_part('partials/section', 'product_callout');

    // Product Callout 
    if( get_row_layout() == 'company_stats' )
      get_template_part('partials/section', 'company_stats');

    // Articles by category
    if( get_row_layout() == 'articles_by_category' )
      get_template_part('partials/section', 'articles_by_category');

    // Side by side
    if( get_row_layout() == 'side_by_side' )
      get_template_part('partials/section', 'side_by_side');

    // Mission Statement
    if( get_row_layout() == 'mission_statement' )
      get_template_part('partials/section', 'mission_statement');

    // Press timeline
    if( get_row_layout() == 'press_timeline' )
      get_template_part('partials/section', 'press_timeline');

    // Team Member Bio
    if( get_row_layout() == 'team_member_bio' )
      get_template_part('partials/section', 'team_member_bio');

    // Team member wall
    if( get_row_layout() == 'team_member_wall' )
      get_template_part('partials/section', 'team_member_wall');

    // Image callout
    if( get_row_layout() == 'image_callout' )
      get_template_part('partials/section', 'image_callout');

    // Values callout
    if( get_row_layout() == 'values_callout' )
      get_template_part('partials/section', 'values_callout');

    // Testimonial Slider
    if( get_row_layout() == 'testimonial_slider' )
      get_template_part('partials/section', 'testimonial_slider');

    // Perks wall
    if( get_row_layout() == 'perks_wall' )
      get_template_part('partials/section', 'perks_wall');

    // Brand wall
    if( get_row_layout() == 'brand_wall' )
      get_template_part('partials/section', 'brand_wall');

    // Brand wall
    if( get_row_layout() == 'masthead' )
      get_template_part('partials/section', 'masthead');

    // Instagram feed
    if( get_row_layout() == 'instagram_feed' )
      get_template_part('partials/section', 'instagram_feed');

    // Job postings
    if( get_row_layout() == 'job_postings' )
      get_template_part('partials/section', 'job_postings');

    // Highlight callout
    if( get_row_layout() == 'highlight_callout' )
      get_template_part('partials/section', 'highlight_callout');

    // Process steps
    if( get_row_layout() == 'process_steps' )
      get_template_part('partials/section', 'process_steps');

    // Our story module
    if( get_row_layout() == 'our_story' )
      get_template_part('partials/section', 'our_story');

    // Vertical carousel
    if( get_row_layout() == 'vertical_carousel' )
      get_template_part('partials/section', 'vertical_carousel');            

    // Become RS Influencer
    if( get_row_layout() == 'become_rs_influencer' )
      get_template_part('partials/section', 'become_rs_influencer');

    // Large banner callout
    if( get_row_layout() == 'large_callout' )
      get_template_part('partials/section', 'large_callout');

    // CTA Banner
    if( get_row_layout() == 'call_to_action' )
      get_template_part('partials/section', 'call_to_action');

    // Join the family
    if( get_row_layout() == 'join_the_family' )
      get_template_part('partials/section', 'join_the_family');

    // CTA Banner
    if( get_row_layout() == 'employee_spotlight' )
      get_template_part('partials/section', 'employee_spotlight');

    // Stats wall
    if( get_row_layout() == 'stats_wall' )
      get_template_part('partials/section', 'stats_wall');

    endwhile; // close the loop of flexible content
  endif; // close flexible content conditional

endwhile; endif; // close the WordPress loop ?>
</main>

<?php get_footer(); ?>
