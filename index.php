<?php
require_once('Includes/header.php');
?>

<div class="container">
      <div class="d-flex justify-content-center">
        <h2>Welcome To the Student Faculty Interaction Portal</h2>
      </div>

      <div class="row d-flex justify-content-around">
        <div class="card mt-5 m-2 p-3" style="width: 18rem">
          <img
            class="card-img-top"
            src="images/index.png"
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Student</h5>
            <p class="card-text">
              Visiting The Student Route.. Lets You Access your Student Account
              and Lets You Access the Details For The Same
            </p>
            <a href="login.php" class="btn btn-dark"
              >Proceed To Student Login</a
            >
          </div>
        </div>
        <div class="card mt-5 m-2 p-3" style="width: 18rem">
          <img
            class="card-img-top"
            src="images/teacherf.png"
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Faculty</h5>
            <p class="card-text">
              The Teacher route lets you view and admininstratively edit Student
              Profiles
              <br>
              <br>
            </p>
            <a href="./faculty-login.php" class="btn btn-dark"
              >Proceed To Faculty Login</a
            >
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>

<?php

require_once('Includes/footer.php');
?>
