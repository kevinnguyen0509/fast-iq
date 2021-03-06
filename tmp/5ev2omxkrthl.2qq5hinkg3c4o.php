<!DOCTYPE html>
    <html>
        <head>
            <title>Fast-IQ</title>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">


            <style>


/*.hoverImage {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: relative;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.container:hover .hoverImage {
  opacity: 0.3;
}

.container:hover .middle {
  opacity: 1;
}*/

.text
{
	color: white;
	font-size: 16px;
	padding: 16px 32px;
}

p
{
	font-size: medium;
}

input
{
    font-size: medium;
}

li
{
	font-size: medium;
	list-style-type: none;
}
a:hover
{
	text-decoration: none;
	color:white;
}

.panel-primary>.panel-heading {
				background-image: none;
				background-color: #4169E1;
				

}

            </style>
            <!-- bootstrap -->
                <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
				<link href="css/categorystyle.css" rel="stylesheet" media="screen">
				<link href="css/exercise_summary_backend.css" rel="stylesheet" media="screen">
                <!--[if lt IE 9]>
                <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
                <![endif]-->


        </head>
        <body>
            <div>
                <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <a class="nav-link" href="./categoryBackend"><h3>Home</h3></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./exercisesBackend/<?= ($unitID) ?>"><h3>Go Back</h3></a>
                        </li>
                        <li class="nav-item">
                          <a data-toggle="modal" data-target="#signUpModal"><h3>Create New Admin</h3></a>
                        </li>
                    </ul>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        <h3>Logout</h3>
                    </button>
                </nav>
            </div>
  <!--*********************************** THIS IS THE create a new admin MODAL*************************************-->
                <div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create a new admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="container-fluid">
                        <form action="./createAdmin" method="post">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter username">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                          </div>
                          <button type="submit" class="btn btn-primary" id="createdAdminBtn">Create</button>
                        </form>
                      </div>

                    </div>
                  </div>
                </div>
            <!--*********************************** THIS IS LOGOUT THE MODAL*************************************-->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Logout</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="./logout" method="GET">
                            <div class="modal-body">
                                <div class="col-md-12">
                                    <h3>Are you sure you want to logout?</h3>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">No</button>
                              <button type="Submit" class="btn btn-primary btn-lg">Yes</button>
                            </div>
                      </form>
                    </div>
                  </div>
                </div>
        <!--*********************************** THIS IS LOGOUT THE MODAL*************************************-->



	<h1 class="display-2 text-center">
		<strong><a href="./categoryBackend">Category</a> ></strong>
		<strong><a href="./unitsBackend/<?= ($categoryID) ?>"><?= ($categoryName['category_name']) ?></a> ></strong>
		<strong><a href="./exercisesBackend/<?= ($unitID) ?>"><?= ($unitName['unit_name']) ?></a> ></strong>
		<strong><?= ($exercise['exercise_name']) ?></strong>
	</h1>
	<br>
	
	<form action="./editExerciseSummary/<?= ($exerciseID) ?>" id="summary" method="post" class="form-horizontal">
		
	<div class="row">
		<div class="col-sm-1 col-md-1"></div>
		<div class="col-sm-10 col-md-10">
			
		<div class="panel-group" id="accordion">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#TEST_1">
							<h1 id="tabHeading">Exercise Summary</h1>
						</h4>
					</div></a>
					<div id="TEST_1" class="panel-collapse show">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group">
										<textarea rows="8" cols="100" class="col-md-12 form-control"  name="exercise_summary" id="exercise_summary" placeholder="Enter a Summary here" value="<?= ($exercise['exercise_summary']) ?>" style="font-size: 14px"><?= ($exercise['exercise_summary']) ?></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
		
		
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 class="panel-title">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#TEST_2">
							<h1 id="tabHeading">Media</h1>
						</a>
						</h4>
					</div>
					<div id="TEST_2" class="panel-collapse collapse show">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-12">
									<div class="hoverImage">
										<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= ($youtubeEmbededCode) ?>" width="100%" height="460px" allowfullscreen></iframe>
									</div>
									<li id="list-group">
										<div class="video_fields_wrap">
											<button class="add_videos_button btn btn-primary btn-lg">Add More Videos</button>
											<br>
											<br>
											<h3>Video Being Shown</h3>
											<?php foreach (($id_array?:[]) as $index): ?>
												<div class="row dynamic_input"> 
													<div class="col-sm-10">
														<textarea rows="3" cols="50" class="form-control"  name="videoLink[]" id="<?= ($index['id']) ?>" placeholder="Enter a link here" value= "<?= ($index['url']) ?>" style="font-size: 14px"><?= ($index['url']) ?></textarea>
													</div>
													<div class="col-sm-1 text-center">
														<br>
														<a href="#" class="remove_field">
															<span class="text-center remove_icon glyphicon glyphicon-remove aria-hidden="true"></span>
														</a>
													</div>
													<div class="col-sm-1 text-center">
														<br>
														<a href="#" data-toggle="tooltip" title="Press me to set this video in the frame above.">
															<span class="text-center video_icon glyphicon glyphicon-eye-open view_video <?= ($index['id']) ?>" id="<?= ($index['id']) ?>" aria-hidden="true"></span>
														</a>
													</div>
												</div>
												<br>
											<?php endforeach; ?>
										</div>
									</li>
								</div>
							</div>
						</div>
					</div>
				</div>
		
		
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#TEST_3">
								<h1 id="tabHeading">Questions</h1>
							</a>
						</h4>
					</div>
		
					<div id="TEST_3" class="panel-collapse show">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-12">
									<li id="list-group">
										<div class="question_fields_wrap">
											<button class="add_questions_button btn btn-primary btn-lg">Add More Questions</button>
											<br>
											<br>
											<?php foreach (($questions_array?:[]) as $question): ?>
												<div class="row dynamic_input"> 
													<div class="col-sm-11">
														<textarea rows="3" cols="50" class="form-control" name="questions[]" id="questions" placeholder="Enter a question here" value="<?= ($question) ?>" style="font-size: 14px"><?= ($question) ?></textarea>
													</div>
													<div class="col-sm-1 text-center">
														<br>
														<a href="#" class="remove_field">
															<span class="text-center remove_icon glyphicon glyphicon-remove aria-hidden="true"></span>
														</a>
													</div>
												</div>
												<br>
											<?php endforeach; ?>
										</div>
									</li>
								</div>
							</div>
							<br>
						</div>
					</div>
				</div>
		
		
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4 class="panel-title">
						<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#TEST_4">
							<h1 id="tabHeading">Photos</h1>
						</a>
						</h4>
					</div>
					<div id="TEST_4" class="panel-collapse collapse show">
						<div class="panel-body">
							<div class="container">
								<div class="hoverImage">
									<img src="<?= ($exercise['exercise_image']) ?>" class="img-fluid" alt="Responsive image">
								</div>
								<li id="list-group">
									<textarea rows="3" cols="50" class="form-control"  name="imagelink" id="imagelink" placeholder="image link here " value="<?= ($exercise['exsercise_image']) ?>" style="font-size: 14px"><?= ($exercise['exercise_image']) ?></textarea>
								</li>
								<br>
							</div>
						</div>
					</div>
				</div>
			<br>
			
			<br>
			<br>
			<br>
			<br>
			<br>
	
		</div>
			<div class="col-sm-1 col-md-1"></div>
		</div>
		
			<button type="submit" id="submit_button" class="btn btn-primary btn-success btn-lg">
				<span class="glyphicon glyphicon-saved" aria-hidden="true"></span><h5>Save</h5>
			</button>
	</form>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
			
			<script
				src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
				integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
				crossorigin="anonymous"></script>
			
			<script
				src="https://code.jquery.com/jquery-3.3.1.js"
				integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
				crossorigin="anonymous"></script>
			
			<script
				src="https://code.jquery.com/jquery-3.3.1.min.js"
				integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
				crossorigin="anonymous"></script>
			
			<script
				src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
				integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
				crossorigin="anonymous"></script>
			
            <script src="js/bootstrap.min.js"></script>
			<script src="js/addVideo.js"></script>
			<script src="js/addQuestion.js"></script>
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>
    </html>

