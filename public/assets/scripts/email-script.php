<?php
    // Check if the form was submitted via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate and sanitize input
        $name = strip_tags(trim($_POST["name"]));
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $subject = strip_tags(trim($_POST["subject"]));
        $message = trim($_POST["message"]);

        // Check that all fields are filled
        if (empty($name) || empty($email) || empty($subject) || empty($message)) {
            http_response_code(400);
            echo "Vul alle velden in.";
            exit;
        }

        // Additional email validation
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            http_response_code(400);
            echo "Ongeldig e-mailadres.";
            exit;
        }

        // Recipient (replace with your own email address)
        $to = "milna.van.winkel@gmail.com";

        // Email content
        $email_content = "Naam: $name\n";
        $email_content .= "E-mailadres: $email\n\n";
        $email_content .= "Onderwerp: $subject\n\n";
        $email_content .= "Bericht:\n$message\n";

        // Email headers
        $headers = "From: $name <$email>";

        // Send the email
        if (mail($to, $subject, $email_content, $headers)) {
            http_response_code(200);
            echo "Je bericht is succesvol verzonden!";
        } else {
            http_response_code(500);
            echo "Er is een probleem opgetreden tijdens het verzenden.";
        }
    } else {
        // Not a POST request
        http_response_code(403);
        echo "Er is een probleem opgetreden bij het verzenden van je bericht. Probeer het opnieuw.";
    }
?>
