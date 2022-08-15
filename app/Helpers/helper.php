<?php


function api_response($success, $errors, $status_code, $status_message, $message, $data): array
{
    $response = array();
    $response['success'] = $success;
    $response['errors'] = $errors;
    $response['status_code'] = $status_code;
    $response['status_message'] = $status_message;
    $response['message'] = $message;
    $response['data'] = $data;

    return $response;
}