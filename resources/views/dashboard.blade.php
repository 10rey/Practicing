<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap4.css">
  <link rel="stylesheet" href="js/bootstrap4.js">

  <style type="text/css">

  .container-fluid{

    margin: 10px;
   

  }

  .row{

    
    padding: 10px;

  }
    
  </style>

</head>
<body>

  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><center>ONTOWA</center></a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-5">
        <li class="nav-item dropdown">

          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href=""> Logout </a>
         </div>

        </li>
      </ul>
    </nav>

  <div class="container-fluid">

    <div class="row row-grid">

      <div class="col-md-8">

        <h3>Monthly Budget - December 2017</h3> 
        
      </div>

      <div class="col-md-4">

        <label>Starting balance:</label>
        <input type="text" name="startingbalance" value="" readonly>
        
      </div>

    </div>
    
  </div>

  <div class="container">
    <div class="row ">
      <div class="col-md-6">

        <label>START BALANCE</label>
        <input type="text" name="startbalance" value="" readonly><br>
        <label>END BALANCE</label>
        <input type="text" name="endbalance" value=""  readonly>
        
      </div>

      <div class="col-md-6">

        <label>Increased in total savings</label>
        <input type="text" name="savings" value="" readonly><br>
        <label>Saved this month</label>
        <input type="text" name="savedthismonth" value="" readonly>
      </div>
      
    </div>
    
  </div>


  <div class="container">
    <div class="row">
      <div class="col-md-6">

        <h4 class="text-danger">Expenses</h4>

        <label>Planned</label>
        <input type="text" name="planned" value="" readonly><br>
        <label>Actual</label>
        <input type="text" name="actual" value="" readonly>
        
      </div>

      <div class="col-md-6">

        <h4 class="text-danger">Income</h4>

        <label>Planned</label>
        <input type="text" name="planned" value="" readonly><br>
        <label>Actual</label>
        <input type="text" name="actual" value="" readonly>
        
      </div>
      
    </div>
    
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        
        <h3 class="text-important">Expenses</h3>

          <table class="table table-hover">
            <thead>
              <tr>
                <th></th>
                <th>Planned</th>
                <th>Actual</th>
                <th>Diff.</th>
              </tr>
            </thead>
            <tbody>
              <thead>
              <tr>
                <th>Total</th>
                <th>####</th>
                <th>####</th>
                <th>####</th>
              </tr>
            </thead>
              <tr>
                <td>data</td>
                <td>data</td>
                <td>data</td>
                <td>data</td>
              </tr>
            </tbody>
          </table>

      </div>

      <div class="col-md-6">
        
        <h3 class="text-important">Income</h3>

        <table class="table table-hover tabe-striped">
            <thead>
              <tr>
                <th></th>
                <th>Planned</th>
                <th>Actual</th>
                <th>Diff.</th>
              </tr>
            </thead>
            <tbody>
              <thead>
              <tr>
                <th>Total</th>
                <th>####</th>
                <th>####</th>
                <th>####</th>
              </tr>
            </thead>
              <tr>
                <td>data</td>
                <td>data</td>
                <td>data</td>
                <td>data</td>
              </tr>
            </tbody>
          </table>

      </div>
      
    </div>
    
  </div>

</body>
</html>

