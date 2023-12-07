<?php

define('FIELD_NAME', 'name');
define('FIELD_IMMERSION_FOR_YOU', 'immersion-for-you');

define('SUBMITTED_FORM_VALUES', 'submitted-form-values');
define('ERROR_MESSAGE', 'error_message');
define('SUCCESS_MESSAGE', 'success_message');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ((!isset($_POST[FIELD_NAME]) || empty($_POST[FIELD_NAME]))
       || (!isset($_POST[FIELD_IMMERSION_FOR_YOU]) || empty($_POST[FIELD_IMMERSION_FOR_YOU]))) {
        
        $_SESSION[ERROR_MESSAGE] = 'Bitte füllen Sie alle Eingabefelder aus!';
        $_SESSION[SUBMITTED_FORM_VALUES][FIELD_NAME] = isset($_POST[FIELD_NAME]) ? $_POST[FIELD_NAME] : '';
        $_SESSION[SUBMITTED_FORM_VALUES][FIELD_IMMERSION_FOR_YOU] = isset($_POST[FIELD_IMMERSION_FOR_YOU]) ? $_POST[FIELD_IMMERSION_FOR_YOU] : '';

        header('Location: /about-me.php');
        die();

    } else {

        $mysqli = new mysqli("localhost", "170501_5_1", "9AzNPhRbdiZQ", "170501_5_1");

        $stmt = $mysqli->prepare("INSERT INTO immersion_feedback(name, feedback) VALUES (?, ?)");
        $stmt->bind_param("ss", $_POST[FIELD_NAME], $_POST[FIELD_IMMERSION_FOR_YOU]);
        $stmt->execute();

        $mysqli->close();

        $_SESSION[SUCCESS_MESSAGE] = 'Vielen Dank für dein Feedback!';

        header('Location: /about-me.php');
        die();

    }

}

function get_all_entries() {

    $mysqli = new mysqli("localhost", "170501_5_1", "9AzNPhRbdiZQ", "170501_5_1");
    $queryResult = $mysqli->query("SELECT * FROM immersion_feedback ORDER BY creation_time DESC;");
    
    $i = 0;
    $result = [];
    if ($queryResult->num_rows > 0) {

        while ($row = $queryResult->fetch_assoc()) {
            $result[$i]['name'] = $row['name'];
            $result[$i]['feedback'] = $row['feedback'];
            $result[$i]['creation_time'] = $row['creation_time'];

            $i += 1;
        }

    }

    $mysqli->close();
    return $result;

}

function submitted_form_value($inputName) {
    if (isset($_SESSION[SUBMITTED_FORM_VALUES][$inputName])) {
        $inputValue = $_SESSION[SUBMITTED_FORM_VALUES][$inputName];
        unset($_SESSION[SUBMITTED_FORM_VALUES][$inputName]);
        return $inputValue;
    }

    return '';
}

function has_success_message() {
    return isset($_SESSION[SUCCESS_MESSAGE]);
}

function get_success_message() {
    if (has_success_message()) {
        $successMessage = $_SESSION[SUCCESS_MESSAGE];
        unset($_SESSION[SUCCESS_MESSAGE]);
        return $successMessage;
    }

    return '';
}

function has_error() {
    return isset($_SESSION[ERROR_MESSAGE]);
}

function get_error_message() {
    if (has_error()) {
        $errorMessage = $_SESSION[ERROR_MESSAGE];
        unset($_SESSION[ERROR_MESSAGE]);
        return $errorMessage;
    }

    return '';
}