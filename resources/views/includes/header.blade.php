    <section class="h-100 w-100" style="
      box-sizing: border-box;
      position: relative;
      background-image: linear-gradient(
        to bottom,
        rgba(39, 59, 86, 1),
        rgba(36, 49, 66, 1)
      );">
      <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .header-3-1 .modal-backdrop.show {
          background-color: #ffffff;
          opacity: 0.6;
        }

        .header-3-1 .modal-item.modal {
          top: 2rem;
        }

        .header-3-1 .navbar {
          padding: 2rem 2rem;
        }

        .header-3-1 .navbar-light .navbar-nav .nav-link {
          font: 300 0.875rem/1.5rem Poppins, sans-serif;
          color: #e8f1ff;
          padding: 0rem 1.25rem 0rem 0rem;
          margin-right: 0;
          margin-left: 0;
        }

        .header-3-1 .navbar-light .navbar-nav .nav-link:hover {
          font: 500 0.875rem/1.5rem Poppins, sans-serif;
          color: #ffffff;
        }

        .header-3-1 .navbar-light .navbar-nav .active {
          position: relative;
          width: fit-content;
        }

        .header-3-1 .navbar-light .navbar-nav .active>.nav-link,
        .header-3-1 .navbar-light .navbar-nav .nav-link.active,
        .header-3-1 .navbar-light .navbar-nav .nav-link.show,
        .header-3-1 .navbar-light .navbar-nav .show>.nav-link {
          font-weight: 500;
        }

        .header-3-1 .navbar-light .navbar-toggler-icon {
          background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .header-3-1 .btn:focus,
        .header-3-1 .btn:active {
          outline: none !important;
        }

        .header-3-1 .btn-fill {
          font: 500 0.875rem/1.25rem Poppins, sans-serif;
          border: 1px solid #ff7468;
          background-color: #ff7468;
          border-radius: 999px;
          padding: 0.75rem 1.5rem;
          transition: 0.3s;
        }

        .header-3-1 .btn-fill:hover {
          background-color: #ff8378;
          border: 1px solid #ff8378;
        }

        .header-3-1 .btn-no-fill {
          font: 500 0.875rem/1.25rem Poppins, sans-serif;
          color: #e8f1ff;
          padding: 0.75rem 2rem;
        }

        .header-3-1 .btn-no-fill:hover {
          color: #ffffff;
        }

        .header-3-1 .modal-item .modal-dialog .modal-content {
          border-radius: 8px;
        }

        .header-3-1 .responsive li {
          padding: 1rem;
        }

        .header-3-1 .hr {
          padding-left: 2rem;
          padding-right: 2rem;
        }

        .header-3-1 .hero {
          padding: 4rem 2rem;
        }

        .header-3-1 .left-column {
          margin-bottom: 0.75rem;
          width: 100%;
        }

        .header-3-1 .title-text-big {
          font: 600 2.25rem / normal Poppins, sans-serif;
          margin-bottom: 1.25rem;
          color: #fefefe;
        }

        .header-3-1 .text-caption {
          font: 300 1rem/1.5rem Poppins, sans-serif;
          letter-spacing: 0.025em;
          color: #e8f1ff;
          margin-bottom: 5rem;
        }

        .header-3-1 .btn-get {
          font: 600 1rem/1.5rem Poppins, sans-serif;
          padding: 1rem 2rem;
          border-radius: 999px;
          border: 1px solid #ff7468;
          background-color: #ff7468;
          transition: 0.3s;
        }

        .header-3-1 .btn-get:hover {
          background-color: #ff8378;
          border: 1px solid #ff8378;
        }

        .header-3-1 .btn-outline {
          font: 400 1rem/1.5rem Poppins, sans-serif;
          padding: 1rem 1.5rem;
          border-radius: 999px;
          background-color: transparent;
          border: 1px solid #5d6e86;
          color: #5d6e86;
          transition: 0.3s;
        }

        .header-3-1 .btn-outline:hover {
          border: 1px solid #ff7468;
          color: #ff7468;
        }

        .header-3-1 .btn-outline:hover div path {
          fill: #ff7468;
        }

        .header-3-1 .btn-outline:hover div rect {
          stroke: #ff7468;
        }

        .header-3-1 .right-column {
          width: 100%;
        }

        .header-3-1 .hero-right-3-1 {
          right: 2rem;
          bottom: 0;
        }

        .header-3-1 .card-outer {
          padding-left: 0;
          z-index: 1;
        }

        .header-3-1 .card {
          transition: 0.4s;
          top: 0px;
          left: 0px;
          background-color: #f5f5f5;
          padding: 1.25rem;
          border-radius: 0.75rem;
          width: 100%;
          margin-top: 2.5rem;
        }

        .header-3-1 .card:hover {
          top: -3px;
          left: -3px;
          transition: 0.4s;
        }

        .header-3-1 .card-name {
          font: 600 1rem/1.5rem Poppins, sans-serif;
          margin-bottom: 0.25rem;
        }

        .header-3-1 .card-job {
          font: 300 0.75rem/1rem Poppins, sans-serif;
          color: #aaa6a6;
          margin-bottom: 0;
        }

        .header-3-1 .card-price-left {
          font: 500 1rem/1.5rem Poppins, sans-serif;
          margin-bottom: 0.125rem;
          color: #4e91f9;
        }

        .header-3-1 .card-caption {
          font: 300 0.75rem/1rem Poppins, sans-serif;
          color: #aaa6a6;
          margin-bottom: 0;
        }

        .header-3-1 .card-price-right {
          font: 500 1rem/1.5rem Poppins, sans-serif;
          margin-bottom: 0.125rem;
          color: #1b8171;
        }

        .header-3-1 .btn-hire {
          font: 600 1rem/1.5rem Poppins, sans-serif;
          padding: 0.75rem 4rem;
          border-radius: 0.75rem;
          margin-bottom: 0.125rem;
          border: 1px solid #ff7468;
          background-color: #ff7468;
          transition: 0.3s;
        }

        .header-3-1 .btn-hire:hover {
          background-color: #ff8378;
          border: 1px solid #ff8378;
        }

        .header-3-1 .form {
          border-radius: 999px;
          background-color: #e8f1ff;
          box-sizing: border-box;
          font-size: 14px;
          padding: 0rem 1rem;
          padding-right: 0.5rem;
          outline: none;
        }

        .header-3-1 .form div input[type="text"] {
          background-color: #e8f1ff;
          box-sizing: border-box;
          font-size: 14px;
          padding: 0rem 0.5rem;
          outline: none;
          width: 100%;
        }

        .header-3-1 .center-search {
          bottom: 0.5rem;
        }

        @media (min-width: 576px) {
          .header-3-1 .modal-item .modal-dialog {
            max-width: 95%;
            border-radius: 12px;
          }

          .header-3-1 .navbar {
            padding: 2rem;
          }

          .header-3-1 .title-text-big {
            font-size: 3rem;
            line-height: 1.2;
          }
        }

        @media (min-width: 768px) {
          .header-3-1 .navbar {
            padding: 2rem 4rem;
          }

          .header-3-1 .hr {
            padding-left: 4rem;
            padding-right: 4rem;
          }

          .header-3-1 .hero {
            padding: 4rem;
          }

          .header-3-1 .left-column {
            margin-bottom: 3rem;
          }

          .header-3-1 .hero-right-3-1 {
            right: 4rem;
          }

          .header-3-1 .card {
            margin-left: auto;
            margin-top: 0;
          }
        }

        @media (min-width: 992px) {

          .header-3-1 .navbar-light .navbar-nav .active:before {
            content: "";
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;
            bottom: 0;
            height: 0px;
            width: 80%;
            /* or 100px */
            border-bottom: 2px solid #ff7468;
          }

          .header-3-1 .navbar {
            padding: 2rem 6rem;
          }

          .header-3-1 .navbar-light .navbar-nav .nav-link {
            padding: 0;
            margin-right: 1rem;
            margin-left: 1rem;
          }

          .header-3-1 .navbar-light .navbar-nav .active:before {
            width: 40%;
          }

          .header-3-1 .hr {
            padding-left: 6rem;
            padding-right: 6rem;
          }

          .header-3-1 .hero {
            padding: 4rem 6rem 5rem;
          }

          .header-3-1 .left-column {
            width: 50%;
            margin-bottom: 0;
          }

          .header-3-1 .title-text-big {
            font-size: 3.75rem;
            line-height: 1.25;
          }

          .header-3-1 .right-column {
            width: 50%;
          }

          .header-3-1 .hero-right-3-1 {
            right: 6rem;
          }

          .header-3-1 .card-outer {
            padding-left: 4rem;
          }

          .header-3-1 .center-search {
            left: 48%;
            top: 50%;
            bottom: auto;
            transform: translate(-48%, -50%);
          }

          .header-3-1 .form {
            width: 340px;
          }
        }

        @media (max-width: 1023px) {
          .header-3-1 .form div input[type="text"] {
            width: 100%;
          }
        }
      </style>

      <div class="container-xxl mx-auto p-0 header-3-1 position-relative" style="font-family: 'Poppins', sans-serif">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a href="#">
            <img style="margin-right: 0.75rem"
              src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-4.png" alt="" />
          </a>
          <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal" data-bs-target="#targetModal-item">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
            aria-labelledby="targetModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content bg-white border-0" style="
                    background-image: linear-gradient(
                      to bottom right,
                      rgba(39, 59, 86, 1),
                      rgba(36, 49, 66, 1)
                    );
                  ">
                <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                  <a class="modal-title" id="targetModalLabel">
                    <img style="margin-top: 0.5rem"
                      src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-4.png"
                      alt="" />
                  </a>
                  <button type="button" class="close btn-close text-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                  <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                    <li class="nav-item active position-relative">
                      <a class="nav-link main" href="#">Home</a>
                    </li>
                    <li class="nav-item position-relative">
                      <a class="nav-link" href="#">Feature</a>
                    </li>
                    <li class="nav-item position-relative">
                      <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item position-relative">
                      <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item position-relative">
                      <a class="nav-link" data-bs-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                        aria-controls="collapse">
                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M5.85 1.69346C3.5304 1.69346 1.65 3.57386 1.65 5.89346C1.65 8.21305 3.5304 10.0935 5.85 10.0935C8.1696 10.0935 10.05 8.21305 10.05 5.89346C10.05 3.57386 8.1696 1.69346 5.85 1.69346ZM0.25 5.89346C0.25 2.80066 2.75721 0.293457 5.85 0.293457C8.94279 0.293457 11.45 2.80066 11.45 5.89346C11.45 8.98625 8.94279 11.4935 5.85 11.4935C2.75721 11.4935 0.25 8.98625 0.25 5.89346Z"
                            fill="#E8F1FF" />
                          <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.85503 8.89848C9.12839 8.62512 9.57161 8.62512 9.84497 8.89848L14.045 13.0985C14.3183 13.3718 14.3183 13.8151 14.045 14.0884C13.7716 14.3618 13.3284 14.3618 13.055 14.0884L8.85503 9.88843C8.58166 9.61506 8.58166 9.17185 8.85503 8.89848Z"
                            fill="#E8F1FF" />
                        </svg>
                      </a>
                      <form method class="collapse position-absolute form center-search border-0" id="collapse">
                        <div class="d-flex">
                          <input type="text" class="rounded-full border-0 focus:outline-none" placeholder="Search" />
                          <button class="btn" type="button">
                            <svg style="width: 20px; height: 20px" data-bs-toggle="collapse" href="#collapse"
                              role="button" aria-expanded="false" aria-controls="collapse" fill="none" stroke="#273B56"
                              viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                          </button>
                        </div>
                      </form>
                    </li>
                  </ul>
                </div>
                <div class="modal-footer border-0" style="padding: 2rem; padding-top: 0.75rem">
                  <button class="btn btn-default btn-no-fill">Sign In</button>
                  <button class="btn btn-fill text-white">Register</button>
                </div>
              </div>
            </div>
          </div>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
              <li class="nav-item active position-relative">
                <a class="nav-link main text-white" href="#">Home</a>
              </li>
              <li class="nav-item position-relative">
                <a class="nav-link" href="#">Feature</a>
              </li>
              <li class="nav-item position-relative">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item position-relative">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item my-auto">
                <a class="nav-link" data-bs-toggle="collapse" href="#collapse" role="button" aria-expanded="false"
                  aria-controls="collapse">
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M5.85 1.69346C3.5304 1.69346 1.65 3.57386 1.65 5.89346C1.65 8.21305 3.5304 10.0935 5.85 10.0935C8.1696 10.0935 10.05 8.21305 10.05 5.89346C10.05 3.57386 8.1696 1.69346 5.85 1.69346ZM0.25 5.89346C0.25 2.80066 2.75721 0.293457 5.85 0.293457C8.94279 0.293457 11.45 2.80066 11.45 5.89346C11.45 8.98625 8.94279 11.4935 5.85 11.4935C2.75721 11.4935 0.25 8.98625 0.25 5.89346Z"
                      fill="#E8F1FF" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M8.85503 8.89848C9.12839 8.62512 9.57161 8.62512 9.84497 8.89848L14.045 13.0985C14.3183 13.3718 14.3183 13.8151 14.045 14.0884C13.7716 14.3618 13.3284 14.3618 13.055 14.0884L8.85503 9.88843C8.58166 9.61506 8.58166 9.17185 8.85503 8.89848Z"
                      fill="#E8F1FF" />
                  </svg>
                </a>
                <form class="collapse position-absolute form center-search border-0" id="collapse">
                  <div class="d-flex">
                    <input type="text" class="rounded-full border-0 focus:outline-none" placeholder="Search" />
                    <button class="btn" type="button">
                      <svg style="width: 20px; height: 20px" data-bs-toggle="collapse" href="#collapse" role="button"
                        aria-expanded="false" aria-controls="collapse" fill="none" stroke="#273B56" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                      </svg>
                    </button>
                  </div>
                </form>
              </li>
            </ul>
            <button class="btn btn-default btn-no-fill">Sign In</button>
            <button class="btn btn-fill text-white">Register</button>
          </div>
        </nav>
        <div class="hr">
          <hr style="
                border-color: #2e425c;
                background-color: #2e425c;
                opacity: 1;
                margin: 0 !important;
              " />
        </div>

        <div>
          <div class="mx-auto d-flex flex-lg-row flex-column hero">
            <!-- Left Column -->
            <div
              class="left-column flex-lg-grow-1 d-flex flex-column align-items-lg-start text-lg-start align-items-center text-center">
              <h1 class="title-text-big">
                The New Way<br class="d-lg-block d-none" />
                <span style="color: #7166ff">Learn Skills</span> From<br class="d-lg-block d-none" />
                Our Best Mentor
              </h1>
              <p class="text-caption">
                Hard to find a good mentor according to your wishes?<br class="d-sm-block d-none" />Don't worry because we
                are here to help you
              </p>
              <div class="d-flex flex-sm-row flex-column align-items-center mx-auto mx-lg-0 justify-content-center gap-3">
                <button class="btn btn-get text-white d-inline-flex">
                  Get Started
                </button>
                <button class="btn btn-outline">
                  <div class="d-flex align-items-center">
                    <svg class="me-2" width="27" height="27" viewBox="0 0 27 27" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M16.1793 13.7935L11.9166 10.9515V16.6355L16.1793 13.7935ZM18.1673 14.0708L11.1013 18.7815C11.0511 18.8149 10.9928 18.834 10.9326 18.8369C10.8723 18.8398 10.8125 18.8263 10.7593 18.7978C10.7062 18.7694 10.6617 18.727 10.6307 18.6753C10.5997 18.6236 10.5833 18.5644 10.5833 18.5041V9.0828C10.5833 9.0225 10.5997 8.96334 10.6307 8.91162C10.6617 8.8599 10.7062 8.81756 10.7593 8.7891C10.8125 8.76064 10.8723 8.74713 10.9326 8.75001C10.9928 8.7529 11.0511 8.77206 11.1013 8.80546L18.1673 13.5161C18.213 13.5466 18.2504 13.5878 18.2763 13.6362C18.3022 13.6846 18.3157 13.7386 18.3157 13.7935C18.3157 13.8483 18.3022 13.9024 18.2763 13.9507C18.2504 13.9991 18.213 14.0404 18.1673 14.0708Z"
                        fill="#5D6E86" />
                      <rect x="0.75" y="1.29346" width="25" height="25" rx="12.5" stroke="#5D6E86" />
                    </svg>
                    Watch the video
                  </div>
                </button>
              </div>
            </div>

            <!-- Right Column -->
            <div class="right-column d-flex justify-content-center justify-content-lg-start text-center pe-0">
              <img class="position-absolute d-lg-block d-none" style="bottom: 0; right: 0"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-1.png"
                alt="" />
              <img class="position-absolute d-lg-block d-none hero-right-3-1"
                src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-2.png"
                alt="" />
              <div class="d-flex align-items-end card-outer">
                <div class="mx-auto d-flex flex-wrap align-items-center">
                  <div class="card border-0 position-relative d-flex flex-column">
                    <div class="d-flex align-items-center" style="margin-bottom: 1.25rem">
                      <div>
                        <img style="margin-right: 1rem"
                          src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header3/Header-3-3.png"
                          alt="" />
                      </div>
                      <div class="text-start">
                        <p class="card-name">Felix Potah</p>
                        <p class="card-job">Pro Mentor</p>
                      </div>
                    </div>
                    <div class="row text-start" style="margin-bottom: 1.25rem">
                      <div class="col-6">
                        <p class="card-price-left">64,100</p>
                        <p class="card-caption">Followers</p>
                      </div>
                      <div class="col-6 ps-0">
                        <p class="card-price-right">106</p>
                        <p class="card-caption">Reviews</p>
                      </div>
                    </div>
                    <button class="btn btn-hire text-white">
                      <div class="test d-none">show</div>
                      Hire Me
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>