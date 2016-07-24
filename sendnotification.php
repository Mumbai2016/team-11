<?php
    //Print '<script>alert("Entered checkforgot!");</script>';
    session_start();
  //  $username = mysql_real_escape_string($_POST['user']);
    //$emailid = mysql_real_escape_string($_POST['email']);
    $username = $_GET['user'];
    //echo $username;
    $bool = true;
    mysql_connect("localhost", "root", "") or die (mysql_error());
    mysql_select_db("Katalyst11") or die ("Cannot connect to database"); 
    $query = mysql_query("Select email from user WHERE U_Id='$username'"); 
    $exists = mysql_num_rows($query); 
    if($exists > 0)
    {   $row=mysql_fetch_array($query);
        //Load PHPMailer dependencies
        require_once 'PHPMailerAutoload.php';
        require_once 'class.phpmailer.php';
        require_once 'class.smtp.php';
        /* CONFIGURATION */
        $crendentials = array(
            'email'     => 'pratik.velhal@gmail.com',    //Your GMail address
            'password'  => 'yxabsctfytujqlin'               //Your GMail password
            );
        /* SPECIFIC TO GMAIL SMTP */
        $smtp = array(
        'host' => 'smtp.gmail.com',
        'port' => 587,
        'username' => $crendentials['email'],
        'password' => $crendentials['password'],
        'secure' => 'tls' //SSL or TLS
        );
        /* TO, SUBJECT, CONTENT */
        $to         = $row['email']; //The 'To' field
        $subject    = 'Forgot Password Request for Katalyst';
        //$content    = "Hello, ".$row['name']."<br>Your password is: <strong>".$row['password']."</strong><br><br>Regards,<br>Coding Website Team.";
        $content    = "Hello, ".$username."<br>This is a reminder for your mentor session through katalyst<br><br>Regards,<br>Katalyst team";
        //$SESSION['username']=$row['username'];
        $mailer = new PHPMailer();
        //SMTP Configuration
        $mailer->isSMTP();
        $mailer->SMTPAuth   = true; //We need to authenticate
        $mailer->Host       = $smtp['host'];
        $mailer->Port       = $smtp['port'];
        $mailer->Username   = $smtp['username'];
        $mailer->Password   = $smtp['password'];
        $mailer->SMTPSecure = $smtp['secure']; 
        //Now, send mail :
        //From - To ://pratik
        $mailer->From       = $crendentials['email'];
        $mailer->FromName   = 'Katalyst'; //Optional
        $mailer->addAddress($to);  // Add a recipient
        //Subject - Body :
        $mailer->Subject        = $subject;
        $mailer->Body           = $content;
        $mailer->isHTML(true); //Mail body contains HTML tags
        //Check if mail is sent :
        if(!$mailer->send()) {
            echo 'Error sending mail : ' . $mailer->ErrorInfo;
        } else {
            echo "<script>alert('Message sent! Check your email!');</script>";
        }
    }  
    else
    {
        echo "<script>alert('User does not exist');</script>";
    }
    mysql_close();
?>
