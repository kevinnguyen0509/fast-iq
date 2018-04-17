<!DOCTYPE html>
    <html>
        <head>
            <title>Fast-IQ</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- bootstrap -->
                <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                <link href="css/categorySecond.css" rel="stylesheet" media="screen"> 
			    <!--[if lt IE 9]>
                <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        </head>
        <body>
            <div>
            <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
							<h3>Login</h3>
						</button>
                    </li>
                </ul>
              
                

            </nav>
            </div>
            
            <!--*********************************** THIS IS THE LOGIN MODAL*************************************-->
            
           
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="modal-title" id="exampleModalLabel">Login To Make Changes</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="./login" method="POST">
                            <div class="modal-body">
                                <div class="form-group row">
                                  <label for="example-time-input" class="col-2 col-form-label"><h4>Email</h4></label>
                                  <div class="col-10">
									<div class="input-group input-group-lg">
										<input class="form-control form-control-lg" type="Text" name="username" placeholder="username" id="username" required="true">
									</div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="example-color-input" class="col-2 col-form-label"><h4>Password</h4></label>
                                  <div class="col-10">
									<div class="input-group input-group-lg">
										<input class="form-control" type="password" name="password" placeholder="password" id="password" required="true">
									</div>
                                  </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>
                              <button type="Submit" class="btn btn-primary btn-lg">Login</button>
                            </div> 
                      </form>
                    </div>
                  </div>
                </div>
        <!--*********************************** THIS IS THE LOGIN MODAL*************************************-->
		
        
        <h1 class="display-2 text-center">Student Information</h1>
		<br>
		<br>
		<br>
		
			<div class="row">
                <div class="col-md-1">
                    
                </div>
				<div class="col-md-5 text-center">
                    <h1 class="display-2 text-center">Student Attendance</h1>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Days Missed</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (($students?:[]) as $student): ?>
                            <tr>
                                <th scope="row"><?= ($student['fName']) ?></th>
                                <th><?= ($student['lName']) ?></th>
                                <th><?= ($student['daysMissed']) ?></th>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
				</div>
				<div class="col-md-5 text-center">
                    <h1 class="display-2 text-center">Student Grades</h1>
                    <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">Student</th>
                                <th scope="col">Exercise</th>
                                <th scope="col">Grade</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach (($grades?:[]) as $grade): ?>
                            <tr>
                                <th scope="row"><?= ($grade['fName']) ?> <?= ($grade['lName']) ?></th>
                                <th><?= ($grade['exercise_name']) ?></th>
                                <th><?= ($grade['grade']) ?></th>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
				</div>
                <div class="col-md-1"></div>
			</div>
            
        <br>
			  
            
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>
    </html>