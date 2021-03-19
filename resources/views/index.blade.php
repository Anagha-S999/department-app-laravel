@extends("theme")

@section("contents")

<div class="container">
          <div class="row">
              <div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Events
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>NAAC peer team visit</strong> 
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Acheivements
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <strong>Rajagiri has been ranked 28th best college in the country by NIRF,MHRD Govt of India</strong> 
                        </div>
                      </div>
                    </div>
                    
                </div>
            </div>
            <div class="col">
                <h3><i>Welcome to Rajagiri</i></h3>

            <p>Drawing inspiration from the founder, St. Kuriakose Elias Chavara, a great visionary, reformer and religious leader of the 19th century, the Carmelites of Mary Immaculate (CMI), the first indigenous religious congregation for men in India, dedicated themselves to education at all levels</p>
            </div>
                
              </div>
              <div class="row">
                  <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img height="450px" src="https://storage.googleapis.com/ezap-prod/colleges/4679/rajagiri-college-of-social-sciences-cochin-campus.jpg" class="d-block w-100" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img height="450px" src="https://www.targetadmission.com/img/colleges/newc/1402-760829.jpg" class="d-block w-100" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img height="450px" src="https://www.joonsquare.com/usermanage/image/business/rajagiri-college-of-social-sciences-ernakulam-14557/rajagiri-college-of-social-sciences-ernakulam-rajagiri-college-of-social-sciences-1.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                  </div>
                  <div class="col col-12 col-md-6"></div>
              </div>
        </div>

      </div>

      @endsection