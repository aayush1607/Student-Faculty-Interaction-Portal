<?php
    $conn=mysqli_connect("localhost","root","","student_management");
    if(!$conn){
        die("Connection Failed!!!");
    }
    else{
    if(isset($_POST['update'])){
        $FName=$_POST['FName'];
        $LName=$_POST['LName'];
        $Regno=$_POST['regno'];
        $DOB=$_POST['DOB'];
        $Email=$_POST['email'];
        $branch=$_POST['branch'];
        $pass=$_POST['password'];
        $sql="UPDATE student_data SET FName='$FName',LName='$LName',DOB='$DOB',Email='$Email',Branch='$branch',Password='$pass' WHERE Regno='$Regno'";
        if(mysqli_query($conn,$sql)){
            echo "Successfully Updated";
        }
        else{
            echo "Update failed!!";
        }
    }
    else if(isset($_POST['updateinternship'])){
        $FName=$_POST['FName'];
        $LName=$_POST['LName'];
        $Regno=$_POST['regno'];
        $DOB=$_POST['DOB'];
        $Email=$_POST['email'];
        $branch=$_POST['branch'];
        $pass=$_POST['password'];
        $sql="UPDATE student_data SET FName='$FName',LName='$LName',DOB='$DOB',Email='$Email',Branch='$branch',Password='$pass' WHERE Regno='$Regno'";
        if(mysqli_query($conn,$sql)){
            echo "Successfully Updated";
        }
        else{
            echo "Update failed!!";
        }

    }
    else if(isset($_POST['updatecontribution'])){
        echo "Update Contribution details!!";
    }
    else if(isset($_POST['updateachievement'])){
        echo "Update Acheivement details!!";
    }
    else if(isset($_POST['updateacademic'])){
        
    $Regno=$_POST['regno'];
        
        
    $sql4="select * from past_courses where Regno='".$Regno."';";
    $res2=mysqli_query($conn,$sql4);
    $pastCourses= array();
    while($row2=mysqli_fetch_assoc($res2)){
        array_push($pastCourses,$row2['Course']);
    }
    //Current Courses...
    $currentCourses=array();
    $sql3="select * from current_courses where Regno='".$Regno."';";
    $res3=mysqli_query($conn,$sql3);
    while($row3=mysqli_fetch_assoc($res3)){
        array_push($currentCourses,$row3['currCourses']);
    }

        $cgpa=$_POST['cgpa'];
        $Sem=$_POST['Sem'];
        $count=$_POST['sk'];
        for($i=0;$i < count($pastCourses); $i++){
            $s1=$_POST["Coursep$i"];
            $sql5="UPDATE past_courses SET Course='$s1' WHERE Regno='$Regno' AND Course='$pastCourses[$i]'";
            mysqli_query($conn,$sql5);
        }
        for($i=0;$i<$count;$i++){
        $s1=$_POST["Course$i"];
 ;
            $sql2="UPDATE current_courses SET currCourses='$s1' WHERE Regno='$Regno' AND currCourses='$currentCourses[$i]'";
            mysqli_query($conn,$sql2);
        }
     
        
        $sql1="UPDATE student_data SET CGPA='$cgpa',Sem='$Sem'WHERE Regno='$Regno'";
      
        mysqli_query($conn,$sql1);
        echo "Successfully Updated";
      
    }
    else if(isset($_POST['updateproject'])){
        $Regno=$_POST['regno'];
        
        
        $sql4="select * from projects where Regno='".$Regno."';";
        $res2=mysqli_query($conn,$sql4);
        $pastCourses= array();
        while($row2=mysqli_fetch_assoc($res2)){
            array_push($pastCourses,$row2['Course']);
        }

    }
    
    else{
        header("location:view.php");
        }
    }


?>