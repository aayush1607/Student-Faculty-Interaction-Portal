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
        echo "Update Internship details!!";

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
        if(isset($_POST['newCourse'])){
        $curr=$_POST['newCourse'];
        }
        else{
            $curr=FALSE;
        }
        if(isset($_POST['oldCourse'])){
        $past=$_POST['oldCourse'];
        }
        else{
            $past=FALSE;
        }
        if($curr){
        //echo "$curr<br>";
        if(null !== array_search($curr,$pastCourses) || null !==  array_search($curr,$currentCourses) ){
            header("location:studentacademicedit.php?invalidC=$Regno");
            exit();
        }
        $sql12="Insert into current_courses (Regno,currCourses) values ('$Regno','$curr')";
        mysqli_query($conn,$sql12);
        }
        if($past){
        //echo "$past<br>";
        if(null !== array_search($past,$pastCourses) || null !== array_search($past,$currentCourses) ){
            header("location:studentacademicedit.php?invalidC=$Regno");
            exit();
        }
        $sql11="Insert into past_courses (Regno,Course) values ('$Regno','$past')";
        
        mysqli_query($conn,$sql11);
        }

        echo "Successfully Updated";
      
    }
    else if(isset($_POST['updateproject'])){
        $Regno=$_POST['regno'];
        //$ID=$_POST['id'];
        $count=$_POST['count'];
        $cond=$_POST['cout'];
        //echo $count;
        //echo $cond;
        //echo $Regno;
        for($i=0;$i<$count;$i++){
            $ID=$_POST["id$i"];
            $title=$_POST["title$i"];
            $desc=$_POST["desc$i"];
            $tech=$_POST["tech$i"];
            $link=$_POST["link$i"];
            //echo "$ID <br>$title<br> $desc<br> $tech<br> $link<br><br><br>";
        
            $sql="UPDATE projects SET Title='$title',Description='$desc',Technologies='$tech', Link='$link' WHERE Regno='$Regno' AND ID='$ID'";
            mysqli_query($conn,$sql);
        }
       
        if($cond=="Yes"){
           
            $i=$count;
            $ID=$i+1;
            $title=$_POST["title$i"];
            $desc=$_POST["desc$i"];
            $tech=$_POST["tech$i"];
            $link=$_POST["link$i"];
            //echo"$title $desc $ID $Regno $tech $link";
            $sql6="Insert into projects (ID,Regno,Title,Description,Technologies,Link) values ('$ID','$Regno','$title','$desc','$tech','$link')";
            mysqli_query($conn,$sql6);
            
            
        }

        
        echo "Update Sucessful";

    }
    
    else{
        header("location:view.php");
        }
    }


?>