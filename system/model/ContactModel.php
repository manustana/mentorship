<?php

class contactModel extends Model
{
    public function sendEmail($formData): void
    {
        // Set the recipient email address
        $to = 'youremail@example.com';

        // Set the email subject
        $subject = 'New message from ' . $formData['name'];

        // Set the email message
        $message = 'Name: ' . $formData['name'] . "\r\n";
        $message .= 'Email: ' . $formData['email'] . "\r\n";
        $message .= 'Message: ' . $formData['message'] . "\r\n";

        // Set the email headers
        $headers = 'From: ' . $formData['email'] . "\r\n" .
            'Reply-To: ' . $formData['email'] . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        // Send the email
        mail($to, $subject, $message, $headers);
    }
}