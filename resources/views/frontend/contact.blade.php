@extends('frontend.layouts.app')
@section('contents')
<article
class="herobread container-fluid d-flex align-items-center justify-content-center">
<section class=" container">
    <div class=" text-center " data-aos="fade-up" data-aos-duration="1500">
        <h1>Contact</h1>
        <p class="mb-5">Get in touch with us</p>
    </div>
</section>
</article>
<article class="contact pb-5">
<section class="container py-5 text-center">
    <div class="row contactinfo text-center">
        <figure class="text-center col-12" data-aos="zoom-in" data-aos-duration="1500">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.441645950008!2d109.0675729766972!3d-7.526712392486367!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e65651565757987%3A0x6cfe343a5504339!2sKERIPIK%20KELAPA%20KHAS%20BANYUMAS%20(TOCOCO%20CHIPS)!5e0!3m2!1sid!2sid!4v1720860168745!5m2!1sid!2sid"
                class="container"
                height="300px"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </figure>
        <div class="d-flex flex-wrap align-items-center justify-content-center my-4" data-aos="fade-down" data-aos-duration="1500">
            <a href="" class="m-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fab fa-facebook-square" aria-hidden="true"></i>
                        <h5 class="card-title">Tococoindonesia</h5>
                    </div>
                </div>
            </a>
            <a href="" class="m-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fab fa-facebook-square" aria-hidden="true"></i>
                        <h5 class="card-title">Tococoindonesia</h5>
                    </div>
                </div>
            </a>
            <a href="" class="m-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fab fa-facebook-square" aria-hidden="true"></i>
                        <h5 class="card-title">Tococoindonesia</h5>
                    </div>
                </div>
            </a>
            <a href="" class="m-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fab fa-facebook-square" aria-hidden="true"></i>
                        <h5 class="card-title">Tococoindonesia</h5>
                    </div>
                </div>
            </a>
            <a href="" class="m-4">
                <div class="card">
                    <div class="card-body">
                        <i class="fab fa-facebook-square" aria-hidden="true"></i>
                        <h5 class="card-title">Tococoindonesia</h5>
                    </div>
                </div>
            </a>

        </div>

        <div class="col-12 col-md-6 text-center text-md-start" data-aos="fade-right" data-aos-duration="1500">
            <h1>Get in touch with us</h1>
            <p>I would love to connect at your earliest convenience.</p>
        </div>
        <div class="col-12 col-md-6 " data-aos="fade-up" data-aos-duration="1500">
            <form action="" method="get">
                <div class="row">
                    <div class="col-6 my-2">
                        <input
                            type="text"
                            class="form-control"
                            style="height: 50px;"
                            id="name"
                            placeholder="Enter your name">
                    </div>
                    <div class="col-6  my-2">
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            style="height: 50px;"
                            placeholder="Enter your email">
                    </div>
                    <div class="form-group  my-2">
                        <textarea
                            class="form-control"
                            style="height: 150px;"
                            id="message"
                            placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn-outln  my-2">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
</article>
@endsection