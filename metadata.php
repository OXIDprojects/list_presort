<?php
/**
 * Module information
 */
$aModule = array(
    'id' => 'list_presort',
    'title' => 'Manufacturers- and Searchlist Presort',
    'version' => '1.0',
    'author' => 'Zunderweb',

    'extend' => array(
        'search' => 'list_presort/views/list_presort',
        'manufacturerlist' => 'list_presort/views/list_presort',
    )
);
