<?php
// 1. Using IF...ELSE statement, write a code that check if given string is more than 5 characters. (5pts)
    echo 'ACTIVITY 1 <br>';
        $word1 = 'class';
        $word2 = 'kodego';
        $word3 = 'top';

        if(strlen($word1) > 5){
            echo 'word 1 is more than 5 characters'.'<br>';
        }else{
            echo 'word 1 is less than 5 characters'.'<br>';
        }

        if(strlen($word2) > 5){
            echo 'word 2 is more than 5 characters'.'<br>';
        }else{
            echo 'word 2 is less than 5 characters'.'<br>';
        }

        if(strlen($word3) > 5){
            echo 'word 3 is more than 5 characters'.'<br>';
        }else{
            echo 'word 3 is less than 5 characters'.'<br>';
        }

 // 2. There are two deals of an item to buy. The quantities and prices of the item are given below. Write a program in PHP to find the best deal to purchase the item. (5pts)
    echo 'ACTIVITY 2 <br>';    
        $quantity1 = 70;
        $quantity2 = 100;
        $price1 = 35;
        $price2 = 30;

        $totalCost1 = $quantity1 * $price1;
        $totalCost2 = $quantity2 * $price2;

        if($totalCost1 < $totalCost2){
            echo "Item 1 is the best deal to purchase";
        }else{
            echo "Item 2 is the best deal to purchase";
        }

// 3. Using SWITCH CASE statement, write a code that determine the number of days in a given month. Return "invalid" if the operator is invalid. (10pts)
    echo 'ACTIVITY 3 <br>';
        $monthName = 'March';

        switch($monthName){
            case "January":
                $days = 31;
            break;

            case "February":
                $days = 28;
            break;

            case "March":
                $days = 31;
            break;

            case "April":
                $days = 30;
            break;

            case "May":
                $days = 31;
            break;

            case "June":
                $days = 30;
            break;

            case "July":
                $days = 31;
            break;

            case "August":
                $days = 31;
            break;

            case "September":
                $days = 30;
            break;

            case "October":
                $days = 31;
            break;

            case "November":
                $days = 30;
            break;

            case "December":
                $days = 31;
            break;
            
            default:
                $days = 'invalid';
            break;
        }

        if($days == 'invalid'){
            echo "Invalid";
        }else{
            echo "$monthName has $days days.";
        }
        
// 4. Write a program to loop over the given JSON data. Display the values via loops or recursion. (10pts)
    echo 'ACTIVITY 4 <br>';
        $students =  '[
            {
                "name" : "John Garg",
                "age"  : "15",
                "school" : "Ahlcon Public school"
            },
            {
                "name" : "Smith Soy",
                "age"  : "16",
                "school" : "St. Marie school"
            },
            {
                "name" : "Charle Rena",
                "age"  : "16",
                "school" : "St. Columba school"
            }
        ]';

        $studentArr = json_decode($students,true);

        forEach($studentArr as $student){
            echo "Name: ".$student['name'].'<br>';
            echo "Age: ".$student['age'].'<br>';
            echo "School: ".$student['school'].'<br>';
            echo '<br>';
        }

// 5. Write a division table program using the for loop. (10pts)
    echo '<br> ACTIVITY 5 <br>';
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th></th>";

            for ($column = 1; $column <= 10; $column++) {
                echo "<th>$column</th>";
            }

        echo "</tr>";

            for ($row = 1; $row <= 10; $row++) {
                echo "<tr>";
                echo "<th>$row</th>";

                for ($column = 1; $column <= 10; $column++) {
                    $result = $row / $column;
                    echo "<td>$result</td>";
                }

                echo "</tr>";
            }

        echo "</table>";
?>