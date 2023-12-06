<!DOCTYPE html>
<html>
<head>
    <title>Human Ressources</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
</head>
<?php
    include 'functions.php';
    $selectedTab = isset($_GET['tab']) ? $_GET['tab'] : null;
    $result = getDepartments();
?>
<body>
    <main>
        <div class="tabs">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $isSelected = $selectedTab == $row["DEPARTMENT_NAME"] ? 'class="selected"' : '';
                    echo '<a href="?tab=' . $row["DEPARTMENT_NAME"] . '" ' . $isSelected . '>' . $row["DEPARTMENT_NAME"] . '</a> ';
                }
            }
            ?>
        </div>
        <div class="tab">
            <?php
                if ($selectedTab != null) {
                    echo '<div class="global-info">';
                        $department = getDepartmentDetails($selectedTab);
                        $employeesResult = getDepartmentEmployees($selectedTab);
                        $managerResult = getDepartmentManager($selectedTab);
                        displayData('Department', $department['DEPARTMENT_NAME'], 'h1');
                        displayData('Employees count',$employeesResult->num_rows);
                        echo '<span>Manager: ';
                        if ($managerResult->num_rows > 0) {
                            $detailRow = $managerResult->fetch_assoc();
                            echo $detailRow['FIRST_NAME'] . ' ' . $detailRow['LAST_NAME'] . '</span>';
                        } else {
                            echo "No details available. </span>";
                        }
                        displayData('Region',$department['REGION_NAME']);
                        displayData('Country',$department['COUNTRY_NAME']);
                        displayData('City',$department['CITY']);
                        displayData('Address',$department['STREET_ADDRESS']);
                    echo '</div>';
                    echo '<div class="employees-info">';
                        if ($employeesResult->num_rows > 0) {
                            echo '<strong><h2 class="employee-header"><span>Name</span><span>Salary</span></h2></strong>';
                            while ($row = $employeesResult->fetch_assoc()) {
                                echo '<div class="employee"><span>' . $row["FIRST_NAME"] . ' ' . $row["LAST_NAME"] . '</span><span>' . $row["SALARY"] . '</span></div>';
                            }
                        } else {
                            echo "<h2>No details available. </h2>";
                        }
                    echo '</div>';
                }
            ?>
        </div>
    </main>
</body>
</html>
<?php
    $conn->close();
?>
