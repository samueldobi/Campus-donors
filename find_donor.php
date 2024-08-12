<?php include 'includes/header.php'?>
<section class="register-intro m-3 p-3">
<div class="container">
    <div class="row text-md-center mt-5 mb-5">
        <h2 class="pb-3">Find a Lifesaving Donor Today</h2>
        <p class="register-text">
        Our blood donor matching service connects you with generous individuals ready to make a life-saving difference. By finding a donor through our platform, you’re ensuring that those in need receive the help they require quickly and efficiently. We appreciate your trust in us to support this critical mission, and together, we can make a profound impact.
        </p>
    </div>


    <div class="row mt-5 mb-5  align-items-center justify-content-center">
        <h3 class=" text-md-center p-2 mt-2 mb-3">Register Your Details</h3>
        <div class="form-div col-10 col-md-6 align-items-center justify-content-center">

            <form class="">

            <!-- Name Label -->
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            <!-- Name Label -->

            <!-- Email Input -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label fw-bold">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Your Email is safe</div>
            </div>
            <!-- Email Input -->
             
             <!-- Blood Type Input -->
                <div class="mb-3">
                    <label for="" class="fw-bold">Blood Type:</label>
                    <div class="form-floating">

                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected> Blood Type</option>
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
            <div class="mb-3">
                    <label for="" class="fw-bold">Faculty</label>
                    <div class="form-floating">

                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected> Faculty</option>
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
                <button type="submit" class="btn btn-primary">Submit</button>
           </form>
        </div>
    </div>
</div>
</section>
<?php include 'includes/footer.php'?>