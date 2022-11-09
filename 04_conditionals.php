<?php

/* ------------ Operators ------------- */

 /*
 < Less than
 > Greater than
 <= Less than or equal to
 >= Greater than or equal to
 == Equal to
 === Identical to
 != Not equal to
 !== Not identical to
 */


$age = 17;


$t = date('H');

if($t < 12) {
    echo 'Good Morning';
} elseif($t < 17) {
    echo 'Good Morning';
} else {
    echo 'Good Evening';
}

$posts = ['First Post'];

if (!empty($posts)) {
    echo $posts[0];
} else {
    echo 'No posts';
}

echo !empty($posts) ? $posts[0] : 'No Posts';

$firstPost = !empty($posts) ? $posts[0] : 'No Posts';

$firstPost = !empty($posts) ? $posts[0] : null;

$firstPost = $posts[0] ?? null;

echo $firstPost;

$favcolor = 'yellow';

switch ($favcolor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your favorite color is not red, green or blue';
}