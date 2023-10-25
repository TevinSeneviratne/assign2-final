
<!--
filename: lab05
author: Mihin Premarathne
created: 2023/09/03
last modified: 2023/09/05
description: COS100026 Assign.html
-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- other meta stuff -->
        <link href="styles.css" rel="stylesheet">
        <meta charset="utf-8" />
        <meta name="description" content="Assignment 01" />
        <meta name="keywords" content="HTML5, tags" />
        <meta name="author" content="Mihin Premarathne"  />
        <title>Code Crafters</title>
        <!--link to css files-->
        <link href="Styles/style.css" rel="stylesheet"/>
      </head>
      
      <body>
      <header>
          <nav>
              <img src="images/logo.png" alt="Logo">
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="jobs.php">Jobs</a></li>
                <li><a href="enhancements.php">Enhancements</a></li>
                <li><a class="active" href="apply.php">Apply</a></li>
                <li><a href="mailto:104315180@student.swin.edu.au">Email</a></li>
			</ul>
          </nav>
      </header>
      
      <!-- Add the canvas container for the animation -->
      <div class="canvas-container">
          <canvas id="animationCanvas"></canvas>
          <section class="about-us">
              <!-- "About Us" text will be animated inside the Canvas -->
              <h2 id="animated-text">About Us</h2>
          </section>
      </div>
      <br>
      <dl id="dlabout">
          <dt id="dtabout">Group Name:</dt>
          <dd id="ddabout">Code Crafters</dd>
              
          <dt id="dtabout">Group ID:</dt>
          <dd id="ddabout">01</dd>
              
          <dt id="dtabout">Tutor's Name:</dt>
          <dd id="ddabout">Kaibin Wang</dd>
              
          <dt id="dtabout">Course:</dt>
          <dd id="ddabout">COS10026</dd>
      </dl>
      
      
      
      
      <br>
      <hr>
      
          <section>
              <br>
              <figure id="mihin">
                  <img src="images/PIC1.jpg" alt="Mihin"><br>
              </figure>
              
              <h3><a href="mailto:104361248@student.swn.edu.au" id="email">Mihin Premarathne</a></h3>
      
      
              <table>
                  <caption>Mihin's Timetable</caption>
                  <thead>
                      <tr>
                          <td class="theading"></td>
                          <th class="theading">Monday</th>
                          <th class="theading">Tuesday</th>
                          <th class="theading">Wednesday</th>
                          <th class="theading">Thursday</th>
                          <th class="theading">Friday</th>
                          <th class="theading">Saturday</th>
                          <th class="theading">Sunday</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <th class="theading2">8:00-8:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">8:30-9:00</th>
                          <td> - </td>
                          <td rowspan="4" class="programming" > COS10009 <br> Introduction to programming <br> Lecture </td>
                      </tr>
                      <tr>
                          <th class="theading2">9:00-9:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">9:30-10:00</th>
                          <td rowspan="2" class="inquiryproject">COS10026 <br> Computing Technology <br> Inquiry Project <br> (Lecture) </td>
                      </tr>
                      <tr>
                          <th class="theading2">10:00-10:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">10:30-11:00</th>
                          <td></td>
                          <td></td>
                          <td rowspan="4" class="inquiryproject">COS10026 <br> Computing Technology <br> Inquiry Project <br> (Workshop)</td>
                      </tr>
                      <tr>
                          <th class="theading2">11:00-11:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">11:30-12:00</th>
                      </tr>
                      <tr>
                          <th class="theading2">12:00-12:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">12:30-13:00</th>
                          <td rowspan="4" class="networking">TNE10006 <br> Networks and Switching <br> (Lecture) </td>
                      </tr>
                      <tr>
                          <th class="theading2">13:00-13:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">13:30-14:00</th>
                          <td rowspan="2" class="inquiryproject">COS10026 <br> Computing Technology <br> Inquiry Project <br> (Class)  </td>
                      </tr>
                      <tr>
                          <th class="theading2">14:00-14:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">14:30-15:00</th>
                          <td rowspan="2" class="systems">COS10004 <br> Computer Systems <br> (Lecture) </td>
                          <td></td>
                          <td rowspan="4" class="programming">COS10009 <br> Introduction to programming <br> (Class)</td>
                      </tr>
                      <tr>
                          <th class="theading2">15:00-15:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">15:30-16:00</th>
                      </tr>
                      <tr>
                          <th class="theading2">16:00-16:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">16:30-17:00</th>
                          <td rowspan="4" class="systems"> COS10004 <br> Computer Systems <br> (Class) </td>
                      </tr>
                      <tr>
                          <th class="theading2">17:00-17:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">17:30-18:00</th>
                          <td></td>
                          <td rowspan="6" class="networking">TNE10006 <br> Networks and Switching <br> (Class)</td>
                      </tr>
                      <tr>
                          <th class="theading2">18:00-18:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">18:30-19:00</th>
                      </tr>
                      <tr>
                          <th class="theading2">19:00-19:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">19:30-20:00</th>
                      </tr>
                      <tr>
                          <th class="theading2">20:00-20:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">20:30-21:30</th>
                      </tr>
                  </tbody>
              </table>
          </section>
      
          <section>
              <br>
              <hr>
              <br>
              <figure id="janaka">
                  <img src="images/PIC2.jpg" alt="Janaka"><br>
              </figure>
              
              <h3><a href="mailto:104315180@student.swin.edu.au" id="email">Janaka Pruthuvi</a></h3>
              
      
              <table>
                  <caption>Janaka's Timetable</caption>
                  <thead>
                      <tr>
                          <td class="theading"></td>
                          <th class="theading">Monday</th>
                          <th class="theading">Tuesday</th>
                          <th class="theading">Wednesday</th>
                          <th class="theading">Thursday</th>
                          <th class="theading">Friday</th>
                          <th class="theading">Saturday</th>
                          <th class="theading">Sunday</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <th class="theading2">8:00-8:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">8:30-9:00</th>
                          <td> - </td>
                          <td rowspan="4" class="programming" > COS10009 <br> Introduction to programming <br> Lecture </td>
                      </tr>
                      <tr>
                          <th class="theading2">9:00-9:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">9:30-10:00</th>
                          <td rowspan="2" class="inquiryproject">COS10026 <br> Computing Technology <br> Inquiry Project <br> (Lecture) </td>
                      </tr>
                      <tr>
                          <th class="theading2">10:00-10:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">10:30-11:00</th>
                          <td></td>
                          <td></td>
                          <td rowspan="4" class="inquiryproject">COS10026 <br> Computing Technology <br> Inquiry Project <br> (Workshop)</td>
                      </tr>
                      <tr>
                          <th class="theading2">11:00-11:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">11:30-12:00</th>
                      </tr>
                      <tr>
                          <th class="theading2">12:00-12:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">12:30-13:00</th>
                          <td rowspan="4" class="networking">TNE10006 <br> Networks and Switching <br> (Lecture) </td>
                      </tr>
                      <tr>
                          <th class="theading2">13:00-13:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">13:30-14:00</th>
                          <td rowspan="2" class="inquiryproject">COS10026 <br> Computing Technology <br> Inquiry Project <br> (Class)  </td>
                      </tr>
                      <tr>
                          <th class="theading2">14:00-14:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">14:30-15:00</th>
                          <td rowspan="2" class="systems">COS10004 <br> Computer Systems <br> (Lecture) </td>
                          <td></td>
                          <td rowspan="4" class="programming">COS10009 <br> Introduction to programming <br> (Class)</td>
                      </tr>
                      <tr>
                          <th class="theading2">15:00-15:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">15:30-16:00</th>
                      </tr>
                      <tr>
                          <th class="theading2">16:00-16:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">16:30-17:00</th>
                          <td rowspan="4" class="systems"> COS10004 <br> Computer Systems <br> (Class) </td>
                      </tr>
                      <tr>
                          <th class="theading2">17:00-17:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">17:30-18:00</th>
                          <td></td>
                          <td rowspan="6" class="networking">TNE10006 <br> Networks and Switching <br> (Class)</td>
                      </tr>
                      <tr>
                          <th class="theading2">18:00-18:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">18:30-19:00</th>
                      </tr>
                      <tr>
                          <th class="theading2">19:00-19:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">19:30-20:00</th>
                      </tr>
                      <tr>
                          <th class="theading2">20:00-20:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">20:30-21:30</th>
                      </tr>
                  </tbody>
              </table>
          </section>
      
          <section>
              <br>
              <hr>
              <br>
              <figure id="tevin">
                  <img src="images/PIC3.jpg" alt="Tevin"><br>
              </figure>
              
              <h3><a href="mailto:104748003@student.swin.edu.au" id="email">Tevin Senevirathne</a></h3>
      
              <table>
                  <caption>Tevin's Timetable</caption>
                  <thead>
                      <tr>
                          <td class="theading"></td>
                          <th class="theading">Monday</th>
                          <th class="theading">Tuesday</th>
                          <th class="theading">Wednesday</th>
                          <th class="theading">Thursday</th>
                          <th class="theading">Friday</th>
                          <th class="theading">Saturday</th>
                          <th class="theading">Sunday</th>
                      </tr>
                  <tbody>
                      <tr>
                          <th class="theading2">8:00-8:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">8:30-9:00</th>
                          <td> - </td>
                          <td rowspan="4" class="programming" > COS10009 <br> Introduction to programming <br> Lecture </td>
                      </tr>
                      <tr>
                          <th class="theading2">9:00-9:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">9:30-10:00</th>
                          <td rowspan="2" class="inquiryproject">COS10026 <br> Computing Technology <br> Inquiry Project <br> (Lecture) </td>
                      </tr>
                      <tr>
                          <th class="theading2">10:00-10:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">10:30-11:00</th>
                          <td></td>
                          <td></td>
                          <td rowspan="4" class="inquiryproject">COS10026 <br> Computing Technology <br> Inquiry Project <br> (Workshop)</td>
                      </tr>
                      <tr>
                          <th class="theading2">11:00-11:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">11:30-12:00</th>
                      </tr>
                      <tr>
                          <th class="theading2">12:00-12:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">12:30-13:00</th>
                          <td rowspan="4" class="networking">TNE10006 <br> Networks and Switching <br> (Lecture) </td>
                      </tr>
                      <tr>
                          <th class="theading2">13:00-13:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">13:30-14:00</th>
                          <td rowspan="2" class="inquiryproject">COS10026 <br> Computing Technology <br> Inquiry Project <br> (Class)  </td>
                      </tr>
                      <tr>
                          <th class="theading2">14:00-14:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">14:30-15:00</th>
                          <td rowspan="2" class="systems">COS10004 <br> Computer Systems <br> (Lecture) </td>
                          <td></td>
                          <td rowspan="4" class="programming">COS10009 <br> Introduction to programming <br> (Class)</td>
                      </tr>
                      <tr>
                          <th class="theading2">15:00-15:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">15:30-16:00</th>
                      </tr>
                      <tr>
                          <th class="theading2">16:00-16:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">16:30-17:00</th>
                          <td rowspan="4" class="systems"> COS10004 <br> Computer Systems <br> (Class) </td>
                      </tr>
                      <tr>
                          <th class="theading2">17:00-17:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">17:30-18:00</th>
                          <td></td>
                          <td rowspan="6" class="networking">TNE10006 <br> Networks and Switching <br> (Class)</td>
                      </tr>
                      <tr>
                          <th class="theading2">18:00-18:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">18:30-19:00</th>
                      </tr>
                      <tr>
                          <th class="theading2">19:00-19:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">19:30-20:00</th>
                      </tr>
                      <tr>
                          <th class="theading2">20:00-20:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">20:30-21:30</th>
                      </tr>
                  </tbody>
              </table>
          </section>
      
          <section>
              <br>
              <hr>
              <br>
              <figure id="amantha">
                  <img src="images/PIC4.jpg" alt="amantha"><br>
              </figure>
              
              <h3><a href="mailto:104326399@student.swn.edu.au">Amantha Sandeepa</a></h3>
      
      
              <table>
                  <caption>Amantha's Timetable</caption>
                  <thead>
                      <tr>
                          <td class="theading"></td>
                          <th class="theading">Monday</th>
                          <th class="theading">Tuesday</th>
                          <th class="theading">Wednesday</th>
                          <th class="theading">Thursday</th>
                          <th class="theading">Friday</th>
                          <th class="theading">Saturday</th>
                          <th class="theading">Sunday</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <th class="theading2">8:00-8:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">8:30-9:00</th>
                          <td> - </td>
                          <td rowspan="4" class="programming" > COS10009 <br> Introduction to programming <br> Lecture </td>
                      </tr>
                      <tr>
                          <th class="theading2">9:00-9:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">9:30-10:00</th>
                          <td rowspan="2" class="inquiryproject">COS10026 <br> Computing Technology <br> Inquiry Project <br> (Lecture) </td>
                      </tr>
                      <tr>
                          <th class="theading2">10:00-10:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">10:30-11:00</th>
                          <td></td>
                          <td></td>
                          <td rowspan="4" class="inquiryproject">COS10026 <br> Computing Technology <br> Inquiry Project <br> (Workshop)</td>
                      </tr>
                      <tr>
                          <th class="theading2">11:00-11:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">11:30-12:00</th>
                      </tr>
                      <tr>
                          <th class="theading2">12:00-12:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">12:30-13:00</th>
                          <td rowspan="4" class="networking">TNE10006 <br> Networks and Switching <br> (Lecture) </td>
                      </tr>
                      <tr>
                          <th class="theading2">13:00-13:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">13:30-14:00</th>
                          <td rowspan="2" class="inquiryproject">COS10026 <br> Computing Technology <br> Inquiry Project <br> (Class)  </td>
                      </tr>
                      <tr>
                          <th class="theading2">14:00-14:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">14:30-15:00</th>
                          <td rowspan="2" class="systems">COS10004 <br> Computer Systems <br> (Lecture) </td>
                          <td></td>
                          <td rowspan="4" class="programming">COS10009 <br> Introduction to programming <br> (Class)</td>
                      </tr>
                      <tr>
                          <th class="theading2">15:00-15:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">15:30-16:00</th>
                      </tr>
                      <tr>
                          <th class="theading2">16:00-16:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">16:30-17:00</th>
                          <td rowspan="4" class="systems"> COS10004 <br> Computer Systems <br> (Class) </td>
                      </tr>
                      <tr>
                          <th class="theading2">17:00-17:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">17:30-18:00</th>
                          <td></td>
                          <td rowspan="6" class="networking">TNE10006 <br> Networks and Switching <br> (Class)</td>
                      </tr>
                      <tr>
                          <th class="theading2">18:00-18:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">18:30-19:00</th>
                      </tr>
                      <tr>
                          <th class="theading2">19:00-19:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">19:30-20:00</th>
                      </tr>
                      <tr>
                          <th class="theading2">20:00-20:30</th>
                      </tr>
                      <tr>
                          <th class="theading2">20:30-21:30</th>
                      </tr>
                  </tbody>
              </table>
              <br>
          </section>

    <footer>
		<h4>Useful Links</h4><br>
		<h4><a href="https://www.swinburne.edu.au/">Swinburne University</a></h4><br>
		<h4><a href="https://youtu.be/pSNTAPJp8Rk?si=KxMNFiMkJfnZMXPi">YouTube Video</a></h4>
		<p>&#169; TEAM CODE CRAFTERS</p>
		<p>Assignment Part 01</p>
	</footer>

</body>
</html>