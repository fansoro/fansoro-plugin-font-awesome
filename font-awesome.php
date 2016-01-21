<?php

/**
 * Fansoro Font Awesome Plugin
 *
 * (c) Romanenko Sergey / Awilum <http://fansoro.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

Action::add('theme_header', function () {
    echo('<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">');
});

Shortcode::add('icon', 'icon');

function icon($attributes)
{

    // Extract attributes
    extract($attributes);

    !isset($name)  and $name  = '';
    !isset($size)  and $size  = '' or $size = 'fa-'.$size;
    !isset($class) and $class = '';

    return '<i class="fa fa-'.$name.' '.$size.' '.$class.'"></i>';
}
