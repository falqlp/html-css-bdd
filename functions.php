<?php
include 'config.php';
function getDepartments() {
    global $conn;
    $sql = "SELECT * FROM departments";
    return $conn->query($sql);
}
function getDepartmentDetails($departmentName) {
    global $conn;
    $sql = "SELECT * FROM departments d
            LEFT JOIN locations l ON d.LOCATION_ID = l.LOCATION_ID
            LEFT JOIN countries c ON l.COUNTRY_ID = c.COUNTRY_ID
            LEFT JOIN regions r ON c.REGION_ID = r.REGION_ID
            WHERE d.DEPARTMENT_NAME = '" . $departmentName . "'";
    return $conn->query($sql)->fetch_assoc();
}
function getDepartmentEmployees($departmentName) {
    global $conn;
    $sql = "SELECT * FROM employees e
            JOIN departments d ON e.DEPARTMENT_ID = d.DEPARTMENT_ID
            WHERE d.DEPARTMENT_NAME = '" . $departmentName . "'";
    return $conn->query($sql);
}
function getDepartmentManager($departmentName) {
    global $conn;
    $sql = "SELECT * FROM employees e
            JOIN departments d ON e.DEPARTMENT_ID = d.DEPARTMENT_ID
            WHERE d.DEPARTMENT_NAME = '" . $departmentName . "'
            AND d.MANAGER_ID = e.EMPLOYEE_ID";
    return $conn->query($sql);
}
function displayData($dataName, $data, $level = 'span') {
    echo '<' . $level . '>' . $dataName . ': ' . $data . '</' . $level . '>';
}
?>
