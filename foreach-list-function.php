<?php

/**
 * 
 * List function  in PHP
 * 
 */

//  Initialize an array
$employees = [
    [1, 'Mofazzal', 'Developer', 20, 15000],
    [2, 'Khan', 'UI/UX', 24, 25000],
    [3, 'Kamal', 'HR', 30, 40000],
    [4, 'Nipu', 'Project Manager', 45, 250000],
    [5, 'Rajon', 'CEO', 60, 360000]
];

?>

<table cellpadding='8px' cellspacing='0' border='2px' style="width: 600px">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Designation</th>
            <th>Age</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tbody style="text-align: center;">
        <!-- Using list function -->
        <?php foreach ($employees as list($id, $name, $designation, $age, $salary)): ?>
            <tr>
                <td><?php echo $id ?></td>
                <td><?php echo $name ?></td>
                <td><?php echo $designation ?></td>
                <td><?php echo $age ?></td>
                <td><?php echo $salary ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php

// Initialize an array
$marks = [
    "Rajon" => [
        'math' => 80,
        'chemistry' => 90,
        'physics' => 50,
        'english' => 40
    ],
    "Riyad" => [
        'math' => 50,
        'chemistry' => 80,
        'physics' => 60,
        'english' => 70
    ],
    "Mofazzal" => [
        'math' => 66,
        'chemistry' => 75,
        'physics' => 58,
        'english' => 68
    ],
];

?>

<table cellpadding='8px' cellspacing='0' border='2px' style="width: 600px; margin-top: 30px">
    <thead>
        <tr>
            <th>Name</th>
            <th>Math</th>
            <th>Chemistry</th>
            <th>Physics</th>
            <th>English</th>
        </tr>
    </thead>
    <tbody style="text-align: center;">
        <!-- Using foreach -->
        <?php foreach ($marks as $name => $subjects):?>
            <!-- Using list function -->
            <?php list($math,$chemistry,$physics,$english) = array_values($subjects); ?>
            <tr>
                <td><?php echo $name ?></td>
                <td><?php echo $math ?></td>
                <td><?php echo $chemistry ?></td>
                <td><?php echo $physics ?></td>
                <td><?php echo $english ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>