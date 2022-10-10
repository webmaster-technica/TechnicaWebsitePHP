<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lidworden extends CI_Controller {
    
	public function index() {
            $data['pageTitle'] = "Word lid van Technica";
            $data['picture'] = "";

            $servername = "technica-antwerpen.be.mysql";
            $database = "technica_antwerpen_be_technica";
            $username = "technica_antwerpen_be_technica";
            $password = "Kgqr3RC6bbEiwyX75X";
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $database);
            // Check connection
            if (!$conn) { die("Connection failed: " . mysqli_connect_error()); }
            /*
            $sql="SELECT * FROM Leden";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result)){
                echo "<td>";
                echo "<p>".base64_encode($row["Foto"])6."</p>";
                echo "</td>";
                echo "<td>";
                echo '<img src="data:image/jpeg;base64,'. base64_encode($row["Foto"]).'".>';
                echo "</td>";
            }
            */

            $this->load->view('templates/header', $data);
            if ($_POST) {
                if(!empty($_POST['robotest'])){ header("Location: error");
                } else {
                    if(filter_has_var(INPUT_POST,'agree')) {    // check for checkbox
                        //echo "Connected successfully";
 
                        //$imageData=file_get_contents($_FILES["file"]["tmp_name"]);
                        //$imageData=$_FILES["file"]["tmp_name"];
                        //$imageData="yeet";
                        //echo $imageData;

                        $sql = "INSERT INTO `Leden`(`Naam`, `Geboortedatum`, `Richting`, `Jaar`, `Email`, `Gsm`, `Straat`, `Huisnr`, `Stad`, `Postcode`, `Dopen`) VALUES ('{$_POST['name']}','{$_POST['birth_date']}','{$_POST['study']}','{$_POST['study_year']}','{$_POST['email']}','{$_POST['gsm']}','{$_POST['street']}','{$_POST['house_number']}','{$_POST['city']}','{$_POST['postal']}','{$_POST['dopen']}')";
                        if (mysqli_query($conn, $sql)) {
                              //echo "New record created successfully";
                        } else {
                              //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                        mysqli_close($conn);

                        $mail = new PHPMailer(true);

                        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

                        $mail->isSMTP();                                      // Set mailer to use SMTP
                        $mail->Host = 'send.one.com;mailout.one.com';         // Specify main and backup SMTP servers
                        $mail->SMTPAuth = true;                               // Enable SMTP authentication
                        $mail->Username = 'praeses@technica-antwerpen.be';  // SMTP username
                        $mail->Password = 'bierislekker';              // SMTP password
                        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                        $mail->Port = 587;                                    // TCP port to connect to

                        $mail->setFrom('praeses@technica-antwerpen.be', $_POST['name']);
                        $mail->addAddress('webmaster@technica-antwerpen.be');
                        $mail->addAddress('praeses@technica-antwerpen.be');
                        $mail->addReplyTo($_POST['email']);

                        $mail->isHTML(true);                                  // Set email format to HTML

                        $mail->Subject = 'Aanmelding van '.$_POST['name'];

                        $message = '<b>Gegevens van aanmelding</b> <br>';
                        $message .= '<b>Naam:</b> '.$_POST['name'].'<br>';
                        $message .= '<b>Geboortedatum:</b> '.$_POST['birth_date'].'<br>';
                        $message .= '<b>Studierichting:</b> '.$_POST['study'].'<br>';
                        $message .= '<b>Studie Jaar:</b> '.$_POST['study_year'].'<br>';
                        $message .= '<b>E-mail:</b> '.$_POST['email'].'<br>';
                        $message .= '<b>Gsm:</b> '.$_POST['gsm'].'<br>';
                        $message .= '<b>Straat:</b> '.$_POST['street'].'<br>';
                        $message .= '<b>Huis nr:</b> '.$_POST['house_number'].'<br>';
                        $message .= '<b>Stad:</b> '.$_POST['city'].'<br>';
                        $message .= '<b>Postcode:</b> '.$_POST['postal'].'<br>';
                        $message .= '<b>Dopen:</b> '.$_POST['dopen'].'<br><br>';
                        $mail->Body    = $message;
                        $mail->AltBody = $message;

                        $mail->send();
                        $this->load->view('formsucces_aanmelding');
                    } else { $this->load->view('lidworden'); }
                } 
            } else { $this->load->view('lidworden'); }
            $this->load->view('templates/footer');
	}
}
?>