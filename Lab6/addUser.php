<?php

include 'database.php';
$conn = getDatabaseConnection();

    function departmentList()
    {
        global $conn;
        
        $sql = "SELECT * FROM Departments ORDER BY name";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $records;
    }

if(isset($_GET['addUser']))
{
    $sql = "INSERT INTO
                (firstname, lastname, email, phone, role, deptid) 
            VALUES
                (:fName, :lName, :email, :phone, :role, :deptid)";
                
    $np = array();
    $np[':fName'] = $_GET['firstname'];
    $np[':lName'] = $_GET['lastname'];
    $np[':email'] = $_GET['email'];
    $np[':phone'] = $_GET['phone'];
    $np[':role'] = $_GET['role'];
    $np[':deptid'] = $_GET['deptid'];
    
    $stmt=$conn->prepare($sql);
    $stmt->execute($np);
    
    echo "User was added!";
    
}

?>



<!DOCTYPE <!DOCTYPE html>
<html>
    <head>
        <title>Admin: Add new user</title>
    </head>
    <body>
        <h1> Adding New User</h1>
        
        <h1> Tech Checkout System: Adding a New User </h1>
        <form method="POST">
            
            First Name:<input type="text" name="firstName" />
            <br />
            Last Name:<input type="text" name="lastName"/>
            <br/>
            Email: <input type= "email" name ="email"/>
            <br/>
            Phone Number: <input type ="text" name= "phoneNum"/>
            <br />
           Role: 
           <select name="role">
                <option value=""> - Select One - </option>
                <option value="staff">Staff</option>
                <option value="student">Student</option>
                <option value="faculty">Faculty</option>
            </select>
            <br />
            Department: 
            <select name="department">
                <option value="" > Select One </option>
                
                <?php
                
                $departments = departmentList();
                
                foreach ($departments as $department) 
                {
                    echo "<option value='".$department['id']."'> " . $department['name'] . "</option>";
                }
                
                
                ?>
                
            </select>
            <input type="submit" value="Add User" name="addUser">
        </form>
    </body>
</html>