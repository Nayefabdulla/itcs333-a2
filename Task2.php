<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Nationalities Data</title>
    <link rel="stylesheet" href="https://unpkg.com/picocss/pico.min.css">
    <style>
        table {
            width: 100%;
            overflow-x: auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h1>Student Nationalities Data (IT Colleges with Bachelor Programs)</h1>

    <table>
        <thead>
            <tr>
                <th>Year</th>
                <th>Semester</th>
                <th>College</th>
                <th>Program</th>
                <th>Nationality</th>
                <th>Number of Students</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($data['records']) && !empty($data['records'])) {
                foreach ($data['records'] as $record) {
                    echo '<tr>';
                    echo '<td>' . htmlspecialchars($record['fields']['year']) . '</td>';
                    echo '<td>' . htmlspecialchars($record['fields']['semester']) . '</td>';
                    echo '<td>' . htmlspecialchars($record['fields']['colleges']) . '</td>';
                    echo '<td>' . htmlspecialchars($record['fields']['the_programs']) . '</td>';
                    echo '<td>' . htmlspecialchars($record['fields']['nationalities']) . '</td>';
                    echo '<td>' . htmlspecialchars($record['fields']['number_of_students']) . '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="6">No data available.</td></tr>';
            }
            ?>
        </tbody>
    </table>

</body>
</html>
