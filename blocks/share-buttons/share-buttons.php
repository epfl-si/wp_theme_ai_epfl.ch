<?php

global $post;
$posts = $query->posts;

$post_url = urlencode(get_permalink($posts));
$post_title = urlencode(get_the_title($posts));
$facebook_url = 'https://www.facebook.com/sharer/sharer.php?u=' . $post_url;
$linkedin_url = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $post_url . '&title=' . $post_title;
$twitter_url = 'https://twitter.com/intent/tweet?text=' . $post_title . '&url=' . $post_url;

?>

<li><a href="<?php echo($facebook_url); ?>"><i class="icon ph ph-facebook-logo" target="_blank"><span class="sr-only">Facebook</span></i></a></li>
<li><a href="<?php echo($linkedin_url); ?>"><i class="icon ph ph-linkedin-logo" target="_blank"><span class="sr-only">LinkedIn</span></i></a></li>
<li><a href="<?php echo($twitter_url); ?>"><i class="icon ph ph-twitter-logo" target="_blank"><span class="sr-only">Twitter</span></i></a></li>
<li><a href="#" id="copy-url-btn"><i class="icon ph ph-link-simple"><span class="sr-only">Copy link</span></i></a></li>
