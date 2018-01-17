<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="styles/index.css" media="all" />
  <title>Creative Computing Club (Cornell) </title>
</head>

<body>
<div id="one">

  <nav class="nav">
    <a href="#two">ABOUT</a>
    <a href="#three">PROJECTS</a>
    <a href="#four">OFFICERS</a>
    <a href="#five">JOIN</a>
  </nav>

  <div class="title">
    <div class="label">
      <h1> CREATIVE <br/> COMPUTING <br/>
      CLUB </h1>
    </div> <!-- label -->

    <div class="logo">
      <img src="images/ccclogo.png" alt="CCC logo"/>
    </div>
  </div> <!-- title -->

</div> <!-- one -->


<div id="two">
  <h2> WHAT WE DO </h2>

  <p> The Creative Computing Club is focused on helping students work on fun projects
  that involve both creativity and computing. Our projects feature many artistic
  interests ranging from virtual reality and gaming to music, and much more.
  Any student that has an interest in computing and/or the arts is invited to join.</p>

</div> <!-- two -->


<div id="three">
  <h2> OUR PROJECTS </h2>
  <div id="projects">

    <div id="project1" class="project_section">

      <div class="left">
        <img src="images/art.png" alt="Art Piece sign"/>
        <!--https://www.sketchport.com/drawing/5785901472940032/modern-art-2 -->
      </div>

      <div id="pr1description" class="right">
        <h3> Procedural Art Show: </h3>
        <p> In this initiative members explored multiple ways computers can be
          used to generate music as well as visual art that could respond to
          user input and/or  interaction. For the entire semester members of
          this project worked on engaging visual simulations and interactive artwork.
</p>
      </div>
    </div> <!--END OF PROJECT1-->


    <div id="project2" class="project_section">
      <div class="left">
        <img src="images/vr.jpg" alt="Virtual Reality sign"/>
    <!-- http://www.publicdomainpictures.net/hledej.php?hleda=innovation-->
      </div>

      <div id="pr2description" class="right">
        <h3> Big Red Mecha: </h3>
        <p> Big Red Mecha Team is a simulation game created using
          the latest virtual reality technologies. In this fun application players need to
          defend Cornell’s clock tower from an alien invasion, while piloting a gigantic robot bear.
          The initiative was launched in the Fall 2017 and will keep running in the Spring semester.
          By the end of the year, the team will deliver its  full version of the 3d game
          and demonstrate it to all the virtual reality and game fans on campus.
</p>
      </div>
    </div> <!--END OF PROJECT 2-->

    <div id="project3" class="project_section">
      <div class="left">
        <img src="images/bigredsign.png" alt="Virtual Reality sign"/>
    <!--screenshot of the website-->
      </div>

      <div id="pr3description" class="right">
        <h3> Big Red Gifts: </h3>
        <p>
      Last semester one of our teams created a full stack web application for
      campus-wide gift exchange by using Node.js and React frameworks.
      The program considered participants’ personal interests as well as local
       address for successful matching. We deployed the program in late November,
        and multiple students from different years and majors were able to exchange
        their christmas gifts and spread holiday spirit on campus.</p>
      </div>
    </div> <!--END OF PROJECT3-->

  </div> <!--END OF ALL PROJECTS-->

</div> <!-- three -->

<div id="four">
  <h2> OFFICERS </h2>

</div>

<div id="five">
  <h2> JOIN US </h2>
  <p id="join"> Anyone interested in creative and innovative applications of Computer Science
    is welcome to join our club and attend our general body meetings as well as educational
    workshops. Just feel out the form below to stay updated with all the current club events. </p>

    <div id="sign_up">    <!--Need to style it-->
    <form name="myform" action="feedback.php" method="post" id="myform">
      <div>
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" value= "">
      </div>

      <div>
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" value= "">

      </div>

      <div>
          <label for="year">Year:</label>
          <input type="text" id="year" name="year" value= "">
      </div>

      <div>
          <label for="major">Major:</label>
          <input type="text" id="major" name="major" value= "">
      </div>



     <div>
      <button  id="submit" type="submit" name="submit">Respond</button>
    </div>

  </form>
</div>
</div>

<!-- JavaScript-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery.localscroll@2.0.0/jquery.localScroll.min.js"></script>
<script src="scripts/scroll.js"></script>

</body>
</html>
