<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the person identifier from the form
    $person = $_POST["person"];

    // Get the contact information from the form
    $name = $_POST["name"];
    $position = $_POST["position"];
    $email = $_POST["email"];

    // Validate and sanitize the input data if necessary

    // Save the contact information to a file or database (for simplicity, we'll use a file)
    $contactData = "$name,$position,$email\n";
    file_put_contents("contacts.csv", $contactData, FILE_APPEND);

    // Respond with a success message
    echo "Contact information for $name has been added successfully!";
} else {
    // Respond with an error message if the request method is not POST
    echo "Error: Invalid request method.";
}
?>
