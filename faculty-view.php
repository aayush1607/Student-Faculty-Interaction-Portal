<?php
    require_once('Includes/header.php');
    require_once('Includes/connection.php');
    if(isset($_GET['saccess']))
    {
        echo '<div class="alert alert-danger text-center"><img src="images/pdenied.png" alt="X ">'."Please Logout first from this faculty account".'</div>';
    }
    if(isset($_SESSION['Faculty']))
    {

        $sql="select * from student_data";
        mysqli_select_db($con,"student_management");

        $res=mysqli_query($con,$sql);
    }
    else{
        header("location:faculty-login.php?naccess");
    }
    ?>

    <div class="container" ng-app="app" ng-controller="search">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js"></script>
    
        <div class="row">
            <div class="col">
                <div class="card bg-dark text-white mt-5">
                    <h3 class="text-center py-3">Student Details</h3>

                </div>
            
            </div>
        
        </div>

        <div class="row">
            <div class="col">

                <div class="card">
                    <div class="card-title">

                    </div>

                <div class="card-body">
                    <table class="table table-striped" >


                        <tr>
                        <div class="form-inline mb-3">
                        <input type="text" placeholder="Search name or regno. " class="form-control"  ng-model="Searchtext" >
                        </div>
                        <!--<form action="search.php" method="POST">
                            <div class="form-inline mb-3">
                                <input type="text" placeholder="Search" class="form-control">
                                <button class="btn btn-success">Search</button>
                            </div>
                        </form>-->
                        </tr>
                        <tr class="bg-success text-white">
                            <td>Regno</td>
                            <td>Name</td>
                            <td>Branch</td>
                            <td>Email</td>
                            <td colspan="6">Operation</td>
                        </tr>
                    <script>
                       var arrobj=[];
                       var a=angular.module("app",[]);
                       
                       a.controller("search",function($scope){
                       

                    <?php 
                    
                    while($row=mysqli_fetch_assoc($res))
                    {
                        $StudentID= $row['Regno'];
                        $FName=$row['FName'];
                        $LName=$row['LName'];
                        $Branch=$row['Branch'];
                        $Email=$row['Email'];
                    

 
                    ?>
                    
                       
                       
                       
                   
                    arrobj.push({Reg:"<?php echo $StudentID?>",name:"<?php echo $FName.' '.$LName?>",branch:"<?php echo $Branch?>",email:"<?php echo $Email?>"});
                       
                    
                    $scope.arrobj=arrobj;

                    
                    
                
                <?php
                }
                ?>
                 $scope.SearchByNameAndReg=function(field){
                        if($scope.Searchtext==undefined){
                              return true;
                        }
                        else{
                             if(field.name.toLowerCase().indexOf($scope.Searchtext.toLowerCase()) != -1 || field.Reg.toLowerCase().indexOf($scope.Searchtext.toLowerCase()) != -1){
                                  return true;
                            }
                        return false;
                        }
                   
                        }
                
                });
                </script>
                
                    <tr ng-repeat="i in arrobj | filter: SearchByNameAndReg">
                        
                     
                    
                        
                        <td>{{i.Reg}}</td>
                        <td>{{i.name}}</td>
                        <td>{{i.branch}}</td>
                        <td>{{i.email}}</td>
                        <td><a href="view.php?success={{i.Reg}}" class="btn btn-success btn-sm">View</a></td> 
                              
                       
                        
                    </tr>
                   
                    
                
                                
                
                
                
                    
                    </table>
                </div>

            </div>
                
        </div>
    </div>
</div>



<?php   require_once('Includes/footer.php');

   


?>