<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index()
	{
		$this->display();
    }
	 public function detail(){
   			
        $this->display();
    }

// 验证码
  public function verify(){
    import('ORG.Util.Image');
    ob_end_clean();
    Image::buildImageVerify();

      if($_SESSION['verify'] != md5($_POST['verify'])) {
          echo '验证码错误';
          exit;}
    }




}