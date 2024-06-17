# WP-Global-synced-patterns
WordPress - Global synced patterns

This is used to reference synced patterns from the master site to child sites in a WordPress network installation. 
This is useful if pages and products are syncronised from the master site to child sites. 
Normally in a child site the patterned id referenced will not be available in the child site and the block will not be displayed.

This short code takes a post_id attribute. The post id is the Post id of the synced pattern in the master site.
Synced patterns are also saved in the wp_posts table.
One can then display this synced patter in all of the sites in a WordPress Network installation.

Use the following short code:
[global_pattern post_id="2578"  comment="Name of the synced patter for reference only" ]

Repalce the post_id with your post id and your comment.

Ideally this should be a WordPress block, if anyone is interested in creating a block with this functionality, let me know?
