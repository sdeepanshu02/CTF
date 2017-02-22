    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/blog-home.css" rel="stylesheet">
    <link href="css/home_styling.css" rel="stylesheet">

<div id="container">


<div class="row">
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4" style="margin-top:200px; margin-left:100px; width:800px;">

                <!-- Blog Categories Well -->
                <div class="well">
                    <h3>Problems</h3>
                    <hr>
                    <div class="row">
                      <div class="col-lg-6">

                        <div id="web" class="problems">

			                     <div>
                            <ul>
				                     <li><a href"#"><div class="childs" id="question1" onclick="dispopup(this.id)">As Simple as it looks.</div></a></li>
				                     <li><a href"#"><div class="childs" id="question2" onclick="dispopup(this.id)">Dot and Dash.</div></a></li>
				                     <li><a href"#"><div class="childs" id="question3" onclick="dispopup(this.id)">Brainfuck.</div></a></li>
			                     </ul>
                           </div>
		                </div>


	                    <div id="web" class="problems">

		                      <div class="divisions">
			                         <div>
                                <ul>
				                         <li><a href"#"><div class="headsc" id="question4" onclick="dispopup(this.id)">Awesome.</div></a></li>
				                         <li><a href"#"><div class="headsc" id="question5" onclick="dispopup(this.id)">Vacation.</div></a></li>
				                         <li><a href"#"><div class="headsc" id="question6" onclick="dispopup(this.id)">Dumbstruck</div></a></li>
			 	                         <li><a href"#"><div class="headsc" id="question7" onclick="dispopup(this.id)">Drunkard.</div></a></li>
                                </ul>
			                         </div>
		                      </div>
	                    </div>


                        <div id="reverse" class="problems">

		                  <div class="divisions">
			                 <div>
                       <ul>
				               <li><a href"#"><div class="nightm" id="question8" onclick="dispopup(this.id)">This might take a while.</div></a></li>
				               <li><a href"#"><div class="nightm" id="question9" onclick="dispopup(this.id)">Sharks!!</div></a></li>
                       </ul>
			                 </div>
		                  </div>
	                   </div>

               </div>
               <!-- /.col-lg-6 -->
             </div>
             <!-- /.row -->
          </div>
          <!-- /.well -->
       </div>
       <!-- /.col-md-4 -->
     </div>
     <!-- /.row -->
   </div>
   <!-- /.well -->

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4" style=" margin-top:-350px; margin-right:-100px; float:right;">

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Score Card</h4>
                    <div class="row">
                        <div class="col-lg-6" id="time">
                        Points:
                        <?php
                            if(isset($_SESSION['userid'])){
	                            $id = $_SESSION['userid'];
	                            $resultrow = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM users WHERE id='$id'"));
	                            echo $resultrow['points'];
                              echo '<br><br>';
                              echo 'Total Problems Solved : ';
                              echo substr_count($resultrow['solved'], ',');
                              echo '<br><br>';
                              echo 'Last problem solved at : ';
                              echo $resultrow['time'];
                            }
                            else {
	                            echo 'Viewing as guest';
                            }?>

                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Notifications</h4>
                    <p>Important: This event will end at 11:00 PM 18 Feb, 2017.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->
