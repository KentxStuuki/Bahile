<section class="container text-primary">
    <div class="text-center my-4 fs-5">
        <img src="../main/project_components_image/pd.png" alt="" class="img-fluid" style="max-width: 250px; height: auto;" data-aos="fade-up" data-aos-duration="1000">
        <h1 class="display-5" data-aos="fade-up" data-aos-duration="1500">Project Components</h1>
        <div data-aos="fade-up" data-aos-duration="2000">
          <p>Bahile Dreamland Estates offers well-structured features <br> to ensure a complete living experience:</p>
        </div>
    </div>
    <div id="project_components_content" class="position-relative"></div>
</section>
<script>
    const projContent = document.getElementById('project_components_content');
    projContent.innerHTML = `
        <div class="owl-carousel owl-theme">
            ${features.map(feature => `
                <div class="item p-4 d-flex flex-column justify-content-between" style="height: 500px;" data-aos="fade-up" data-aos-duration="2000">
                  <div>
                    <img src="${feature.imgpath}" 
                        alt="${feature.title}" 
                        class="mx-auto mb-4 h-auto rounded-xl object-cover">
                    <p class="fw-bolder mb-2 fs-5 mx-2">${feature.title}</p>
                    <p class="fs-5 mx-2">${feature.desc}</p>
                  </div>
                    <div class="text-center px-4">
                        <button id="${feature.buttonId}" class="btn btn-primary w-100 p-2 text-center mb-2 ">View all Details</button>
                    </div>
                </div>
            `).join('')}
        </div>
        <div class="owl-controls">
            <div class="custom-nav owl-nav text-white align-items-center" data-aos="fade-up" data-aos-duration="2000"></div>
        </div>
    `;
$(".owl-carousel").owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    navText: ["<div class='nav-btn'><p class='my-auto py-auto fs-3 fw-bold'>‹</p></div>", "<div class='nav-btn'><p class='my-auto py-auto fs-3 fw-bold'>›</p></div>"],
    navContainer: '#project_components_content .custom-nav',
    autoplay: true,
    dots: false,
    autoplayTimeout: 4000,
    responsive: {
        0: { items: 1 },
        600: { items: 2 },
        1000: { items: 3 }
    }
});
</script>
<style>
/* Project Components Section */
.custom-nav {
  position: absolute;
  top: 25%;
  left: -3%;
  right: -3%;
}
.custom-nav .owl-prev,
.custom-nav .owl-next {
  position: absolute;
  height: 50px;
  width: 50px;
  border-radius: 50px;
  color: inherit;
  background: #00A859; /* from $secondary */
  border: none;
  z-index: 100;
}

.custom-nav .owl-prev {
  left: 0;
}

.custom-nav .owl-next {
  right: 0;
}
@media (max-width: 992px) {
  .custom-nav {
    display: none;
  }
}
</style>