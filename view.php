<?php

require_once('Includes/header.php');
require_once('Includes/connection.php');

    if(isset($_SESSION['StudentID']) || $_SESSION['Faculty'])
    {
        $_SESSION['GET']=$GetID=$_GET['success'];
        $sql="select * from student_data where Regno='".$GetID."'";
        $sql2="select * from past_courses where Regno='".$GetID."';";
        $sql3="select * from current_courses where Regno='".$GetID."';";
        $sql4="select * from contributions where Regno='".$GetID."';";
        $sql5="select * from current_courses where Regno='".$GetID."';";
        $sql6="select * from current_courses where Regno='".$GetID."';";
        mysqli_select_db($con,"student_management");
        //ALTER TABLE student_data ADD CGPA VARCHAR(10) NOT NULL AFTER Password;
        //ALTER TABLE student_data ADD Sem INT(10) NOT NULL AFTER CGPA;
        //CREATE TABLE past_courses(Regno varchar(10),Course varchar(100));
        //ALTER TABLE past_courses ADD PRIMARY KEY( Regno, Course);
        //CREATE TABLE current_courses(Regno varchar(10),currCourses varchar(100));
        //ALTER TABLE current_courses ADD PRIMARY KEY( Regno, currCourses);
        $res=mysqli_query($con,$sql);
        $res2=mysqli_query($con,$sql2);
        $res3=mysqli_query($con,$sql3);
        $res4=mysqli_query($con,$sql4);
        while($row=mysqli_fetch_assoc($res))
        {
            $StudentID= $row['Regno'];
            $Image=$row['Img'];
            $FName=$row['FName'];
            $LName=$row['LName'];
            $DOB=$row['DOB'];
            $Branch=$row['Branch'];
            $Email=$row['Email'];
            $Date=$row['Date'];
            $Sem=$row['Sem'];
            $CGPA=$row['CGPA'];

        }
        
        
        

        

    }
    require_once('Includes/footer.php');




?>


<div class="container">

<div class="row">

<div class="col">
    <div class="card bg-dark text-white mt-3">
        <h3 class="text-center py-3">
            Student Details
        </h3>
    </div>
