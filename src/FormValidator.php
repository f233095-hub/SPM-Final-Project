<?php
class FormValidator {
    public static function validateContactForm($name, $email, $message) {
        if (empty($name) || empty($email) || empty($message)) {
            return "Error: All fields are required.";
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Error: Invalid email format.";
        }
        if (strlen($message) > 1000) {
            return "Error: Message is too long.";
        }
        return "Success";
    }
}
?>
