<!-- In a company, you are tasked with creating a PHP program to calculate the monthly
payroll for employees. Each employee has a base salary and can receive bonuses based
on performance. You need to use global and local variables to track and calculate
employee salaries.
Problem: Write a PHP program to calculate the monthly salary of employees based on
their base salary and performance bonus. Use global variables to store company-wide
information like the bonus percentage, and local variables to calculate individual
employee salaries.
a. Create a global variable called `$bonusPercentage` and set it to 10%. This
variable represents the bonus percentage for all employees.
b. Write a function called `calculateEmployeeSalary` that takes the following
parameters:
 - `employeeName` (string)
- `baseSalary` (float)
- `performanceScore` (float)
 Inside the `calculateEmployeeSalary` function:
1. Declare a local variable `$bonus` and calculate it as a percentage of the
`baseSalary` based on the global `$bonusPercentage`.
2. Calculate the total `monthlySalary` for the employee as the sum of `baseSalary`
and `$bonus`.
3. Return the `monthlySalary`.
In the main part of the program:
1. Call the `calculateEmployeeSalary` function for three employees with different base
salaries and performance scores.
2. Display the employee's name, base salary, bonus amount, and monthly salary for each
employee.
**Note**: You can assume that the bonus percentage and other company-wide settings will
remain constant for all employees.  -->

<?php
// Global variable for bonus percentage
$bonusPercentage = 0.10; // 10%

function calculateEmployeeSalary($employeeName, $baseSalary, $performanceScore) {
    global $bonusPercentage;

    // Calculate bonus based on performance score
    $bonus = $baseSalary * $bonusPercentage * $performanceScore;

    // Calculate monthly salary
    $monthlySalary = $baseSalary + $bonus;

    return $monthlySalary;
}

// Employee 1
$employeeName1 = "Aayush Dhungel";
$baseSalary1 = 5000.00;
$performanceScore1 = 0.95;
$monthlySalary1 = calculateEmployeeSalary($employeeName1, $baseSalary1, $performanceScore1);

// Employee 2
$employeeName2 = "Yanjal Khanal";
$baseSalary2 = 6500.00;
$performanceScore2 = 1.10;
$monthlySalary2 = calculateEmployeeSalary($employeeName2, $baseSalary2, $performanceScore2);

// Employee 3
$employeeName3 = "Sanjeev Shrestha";
$baseSalary3 = 4800.00;
$performanceScore3 = 0.85;
$monthlySalary3 = calculateEmployeeSalary($employeeName3, $baseSalary3, $performanceScore3);

// Display results
echo "Employee Payroll Report:<br>";

echo "Name: " . $employeeName1 . "<br>";
echo "Base Salary: $" . number_format($baseSalary1, 2) . "<br>";
echo "Bonus: $" . number_format($monthlySalary1 - $baseSalary1, 2) . "<br>";
echo "Monthly Salary: $" . number_format($monthlySalary1, 2) . "<br><br>";

echo "Name: " . $employeeName2 . "<br>";
echo "Base Salary: $" . number_format($baseSalary2, 2) . "<br>";
echo "Bonus: $" . number_format($monthlySalary2 - $baseSalary2, 2) . "<br>";
echo "Monthly Salary: $" . number_format($monthlySalary2, 2) . "<br><br>";

echo "Name: " . $employeeName3 . "<br>";
echo "Base Salary: $" . number_format($baseSalary3, 2) . "<br>";
echo "Bonus: $" . number_format($monthlySalary3 - $baseSalary3, 2) . "<br>";
echo "Monthly Salary: $" . number_format($monthlySalary3, 2) . "<br><br>";
?>