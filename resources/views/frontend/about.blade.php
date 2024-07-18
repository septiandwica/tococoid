@extends('frontend.layouts.app')
@section('contents')
<article
class="herobread container-fluid d-flex align-items-center justify-content-center">
<section class=" container">
    <div class=" text-center "  data-aos="fade-up" data-aos-duration="1000" >
        <h1 >About Us</h1>
        <p class="mb-5">Some fact about us</p>

    </div>
</section>
</article>
<article class="aboutus py-5">
<div class="container py-5">
    <div class="row text-center pb-5"  data-aos="fade-down" data-aos-duration="1500" >
        <p>{{ $general->about_description }}</p>
        
    </div>
    <div class="row">
        <div class="col-lg-4 d-flex align-items-center justify-content-center"  data-aos="fade-left" data-aos-duration="1500">
            <div class="vission">
                <h2>Vission</h2>
                <p>
                    {{ $general->about_vission}}
                </p>
            </div>
        </div>
        <div class="col-lg-4 py-5 py-lg-0 d-flex align-items-center justify-content-center"  data-aos="fade-up" data-aos-duration="1000" >
            <img src="./src/img/about.jpg" width="300px" alt="">
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="fade-right" data-aos-duration="1500">
            <div class="mission">
                <h2>Mission</h2>
                {{ $general->about_mission}}
            </div>
        </div>
    </div>
</div>
</article>
<article class="selling py-5">
<section class="container  py-5 ">
   
    <div class="row text-center">
        <div class="col-md-2" data-aos="fade-down" data-aos-duration="1500">
            <img src="./src/img/tococo.png" width="100px" alt="">
            <h1>4000+</h1>
            <p>Tococo Chips</p>
        </div>
        <div class="col-md-2" data-aos="fade-down" data-aos-duration="1500">
            <img src="./src/img/tococo.png" width="100px" alt="">
            <h1>4000+</h1>
            <p>Tococo Chips</p>
        </div>
        <div class="col-md-2" data-aos="fade-down" data-aos-duration="1500">
            <img src="./src/img/tococo.png" width="100px" alt="">
            <h1>4000+</h1>
            <p>Tococo Chips</p>
        </div>
        <div class="col-md-2" data-aos="fade-down" data-aos-duration="1500">
            <img src="./src/img/tococo.png" width="100px" alt="">
            <h1>4000+</h1>
            <p>Tococo Chips</p>
        </div>
        <div class="col-md-2" data-aos="fade-down" data-aos-duration="1500">
            <img src="./src/img/tococo.png" width="100px" alt="">
            <h1>4000+</h1>
            <p>Tococo Chips</p>
        </div>
        <div class="col-md-2" data-aos="fade-down" data-aos-duration="1500">
            <img src="./src/img/tococo.png" width="100px" alt="">
            <h1>4000+</h1>
            <p>Tococo Chips</p>
        </div>
    </div>
</section>
</article>
<article class="py-5">
<section id="team" class="team section-bg">
    <div class="container">

      <div class="title" data-aos="fade-right" data-aos-duration="1500">
        <h1>Experience Team</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, ducimus.</p>
      </div>

      <div class="row pt-5">

        <div class="col-lg-6" data-aos="fade-down" data-aos-duration="1500">
          <div class="member d-flex align-items-start"  >
            <div class="teampic"><img src="./src/img/teams/team1.png" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Alfito Yuro</h4>
              <span>Chief Executive Officer</span>
              
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, ducimus.</p>
              <div class="social">
                <a href=""><i class="fab fa-instagram " aria-hidden="true"></i></a>
                <a href=""><i class="fab fa-linkedin" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-duration="1500">
          <div class="member d-flex align-items-start" >
            <div class="teampic"><img src="./src/img/teams/team2.png" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Benjamin</h4>
              <span>Full-stack developer</span>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, ducimus.</p>
              <div class="social">
                <a href=""><i class="fab fa-instagram " aria-hidden="true"></i></a>
                <a href=""><i class="fab fa-linkedin" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4" data-aos="fade-down" data-aos-duration="1500">
          <div class="member d-flex align-items-start" >
            <div class="teampic"><img src="./src/img/teams/team3.png" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Amelia</h4>
              <span>Senior software engineer</span>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, ducimus.</p>
              <div class="social">
                <a href=""><i class="fab fa-instagram " aria-hidden="true"></i></a>
                <a href=""><i class="fab fa-linkedin" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-duration="1500">
          <div class="member d-flex align-items-start" >
            <div class="teampic"><img src="./src/img/teams/team4.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Charlotte</h4>
              <span>Senior software engineer</span>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, ducimus.</p>
              <div class="social">
                <a href=""><i class="fab fa-instagram " aria-hidden="true"></i></a>
                <a href=""><i class="fab fa-linkedin" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
</article>
@endsection