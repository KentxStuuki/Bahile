<!-- Style -->
 <style>
.feedback-card {
    position: relative;
    overflow: hidden; 
}

.feedback-card::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('../main/images/feedback.png') no-repeat center center/cover;
    opacity: 25; 
    z-index: 1;
}

.feedback-card .card-body {
    position: relative;
    z-index: 2;
}
</style>

<section>
    <div class="container mt-5">
        <div class="d-flex flex-column flex-lg-row gap-5 mt-4 ps-5 pe-5">
            <!-- Contact Form -->
            <div class="flex-fill">
                <h1>Contact Us</h1>
                <p class="fs-4">
                    We'd love to hear from you! Whether you're interested in investing, purchasing a lot, or simply learning more about Bahile Dreamland Estates, feel free to reach out:
                </p>
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Full name">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>

                    <div class="col-12">
                        <label for="inputAbout" class="form-label">About</label>
                        <input type="text" class="form-control" id="inputAbout" placeholder="About">
                    </div>

                    <div class="col-12">
                        <label for="inputMessage" class="form-label">Message</label>
                        <textarea class="form-control" id="message" placeholder="Message..." rows="3"></textarea>
                    </div>

                    <div class="col-12 py-3">
                        <button type="submit" class="btn btn-primary w-50">Send</button>
                    </div>
                </form>
            </div>

            <!-- card -->
            <div style="min-width: 350px;">
                <div class="card rounded-4 shadow-lg feedback-card text-white">
                    <div class="card-body">
                        <h4 class="card-title text-center">Feedback</h4>
                        <p class="card-text text-center">
                            Your thoughts and experiences help us improve our community and services.
                        </p>
                        <form>

                            <div class="mb-3">
                                <label for="feedbackName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="feedbackName" placeholder="Full name">
                            </div>

                            <div class="mb-3">
                                <label for="feedbackProfession" class="form-label">Profession</label>
                                <input type="text" class="form-control" id="feedbackProfession" placeholder="Profession">
                            </div>
                            <!-- istarzz -->
                            <div class="mb-3">
                                <label class="form-label d-block">Rate:
                                        <span class="fs-3 text-white" role="button">★</span>
                                        <span class="fs-3 text-white" role="button">★</span>
                                        <span class="fs-3 text-white" role="button">★</span>
                                        <span class="fs-3 text-white" role="button">★</span>
                                        <span class="fs-3 text-white" role="button">★</span>
                                </label>
                            </div>

                            <div class="mb-3">
                                <label for="feedbackMessage" class="form-label">Message</label>
                                <textarea class="form-control" id="feedbackMessage" placeholder="Message..."></textarea>
                            </div>
 
                            <button type="submit" class="btn btn-success w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<section class="container my-5">
  <div class="d-flex gap-3 text-center ps-5 pe-5 w-100">
    

    <div class="w-50">
        <div class="card bg-primary text-white rounded-4 shadow-sm text-center ps-4 pe-4 w-auto">
            <div class="card-body">
                <div class="fs-1">
                    <img src="../main/images/phone.png" alt="" class="img-fluid" style="max-width: 60px;">
                </div>
                <h5 class="fw-bold mt-3">Phone Number</h5>
                <p class="mb-0 fs-5">0912 345 6789</p>
                </div>
        </div>
    </div>



    <div class="w-100">
      <div class="card bg-primary text-white rounded-4 shadow-sm ps-6 pe-6 w-auto">
        <div class="card-body">
          <div class="fs-1">
            <img src="../main/images/email.png" alt="" class="img-fluid py-3" style="max-width: 60px;">
          </div>
          <h5 class="fw-bold">Email Address</h5>
          <p class="mb-0 fs-5">bahiledreamlandestate@gmail.com</p>
        </div>
      </div>
    </div>


    <div class="w-100">
      <div class="card bg-primary text-white rounded-4 shadow-sm w-auto">
        <div class="card-body">
          <div class="fs-1">
            <img src="../main/images/address.png" alt="" class="img-fluid pb-2" style="max-width: 57px;">
          </div>
          <h5 class="fw-bold">Address</h5>
          <p class="mb-0 fs-5">Bahile, Puerto Princesa City, Palawan</p>
        </div>
      </div>
    </div>

  </div>
</section>
</section>

<footer class="bg-primary text-white pt-4">
  <div class="container ps-4 pe-5 py-3">
    <div class="row g-4 text-center text-md-start align-items-start">

      <!-- Left -->
      <div class="col-12 col-md-6 col-lg-7">
        <h4 class="fw-bold fs-3">Bahile Dreamland Estates</h4>
        <p class="fs-4 mb-0">
          Bahile Dreamland Estates is a master-planned residential community in Puerto Princesa, Palawan,
          offering secure, sustainable, and nature-inspired living for families and investors.
        </p>
      </div>

      <!-- Quick Links -->
      <div class="col-6 col-md-3 col-lg-3">
        <h5 class="fw-bold fs-3">Quick Links</h5>
        <ul class="list-unstyled fs-4 mb-0">
          <li><a href="#" class="text-white text-decoration-none">Project Profile</a></li>
          <li><a href="#" class="text-white text-decoration-none">About</a></li>
          <li><a href="#" class="text-white text-decoration-none">Project Components</a></li>
          <li><a href="#" class="text-white text-decoration-none">Feedback</a></li>
          <li><a href="#" class="text-white text-decoration-none">Contact Us</a></li>
        </ul>
      </div>

      <!-- Follow Us -->
      <div class="col-6 col-md-3 col-lg-2">
        <h5 class="fw-bold fs-3">Follow Us</h5>
        <div class="d-flex justify-content-center justify-content-md-start gap-3">
          <a href="#" class="text-white"><img src="../main/images/fb.png" class="img-fluid" alt="Facebook"></a>
          <a href="#" class="text-white"><img src="../main/images/x.png" class="img-fluid" alt="X"></a>
          <a href="#" class="text-white"><img src="../main/images/ins.png" class="img-fluid" alt="Instagram"></a>
          <a href="#" class="text-white"><img src="../main/images/in.png" class="img-fluid" alt="LinkedIn"></a>
        </div>
      </div>
    </div>

    </div>
  </div>
  <div class="text-center mt-3 pb-3 bg-white text-dark py-3">
    <small>©2025 Bahile Dreamland Estates All Rights Reserved.</small>
  </div>
</footer>
