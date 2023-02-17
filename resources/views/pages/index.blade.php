@extends('layouts.app')

@section('title', ' Home')

@section('content')
  <section class="h-100 w-100 bg-white" style="box-sizing: border-box;">
    <style scoped>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .content-3-1 .btn:focus,
      .content-3-1 .btn:active {
        outline: none !important;
      }

      .content-3-1 {
        padding: 5rem 2rem;
      }

      .content-3-1 .img-hero {
        width: 100%;
        margin-bottom: 3rem;
      }

      .content-3-1 .right-column {
        width: 100%;
      }

      .content-3-1 .title-text {
        font: 600 1.875rem/2.25rem Poppins, sans-serif;
        margin-bottom: 2.5rem;
        letter-spacing: -0.025em;
        color: #121212;
      }

      .content-3-1 .title-caption {
        font: 500 1.5rem/2rem Poppins, sans-serif;
        margin-bottom: 1.25rem;
        color: #121212;
      }

      .content-3-1 .circle {
        font: 500 1.25rem/1.75rem Poppins, sans-serif;
        height: 3rem;
        width: 3rem;
        margin-bottom: 1.25rem;
        border-radius: 9999px;
        background-color: #ffbf56;
      }

      .content-3-1 .text-caption {
        font: 400 1rem/1.75rem Poppins, sans-serif;
        letter-spacing: 0.025em;
        color: #565656;
      }

      .content-3-1 .btn-learn {
        font: 600 1rem/1.5rem Poppins, sans-serif;
        padding: 1rem 2.5rem;
        background-color: #ff7c57;
        transition: 0.3s;
        letter-spacing: 0.025em;
        border-radius: 0.75rem;
      }

      .content-3-1 .btn-learn:hover {
        background-color: #ff9779;
        transition: 0.3s;
      }

      @media (min-width: 768px) {
        .content-3-1 .title-text {
          font: 600 2.25rem/2.5rem Poppins, sans-serif;
        }
      }

      @media (min-width: 992px) {
        .content-3-1 .img-hero {
          width: 50%;
          margin-bottom: 0;
        }

        .content-3-1 .right-column {
          width: 50%;
        }

        .content-3-1 .circle {
          margin-right: 1.25rem;
          margin-bottom: 0;
        }
      }
    </style>

    <div class="content-3-1 container-xxl mx-auto position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="d-flex flex-lg-row flex-column align-items-center">
        <!-- Left Column -->
        <div class="img-hero text-center justify-content-center d-flex">
          <img id="hero" class="img-fluid"
            src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content3/Content-3-1.png"
            alt="" />
        </div>

        <!-- Right Column -->
        <div class="right-column d-flex flex-column align-items-lg-start align-items-center text-lg-start text-center">
          <h2 class="title-text">3 Keys Benefit</h2>
          <ul class="p-0 m-0">
            <li class="list-unstyled" style="margin-bottom: 2rem">
              <h4
                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center">
                  1
                </span>
                Trusted Mentor
              </h4>
              <p class="text-caption">
                We have provided highly experienced mentors<br class="d-sm-inline d-none" />
                for several years.
              </p>
            </li>
            <li class="list-unstyled" style="margin-bottom: 2rem">
              <h4
                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center">
                  2
                </span>
                Access Forever
              </h4>
              <p class="text-caption">
                Are you busy at work so it's hard to consult? don't<br class="d-sm-inline d-none" />
                worry because you can access anytime.
              </p>
            </li>
            <li class="list-unstyled" style="margin-bottom: 4rem">
              <h4
                class="title-caption d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                <span class="circle text-white d-flex align-items-center justify-content-center">
                  3
                </span>
                Halfpenny
              </h4>
              <p class="text-caption">
                We provide economical packages for those of you<br class="d-sm-inline d-none" />
                who are still in school or workers.
              </p>
            </li>
          </ul>
          <button class="btn btn-learn text-white">Learn More</button>
        </div>
      </div>
    </div>
  </section>

  <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
    <style scoped>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

      .content-2-1 .btn:focus,
      .content-2-1 .btn:active {
        outline: none !important;
      }

      .content-2-1 .title-text {
        padding-top: 5rem;
        margin-bottom: 3rem;
      }

      .content-2-1 .text-title {
        font: 600 2.25rem/2.5rem Poppins, sans-serif;
        color: #121212;
        margin-bottom: 0.625rem;
      }

      .content-2-1 .text-caption {
        color: #121212;
        font-weight: 300;
      }

      .content-2-1 .column {
        padding: 2rem 2.25rem;
      }

      .content-2-1 .icon {
        margin-bottom: 1.5rem;
      }

      .content-2-1 .icon-title {
        font: 500 1.5rem/2rem Poppins, sans-serif;
        margin-bottom: 0.625rem;
        color: #121212;
      }

      .content-2-1 .icon-caption {
        font: 400 1rem/1.625 Poppins, sans-serif;
        letter-spacing: 0.025em;
        color: #565656;
      }

      .content-2-1 .card-block {
        padding: 1rem 1rem 5rem;
      }

      .content-2-1 .card {
        padding: 1.75rem;
        background-color: #fff7f4;
        border-radius: 0.75rem;
        border: 1px solid #ff7c57;
      }

      .content-2-1 .card-title {
        font: 600 1.5rem/2rem Poppins, sans-serif;
        margin-bottom: 0.625rem;
        color: #000000;
      }

      .content-2-1 .card-caption {
        font: 300 1rem/1.5rem Poppins, sans-serif;
        color: #565656;
        letter-spacing: 0.025em;
        margin-bottom: 0;
      }

      .content-2-1 .btn-card {
        font: 700 1rem/1.5rem Poppins, sans-serif;
        background-color: #ff7c57;
        padding-top: 1rem;
        padding-bottom: 1rem;
        width: 100%;
        border-radius: 0.75rem;
        margin-bottom: 1.25rem;
      }

      .content-2-1 .btn-card:hover {
        --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
          0 4px 6px -2px rgba(0, 0, 0, 0.05);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }

      .content-2-1 .btn-outline {
        font: 400 1rem/1.5rem Poppins, sans-serif;
        color: #979797;
        border: 1px solid #979797;
        padding-top: 1rem;
        padding-bottom: 1rem;
        width: 100%;
        border-radius: 0.75rem;
      }

      .content-2-1 .btn-outline:hover {
        border: 1px solid #ff7c57;
        color: #ff7c57;
      }

      .content-2-1 .card-text {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
      }

      .content-2-1 .grid-padding {
        padding: 0rem 1rem 3rem;
      }

      @media (min-width: 576px) {
        .content-2-1 .grid-padding {
          padding: 0rem 2rem 3rem;
        }

        .content-2-1 .card-block {
          padding: 3rem 2rem 5rem;
        }
      }

      @media (min-width: 768px) {
        .content-2-1 .grid-padding {
          padding: 0rem 4rem 3rem;
        }

        .content-2-1 .card-block {
          padding: 3rem 4rem 5rem;
        }
      }

      @media (min-width: 992px) {
        .content-2-1 .grid-padding {
          padding: 1rem 6rem 3rem;
        }

        .content-2-1 .card-block {
          padding: 3rem 6rem 5rem;
        }

        .content-2-1 .column {
          padding: 0rem 2.25rem;
        }
      }

      @media (min-width: 1200px) {
        .content-2-1 .grid-padding {
          padding: 1rem 10rem 3rem;
        }

        .content-2-1 .card-block {
          padding: 3rem 6rem 5rem;
        }

        .content-2-1 .card-btn-space {
          margin-top: 15px;
          margin-bottom: 15px;
        }

        .content-2-1 .btn-outline,
        .content-2-1 .btn-card {
          width: 95%;
          float: right;
        }
      }

      @media (max-width: 980px) {
        .content-2-1 .card-btn-space {
          width: 100%;
        }
      }
    </style>
    
    <div class="content-2-1 container-xxl mx-auto p-0  position-relative" style="font-family: 'Poppins', sans-serif">
      <div class="text-center title-text">
        <h1 class="text-title">3 Keys Benefit</h1>
        <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
          You can easily manage your business with a powerful tools
        </p>
      </div>

      <div class="grid-padding text-center">
        <div class="row">
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-2.png"
                alt="" />
            </div>
            <h3 class="icon-title">Easy to Operate</h3>
            <p class="icon-caption">
              This can easily help you to<br />
              grow up your business fast
            </p>
          </div>
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-3.png"
                alt="" />
            </div>
            <h3 class="icon-title">Real-Time Analytic</h3>
            <p class="icon-caption">
              With real-time analytics, you<br />
              can check data in real time
            </p>
          </div>
          <div class="col-lg-4 column">
            <div class="icon">
              <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-4.png"
                alt="" />
            </div>
            <h3 class="icon-title">Very Full Secured</h3>
            <p class="icon-caption">
              With real-time analytics, we<br />
              will guarantee your data
            </p>
          </div>
        </div>
      </div>

      <div class="card-block">
        <div class="card">
          <div class="d-flex flex-lg-row flex-column align-items-center">
            <div class="me-lg-3">
              <img
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-1%20(1).png"
                alt="" />
            </div>
            <div class="flex-grow-1 text-lg-start text-center card-text">
              <h3 class="card-title">
                Fast Business Management in 30 minutes
              </h3>
              <p class="card-caption">
                Our tools for business analysis helps an organization
                understand<br class="d-none d-lg-block" />
                market or business development.
              </p>
            </div>
            <div class="card-btn-space">
              <button class="btn btn-card text-white">Buy Now</button>
              <button class="btn btn-outline">Demo Version</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection