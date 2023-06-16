<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception; 

require_once './../handler/config.php';
require 'vendor/autoload.php';

class MailBird {
    private $mail;
    private $receptionMail;
    public function __construct() {
    $this->mail = new PHPMailer(true);
    $this->mail->SMTPDebug = false;
    $this->mail->isSMTP();
    $this->mail->Host = SMTP_HOST;
    $this->mail->SMTPAuth = true;
    $this->mail->Username = SMTP_USERNAME;
    $this->mail->Password = SMTP_PWD;
    $this->receptionMail = 'info@novel.co.ke';
    $this->mail->SMTPOptions = array(
        'STARTTLS' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
        $this->mail->SMTPSecure = 'STARTTLS';
        $this->mail->Port = 587;
        $this->mail->setFrom('devices@novel.co.ke', 'Novel Technologies (Digital Support)');
    }
    
public function fowardMsgReceptionSupport($vemail,$vname,$vmessage,$vmessageid,$vphonenumber,$messagesubject) {

  try {
    $this->mail->addAddress( $this->receptionMail,'Novel Reception Support');
    $this->mail->addAddress( 'pndolo@novel.co.ke','Philip Ndolo');
    $this->mail->addAddress( 'mndege@novel.co.ke','Martin Mutembei');

    // $this->mail->addBCC('mouma@novel.co.ke','Ouma N Novel');
    $this->mail->isHTML(true); 
    $this->mail->Subject = 'Visitor Message from Website(novel.co.ke)#'.$vmessageid;
    $this->mail->Body    = '
    <div style="font-family:\'Trebuchet MS\', sans-serif; font-size: 16px; line-height: 1.5; color: #333333; background: azure;">
    <div style="text-align: center; background: rgba(250, 187, 187, 0.333);">
    <h2 style="font-size: 28px; color: #0a17d1; padding: 5px; font-weight: bold; border-bottom: 5px solid #d3360f; margin: auto;">
    <img width="80px" src="https://novel.co.ke/img/logo.png" alt="Novel" style="vertical-align: middle;">
    <span style="vertical-align: middle;">Novel Technologies EA Limited</span>
    </h2>
    </div>
    <div style=" padding: 20px;">
    <p>Hello Customer Support,</p>
    <p>  <strong> Ticket number #'.$vmessageid.' </strong></p>
    <h4 class="font-weight:800;"> <strong>Subject:</strong> <span>'.$messagesubject.' </span>  </h4>
    <p>You have a new message from  '.$vname.'- '.$vemail.'- ('.$vphonenumber.')</p>
    <p class="font-weight:800;margin:10px 0px;"> <strong>Message:</strong>  </p>
    <div  style="border: 2px solid #d3360f; padding:4px;">
    <p>'.$vmessage.'</p>

    </div>
    <br>
    <a type="button" target="_blank"  href="https://bongo.novel.co.ke/vfeedback/'.$vmessageid.'" style="width: 25vw; text-align: center; margin:auto; display: block;background: #d3360f;color: #fff; padding: 10px ; border: none; text-decoration: none;">Reply to this Message</a>
    <br>
    <small style="color: #d3360f;"> <strong>NOTE :This is a system generated email.Do not Reply to it. </strong></small>
    <br>
    <div>
    <strong>
     <p>Regards,<br>  Digital Support, Novel Technologies.</p> 
    </strong> </div>
    </div>
    </div>
    <div style="border-top: 1px solid #0310c0; background: #0310c0; padding: 15px 25px; margin-bottom: 20px; font-size: 12px; text-align: center;">
    <span style="color: #fff; font-weight: 600;">Novel Technologies EA Limited is an IT solutions provider based in Nairobi. Our solutions range from Video Conferencing Solutions, Microsoft Solutions, IP Telephony, Data Storage and Data Warehousing, Cyber and Cloud Security.</span>
    <p style="font-size: 12px; margin-top: 5px; color: #bbbbbb;">4th Floor Park Suites, Parklands Road, Parklands, Nairobi, Kenya</p>
    <p style="font-size: 12px; color: #bbbbbb;">Website: <a style="color: #bbbbbb; text-decoration:none;" target="_blank" href="https://novel.co.ke">www.novel.co.ke</a> | Email:  <span  style="color: #bbbbbb; text-decoration:none;"  >info@novel.co.ke</span> |
         Facebook: <a  style="color: #bbbbbb; text-decoration:none;" target="_blank" href="https://facebook.com/NovelTechnologies">Novel Technologies EA</a>   | LinkedIn:  <a  style="color: #bbbbbb; text-decoration:none;" target="_blank" href="https://linkedin.com/NovelTechnologies">Novel Technologies EA </a> </p>
     =</div>
    </div>
    ';

   $this->mail->send();
   MailBird::visitorNotification($vemail,$vname,$vmessageid,$vmessage,$messagesubject);
   return json_encode(['success'=>true ,"message"=>'Message sent successfully.']) ;

} catch (Exception $e) {
    return json_encode(['success'=>false ,"message"=> "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}"]);
}
}

public function visitorNotification($vemail,$vname,$vmessageid,$vmessage,$messagesubject) {
    try {
        $this->mail->addAddress($vemail,$vname);   
        $this->mail->isHTML(true); 
        $this->mail->Subject = 'Your Message to Novel Technologies(novel.co.ke)#'.$vmessageid;
        $this->mail->Body = '
    <div style="font-family:\'Trebuchet MS\', sans-serif; font-size: 16px; line-height: 1.5; color: #333333; background: azure;">
        <div style="text-align: center; background: rgba(250, 187, 187, 0.333);">
        <h2 style="font-size: 28px; color: #0a17d1; padding: 5px; font-weight: bold; border-bottom: 5px solid #d3360f; margin: auto;">
            <img width="80px" src="https://novel.co.ke/img/logo.png" alt="Novel" style="vertical-align: middle;">
            <span style="vertical-align: middle;">Novel Technologies EA Limited</span>
        </h2>
        </div>
        <div style="margin-bottom: 20px; padding: 20px;">
        <p>Hello,</p>
        <p>Ticket number #'.$vmessageid.'</p>
    
        <h4 class="font-weight:800;"> <strong>Subject:</strong> <span>'.$messagesubject.' </span>  </h4>
        <p>Thank you for contacting Novel Technologies EA Limited.</p>
        <p>We have received your message and we appreciate you reaching out .Our Customer Support representative will get back to you through the email you provided  <strong>'.$vemail.' </strong> .</p>
        <p class="font-weight:800;margin:10px 0px;"> <strong>Message:</strong>  </p>
        <div  style="border: 2px solid #d3360f; padding:4px;">
        <p>'.$vmessage.'</p>
        </div>
        <p>When following up on this message please quote the ticket number #'.$vmessageid.'.</p>
        <small style="color: #d3360f;"> <strong>NOTE :This is a system generated email.Do not Reply to it. </strong></small>
        <br>
        <div>
       <strong>
        <p>Regards,<br>  Digital Support, Novel Technologies.</p> 
       </strong> </div>
        </div>
        <div style="border-top: 1px solid #0310c0; background: #0310c0; padding: 15px 25px; margin-bottom: 20px; font-size: 12px; text-align: center;">
        <span style="color: #fff; font-weight: 600;">Novel Technologies EA Limited is an IT solutions provider based in Nairobi. Our solutions range from Video Conferencing Solutions, Microsoft Solutions, IP Telephony, Data Storage and Data Warehousing, Cyber and Cloud Security.</span>
        <p style="font-size: 12px; margin-top: 5px; color: #bbbbbb;">4th Floor Park Suites, Parklands Road, Parklands, Nairobi, Kenya</p>
        <p style="font-size: 12px; color: #bbbbbb;">Website: <a style="color: #bbbbbb; text-decoration:none;" target="_blank" href="https://novel.co.ke">www.novel.co.ke</a> | Email:  <a  style="color: #bbbbbb; text-decoration:none;" target="_blank" href="info@novel.co.ke">info@novel.co.ke</a> |
         Facebook: <a  style="color: #bbbbbb; text-decoration:none;" target="_blank" href="https://facebook.com/NovelTechnologies">Novel Technologies EA</a>   | LinkedIn:  <a  style="color: #bbbbbb; text-decoration:none;" target="_blank" href="https://linkedin.com/NovelTechnologies">Novel Technologies EA </a> </p>
        </div>
        </div>
        ';
       $this->mail->send();
       return json_encode(["success"=>true,"message"=>'Your message has been sent successfully']) ;
    
    } catch (Exception $e) {
        return json_encode(['success'=>false ,"message"=> "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}"]);
    }
    }

}


 


