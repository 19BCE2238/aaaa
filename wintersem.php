<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">   
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      
      
    </div>
    <ul class="nav-links">
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Semester</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <form action="fallsem.php">
            <label style="color: white" for="marks">choose a semester</label>
            <select id="marks" name="marks">
              <option value="fallsem">fallsem</option>
            </select>
            <input type="submit">
          </form>
          <form action="wintersem.php">
            <label style="color: white" for="marks">choose a semester</label>
            <select id="marks" name="marks">
              <option value="wintersem">wintersem</option>
            </select>
            <input type="submit">
          </form>
          <form action="summersem.php">
            <label style="color: white" for="marks">choose a semester</label>
            <select id="marks" name="marks">
              <option value="summersem">summersem</option>
            </select>
            <input type="submit">
          </form>
        </ul>
    </li>
      
      <i class='bx bx-log-out' ></i>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text">Vit University</span>
    </div>
    <div id="main1" class="coursedetails">
	<center>
		<?php
		$conn = mysqli_connect("localhost", "root", "root", "iwpda5");
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		?>
	<h2 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">wintersem details</h2></html>

<table border="2">
  <tr>
    
    <td style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Course</td>
	<td style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Course code</td>
	<td style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Cat1</td>
	<td style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Cat2</td>
	<td style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Da1</td>
	<td style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Da2</td>
	<td style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Quiz</td>
	<td style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Fat</td>
	<td style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">total marks</td>
  </tr>
  <?php
$records = mysqli_query($conn,"select * from wintersem");

while($data = mysqli_fetch_array($records))
{
?>
  <tr>    
   
    <td style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"><?php echo $data['course']; ?></td>
	<td style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"><?php echo $data['coursecode']; ?></td>
	<td style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"><?php echo $data['cat1']; ?></td>
	<td style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"><?php echo $data['cat2']; ?></td>
	<td style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"><?php echo $data['da1']; ?></td>
	<td style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"><?php echo $data['da2']; ?></td>
	<td style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"><?php echo $data['quiz']; ?></td>
	<td style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"><?php echo $data['fat']; ?></td>
	<td style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif"><?php echo $data['total_marks']; ?></td>

  </tr>	
<?php
}
?>
</table>
<?php 
mysqli_close($conn); // Close connection 
?>
		
	</center>

           
              
    </div>
  </section>
  <script>
  let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
   let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
   arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>
  <style>
      /* Google Fonts Import Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.coursedetails{
    position:relative;
    top: 30%;
    left: 1s%;
}
.sidebar{
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 260px;
  background: #11101d;
  z-index: 100;
  transition: all 0.5s ease;
}
.sidebar.close{
  width: 78px;
}
.sidebar .logo-details{
  height: 60px;
  width: 100%;
  display: flex;
  align-items: center;
}
.sidebar .logo-details i{
  font-size: 30px;
  color: #fff;
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
}
.sidebar .logo-details .logo_name{
  font-size: 22px;
  color: #fff;
  font-weight: 600;
  transition: 0.3s ease;
  transition-delay: 0.1s;
}
.sidebar.close .logo-details .logo_name{
  transition-delay: 0s;
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links{
  height: 100%;
  padding: 30px 0 150px 0;
  overflow: auto;
}
.sidebar.close .nav-links{
  overflow: visible;
}
.sidebar .nav-links::-webkit-scrollbar{
  display: none;
}
.sidebar .nav-links li{
  position: relative;
  list-style: none;
  transition: all 0.4s ease;
}
.sidebar .nav-links li:hover{
  background: #1d1b31;
}
.sidebar .nav-links li .iocn-link{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.sidebar.close .nav-links li .iocn-link{
  display: block
}
.sidebar .nav-links li i{
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
  color: #fff;
  font-size: 20px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.sidebar .nav-links li.showMenu i.arrow{
  transform: rotate(-180deg);
}
.sidebar.close .nav-links i.arrow{
  display: none;
}
.sidebar .nav-links li a{
  display: flex;
  align-items: center;
  text-decoration: none;
}
.sidebar .nav-links li a .link_name{
  font-size: 18px;
  font-weight: 400;
  color: #fff;
  transition: all 0.4s ease;
}
.sidebar.close .nav-links li a .link_name{
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links li .sub-menu{
  padding: 6px 6px 14px 80px;
  margin-top: -10px;
  background: #1d1b31;
  display: none;
}
.sidebar .nav-links li.showMenu .sub-menu{
  display: block;
}
.sidebar .nav-links li .sub-menu a{
  color: #fff;
  font-size: 15px;
  padding: 5px 0;
  white-space: nowrap;
  opacity: 0.6;
  transition: all 0.3s ease;
}
.sidebar .nav-links li .sub-menu a:hover{
  opacity: 1;
}
.sidebar.close .nav-links li .sub-menu{
  position: absolute;
  left: 100%;
  top: -10px;
  margin-top: 0;
  padding: 10px 20px;
  border-radius: 0 6px 6px 0;
  opacity: 0;
  display: block;
  pointer-events: none;
  transition: 0s;
}
.sidebar.close .nav-links li:hover .sub-menu{
  top: 0;
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
}
.sidebar .nav-links li .sub-menu .link_name{
  display: none;
}
.sidebar.close .nav-links li .sub-menu .link_name{
  font-size: 18px;
  opacity: 1;
  display: block;
}
.sidebar .nav-links li .sub-menu.blank{
  opacity: 1;
  pointer-events: auto;
  padding: 3px 20px 6px 16px;
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links li:hover .sub-menu.blank{
  top: 50%;
  transform: translateY(-50%);
}
.sidebar .profile-details{
  position: fixed;
  bottom: 0;
  width: 260px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #1d1b31;
  padding: 12px 0;
  transition: all 0.5s ease;
}
.sidebar.close .profile-details{
  background: none;
}
.sidebar.close .profile-details{
  width: 78px;
}
.sidebar .profile-details .profile-content{
  display: flex;
  align-items: center;
}
.sidebar .profile-details img{
  height: 52px;
  width: 52px;
  object-fit: cover;
  border-radius: 16px;
  margin: 0 14px 0 12px;
  background: #1d1b31;
  transition: all 0.5s ease;
}
.sidebar.close .profile-details img{
  padding: 10px;
}
.sidebar .profile-details .profile_name,
.sidebar .profile-details .job{
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  white-space: nowrap;
}
.sidebar.close .profile-details i,
.sidebar.close .profile-details .profile_name,
.sidebar.close .profile-details .job{
  display: none;
}
.sidebar .profile-details .job{
  font-size: 12px;
}
.home-section{
  position: relative;
  background: #E4E9F7;
  top: 30%;
  height: 100vh;
  left: 260px;
  width: calc(100% - 260px);
  transition: all 0.5s ease;
}
.sidebar.close ~ .home-section{
  left: 78px;
  width: calc(100% - 78px);
}
.home-section .home-content{
  height: 60px;
  display: flex;
  align-items: center;
}
.home-section .home-content .bx-menu,
.home-section .home-content .text{
  color: #11101d;
  font-size: 35px;
}
.home-section .home-content .bx-menu{
  margin: 0 15px;
  cursor: pointer;
}
.home-section .home-content .text{
  font-size: 26px;
  font-weight: 600;
}
@media (max-width: 420px) {
  .sidebar.close .nav-links li .sub-menu{
    display: none;
  }
}

  </style>
</body>
</html>