<?php
namespace Home\Controller;
use Think\Controller;
require __DIR__ . "/vendor/autoload.php";

use Qcloud\Sms\SmsSingleSender;
use Qcloud\Sms\SmsMultiSender;
use Qcloud\Sms\SmsVoiceVerifyCodeSender;
use Qcloud\Sms\SmsVoicePromptSender;
use Qcloud\Sms\SmsStatusPuller;
use Qcloud\Sms\SmsMobileStatusPuller;

class IndexController extends Controller {

    public function _initialize(){
        session_start();
        if(!empty($_SESSION['username'])){
            $this->id = $_SESSION['id'];
            $this->name = $_SESSION['username'];
        }
        $this->city=D('city');
        $this->province=D('province');
        $this->mycity=D('mycity');
        $this->lie1=D('lieone');
        $this->lie2=D('lietwo');
        $this->user=D('user');
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
        //SESSION
        $this->assign('home_id',$this->id);
        $this->assign('home_name',$this->name);
     
        $this->display();
    }

    //注册
    public function register(){
        $this->display();
    }
    //注册验证
    public function register_sdk(){
        //手机号
        $tel = $_POST['tel'];
        //验证码
        $num = rand(1000,9999); 
        //返回手机号+验证码
        $data = [];
        $data['tel'] = $tel;
        $data['num'] = $num; 

        // 短信应用SDK AppID
        $appid = 1400091422; // 1400开头

        // 短信应用SDK AppKey
        $appkey = "37cdf5545d50647a299cc767c4a37217";

        // 需要发送短信的手机号码
        $phoneNumbers = [$tel];

        // 短信模板ID，需要在短信应用中申请
        // $templateId = 121376;  // NOTE: 这里的模板ID`7839`只是一个示例，真实的模板ID需要在短信控制台中申请
        //判断验证码为注册还是登录选择短信模板，satus=1时为注册，反之为登录
        if($_POST['status'] == 1){
            $templateId = 123548;//注册模板
        }else{
            $templateId = 123242;//登录模板
        }

        // 签名
        $smsSign = "二手交易平台"; // NOTE: 这里的签名只是示例，请使用真实的已申请的签名，签名参数使用的是`签名内容`，而不是`签名ID`

        // 指定模板ID单发短信
        // try {
        //     $ssender = new SmsSingleSender($appid, $appkey);
        //     $params = [$num];
        //     $result = $ssender->sendWithParam("86", $phoneNumbers[0], $templateId,
        //         $params, $smsSign, "", "");  // 签名参数未提供或者为空时，会使用默认签名发送短信
        //     $this->ajaxReturn($data);
        //     $rsp = json_decode($result);
        //     echo $result;
        // } catch(\Exception $e) {
        //     echo var_dump($e);
        // }
            $this->ajaxReturn($data);
        
    }
    //注册验证手机号是否存在
    public function AjaxTel(){
        if(!empty($_POST['tel'])){
           $tel = $this->user->where('tel='.$_POST['tel'])->find(); 
        }
        if(isset($tel)){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(0);
        }
    }
    //注册后填写密码
    public function pass(){
        $tel = $_POST['tel'];
        if(empty($tel)){
            $this->error();
        }
        // V($_POST);
        $this->assign('tel',$tel);
        $this->display();
    }
    //注册处理
    public function doregister(){
        //V($_POST);
        $tel = $_POST['tel'];
        $user = $this->user->where('tel='.$tel)->find();
        $_POST['password'] = md5($_POST['password']);
        $_POST['username'] = $_POST['tel']; 
        $this->user->create($_POST);
        if(!isset($user)){
            $this->user->add();
        }
        $this->display('Index/login');

    }
    //登录
    public function login(){
        $this->display();
    }
    //ajax登录验证用户名密码
    public function AjaxLogin(){
        $where['tel'] = $_POST['userid'];
        $where['username'] = $_POST['userid'];
        $where['email'] = $_POST['userid'];
        $where['_logic'] = 'OR';
        $user = $this->user->where($where)->find();
        $pass = md5($_POST['userpass']);
        if($pass == $user['password']){
            $this->ajaxReturn(1);
        }else{
            $this->ajaxReturn(0);
        }
        // $this->ajaxReturn($pass);

    }
    //登录成功处理
    public function dologin(){

        $where['tel'] = $_POST['userid'];
        $where['username'] = $_POST['userid'];
        $where['email'] = $_POST['userid'];
        $where['_logic'] = 'OR';
        $user = $this->user->where($where)->find();
        // V($user);
        // exit;
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $this->redirect('Index/index');
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

    //注销登录
    public function logout(){
        //开启session
        session_start();

        //清空session数组
        unset($_SESSION);

        //删除session文件
        session_destroy();

        //删除客户端session id
        setcookie(session_name(),'',time()-1,'/');
        header('location:../index');

    }
}