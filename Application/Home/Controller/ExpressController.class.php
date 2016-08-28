<?php

namespace Home\Controller;

use Think\Controller;

/**
 *  快递信息类
 */
class ExpressController extends Controller {

    /**
     *  ajax分页,取出共有多少页码,传给jquery.
     */
    public function expressList() {
		//$name=I('name');
		//if($name!=''){$where['uname']=array('like',"%{$name}%");}
        $pages = ceil(M('content')->count() / 4);
        $this->assign('pages', $pages);
        $this->display();
    }
	//ajax请求的方法,主要的分页内容,display一个模板,里面是表格内容.ajax请求此方法,返回此模板.
	public function showExpress() {
			$express = M('content');
			$p = I('get.p', 1);
			$name=I('get.name');
			if($name!=''){$where['uname']=array('like',"%{$name}%");}
			$pagesize = 4;
			$count = M('content')->where($where)->count();
			$pages=ceil($count/$pagesize);
			$res = $express->page("{$p},{$pagesize}")->where($where)->select();
			
			$data['data']=$res;
			$data['total']=$pages;
			$this->assign('res', $res);
			// exit(json_encode($data));
			$this->display();
			
		}
  
}
