<?php 
echo " <h1> The Students Average </h1> <br>";
echo "<table>

 <tr>
    <th> ID</th>
    <th> NAME</th>
    <th> FAMILY</th>
    <th> AVG</th>
</tr>

 ";


$students = [
    '100' => [
        'name' => 'reza',
        'family' => 'nazari',
        'lesson' => [
            'math' => 18,
            'science' => 16,
            'sport' => 20
                    ]
    ],
    '101' => [
        'name' => 'mukhtar',
        'family' => 'nazari',
        'lesson' => [
            'math' => 16,
            'science' => 18,
            'sport' => 18
                    ]
        ],
    '102' => [
            'name' => 'mukhtar',
            'family' => 'nazari',
            'lesson' => [
                'math' => 16,
                'science' => 18,
                'sport' => 18
                       ]
            ],  
     '103' => [
                'name' => 'mukhtar',
                'family' => 'nazari',
                'lesson' => [
                    'math' => 16,
                    'science' => 18,
                    'sport' => 18
                            ]
              ],
     '104' => [
                    'name' => 'mukhtar',
                    'family' => 'nazari',
                    'lesson' => [
                        'math' => 16,
                        'science' => 18,
                        'sport' => 18
                                ]
              ],
     '105' => [
                        'name' => 'mukhtar',
                        'family' => 'nazari',
                        'lesson' => [
                            'math' => 16,
                            'science' => 18,
                            'sport' => 18
                                    ]
               ]
];
  

      
      

   foreach($students as $StudentID => $StudentData)
   {
       
   
    echo "<tr>";
       $TotalScore = array_sum($StudentData['lesson']);
       $NumberOfCourses = count($StudentData['lesson']);
       $AvarageSt = $TotalScore/$NumberOfCourses;
       echo "<td>"."#"  .$StudentID ."</td> <td>" .$StudentData['name']  ." </td> <td>".$StudentData['family'] ." </td> <td> " . $AvarageSt ."  </td> " ;
    echo "</tr>";
   }


   echo "</table>";
   
?>