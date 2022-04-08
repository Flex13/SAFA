<?php

require 'class.phpmailer.php';

/**
 * Mail
 *
 * PHP version 7.0
 */
class Mail
{

    /**
     * Send a message
     *
     * @param string $to Recipient
     * @param string $subject Subject
     * @param string $text Text-only content of the message
     * @param string $html HTML content of the message
     *
     * @return mixed
     */
    public static function send($to, $subject, $html)
    {
        try {
            $mail = new PHPMailer();
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'mail.safabc.org';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username = SMTP_USERNAME;
            $mail->Password = SMTP_PASSWORD;                               // SMTP password
            $mail->SMTPSecure = 'ssl';        // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;
            $mail->isHTML(true);
            $mail->Mailer = 'smtp';

            //Recipients
            $mail->setFrom(SMTP_USERNAME, 'SAFA BCM');
            $mail->addAddress($to);     // Add a recipient
            $mail->addReplyTo('noreply@safabc.org', 'SAFA BCM');

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $html;
            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}