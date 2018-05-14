<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

	public function _initialize(){
      $this->lie1=D('lieone');
      $this->lie2=D('lietwo');
	}

    public function index(){
        $lie2=$this->lie2->select();
        // V($lie2);
        $this->assign('lie2',$lie2);
        $this->display();
    }

    //商品列表
    public function order(){
        $lie1=$this->lie1->select();
        $lie2=$this->lie1->join('RIGHT JOIN er_lietwo ON er_lietwo.lid = er_lieone.id')->select();
        // V($lie1);
        $this->assign('lie1',$lie1);
        $this->assign('lie2',$lie2);
    	$this->display();
    }
 
    public function AjaxAddOrder1(){
        $this->lie1->create($_POST);
        $this->lie1->add();
        $lie1=$this->lie1->order('id desc')->find();
        $_POST['lid'] = $lie1['id'];
        $this->ajaxReturn($_POST);
    }
    public function AjaxAddOrder2(){
        $this->lie2->create($_POST);
        $this->lie2->add();
        $lie1=$this->lie1->where('id='.$_POST['lid'])->find();
        $lie2=$this->lie2->order('id desc')->find();
        $_POST['id'] = $lie2['id'];
        $_POST['name'] = $lie1['name'];
        $this->ajaxReturn($_POST);
    }
    public function AjaxDellie1(){
        $this->lie1->where('id='.$_POST['id'])->delete();
        $this->ajaxReturn($_POST);
    }
    public function AjaxDellie2(){
        $this->lie2->where('id='.$_POST['id'])->delete();
        $this->ajaxReturn($_POST);
    }
    public function AjaxDelAll1(){
        $id = $_POST['id'];
        if(!empty($_POST)){
            foreach($id as $key => $val){
                $this->lie1->delete($val);
            }
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(0);
        }
    }
    public function AjaxDelAll2(){
        $id = $_POST['id'];
        if(!empty($_POST)){
            foreach($id as $key => $val){
                $this->lie2->delete($val);
            }
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(0);
        }
    }
    public function AjaxDosave1(){
        $this->lie1->create($_POST);
        $this->lie1->save();
        $this->ajaxReturn($_POST);
    }
    public function AjaxDosave2(){
        $this->lie2->create($_POST);
        $this->lie2->save();
        $lie2 = $this->lie1->where('id='.$_POST['lid'])->find();
        $_POST['name'] = $lie2['name'];
        $this->ajaxReturn($_POST);
    }
    public function qhcs(){
    	$name=$_GET['name'];
    	$where['name']=array('like',$name);
    	$cname=$this->city->where($where)->find();
    	V($cname);
    	exit;

    	$this->display('Index/index');
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