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
              <div class="col col-12 col-sm-6 col-lg-6">
                <img height="60px" src="https://www.vhv.rs/dpng/d/425-4258424_telephone-icon-cliparts-png-free-stock-free-phone.png"></img>
                  <h2><center>Contact Info</center></h2>
                  <p><span style="font-family: 'Times New Roman', Times, serif;" ><span style="font-size: medium;" >Rajagiri College of Social Sciences (Autonomous),
                    Rajagiri P.O,
                    Kalamassery, Cochin - 683 104,
                    Kerala, India.</span></span></p>
              </div>
          </div>

          @endsection