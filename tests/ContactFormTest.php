<?php
use PHPUnit\Framework\TestCase;

class ContactFormTest extends TestCase
{
    private $handlerFile = __DIR__ . '/../src/contact-handler.php';
    
    // SFP-20: Test for empty form fields
    public function testEmptyNameFails()
    {
        $_POST = ['name' => '', 'email' => 'test@test.com', 'message' => 'Hello'];
        $_SERVER['REQUEST_METHOD'] = 'POST';
        session_start();
        ob_start();
        include $this->handlerFile;
        ob_end_clean();
        $this->assertNotEmpty($_SESSION['form_errors'] ?? []);
        session_destroy();
    }
    
    // SFP-21: Test for invalid email format
    public function testInvalidEmailFails()
    {
        $_POST = ['name' => 'John Doe', 'email' => 'not-an-email', 'message' => 'Hi'];
        $_SERVER['REQUEST_METHOD'] = 'POST';
        session_start();
        ob_start();
        include $this->handlerFile;
        ob_end_clean();
        $errors = $_SESSION['form_errors'] ?? [];
        $this->assertContains('Invalid email format', $errors);
        session_destroy();
    }
    
    // SFP-22: Test for form success case
    public function testValidSubmissionPasses()
    {
        $_POST = ['name' => 'Valid User', 'email' => 'valid@test.com', 'message' => 'Valid message'];
        $_SERVER['REQUEST_METHOD'] = 'POST';
        session_start();
        ob_start();
        include $this->handlerFile;
        ob_end_clean();
        $this->assertTrue($_SESSION['contact_success'] ?? false);
        session_destroy();
    }
    
    // SFP-23: Test for basic page load/availability
    public function testPageLoadsSuccessfully()
    {
        $html = file_get_contents(__DIR__ . '/../public/index.php');
        $this->assertStringContainsString('QuickPOS', $html);
        $this->assertStringContainsString('Modern POS System', $html);
    }
    
    // SFP-24: 5th test - boundary testing / all sections exist
    public function testAllRequiredSectionsExist()
    {
        $html = file_get_contents(__DIR__ . '/../public/index.php');
        $requiredSections = [
            'class="header"',
            'class="hero"',
            'class="features"',
            'class="pricing"',
            'class="contact-section"',
            'class="footer"'
        ];
        foreach ($requiredSections as $section) {
            $this->assertStringContainsString($section, $html, "Missing section: $section");
        }
    }
}
?>