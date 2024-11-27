<?php

/**
 * 
 * Multi Dimensional Array in PHP
 * 
 */

$employees = [
    [1, 'Mofazzal', 'Developer', 20, 15000],
    [2, 'Khan', 'UI/UX', 24, 25000],
    [3, 'Kamal', 'HR', 30, 40000],
    [4, 'Nipu', 'Project Manager', 45, 250000],
    [5, 'Rajon', 'CEO', 60, 360000]
];

?>

<table cellpadding='8px' cellspacing='0' border='2px'>
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Age</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($employees as $employee_list): ?> 
            <tr>
                <?php foreach ($employee_list as $employee): ?>
                    <td>
                        <?php echo $employee; ?>
                    </td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
