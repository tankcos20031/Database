<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&family=Rubik:wght@400;500;700&family=Ubuntu:ital,wght@0,400;0,500;0,700;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <title>Courses</title>
</head>
<body>
    <header>
        <div class="nhan1">
            <div class="nhan2">
                <a href="index.php"><img src="images/logo.png" alt="" class="nhan3"></img></a>
            </div>
            <ul class="nhan4">
                <li><a href="index.php" class="nhan5">Home</a></li>
                <li><a href="course.php" class="nhan5 active">Courses</a></li>
                <li><a href="job.php" class="nhan5">Jobs</a></li>
                <li><a href="profile.php" class="nhan5">Your Profile</a></li>
            </ul>
            <div class="nhan6">
                <a href="login.php" class="nhan5"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>
    </header>
    <div class="nhan18">
        <div class="search-bar">
            <input type="text" id="search-input" placeholder="Search...">
            <button id="search-button">Search</button>
        </div>
        <table class="course-table">
            <tr>
                <td>
                    <div class="course-item">
                        <h3>F&B</h3>
                        <img src="images/course1.jpg" alt="course1" class="course-img">
                        <p class="course-description">Explore the world of Food and Beverage management, and gain the skills to excel in the dynamic hospitality industry.</p><br>
                        <ul class="course-details">
                            <li><strong>Course Introduction:</strong> Learn about the fundamentals of F&B operations.</li>
                            <li><strong>Course Length:</strong> 8 weeks</li>
                            <li><strong>Course Outline:</strong> Covers topics such as menu planning, customer service, and restaurant management.</li>
                            <li><strong>Course Provider:</strong> ABC Academy</li>
                            <li><strong>Benefits:</strong> Develop practical skills and knowledge to succeed in F&B careers.</li>
                            <li><strong>Price:</strong> $199</li>
                        </ul>
                        <a href="#" class="register-button">Register this course!</a>
                        <form action="processCourse.php" method="post">
                        <!-- Add hidden input fields to store course information -->
                            <input type="hidden" name="course_name" value="F&B">
                            <input type="hidden" name="course_length" value="8 weeks">
                            <input type="hidden" name="course_price" value="199">
                            <input type="hidden" name="category" value="Business">
                            <input type="hidden" name="enrolment_count" value="25">
                        <!-- Add other hidden input fields from course outline and course outcome table -->
                            <input type="hidden" name="outline_text" value="Covers topics such as menu planning, customer service, and restaurant management.">
                            <input type="hidden" name="outcome_text" value="Develop practical skills and knowledge to succeed in F&B careers.">
                            <button type="submit" class="register-button">Register this course!</button>
                        </form>
                    </div>
                </td>
                <td>
                    <div class="course-item">
                        <h3>Beauty & Spa</h3>
                        <img src="images/course2.jpg" alt="course2" class="course-img">
                        <p class="course-description">Embark on a journey into the miraculous world of Beauty & Spa and acquire the expertise to thrive in the wellness industry.</p><br>
                        <ul class="course-details">
                            <li><strong>Course Introduction:</strong> Learn about various beauty and spa treatments and techniques.</li>
                            <li><strong>Course Length:</strong> 10 weeks</li>
                            <li><strong>Course Outline:</strong> Includes modules on skincare, massage therapy, and salon management.</li>
                            <li><strong>Course Provider:</strong> XYZ Institute</li>
                            <li><strong>Benefits:</strong> Develop practical skills and knowledge to pursue a rewarding career in the beauty industry.</li>
                            <li><strong>Price:</strong> $249</li>
                        </ul>
                        <a href="#" class="register-button">Register this course!</a>
                        <form action="processCourse.php" method="post">
                        <!-- Add hidden input fields to store course information -->
                            <input type="hidden" name="course_name" value="Beauty & Spa">
                            <input type="hidden" name="course_length" value="10 weeks">
                            <input type="hidden" name="course_price" value="249">
                            <input type="hidden" name="category" value="Business">
                            <input type="hidden" name="enrolment_count" value="26">
                        <!-- Add other hidden input fields from course outline and course outcome table -->
                            <input type="hidden" name="outline_text" value="Includes modules on skincare, massage therapy, and salon management.">
                            <input type="hidden" name="outcome_text" value="Develop practical skills and knowledge to pursue a rewarding career in the beauty industry.">
                            <button type="submit" class="register-button">Register this course!</button>
                        </form>
                    </div>
                </td>
                <td>
                    <div class="course-item">
                        <h3>Tourism & Hospitality</h3>
                        <img src="images/course3.jpg" alt="course3" class="course-img">
                        <p class="course-description">Immerse yourself in the world of Tourism & Hospitality and acquire the skills to thrive in the dynamic travel industry.</p><br>
                        <ul class="course-details">
                            <li><strong>Course Introduction:</strong> Explore the essentials of tourism management and customer service.</li>
                            <li><strong>Course Length:</strong> 12 weeks</li>
                            <li><strong>Course Outline:</strong> Covers topics such as travel planning, hotel operations, and event management.</li>
                            <li><strong>Course Provider:</strong> PQR School of Hospitality</li>
                            <li><strong>Benefits:</strong> Gain valuable skills to pursue a successful career in the tourism and hospitality sector.</li>
                            <li><strong>Price:</strong> $299</li>
                        </ul>
                        <a href="#" class="register-button">Register this course!</a>
                        <form action="processCourse.php" method="post">
                        <!-- Add hidden input fields to store course information -->
                            <input type="hidden" name="course_name" value="Tourism & Hospitality">
                            <input type="hidden" name="course_length" value="12 weeks">
                            <input type="hidden" name="course_price" value="299">
                            <input type="hidden" name="category" value="Business">
                            <input type="hidden" name="enrolment_count" value="27">
                        <!-- Add other hidden input fields from course outline and course outcome table -->
                            <input type="hidden" name="outline_text" value="Covers topics such as travel planning, hotel operations, and event management.">
                            <input type="hidden" name="outcome_text" value="Gain valuable skills to pursue a successful career in the tourism and hospitality sector.">
                            <button type="submit" class="register-button">Register this course!</button>
                        </form>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="course-item">
                        <h3>Business Course</h3>
                        <img src="images/course4.jpg" alt="course4" class="course-img">
                        <p class="course-description">Learn the fundamentals of running a successful business with our comprehensive Business Course.</p><br>
                        <ul class="course-details">
                            <li><strong>Course Introduction:</strong> Dive into the world of business and explore key concepts and principles.</li>
                            <li><strong>Course Length:</strong> 6 weeks</li>
                            <li><strong>Course Outline:</strong> Cover topics such as business planning, financial management, marketing strategies, and more.</li>
                            <li><strong>Course Provider:</strong> ABC Business School</li>
                            <li><strong>Benefits:</strong> Acquire essential business knowledge, enhance problem-solving abilities, and gain a competitive edge in practical cases.</li>
                            <li><strong>Price:</strong> $149</li>
                        </ul>
                        <a href="#" class="register-button">Register this course!</a>
                        <form action="processCourse.php" method="post">
                        <!-- Add hidden input fields to store course information -->
                            <input type="hidden" name="course_name" value="Business Course">
                            <input type="hidden" name="course_length" value="6 weeks">
                            <input type="hidden" name="course_price" value="149">
                            <input type="hidden" name="category" value="Business">
                            <input type="hidden" name="enrolment_count" value="28">
                        <!-- Add other hidden input fields from course outline and course outcome table -->
                            <input type="hidden" name="outline_text" value=" Cover topics such as business planning, financial management, marketing strategies, and more.">
                            <input type="hidden" name="outcome_text" value=" Acquire essential business knowledge, enhance problem-solving abilities, and gain a competitive edge in practical cases.">
                            <button type="submit" class="register-button">Register this course!</button>
                        </form>
                    </div>
                </td>
                <td>
                    <div class="course-item">
                        <h3>AI Course</h3>
                        <img src="images/course5.jpg" alt="course5" class="course-img">
                        <p class="course-description">Explore the fascinating field of Artificial Intelligence (AI) and delve into its applications and potential.</p><br>
                        <ul class="course-details">
                            <li><strong>Course Introduction:</strong> Discover the foundations of AI and understand its impact on various industries.</li>
                            <li><strong>Course Length:</strong> 8 weeks</li>
                            <li><strong>Course Outline:</strong> Cover topics such as supervised and unsupervised learning, deep learning, computer vision, and AI ethics.</li>
                            <li><strong>Course Provider:</strong> XYZ AI Academy</li>
                            <li><strong>Benefits:</strong> Gain expertise in AI technologies, explore cutting-edge advancements, and contribute to the development of intelligent systems.</li>
                            <li><strong>Price:</strong> $179</li>
                        </ul>
                        <a href="#" class="register-button">Register this course!</a>
                        <form action="processCourse.php" method="post">
                        <!-- Add hidden input fields to store course information -->
                            <input type="hidden" name="course_name" value="AI Course">
                            <input type="hidden" name="course_length" value="8 weeks">
                            <input type="hidden" name="course_price" value="179">
                            <input type="hidden" name="category" value="IT">
                            <input type="hidden" name="enrolment_count" value="29">
                        <!-- Add other hidden input fields from course outline and course outcome table -->
                            <input type="hidden" name="outline_text" value="Cover topics such as supervised and unsupervised learning, deep learning, computer vision, and AI ethics.">
                            <input type="hidden" name="outcome_text" value=" Gain expertise in AI technologies, explore cutting-edge advancements, and contribute to the development of intelligent systems.">
                            <button type="submit" class="register-button">Register this course!</button>
                        </form>
                    </div>
                </td>
                <td>
                    <div class="course-item">
                        <h3>IT Course</h3>
                        <img src="images/course6.jpg" alt="course6" class="course-img">
                        <p class="course-description">Develop your skills in the rapidly evolving field of Information Technology (IT).</p><br>
                        <ul class="course-details">
                            <li><strong>Course Introduction:</strong> Get acquainted with key concepts and technologies in the IT field.</li>
                            <li><strong>Course Length:</strong> 10 weeks</li>
                            <li><strong>Course Outline:</strong> Cover topics such as system administration, programming languages, cloud computing, and IT project management.</li>
                            <li><strong>Course Provider:</strong> Tech Academy</li>
                            <li><strong>Benefits:</strong> Build a strong foundation in IT, gain hands-on experience with industry tools, and open doors to a wide range of career opportunities.</li>
                            <li><strong>Price:</strong> $179</li>
                        </ul>
                        <a href="#" class="register-button">Register this course!</a>
                        <form action="processCourse.php" method="post">
                        <!-- Add hidden input fields to store course information -->
                            <input type="hidden" name="course_name" value="IT Course">
                            <input type="hidden" name="course_length" value="10 weeks">
                            <input type="hidden" name="course_price" value="179">
                            <input type="hidden" name="category" value="IT">
                            <input type="hidden" name="enrolment_count" value="30">
                        <!-- Add other hidden input fields from course outline and course outcome table -->
                            <input type="hidden" name="outline_text" value="Cover topics such as system administration, programming languages, cloud computing, and IT project management.">
                            <input type="hidden" name="outcome_text" value=" Build a strong foundation in IT, gain hands-on experience with industry tools, and open doors to a wide range of career opportunities.">
                            <button type="submit" class="register-button">Register this course!</button>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <footer>
        <div class="nhan7">
            <h3>TANK Team</h3>
            <ul class="nhan8">
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-solid fa-envelope"></i></a></li>
            </ul>
        </div>
        <div class="nhan9">
            <p>COPYRIGHT &copy;2023 Team TANK</p>
        </div>
    </footer>
</body>
</html>
