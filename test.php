<?php
    include "DBConnection.php";
    $mycon = new DataBase();
    $con = $mycon->con;
?>


<table border='1' cellspacing=0 id='input-table'>
    <tr title='Subject'>
        <th>Book</th>
        <th>Comminication Skill</th>
        <th>IT</th>
    </tr>
    <tr title='Description'>
        <td><textarea name='descriptionOfBook' cols='25' rows='3' placeholder='Description of book' ></textarea></td>
        <td><textarea name='descriptionOfCS'   cols='25' rows='3' placeholder='Description of CS' ></textarea></td>
        <td><textarea name='descriptionOfIT'   cols='25' rows='3' placeholder='Description of IT' ></textarea></td>
    </tr>
    <tr title='time'>
        <td> Time %<input type='number' min='0' max='100' name='timeOfBook'></td>
        <td> Time %<input type='number' min='0' max='100' name='timeOfCS'  ></td>
        <td> Time %<input type='number' min='0' max='100' name='timeOfIT'  ></td>
    </tr>
    <tr title=''>
        <td> Result %<input type='number' min='0' max='100' name='resultOfBook'></td>
        <td> Result %<input type='number' min='0' max='100' name='resultOfCS'  ></td>
        <td> Result %<input type='number' min='0' max='100' name='resultOfIT'  ></td>
    </tr>
    <tr title=''>
        <td>wasted in : 
            <?php
                 $data = mysqli_query($con,"SELECT `wasted_label` FROM `wasted_labels`");
                while($row = mysqli_fetch_array($data))
                {
                    echo "<input type='checkbox' name='wastedIn-$row[0]' id='wastedIn-$row[0]'> <label for='wastedIn-$row[0]'>$row[0]</label>";
                };
            ?>
        </td>
        <td>wasted in</td>
        <td>wasted in</td>
    </tr>
</table>