</div>
</div>


    <?php
            if(isset($_SESSION['Faculty']) || $_SESSION['GET']==$_SESSION['StudentID'])
            {
                

            

        ?>
        <div class="row">
        <div class="col-lg-3">
            <div class="card mt-3">
                <div class="card-title bg-primary text-white py-2 rounded-top">
                    <h4 class="text-center "><?php echo $FName." ".$LName?></h4>
                </div>
                <div class="card-body">
                    <img src="images/<?php echo $Image?>" alt="student image" width="200" height="200" class="rounded-circle" >

                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card mt-3">
                <table class="table table-striped">
                    <tr>
                        <th>Registration no:</th>
                        <td><?php echo $StudentID?></td>
                    </tr>
                    <tr>
                        <th>First Name</th>
                        <td><?php echo $FName?></td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td><?php echo $LName?></td>
                    </tr>
                    <tr>
                        <th>Branch</th>
                        <td><?php echo $Branch?></td>
                    </tr>
                    <tr>
                        <th>DOB</th>
                        <td><?php echo $DOB?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $Email?></td>
                    </tr>
                    <tr>
                        <th>Date of Registration</th>
                        <td><?php echo $Date?></td>
                    </tr>

                </table>
                <a href="studentedit.php?edit=<?php echo $StudentID?>" class="btn btn-success btn-sl">Edit</a>
            </div>
        </div>
    <div class="col">        
    <div class="card bg-dark text-white mt-3">
        <h3 class="text-center py-3">
            Academic Details
        </h3>
    </div>
    </div>
        
        <div class="col-lg-12">
            <div class="card mt-3">
                <table class="table table-striped ">
                <tr>
                    <th>Ongoing Semester:</th>
                    <td><?php echo $Sem ?></td>
                </tr>
                <tr>
                    <th>CPGA Scored:</th>
                    <td><?php echo $CGPA?></td>
                </tr>
                <tr>
                    <th>Courses Completed:</th>
                    <td>
                        <?php
                            //print_r($row2);
                            while($row2=mysqli_fetch_assoc($res2)){
                                echo $row2['Course']."<br>";
                            }
                            
                        ?>
                    </td>
                </tr>
                <tr>
                    <th>Current Courses:</th>
                    <td>
                        <?php
                        while($row3=mysqli_fetch_assoc($res3)){
                            echo $row3['currCourses']."<br>";
                        }
                        ?>
                    </td>
                </tr>
                </table>
                <a href="studentacademicedit.php?edit=<?php echo $StudentID?>" class="btn btn-success btn-sl">Edit</a>
            </div>
        </div>



    <div class="col">        
    <div class="card bg-dark text-white mt-3">
        <h3 class="text-center py-3">
                  Contributions
        </h3>
    </div>
    </div>

        
        <div class="col-lg-12">
            <div class="card mt-3">
                <?php
                $c=0;
                $res4=true;
                if(!$res4){
                    echo "
                    <div class=\"ml-5\">
                    0 CONTRIBUTIONS!
                    </div>";
                }
                else{

                    //while($row4=mysqli_fetch_assoc($res4)){

                        $c++;
                                             
                    echo "<table class=\"table table-striped \">
                    <tr>
                        <th>Contribution no:</th>
                        <td>".$c."</td>
                    </tr>
                    <tr>
                        <th>Organization name:</th>
                        <td>"."Mozilla Firefox"."</td>
                    </tr>
                    <tr>
    
                        <th>Inside/Outside Vit:</th>
                        <td>"."Inside Vit"."</td>
    
                     
                    </tr>
                    <tr>
                        <th>Role:</th>
                        <td>"."Web Developer"."</td>
                    </tr>
                    </table>";
                    //}

                }
                

               ?>
            </div>
            <div class="card mt-3 mb-5">
            <a href="studentcontributionedit.php?edit=<?php echo $StudentID?>" class="btn btn-success btn-sl">Edit Contributions</a>
            </div>
        </div>

  

    
    <div class="col">        
    <div class="card bg-dark text-white mt-3">
        <h3 class="text-center py-3">
                  Achievements
        </h3>
    </div>
    </div>

    <div class="col-lg-12">
            <div class="card mt-3">
            <?php
            $c=0;
            $res5=true;
            if(!$res5){
                echo "
                <div class=\"ml-5\">
                0 Achievements!
                </div>";
            }
            else{
                //while($row5=mysqli_fetch_assoc($res5)){
             
                $c++;                            
                echo "<table class=\"table table-striped \">
                <tr>
                    <th>Achievement no::</th>
                    <td>".$c."</td>
                </tr>
                <tr>
                    <th>Type:</th>
                    <td>"."Award"."</td>
                </tr>
                <tr>

                    <th>Description:</th>
                    <td>"."Excellent Performance"."</td>

                 
                </tr>
                <tr>
                    <th>Year:</th>
                    <td>"."2019"."</td>
                </tr>
                </table>";
                //}

            }

               ?>
            </div>
            <div class="card mt-3 mb-5">
            <a href="studentachievementedit.php?edit=<?php echo $StudentID?>" class="btn btn-success btn-sl">Edit Achievements</a>
            </div>
        </div>

    <div class="col">        
    <div class="card bg-dark text-white mt-3">
        <h3 class="text-center py-3">
                  Projects
        </h3>
    </div>
    </div>

    <div class="col-lg-12">
            <div class="card mt-3">
            <?php
            $c=0;
            $res6=true;
            if(!$res6){
                echo "
                <div class=\"ml-5\">
                0 Projects!
                </div>";
            }
            else{
                //while($row6=mysqli_fetch_assoc($res6)){
             
                                         
                echo "<table class=\"table table-striped \">
                <tr>
                    <th>Title:</th>
                    <td>"."Student Teacher Interaction Portal"."</td>
                </tr>
                <tr>
                    <th>Description:</th>
                    <td>"."Easy to interact"."</td>
                </tr>
                <tr>

                    <th>Technologies Involved:</th>
                        
                    <td>"."PhP Apache-Server MySql"."</td>
                            
                      
 

                 
                </tr>
                <tr>
                    <th>Github/Demo Link:</th>
                    <td>"."<a href=\"www.github.com\">www.github.com</a>"."</td>
                </tr>
                </table>";
                //}

            }

               ?>

            </div>
            <div class="card mt-3 mb-5">
            <a href="studentprojectedit.php?edit=<?php echo $StudentID?>" class="btn btn-success btn-sl">Edit Projects</a>
            </div>
        </div>


    <div class="col">  
    <div class="card bg-dark text-white mt-3">
        <h3 class="text-center py-3">
                  Internships
        </h3>
    </div>
    </div>

    <div class="col-lg-12">
            <div class="card mt-3">
            <?php
            $c=0;
            $res7=true;
            if(!$res7){
                echo "
                <div class=\"ml-5\">
                0 Projects!
                </div>";
            }
            else{
                //while($row7=mysqli_fetch_assoc($res7)){
             
                $c++;                          
                echo "<table class=\"table table-striped \">
                <tr>
                    <th>Sr no:</th>
                    <td>".$c."</td>
                </tr>
                <tr>
                    <th>Company Name:</th>
                    <td>"."Samsung"."</td>
                </tr>
                <tr>

                    <th>Position/Role:</th>
                        
                    <td>"."Software Engineer"."</td>
                            
                      
 

                 
                </tr>
                
                </table>";
                }

            //}

               ?>
               
            </div>
            <div class="card mt-3 mb-5">
            <a href="studentinternshipsedit.php?edit=<?php echo $StudentID?>" class="btn btn-success btn-sl">Edit Internships</a>
            </div>
        </div>


        
    <div class="col">  
    <div class="card bg-dark text-white mt-3">
        <h3 class="text-center py-3">
                  LOR
        </h3>
    </div>
    </div>
    
    <div class="col-lg-12 mb-5">
            <div class="card mt-3">
                <a href="studentlor.php?edit=<?php echo $StudentID?>" class="btn btn-secondary ">Letter of Recommendation</a>
            </div>
        </div>


    </div>


<?php
}
else{

    $msg="Permission Denied";

    echo '<div class="alert alert-danger text-center"><img src="images/pdenied.png" alt="X "> '.$msg.'</div> ';

}


?>

</div>