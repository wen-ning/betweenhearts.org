<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: hotthread.php 29234 2012-03-30 04:10:18Z monkey $
 */
//note 帖子thread >> hotthread(热门主题) @ Discuz! X2.5

if(!defined('IN_MOBILE_API')) {
	exit('Access Denied');
}

$_GET['mod'] = 'guide';
$_GET['view'] = 'hot';
include_once 'forum.php';

class mobile_api {

	//note 程序模块执行前需要运行的代码
	function common() {
	}

	//note 程序模板输出前运行的代码
	function output() {
		global $_G;
		
		foreach($GLOBALS['data']['hot']['threadlist'] as $tid=>$thread) {
			$GLOBALS['data']['hot']['threadlist'][$tid]['avatar'] = avatar($thread['authorid'], 'big', true);
		}
		$variable = array(
			'data' => array_values($GLOBALS['data']['hot']['threadlist']),
			'perpage' => $GLOBALS['perpage'],
		);
		mobile_core::result(mobile_core::variable($variable));
	}

}

?>