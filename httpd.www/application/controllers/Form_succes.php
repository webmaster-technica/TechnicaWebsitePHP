<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_succes extends CI_Controller {
    
        public function index() {
            $data['pageTitle'] = "Contact formulier succesvol verzonden";
            $data['picture'] = "";

            $this->load->view('templates/header', $data);
            if ($_POST) {
                if(!empty($_POST['robotest'])){
                    header("Location: error");
                } else {

                    $mail = new PHPMailer(true);

                    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = 'send.one.com;mailout.one.com';  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = 'webmaster@technica-antwerpen.be';                 // SMTP username
                    $mail->Password = 'axelleiseengeilding';                           // SMTP password
                    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 587;                                    // TCP port to connect to

                    $mail->setFrom('webmaster@technica-antwerpen.be', $_POST['name']);
                    $mail->addAddress('webmaster@technica-antwerpen.be');
                    $mail->addReplyTo($_POST['email']);

                    $mail->isHTML(false);                                  // Set email format to HTML

                    $mail->Subject = 'bericht van '.$_POST['name'];
                    $mail->Body    = $_POST['message'];
                    $mail->AltBody = $_POST['message'];

                    $mail->send();
                    $this->load->view('form_succes');
                } 
            } else {
                header("Location: ".base_url());
            }
            $this->load->view('templates/footer');
        }
}
