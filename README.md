

WIKI : 


##How to add a prefix - suffix to a node title from a module :

http://drupal.stackexchange.com/questions/76026/how-to-add-a-prefix-suffix-to-a-node-title-from-a-module


locate the title in question, and add the prefix and suffix as you do in a form like this:

$array['the_title']['#prefix'] = "<div class='wrapper'>";
$array['the_title']['#suffix'] = "</div>";
