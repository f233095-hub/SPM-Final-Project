<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/FormValidator.php';

class FormValidationTest extends TestCase {
    
    // Test 1: Empty Fields
    public function testEmptyFieldsReturnError() {
        $result = FormValidator::validateContactForm("", "test@test.com", "Hello");
        $this->assertEquals("Error: All fields are required.", $result);
    }

    // Test 2: Invalid Email
    public function testInvalidEmailReturnsError() {
        $result = FormValidator::validateContactForm("John", "not-an-email", "Hello");
        $this->assertEquals("Error: Invalid email format.", $result);
    }

    // Test 3: Success Case
    public function testValidDataReturnsSuccess() {
        $result = FormValidator::validateContactForm("John", "john@example.com", "I need a POS system.");
        $this->assertEquals("Success", $result);
    }

    // Test 4: Boundary Testing (Message length limit)
    public function testMessageTooLongReturnsError() {
        $longMessage = str_repeat("A", 1001);
        $result = FormValidator::validateContactForm("John", "john@example.com", $longMessage);
        $this->assertEquals("Error: Message is too long.", $result);
    }

    // Test 5: Basic Page Load Availability Check
    public function testIndexPageExists() {
        $pageExists = file_exists(__DIR__ . '/../public/index.php');
        $this->assertTrue($pageExists, "The main index.php file should exist in the public directory.");
    }
}
