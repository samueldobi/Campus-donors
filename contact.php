<?php include 'includes/header.php' ?>
<section class="contact mt-5 mb-5 " id="contact">
<div class="container border">
  <p class="text-center fs-1 p-3 fw-bold">
    Contact Us
  </p>
  <form action="send_email.php" method="POST">
<div class="mb-3">

  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="name" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Type your name">
</div>
<div class="mb-3">

  <label for="exampleFormControlInput1" class="form-label">Email <Address></Address></label>
  <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Send us a message</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
</div>
<!-- <button type="button" class="btn btn-success my-2">Submit</button> -->

<div class="button-links p-2">
  <input type="submit"  value="Send"  class="btn  text-light  btn-style">

</div>
</div>
</form>
</section>
<?php include 'includes/footer.php' ?>