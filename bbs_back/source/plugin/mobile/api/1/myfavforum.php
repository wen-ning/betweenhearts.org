<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: myfavforum.php 27451 2012-02-01 05:48:47Z monkey $
 */
//note 帖子thread >> myfavthread(我收藏的帖子) @ Discuz! X2.5

if(!defined('IN_MOBILE_API')) {
	exit('Access Denied');
}

$_GET['mod'] = 'space';
$_GET['do'] = 'favorite';
$_GET['type'] = 'forum';
include_once 'home.php';

class mobile_api {

	//note 程序模块执行前需要运行的代码
	function common() {
	}

	//note 程序模板输出前运行的代码
	function output() {
		global $_G;
		$variable = array(
			'list' => array_values($GLOBALS['list']),
			'perpage' => $GLOBALS['perpage'],
			'count' => $GLOBALS['count'],
		);
		mobile_core::result(mobile_core::variable($variable));
	}

}

?>