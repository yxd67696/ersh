<?php
//分页样式
function getpage($count, $pagesize = 20) {
    $p = new Think\Page($count, $pagesize);
    $p->setConfig('header', '<span class="count">共 <strong>%TOTAL_ROW%</strong> 条记录</span> 第%NOW_PAGE%页/共%TOTAL_PAGE%页' 
    	);
    $p->setConfig('prev', '上一页');
    $p->setConfig('next', '下一页');
    $p->setConfig('last', '末页');
    $p->setConfig('first', '首页');
    $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
    $p->lastSuffix = false;//最后一页不显示为总页数
    return $p;
}
// 公共函数在系统中可以直接使用
//验证码
function check_code($code, $id = ""){
    $verify = new \Think\Verify();
    return $verify->check($code, $id);
}

function V($data)
{
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}
