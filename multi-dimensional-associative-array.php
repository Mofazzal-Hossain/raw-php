<?php

/**
 * 
 * Multi Dimensional Associative Array in PHP
 * 
 */

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

<table cellpadding='8px' cellspacing='0' border='2px' style="width: 600px;">
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
        <?php foreach ($marks as $name => $marks): ?>
            <tr>
                <td><?php echo $name; ?></td>
                <?php foreach ($marks as $result): ?>
                    <td>
                        <?php echo $result; ?>
                    </td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>