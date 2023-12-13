<?php
$contacts = array(
    'jan_gerard' => array(
        'Name' => 'Jan Gerard Abella',
        'Position' => 'Position 1',
        'Email' => 'jan.gerard@example.com',
    ),
    'kiara_gwynne' => array(
        'Name' => 'Kiara Gwynne Vendiola',
        'Position' => 'Position 2',
        'Email' => 'kiara.gwynne@example.com',
    ),
    'ernest_theodore' => array(
        'Name' => 'Ernest Theodore Rojo',
        'Position' => 'Position 3',
        'Email' => 'ernest.theodore@example.com',
    ),
);

$person = $_GET['person'];

if (array_key_exists($person, $contacts)) {
    $contactInfo = $contacts[$person];
} else {
    $contactInfo = array(
        'Name' => 'John Doe',
        'Position' => 'Manager',
        'Email' => 'john.doe@example.com',
    );
}

// Output contact information as JSON
header('Content-Type: application/json');
echo json_encode($contactInfo);
?>
