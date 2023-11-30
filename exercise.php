<?php 
echo " <h1> The Students Average </h1> <br>";
echo "<table>
<tr>
    <th> ID</th>
    <th> NAME</th>
    <th> FAMILY</th>
    <th> AVG</th>
    <th> Lowest grade</th>
</tr>";
$students = [
    '100' => [
        'name' => 'reza',
        'family' => 'nazari',
        'lesson' => ['math' => 18,'science' => 7.5,'sport' => 20]
            ],
    '101' => [
        'name' => 'mukhtar',
        'family' => 'nazari',
        'lesson' => ['math' => 16,'science' => 18,'sport' => 12]
            ],
    '102' => [
        'name' => 'mukhtar',
        'family' => 'nazari',
        'lesson' => ['math' => 17,'science' => 16,'sport' => 14]
            ],  
    '103' => [
        'name' => 'mukhtar',
        'family' => 'nazari',
        'lesson' => ['math' => 13,'science' => 15,'sport' => 17.5]
            ],
    '104' => [
        'name' => 'mukhtar',
        'family' => 'nazari',
        'lesson' => ['math' => 10,'science' => 11,'sport' => 20]
            ],
    '105' => [
        'name' => 'mukhtar',
        'family' => 'nazari',
        'lesson' => ['math' => 15,'science' => 18,'sport' => 18]
            ]
]; 

// تابعی برای محاسبه معدل هر دانش آموز
function calculate_average($grades)
{
    $sum = 0;
    $count = 0;
    foreach ($grades as $grade) {
        $sum += $grade;
        $count++;
    }
    $average = $sum / $count;
    return number_format($average, 2);
}

foreach($students as $StudentID => $StudentData){
    echo "<tr>";
    $average = calculate_average($StudentData['lesson']);
    $min_grade = min($StudentData['lesson']);
    echo "<td>"."#"  .$StudentID ."</td> <td>" .$StudentData['name']  ." </td> <td>".$StudentData['family'] ." </td> <td> " . $average ."</td> ". " " . "<td>" . "|" .$min_grade. "</td>"  ;
    echo "</tr>";
}
echo "</table>";