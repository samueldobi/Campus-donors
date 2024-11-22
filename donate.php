<?php include 'includes/header.php' ?>
<section class="donate-main">
<div class="container">
    <div class="row  text-md-center mt-5 mb-5">
        <h2 class="">
        Join the Lifesaving Mission
        </h2>
        <p class="">
        By registering for our blood donation program, you’re taking a vital step toward saving lives and making a meaningful impact on our community. Your commitment helps us ensure that blood is readily available for those in need, and we are deeply grateful for your willingness to contribute to this life-saving cause. Thank you for being a hero to those who need it most.
        </p>
    </div>

    <div class="row mt-5 mb-5  align-items-center justify-content-center">
        <h3 class=" text-md-center p-2 mt-2 mb-3">Register Your Details</h3>
        <div class="border rounded col-10 col-md-6 align-items-center justify-content-center">

            <form action = "form_actions.php"  class="" method="POST">

            <!-- Name Label -->
                <div class="m-3">
                    <label for="name" class="form-label fw-bold">Name</label>
                    <input type="text" class="form-control" id=""  name="name">
                </div>
            <!-- Name Label -->

            <!-- Phone number -->
            <div class="m-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Phone number</label>
                <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="num">
                <div id="emailHelp" class="form-text">Put your phone number</div>
            </div>
             <!-- Phone number -->

            <!-- Email Input -->
            <div class="m-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">Your Email is safe</div>
            </div>
            <!-- Email Input -->
             
             <!-- Blood Type Input -->
                <div class="m-3">
                    <label for="" class="fw-bold">Blood Type:</label>
                    <div class="form-floating">

                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name = "bloodtype">
                    <option value=""> Blood Type</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                   </div>
                </div>
             <!-- Blood Type Input -->   
             
            <!-- Faculty Type Input -->
            <div class="m-3">
                    <label for="" class="fw-bold">Faculty</label>
                    <div class="form-floating">

                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="faculty">
                    <option value=""> Faculty</option>
                            <option value="Arts">Arts </option>
                            <option value="Agric">Agriculture</option>
                            <option value="Bms">Basic Medical Sciences</option>
                            <option value="Dent">Dentistry</option>
                            <option value="Edu">Education</option>
                            <option value="Eng">Engineering</option>
                            <option value="Law">Law</option>
                            <option value="life">Life Sciences</option>
                            <option value="Mgs">Management Sciences</option>
                            <option value="Pharm">Pharmarcy</option>
                            <option value="Social">Social Sciences</option>
                            <option value="Med Science">Medicine Science</option>
                            <option value="Med">Medicine</option>
                            <option value="Vet">Vetinary Medicine</option>
                         
                        </select>
                   </div>
                </div>
            <!-- Faculty Type Input -->

                <!-- <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div> -->

                
                <!-- <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
              
                <div class=" button-links p-2">
                    <button type="submit" class="btn text-light  btn-style fs-5" style="width: 100%;">Register</button>

                </div>
           </form>
        </div>
    </div>
</div>
</section>
<?php include 'includes/footer.php' ?>