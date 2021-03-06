<?php

if (false === defined('IN_PHPBB')) {
    exit;
}

if (true === empty($lang) || false === is_array($lang)) {
    $lang = array();
}

$lang = array_merge($lang, array(
    'ACP_SEEMYCAR' => 'See My Car',
    'ACP_SEEMYCAR_SETTINGS' => 'Settings',
    'ACP_SEEMYCAR_EXPLAIN' => 'The author of the topic in selected forums will be assigned with a link to that topic. This link will be visible in this user profile and next to each his post. The author of the topic has the right to freely edit that topic\'s first post.',
    'SELECT_FORUM_EXPLAIN' => 'You are able to select more than one forum.',
    'LINKS_UPDATE_FREQUENCY' => 'Links update frequency',
    'HOURLY_INTERVALS' => array(
        1 => 'every hour',
        2 => 'every %d hours',
    ),
    'UPDATE_NOW' => 'Update now',
));
