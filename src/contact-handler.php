<?php
session_start();

// Validation logic - SFP-16
function validateContactForm($name, $email, $message) {
    $errors = [];
    
    // Check empty fields
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    return $errors;
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    $errors = validateContactForm($name, $email, $message);
    
    if (empty($errors)) {
        // Save submission (for demo)
        $logEntry = "[" . date('Y-m-d H:i:s') . "] Name: $name, Email: $email, Message: $message\n";
        file_put_contents('../public/submissions.txt', $logEntry, FILE_APPEND);
        
        // Success - redirect to thank you page (FIXED)
        $_SESSION['contact_success'] = true;
        header("Location: ../public/thank-you.php");
        exit();
    } else {
        // Failed - store errors and redirect back (FIXED)
        $_SESSION['form_errors'] = $errors;
        $_SESSION['form_data'] = $_POST;
        header("Location: ../public/index.php#contact");
        exit();
    }
} else {
    header("Location: ../public/index.php");
    exit();
}
?>