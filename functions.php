
function get_global_pattern($atts) {
    // Extract the attributes
    $atts = shortcode_atts(
        array(
            'post_id' => 1, // Default value
        ), 
        $atts, 
        'global_pattern' // Shortcode name
    );
	$post_id = $atts['post_id'];
    //For debuging. Use the attribute in your shortcode output
    $output = "The value of post_id is: " . $post_id ;
	
	// Switch to the main site that contains all the master patterns.
    switch_to_blog(1); // Main site ID is usually 1
    
	//get the contents of the post
	$post = get_post($post_id);
	
	//switch back to the defualt blog.
    restore_current_blog();
	
	// Check if the post is not null
    if ($post !== null) {
        // Get just the post_content out of the array of returned values.
        $post_content = $post->post_content;
    } else {
        // Handle the case where the post is not found
        $post_content = "Post not found.";
    }	
	
	// Apply the 'the_content' filter - Let WP process all the WP code and output html.
    $output = apply_filters('the_content', $post_content);
    
    return $output;
}
add_shortcode('global_pattern', 'get_global_pattern');
