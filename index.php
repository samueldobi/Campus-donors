<?php include 'includes/header.php' ?>
<?php
require_once 'includes/signup_folder/signup_view.inc.php';
require_once 'includes/config_session.php';
?>
  
  <!-- ======= Hero  Section ======= -->
   <section class="hero-section d-flex align-items-center">
        <div class="container">
            <div class="row hero-responsive">
                <div class="col-lg-12 d-flex flex-column text-center hero-content">
                    <h1 class="hero-title">Welcome to Campus Donors</h1>
                    <p class="hero-subtitle">A university platform for saving lives. Join the University <br>of Benin community in donating blood and making a difference.</p>

                    <div class="button-links">
                        <a href="donate.php" class="btn-style">
                            <i class="fas fa-heart me-2"></i>Donate
                        </a>
                        <a href="#about" class="btn-style">
                            <i class="fas fa-info-circle me-2"></i>Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- ======= Hero  Section ======= -->

<!-- ======= About Section ======= -->
  <section class="about " id="about">
    <div class="container p-3">
        <div class="row g-2">
            <h2 class="text-center fw-bold about-header p-2">
                About <span id="campus"> Campus</span>  Donors
            </h2>

            <p class="text-center p-2">
            Welcome to Campus Donor, the premier platform dedicated to fostering a culture of blood donation among students at the University of Benin. Our mission is simple yet profound: to save lives through the power of community and compassion. As students, you have the unique opportunity to make a tangible difference in the lives of those in need. By becoming a part of Campus Donor, you are not just donating blood; you are giving hope, strength, and a second chance to patients across our community and beyond.
            </p>
        </div>
    </div>
 </section> 
<!-- ======= About Section ======= -->

<!-- ======= Services Section ======= -->
  <section class="services">
        <div class="container">
            <h2 class="text-center ">Our Services</h2>
            
            <!-- Blood Donation Service -->
            <div class="row justify-content-between align-items-center mb-5 ">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="service-card service-text">
                        <h3><i class="fas fa-tint me-3"></i>Blood Donation</h3>
                        <p>Blood donation is at the heart of our services, offering a life-saving resource to those in need within our community and beyond. Here's why your donation matters:</p>
                        
                        <p><i class="fas fa-check-circle text-success me-2"></i> Assist patients in critical need.</p>
                        <p><i class="fas fa-check-circle text-success me-2"></i> Provide life-saving blood.</p>
                        <p><i class="fas fa-check-circle text-success me-2"></i> Be a hero to those in crisis.</p>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Blood Donation" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Blood Testing Service -->
            <div class="row justify-content-between align-items-center mb-5 ">
                <div class="col-lg-4 order-lg-1 order-2 mt-4 mt-lg-0">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Blood Testing" class="img-fluid">
                    </div>
                </div>
                
                <div class="col-lg-7 order-lg-2 order-1 mb-4 mb-lg-0">
                    <div class="service-card service-text">
                        <h3><i class="fas fa-vial me-3"></i>Blood Testing</h3>
                        <p>Blood testing is a vital service we offer, ensuring the safety and health of both donors and recipients. Here's why it matters:</p>
                        
                        <p><i class="fas fa-check-circle text-success me-2"></i> Detects any potential infections or conditions.</p>
                        <p><i class="fas fa-check-circle text-success me-2"></i> Monitors donor wellness before and after donation.</p>
                        <p><i class="fas fa-check-circle text-success me-2"></i> Confirms blood type for precise transfusions.</p>
                    </div>
                </div>
            </div>

            <!-- Awareness Campaigns Service -->
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="service-card service-text">
                        <h3><i class="fas fa-bullhorn me-3"></i>Awareness Campaigns</h3>
                        <p>Our awareness campaigns play a crucial role in educating and engaging the university community about the importance of blood donation. Here's what they achieve:</p>
                        
                        <p><i class="fas fa-check-circle text-success me-2"></i> Spread knowledge about the need for regular blood donations.</p>
                        <p><i class="fas fa-check-circle text-success me-2"></i> Inspire more students to get involved and donate.</p>
                        <p><i class="fas fa-check-circle text-success me-2"></i> Unite the campus around a life-saving cause.</p>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80" alt="Awareness Campaigns" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- ======= Services Section ======= -->

<!-- ======= Why Donate  Section ======= -->
 <section class="why-donate">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 why-donate-text ">
                    <p class="fs-3 fw-bold">Why Donate<span style="color:#FFE5E5">?</span></p>
                    <p>Donating blood as a student at our university not only saves lives but also fosters a strong sense of community and responsibility. Each donation can help multiple patients in need, showcasing the social good and impactful difference one can make. Join us in this life-saving mission and become a hero to those in urgent need of blood.</p>
                    <p class="learn-more">
                        <a href="why-donate.php" class="learn-btn">
                            <i class="fas fa-arrow-right me-2"></i>Learn More
                        </a>
                    </p>
                </div>
                <div class="col-lg-6 ">
                    <div class="help-img text-center">
                        <img src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Help Save Lives" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- ======= Why Donate  Section ======= -->

<!-- ======= Testimonials  Section ======= -->
 
    <section class="testimonials">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="testimonials-header ">Testimonials</h2>
                <p class="testimonials-text fade-in-up">
                    Here are students that have benefitted from and contributed to our programme.
                </p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6 ">
                    <div class="card testimonial-card">
                        <div class="user-image mb-3">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Student" class="rounded-circle">
                        </div>
                        
                        <div class="user-content">
                            <h5>Idemudia Benita</h5>
                            <span><i class="fas fa-graduation-cap me-2"></i>Architecture Student</span>
                            <p>"As a first-time donor, I was nervous, but the website guided me through every step. The information provided helped me understand the process, and now, I've become a regular donor. It's empowering to be part of something so important."</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 ">
                    <div class="card testimonial-card">
                        <div class="user-image mb-3">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Student" class="rounded-circle">
                        </div>
                        
                        <div class="user-content">
                            <h5>Osagie Aisosa</h5>
                            <span><i class="fas fa-user-md me-2"></i>Medical Student</span>
                            <p>"I never realized how easy it was to save a life until I used this website. Signing up to donate was quick, and the reminders made sure I never missed a blood drive. It feels amazing to know that I've made a difference in someone's life."</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 ">
                    <div class="card testimonial-card">
                        <div class="user-image mb-3">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Student" class="rounded-circle">
                        </div>
                        
                        <div class="user-content">
                            <h5>Osayande Johnson</h5>
                            <span><i class="fas fa-cogs me-2"></i>Engineering Student</span>
                            <p>"This website made finding a donor for my cousin so much easier. Within minutes, I was connected to someone who could help. I'm incredibly grateful for the support and how smoothly everything went."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
 
<!-- ======= Testimonials  Section ======= -->
 
<!-- ======= Contact  Section ======= -->
<!-- ======= Contact  Section ======= -->

<?php include 'includes/footer.php' ?>
