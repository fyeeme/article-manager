<?php
/**
 * Created by PhpStorm.
 * User: arno
 * Date: 15-1-18
 * Time: 下午9:50
 */

require_once('config.php');
if(!($link =mysql_connect(URL, USERNAME,PASSWORD))){
    echo mysql_error();
}
if(!mysql_select_db('test')){
    echo mysql_error();
}
mysql_query('set names utf8');
