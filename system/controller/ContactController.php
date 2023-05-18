<?php
include '../model/ContactModel.php';

class ContactController extends Controller
{
    public function handleRequest(): void
    {
        if (isset($_POST['submit'])) {
            // Validate form data
            $errors = $this->validateForm($_POST);
            if (count($errors) == 0) {
                // Form data is valid, send email
                $model = new ContactModel();
                $model->sendEmail($_POST);
                // Display confirmation message
                $this->displayConfirmation();
            } else {
                // Form data is invalid, display errors
                $this->displayForm($_POST, $errors);
            }
        } else {
            // Display the form
            $this->displayForm();
        }
    }

    private function validateForm($formData): array
    {
        $errors = array();
        if (empty($formData['name'])) {
            $errors[] = 'Please enter your name';
        }
        if (empty($formData['email'])) {
            $errors[] = 'Please enter your email address';
        } elseif (!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Please enter a valid email address';
        }
        if (empty($formData['message'])) {
            $errors[] = 'Please enter a message';
        }
        return $errors;
    }

    private function displayForm($formData = array(), $errors = array()): void
    {
        // Display the contact form
        require_once '../views/contactForm.php';
    }

    private function displayConfirmation(): void
    {
        // Display confirmation message
        echo 'Thank you for your message!';
    }

}