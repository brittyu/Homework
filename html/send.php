<?php
class smtp_mail{
	private $host;          //主机
	private $port = 25;     //默认25端口，tcp
	private $user;          //邮箱用户名
	private $pass;          //密码
	private $debug;
	private $sock;
	private $mail_format = 0;

	public function __construct($host,$port,$user,$pass,$format,$debug){
		$this->host = $host;
		$this->port = $port;
		$this->user = base64_encode($user);
		$this->pass = base64_encode($pass);
		$this->mail_format = $format;
		$this->debug = $debug;

		$this->sock = fsockopen($this->host,$this->port,$errno,$errstr,10);       //建立socket连接
		if(!$this->sock){
			exit("Error number:$errno,Error message:$errstr\n");
		}

		$response = fgets($this->sock);
		if(strstr($response,"220") ===  false){
			exit("server error:$respones\n");
		}
	}

	private function show_debug($message){
	    if($this->debug){
	    	echo "Debug:$message";
	    }
	}
        //具体操作
	private function do_command($cmd,$return_code){
		fwrite($this->sock,$cmd);
		$response = fgets($this->sock);
		if(strstr($response,"$return_code") === false){
			$this->show_debug($response);
			return false;
		}

		return true;
	}

	private function is_email($email){
		$pattren = "/^[^_][\w]*@[\w.]+[\w]*[^_]$/";        //判断email格式
		if(preg_match($pattren,$email,$matches)){
			return true;
		}else{
			return false;
		}
	}

	public function send_mail($from,$to,$subject,$body){
		if(!$this->is_email($from) OR !$this->is_email($to)){
			$this->show_debug("Please enter vaild from/to email");
			return false;
		}

		if(empty($subject) OR empty($body)){
		    $this->show_debug("Please enter sbuject/body");
		    return false;
		}

		$detail .= "From:".$from."\r\n";
		$detail .= "To:".$to."\r\n";
		$detail .= "Subject:".$subject."\r\n";

		if($this->mail_format == 1){
			$detail .= "Content-Type:text/html;\r\n";
		}else{
			$detail .= "Content-Type:text/plain;\r\n";
		}

		$detail .= "charset = gb2312\r\n\r\n";
		$detail .= $body;

		$this->do_command("HELO smtp.qq.com\r\n",250);
		$this->do_command("AUTH LOGIN\r\n",334);
		$this->do_command($this->user."\r\n",334);
		$this->do_command($this->pass."\r\n",235);
		$this->do_command("MAIL FROM:".$from."\r\n",250);
		$this->do_command("RCPT TO:".$to."\r\n",250);
		$this->do_command("DATA\r\n",354);
		$this->do_command($detail."\r\n",250);
		$this->do_command("QUIT\r\n",221);

		return true;
	}


}

$host = "smtp.qq.com";
$port = 25;
$user = "1136533569@qq.com";
$pass = "125678sany";
$from = "1136533569@qq.com";
$to   = "1136533569@qq.com";
$subject = "Hello";
$content = "hehe";

$mail = new smtp_mail($host,$port,$user,$pass,1,0);
$mail->send_mail($from,$to,$subject,$content);










?>
