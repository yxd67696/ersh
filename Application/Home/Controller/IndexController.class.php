<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

	public function _initialize(){
        $this->city=D('city');
        $this->province=D('province');
        $this->mycity=D('mycity');
        $this->lie1=D('lieone');
        $this->lie2=D('lietwo');
	}

    public function index(){
        $province = $this->province->select();
        $mycity = $this->mycity->find();

        //首页分类列表
        $lie1 = $this->lie1->select();
        $lie2 = $this->lie2->select();
        // V($_POST);
        // exit;
        $this->assign('province',$province);

        $this->assign('mycity',$mycity);

        foreach($lie1 as $key => $val){
           $lv1 = explode('/',$val['name']);
           $lie1[$key]['names'] = $lv1;
        }
        $this->assign('lie1',$lie1);
        $this->assign('lie2',$lie2);

     
        $this->display();
    }

    //注册
    public function register(){
        $this->display();
    }
  
    //ajax城市地址联动
     public function ajaxpro(){
        $city = $this->city->where('pid='.$_POST['id'])->select();

        $opt = '<option>--请选择市区--</option>';
        foreach($city as $key=>$val){
            $opt .= "<option value='{$val['id']}'>{$val['name']}</option>";
         }

        $this->ajaxReturn($opt);
    }
    //ajax切换城市
    public function ajaxcity(){
        $city = $this->city->where('id='.$_POST['id'])->find();

        //修改城市
        $data['name']=$city['name'];
        // $this->mycity->create($data);
         
        $this->mycity->where('id=1')->save($data);

        $this->ajaxReturn($city['name']);
    }
    //ajax清空城市
    public function ajaxdelcity(){
        $data['name']=null;
        $this->mycity->where('id=1')->save($data);
    }

    //ajax首页分类
    public function ajaxlie(){
        $lie2 = $this->lie2->where('lid='.$_POST['id'])->select();
        foreach($lie2 as $key=>$val){
            $nama .= "<a href='#'  target='_blank'>{$val['nama']}</a>";
            $namb .= "<a href='#'  target='_blank'>{$val['namb']}</a>";
            $namc .= "<a href='#'  target='_blank'>{$val['namc']}</a>";
         }
        $name=array($nama,$namb,$namc);
        $this->ajaxReturn($name);
    }
}