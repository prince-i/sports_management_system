<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'vendor/autoload.php';

require '../conn.php';

$recipient = $_POST['email'];


$sql = "SELECT * FROM user_accounts";
$stmt = $conn->prepare($sql);
$stmt->execute();
if($stmt->rowCount() > 0){
    foreach($stmt->fetchALL() as $row){
        $name = $row['Name'];
        $course = $row['course'];
        $yr_section = $row['yr_section'];
        $id_number = $row['id_number'];
        $email_ = $row['email'];
        $pass  = $row['password'];
        $role = $row['role'];
        $permission = $row['permission'];
        if($permission == 1){
            $permission = 'AUTHORIZED';
        }else{
            $permission = 'UNAUTHORIZED';
        }
    }
}else{
    exit();
}

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 1;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.office365.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'mamidevs@outlook.com';                     // SMTP username
    $mail->Password   = 'Webdevmalala';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('mamidevs@outlook.com', 'EMAILER SERVER');
    $mail->addAddress($recipient);     // Add a recipient
    // $mail->addAddress('');               // Name is optional
    $mail->addReplyTo('no-reply@outlook.com', 'No Reply');
    // $mail->addCC('');
    // $mail->addBCC('');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Account Information Update';
    $mail->Body    = '<div>
                        <br>
                        <b>Your account is updated recently please see below details:</b>
                        <br>
                        <table style="border:1;border-collapse:collapse;">
                            <tr>
                                <td>ID NUMBER:</td>
                                <td>'.$id_number.'</td>
                            </tr>
                            <tr>
                                <td>NAME</td>
                                <td>'.$name.'</td>
                            </tr>
                            <tr>
                                <td>COURSE:</td>
                                <td>'.$course.'</td>
                            </tr>
                            <tr>
                                <td>YR/SECTION:</td>
                                <td>'.$yr_section.'</td>
                            </tr>
                            <tr>
                                <td>EMAIL:</td>
                                <td>'.$email_.'</td>
                            </tr>
                            <tr>
                                <td>PASSWORD:</td>
                                <td>'.$pass.'</td>
                            </tr>
                            <tr>
                                <td>ROLE:</td>
                                <td>'.$role.'</td>
                            </tr>
                            <tr>
                                <td>ACCOUNT STATUS/PERMISSION:</td>
                                <td>'.$permission.'</td>
                            </tr>
                        </table>
                        
    </div>';
    $mail->AltBody = '';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>