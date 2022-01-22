
<html>
  <head>
		<title>Hardiyanto Purnomo | Analytical Strategic Business and Data Intellection Enthusiast </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="title" property="og:title" content="Hardiyanto Purnomo Portfolio" />
		<meta name="description" property="og:description" content="This is Hardi's Portofolio. AI-Powered Portofolio." />
		<meta name="image" property="og:image" content="images/thumbnail.jpg" />
		
		<meta property="og:title" content="Hardiyanto Purnomo Portfolio">
		<meta property="og:description" content="This is Hardi's Portofolio. AI-Powered Portofolio. Swift-learner, strong-willed, and Analytical and Strategical Inovative Data and Business Analyst.">
		<meta property="og:image" content="images/thumbnail.jpg">

		<meta name="author" content="Hardiyanto Purnomo" />
		<meta property="og:url" content="https://hardiyanto.github.io/" />
		
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

  </head>
  <body class="is-preload">
    <div id="wrapper">
                
              <article>
                <section>
                <a href="index.php#comment">Show Data</a>
                <br><br>

                <?php
                include 'config.php';
                $a=mysqli_query($conn,"SELECT * FROM college_student WHERE student_id='$_GET[student_id]'");
                $b=mysqli_fetch_array($a,MYSQLI_ASSOC)
                ?>
                <form method="post" action="#">
                  <div class="fields">
                      <div class="field half">
                      Student ID : <input type="text" name="student_id" placeholder="Insert Student ID" value="<?= $b['student_id'] ?>"><br><br>
                      </div>
                      <div class="field half">
                      Name : <input type="text" name="name" placeholder="Insert Name" value="<?= $b['name']; ?>"><br><br>
                      </div>
                      <div class="field half">
                      Majors : <input type="text" name="majors" placeholder="Insert Majors" value="<?= $b['majors']; ?>"><br><br>
                      </div>
                      <div class="field half">
                      Gender : 
                      <select name="gender">
                        <option value="Male" <?php if($b['gender'] == "Male") echo "selected"; ?>>Male</option>
                        <option value="Female" <?php if($b['gender'] == "Female") echo "selected" ; ?>>Female</option>
                      </select><br><br>
                      </div>
                      <div class="field">
                      Comment : <input type="text" name="comment" placeholder="Insert Comment" value="<?= $b['comment']; ?>"><br><br>
                      </div>
                  
                  </div>
                  <center>
                        <ul class="actions-specials">
                          <input type="submit" name="update" value="Update" class="">
                          
                          <input type="reset" name="cancel" value="Cancel">
                        </ul>
                  </center>
                        
                      
                  
                </form>
                <?php
                if(isset($_POST['update']))
                {
                  include 'config.php';
                  $student_id=$_POST['student_id'];
                  $name=$_POST['name'];
                  $majors=$_POST['majors'];
                  $gender=$_POST['gender'];
                  $comment=$_POST['comment'];

                  $sql="UPDATE college_student SET student_id='$student_id',name='$name',majors='$majors',gender='$gender',comment='$comment' WHERE student_id='$_GET[student_id]'";
                  if($conn->query($sql) === false)
                  { // Jika gagal mengupdate data tampilkan pesan dibawah 'Wrong SQL Command'
                    trigger_error('Wrong SQL Command: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
                  }  
                  else 
                  { // Alihkan ke halaman tampil.php jika berhasil
                    echo "<script>alert('Update Success!')</script>";
                    echo "<meta http-equiv=refresh content=\"0; url=index.php\">";
                  }
                }

                ?>   
                </section>
              </article>
				
          
          
          <!-- Footer -->
          <footer id="footer">
						
					</footer>
    
      
    </div>
  </div>



      <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/lazysizes.min.js" async></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.4/mobile-detect.min.js"></script>
  </body>
</html>