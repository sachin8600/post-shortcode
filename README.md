# Post-Shortcode
This is wordpress plugin 

This plugin is used for display posts in widget as well as shortcode.
Every wordpress site is different look, so that some time i need to customize plugin for display post in site look (Like adding bootstrap listing structure),
So that i am creating such plugin that can customize plugin in your theme functions.php file.
that plufin features as:

1. Display post shortcode
2. Display post widget
3. Customize display output without editing plugin
4. Display post as well as custome post type
5. Display post with perticuler taxonomy, term, category, tag
6. Display post with selection of display like: title, image, category, tag 
7. for more info visit https://wordpress.org/plugins/post-shortcode/
== Installation ==

This section describes how to install the plugin and get it working.


1. Upload `post-shortcode` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Place `<?php do_shortcode('[pcs]'); ?>` in your templates

== Frequently Asked Questions ==

= How to use shortcode =

You can use shortcode in 2 way 

1. In .php file use : <?php do_shortcode('[pcs]'); ?> code or use : [pcs] use in backend editor. 
   In backend menu : 'Post Shorcode' here is generator of shortcode as well as customization

2. Use ps widget in widget area to get output of shortcode


**********   Parameter of shortcode [pcs]  *********

= posttype =
posttype=post //default posttype
check https://codex.wordpress.org/Class_Reference/WP_Query in that page find post_type

= orderby =
orderby=ID //default orderby
check https://codex.wordpress.org/Class_Reference/WP_Query in that page find orderby

= order =
order=ASC //default order
check https://codex.wordpress.org/Class_Reference/WP_Query in that page find order

=  categories =
 categories= //default null is empty
check https://codex.wordpress.org/Class_Reference/WP_Query in that page find  category_name


= postcount =
postcount= 3//default postcount
check https://codex.wordpress.org/Class_Reference/WP_Query in that page find posts_per_page


= template =
template=ws //default effects
other effect is iws, gws and igws

= showfield =
showfield=title,thumbnail,excerpt //default showfield
other are: date,author,cc,content,readme,category,tag

= expertlength =
expertlength=100 //default expert length

== readmoretitle ==
readmoretitle=8 //Read more readmoretitle


= customfield =
customfield= //default customfield is empty

