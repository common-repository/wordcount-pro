<?php
/*
Plugin Name: Wordcount Pro
Plugin URI: http://iphods.com
Description: Do you feel the need to know how many words in a blog post or page, but don't want to have to log into the post editor to find out? Then this is the plugin for you. It adds a trailing div after post content to show you total word count for the post. Yes, I see the word count is visible on the editor screen, but this is for situations where you don't want to have to visit the dashboard to find out the exact word count.
Author: Bradford Knowlton
Version: 1.25
Author URI: http://bradknowlton.com/
*/


// returns the content plus wordcount
// if the user is a logged in admin
function wordcount_pro($content) {

  // set to true to show count for all users
  $all_users = false;

  // Only show wordcount to logged in Admins
  if ( current_user_can( 'manage_options' ) or true == $all_users ) {
  	return $content.word_count($content);
  }
  
  // otherwise returns the database content
  return $content;
}

add_filter( 'the_content', 'wordcount_pro' );


// Reference:
// http://www.thomashardy.me.uk/wordpress-word-count-function

function word_count($content){

	$word_count = str_word_count( strip_tags( $content ) );
    
    $word_count_string = sprintf( _n( '1 word', '%s words', $word_count, 'wordcount_pro' ), $word_count );
    
    $return = sprintf(__("<div class='wordcount-pro'>Total Word Count: <span class='wordcount-pro-count'>%s</span></div>",'wordcount_pro'),$word_count_string);

    return $return;

}

function wordcount_pro_css(){
	?>
<style>
	.wordcount-pro {
		float: right;
		font-size: .75em;
		
	}
	
	.wordcount-pro:after { 
	   content: "."; 
	   visibility: hidden; 
	   display: block; 
	   height: 0; 
	   clear: both;
	}
	
	.wordcount-pro-count {
		font-style: italic;
	}
</style>	
	<?php
}

add_action('wp_head','wordcount_pro_css');