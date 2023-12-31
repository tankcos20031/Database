<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;500;700&family=Rubik:wght@400;500;700&family=Ubuntu:ital,wght@0,400;0,500;0,700;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <title>Jobs</title>
</head>
<body>
    <header>
        <div class="nhan1">
            <div class="nhan2">
                <a href="index.php"><img src="images/logo.png" alt="" class="nhan3"></img></a>
            </div>
            <ul class="nhan4">
                <li><a href="index.php" class="nhan5">Home</a></li>
                <li><a href="course.php" class="nhan5">Courses</a></li>
                <li><a href="job.php" class="nhan5 active">Jobs</a></li>
                <li><a href="profile.php" class="nhan5">Your Profile</a></li>
            </ul>
            <div class="nhan6">
                <a href="login.php" class="nhan5"><i class="fa-solid fa-user"></i></a>
            </div>
        </div>
    </header>
    <div class="nhan21">
      <div class="search-bar">
        <input type="text" id="search-input" placeholder="Search...">
        <button id="search-button">Search</button>
      </div>
        <table class="job-table">
          <tr>
            <td>
                <div class="job-item">
                  <h3>Hairdresser</h3>
                  <img src="images/job1.jpg" alt="job1" class="job-img">
                  <p><strong>Employer:</strong> HairStyle Salon</p>
                  <p><strong>Application Deadline:</strong> November 25, 2023</p>
                  <p><strong>Salary:</strong> $30000 per year (plus tips)</p>
                  <p><strong>Working Location:</strong> Miami, FL</p>
                  <p><strong>Scope of Work:</strong> The Hairdresser will be responsible for providing hair styling and grooming services to clients, including haircuts, coloring, styling, and treatments. They will also maintain a clean and organized work area.</p><br>
                  <p><strong>Experience Requirement:</strong> Minimum of 2 years of experience as a professional hairdresser, knowledge of current hair trends and techniques, excellent customer service skills, and the ability to work with a diverse clientele.</p>
                  <p><strong>Benefits:</strong> Flexible work hours, discounted salon services, opportunities for professional development and training.</p>
                  <p><strong>Company's Introduction:</strong> HairStyle Salon is a reputable salon that offers various hair care services to clients. We have a team of talented and passionate professionals dedicated to delivering exceptional results.</p>
                  <p><strong>Short Description:</strong> Join our team as a Hairdresser and showcase your creativity and skills while making clients look and feel their best.</p>
                  <p><strong>Email:</strong> careers@hairstylesalon.com</p>
                  <p><strong>Phone:</strong> 555-123-4567</p>
                  <a href="#" class="apply-button">Apply this job!</a>
                  <form action="processJob.php" method="post">
                        <!-- Add hidden input fields to store job information -->
                            <input type="hidden" name="job_title" value="Hairdresser">
                            <input type="hidden" name="recruiter" value="HairStyle Salon">
                            <input type="hidden" name="application_deadline" value="November 25, 2023">
                            <input type="hidden" name="salary" value="30000">
                            <input type="hidden" name="working_location" value="Miami, FL">
                            <input type="hidden" name="category" value="Business">
                            <input type="hidden" name="applicant_count" value="25">
                        <!-- Add other hidden input fields from job requirement and job benefit table -->
                            <input type="hidden" name="requirement" value="Minimum of 2 years of experience as a professional hairdresser, knowledge of current hair trends and techniques, excellent customer service skills, and the ability to work with a diverse clientele.">
                            <input type="hidden" name="benefit" value="Flexible work hours, discounted salon services, opportunities for professional development and training.">
                            <button type="submit" class="apply-button">Apply this job!</button>
                    </form>
                </div>
              </td>
              <td>
                <div class="job-item">
                  <h3>Bartender</h3>
                  <img src="images/job2.jpg" alt="job2" class="job-img">
                  <p><strong>Employer:</strong> Cheers Bar & Lounge</p>
                  <p><strong>Application Deadline:</strong> December 1, 2023</p>
                  <p><strong>Salary:</strong> $25000 per year (plus tips)</p>
                  <p><strong>Working Location:</strong> New Orleans, LA</p>
                  <p><strong>Scope of Work:</strong> The Bartender will be responsible for preparing and serving alcoholic and non-alcoholic beverages, taking customer orders, maintaining bar cleanliness and inventory, and ensuring exceptional customer service.</p>
                  <p><strong>Experience Requirement:</strong> Previous experience as a bartender, knowledge of drink recipes and mixology techniques, excellent communication and multitasking skills, and the ability to work in a fast-paced environment.</p>
                  <p><strong>Benefits:</strong> Flexible work schedule, opportunities for advancement, employee discounts.</p>
                  <p><strong>Company's Introduction:</strong> Cheers Bar & Lounge is a popular establishment known for its vibrant atmosphere and quality beverages. We take pride in delivering memorable experiences to our customers.</p>
                  <p><strong>Short Description:</strong> Join our team as a Bartender and create delightful drink experiences while engaging with our diverse clientele.</p>
                  <p><strong>Email:</strong> careers@cheersbar.com</p>
                  <p><strong>Phone:</strong> 555-987-6543</p>
                  <a href="#" class="apply-button">Apply this job!</a>
                  <form action="processJob.php" method="post">
                        <!-- Add hidden input fields to store job information -->
                            <input type="hidden" name="job_title" value="Bartender">
                            <input type="hidden" name="recruiter" value="Cheers Bar & Lounge">
                            <input type="hidden" name="application_deadline" value="December 1, 2023">
                            <input type="hidden" name="salary" value="25000">
                            <input type="hidden" name="working_location" value="New Orleans, LA">
                            <input type="hidden" name="category" value="Business">
                            <input type="hidden" name="applicant_count" value="26">
                        <!-- Add other hidden input fields from job requirement and job benefit table -->
                            <input type="hidden" name="requirement" value="Previous experience as a bartender, knowledge of drink recipes and mixology techniques, excellent communication and multitasking skills, and the ability to work in a fast-paced environment.">
                            <input type="hidden" name="benefit" value="Flexible work schedule, opportunities for advancement, employee discounts.">
                            <button type="submit" class="apply-button">Apply this job!</button>
                  </form>
                </div>
              </td>
              <td>
                <div class="job-item">
                  <h3>Massage Therapist</h3>
                  <img src="images/job3.jpg" alt="job3" class="job-img">
                  <p><strong>Employer:</strong> Serenity Spa & Wellness</p>
                  <p><strong>Application Deadline:</strong> November 30, 2023</p>
                  <p><strong>Salary:</strong> $40000 per year</p>
                  <p><strong>Working Location:</strong> Denver, CO</p>
                  <p><strong>Scope of Work:</strong> The Massage Therapist will be responsible for providing professional massage therapy services to clients, assessing clients' needs, customizing massage treatments, and maintaining accurate client records.</p>
                  <p><strong>Experience Requirement:</strong> Valid massage therapy license, knowledge of different massage techniques, excellent interpersonal and communication skills, and the ability to create a relaxing and rejuvenating experience for clients.</p>
                  <p><strong>Benefits:</strong> Health insurance, retirement plan, discounted spa services, ongoing training and skill development.</p>
                  <p><strong>Company's Introduction:</strong> Serenity Spa & Wellness is a peaceful oasis that offers a range of amazing services. Our dedicated team of professionals is committed to promoting relaxation, health, and well-being.</p>
                  <p><strong>Short Description:</strong> Join our team as a Massage Therapist and help our clients achieve tranquility and balance through therapeutic touch.</p>
                  <p><strong>Email:</strong> careers@serenityspa.com</p>
                  <p><strong>Phone:</strong> 555-789-1234</p>
                  <a href="#" class="apply-button">Apply this job!</a>
                  <form action="processJob.php" method="post">
                        <!-- Add hidden input fields to store job information -->
                            <input type="hidden" name="job_title" value="Massage Therapist">
                            <input type="hidden" name="recruiter" value="Serenity Spa & Wellness">
                            <input type="hidden" name="application_deadline" value="November 30, 2023">
                            <input type="hidden" name="salary" value="40000">
                            <input type="hidden" name="working_location" value="Denver, CO">
                            <input type="hidden" name="category" value="Health">
                            <input type="hidden" name="applicant_count" value="27">
                        <!-- Add other hidden input fields from job requirement and job benefit table -->
                            <input type="hidden" name="requirement" value="Valid massage therapy license, knowledge of different massage techniques, excellent interpersonal and communication skills, and the ability to create a relaxing and rejuvenating experience for clients.">
                            <input type="hidden" name="benefit" value="Health insurance, retirement plan, discounted spa services, ongoing training and skill development.">
                            <button type="submit" class="apply-button">Apply this job!</button>
                  </form>
                </div>
              </td>
          </tr>  
          <tr>
            <td>
              <div class="job-item">
                <h3>Marketing Manager</h3>
                <img src="images/job4.jpg" alt="job4" class="job-img">
                <p><strong>Employer:</strong> ABC Company</p>
                <p><strong>Application Deadline:</strong> ABC Company</p>
                <p><strong>Salary:</strong> $60000 per year</p>
                <p><strong>Working Location:</strong> New York, NY</p>
                <p><strong>Scope of Work:</strong> The Marketing Manager will be responsible for developing and implementing marketing strategies, managing campaigns, analyzing market trends, and overseeing a team of marketing experts.</p>
                <p><strong>Experience Requirement:</strong> Minimum of 5 years of experience in marketing, strong leadership skills, proficiency in digital marketing platforms, and a proven track record of successful marketing campaigns.</p><br>
                <p><strong>Benefits:</strong> Health insurance, retirement plan, paid time off, professional development opportunities.</p>
                <p><strong>Company's Introduction:</strong> ABC Company is a leading provider of consumer products, specializing in the technology industry. With a strong focus on innovation and customer satisfaction, we strive to deliver cutting-edge solutions to our global customer base.</p>
                <p><strong>Short Description:</strong> Join our team as a Marketing Manager and contribute to our continued growth and success in the market.</p>
                <p><strong>Email:</strong> careers@abccompany.com</p>
                <p><strong>Phone:</strong> 123-456-7890</p>
                <a href="#" class="apply-button">Apply this job!</a>
                <form action="processJob.php" method="post">
                        <!-- Add hidden input fields to store job information -->
                            <input type="hidden" name="job_title" value="Marketing Manager">
                            <input type="hidden" name="recruiter" value="ABC Company">
                            <input type="hidden" name="application_deadline" value="ABC Company">
                            <input type="hidden" name="salary" value="60000">
                            <input type="hidden" name="working_location" value="New York, NY">
                            <input type="hidden" name="category" value="Media">
                            <input type="hidden" name="applicant_count" value="28">
                        <!-- Add other hidden input fields from job requirement and job benefit table -->
                            <input type="hidden" name="requirement" value="Minimum of 5 years of experience in marketing, strong leadership skills, proficiency in digital marketing platforms, and a proven track record of successful marketing campaigns.">
                            <input type="hidden" name="benefit" value="Health insurance, retirement plan, paid time off, professional development opportunities.">
                            <button type="submit" class="apply-button">Apply this job!</button>
                  </form>
              </div>
            </td>
            <td>
              <div class="job-item">
                <h3>Software Engineer</h3>
                <img src="images/job5.jpg" alt="job5" class="job-img">
                <p><strong>Employer:</strong> XYZ Tech</p>
                <p><strong>Application Deadline:</strong> December 15, 2023</p>
                <p><strong>Salary:</strong> $80000 per year</p>
                <p><strong>Working Location:</strong> San Francisco, CA</p>
                <p><strong>Scope of Work:</strong> The Software Engineer will be responsible for developing, and maintaining software applications, collaborating with others, and ensuring the performance and scalability of the software systems.</p>
                <p><strong>Experience Requirement:</strong> Bachelor's degree in Computer Science or related field, proficiency in programming languages such as Java or Python, experience with software development methodologies, and strong problem-solving skills.</p>
                <p><strong>Benefits:</strong> Health insurance, stock options, flexible work hours, remote work opportunities.</p>
                <p><strong>Company's Introduction:</strong> XYZ Tech is a leading technology company that specializes in developing innovative software solutions for various industries. We are dedicated to pushing the boundaries of technology and creating impactful software products.</p>
                <p><strong>Short Description:</strong> Join our team as a Software Engineer and contribute to the development of cutting-edge software solutions.</p>
                <p><strong>Email:</strong> careers@xyztech.com</p>
                <p><strong>Phone:</strong> 987-654-3210</p>
                <a href="#" class="apply-button">Apply this job!</a>
                <form action="processJob.php" method="post">
                        <!-- Add hidden input fields to store job information -->
                            <input type="hidden" name="job_title" value="Software Engineer">
                            <input type="hidden" name="recruiter" value="XYZ Tech">
                            <input type="hidden" name="application_deadline" value="December 15, 2023">
                            <input type="hidden" name="salary" value="80000">
                            <input type="hidden" name="working_location" value="San Francisco, CA">
                            <input type="hidden" name="category" value="IT">
                            <input type="hidden" name="applicant_count" value="29">
                        <!-- Add other hidden input fields from job requirement and job benefit table -->
                            <input type="hidden" name="requirement" value="Bachelor degree in Computer Science or related field, proficiency in programming languages such as Java or Python, experience with software development methodologies, and strong problem-solving skills.">
                            <input type="hidden" name="benefit" value="Health insurance, stock options, flexible work hours, remote work opportunities.">
                            <button type="submit" class="apply-button">Apply this job!</button>
                  </form>
              </div>
            </td>
            <td>
                <div class="job-item">
                  <h3>Graphic Designer</h3>
                  <img src="images/job6.jpg" alt="job6" class="job-img">
                  <p><strong>Employer:</strong> DEF Creative Agency</p>
                  <p><strong>Application Deadline:</strong> December 10, 2023</p>
                  <p><strong>Salary:</strong> $50000 per year</p>
                  <p><strong>Working Location:</strong> Los Angeles, CA</p>
                  <p><strong>Scope of Work:</strong> The Graphic Designer will be responsible for creating visually appealing designs, developing brand identities, collaborating with clients and cross-functional teams, and delivering high-quality design assets.</p>
                  <p><strong>Experience Requirement:</strong> Minimum of 3 years of experience in graphic design, proficiency in Adobe Creative Suite, strong portfolio showcasing design skills, and ability to work on multiple projects with tight deadlines.</p>
                  <p><strong>Benefits:</strong> Health insurance, dental coverage, paid vacation, creative development opportunities.</p>
                  <p><strong>Company's Introduction:</strong> DEF Creative Agency is a renowned design agency specializing in creating impactful visual experiences for clients across various industries. We believe in the power of design to communicate and inspire.</p>
                  <p><strong>Short Description:</strong> Join our team as a Graphic Designer and bring brands to life through your stunning and creative designs.</p>
                  <p><strong>Email:</strong> careers@defagency.com</p>
                  <p><strong>Phone:</strong> 555-123-4567</p>
                  <a href="#" class="apply-button">Apply this job!</a>
                  <form action="processJob.php" method="post">
                        <!-- Add hidden input fields to store job information -->
                            <input type="hidden" name="job_title" value="Graphic Designer">
                            <input type="hidden" name="recruiter" value="DEF Creative Agency">
                            <input type="hidden" name="application_deadline" value=" December 10, 2023">
                            <input type="hidden" name="salary" value="50000">
                            <input type="hidden" name="working_location" value="Los Angeles, CA">
                            <input type="hidden" name="category" value="Media">
                            <input type="hidden" name="applicant_count" value="30">
                        <!-- Add other hidden input fields from job requirement and job benefit table -->
                            <input type="hidden" name="requirement" value="Minimum of 3 years of experience in graphic design, proficiency in Adobe Creative Suite, strong portfolio showcasing design skills, and ability to work on multiple projects with tight deadlines.">
                            <input type="hidden" name="benefit" value=" Health insurance, dental coverage, paid vacation, creative development opportunities.">
                            <button type="submit" class="apply-button">Apply this job!</button>
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
