@extends('master')
@section('title', 'Accueil')
@section('contenu')
<section>
    <div class="row p-5">
        <div class="col-md-6">
            <div class="position-relative z-index-1 text-center text-lg-start mb-2 pt-5 mb-sm-0">
				<!-- SVG -->
				<figure class="fill-warning position-absolute bottom-0 end-0 me-5 d-none d-xl-block">
					<svg fill="#019bad" width="42px" height="42px">
						<path d="M21.000,-0.001 L28.424,13.575 L41.999,20.999 L28.424,28.424 L21.000,41.998 L13.575,28.424 L-0.000,20.999 L13.575,13.575 L21.000,-0.001 Z"></path>
					</svg>
				</figure>
				<!-- SVG -->
				<figure class="fill-success position-absolute top-0 start-50 translate-middle-x mt-n5 ms-5">
					<svg fill="#00aa9b" width="22px" height="21px">
						<path d="M10.717,4.757 L14.440,-0.001 L14.215,6.023 L20.142,4.757 L16.076,9.228 L21.435,12.046 L15.430,12.873 L17.713,18.457 L12.579,15.252 L10.717,20.988 L8.856,15.252 L3.722,18.457 L6.005,12.873 L-0.000,12.046 L5.359,9.228 L1.292,4.757 L7.220,6.023 L6.995,-0.001 L10.717,4.757 Z"></path>
					</svg>
				</figure>
				<!-- Title -->
				<h1 class="mb-0 display-6">Un apprentissage illimité à portée de main</h1>
				
				<!-- Content -->
				<p class="my-4 lead">Marché d'apprentissage et d'enseignement en ligne avec plus de 5K cours &amp; 10M d'étudiants. Enseigné par des experts pour vous aider à acquérir de nouvelles compétences.</p>
				
                <ul class="list-inline position-relative justify-content-center justify-content-lg-start mb-4">
					<li class="list-inline-item me-2"> <i style="color: #064689" class='bx bxs-check-circle'></i> Apprenez avec des experts</li>
					<li class="list-inline-item me-2"> <i style="color: #064689" class='bx bxs-check-circle'></i> Obtenir un certificat</li>
					<li class="list-inline-item"> <i style="color: #064689" class='bx bxs-check-circle'></i> Devenez membre</li>
				</ul>

				<div class="d-sm-flex align-items-center justify-content-center justify-content-lg-start">
					<!-- Button -->
					<a href="#" style="background: #064689" class="btn btn-lg text-light me-2 mb-4 mb-sm-0">Commencer maintenant!</a>
				</div>
			</div>
        </div>
        <div class="col-md-6">
            <img style="float: right; margin-right: 25px" width="400" src="{{ asset("assets/imgs/illustration-formation.png") }}" alt="home image">
        </div>
    </div>
</section>

<section class="py-0 py-xl-5">
    <div class="container">
        <div class="row g-4">
            <!-- Counter item -->
            <div class="col-sm-6 col-xl-3">
                <div style="background: #fef6e0" class="d-flex justify-content-center align-items-center p-4 bg-blue bg-opacity-10 rounded-3 border">
                    <span class="display-6 lh-1 text-blue mb-0"><i style="color: #f7c637" class='bx bx-tv'></i></span>
                    <div class="ms-4 h6 fw-normal mb-0">
                        <div class="d-flex">
                            <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="10" data-purecounter-delay="200" data-purecounter-duration="0">10</h5>
                            <span class="mb-0 h5">K</span>
                        </div>
                        <p class="mb-0">Online Courses</p>
                    </div>
                </div>
            </div>
            <!-- Counter item -->
            <div class="col-sm-6 col-xl-3">
                <div style="background: #e8ebed" class="d-flex justify-content-center align-items-center p-4 bg-blue bg-opacity-10 rounded-3 border">
                    <span class="display-6 lh-1 text-blue mb-0"><i style="color: #1d3b53" class='bx bxs-user'></i></span>
                    <div class="ms-4 h6 fw-normal mb-0">
                        <div class="d-flex">
                            <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="200" data-purecounter-delay="200" data-purecounter-duration="0">200</h5>
                            <span class="mb-0 h5">+</span>
                        </div>
                        <p class="mb-0">Expert Tutors</p>
                    </div>
                </div>
            </div>
            <!-- Counter item -->
            <div class="col-sm-6 col-xl-3">
                <div style="background: #f0ecf9" class="d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-10 rounded-3 border">
                    <span class="display-6 lh-1 text-purple mb-0"><i style="color: #6f42c1" class='bx bxs-award' ></i></span>
                    <div class="ms-4 h6 fw-normal mb-0">
                        <div class="d-flex">
                            <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="60" data-purecounter-delay="200" data-purecounter-duration="0">60</h5>
                            <span class="mb-0 h5">K+</span>
                        </div>
                        <p class="mb-0">Online Students</p>
                    </div>
                </div>
            </div>
            <!-- Counter item -->
            <div class="col-sm-6 col-xl-3">
                <div style="background: #e7f6f8" class="d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-10 rounded-3 border">
                    <span class="display-6 lh-1 text-purple mb-0"><i style="color: #17a2b8" class='bx bxs-objects-horizontal-center'></i></span>
                    <div class="ms-4 h6 fw-normal mb-0">
                        <div class="d-flex">
                            <h5 class="purecounter mb-0 fw-bold" data-purecounter-start="0" data-purecounter-end="6" data-purecounter-delay="300" data-purecounter-duration="0">6</h5>
                            <span class="mb-0 h5">K+</span>
                        </div>
                        <p class="mb-0">Certified Courses</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="row mb-4">
    <div class="col-lg-8 mx-auto text-center">
        <h2 class="fs-1">Most Popular Courses</h2>
        <p class="mb-0">Choose from hundreds of courses from specialist organizations</p>
    </div>
</div>

<div class="row d-flex align-center justify-centent-center w-100" style="justify-content: center">
    @if(!empty($f))
      @foreach($f as $for)
          <div class="col-sm-6 col-lg-4 col-xl-3 m-4">
              <div class="card shadow h-100">
                  <!-- Image -->
                  <img src="https://eduport.webestica.com/assets/images/courses/4by3/02.jpg" class="card-img-top" alt="course image">
                  <!-- Card body -->
                  <div class="card-body pb-0">
                      <!-- Badge and favorite -->
                      <div class="d-flex justify-content-between mb-2">
                          <a href="" class="badge bg-purple bg-opacity-10 text-dark" style="text-decoration: none;color:#8f6dcf; background: #f0ecf9">All level</a>
                          <a href="" class="h6 mb-0"><i class='bx bxs-heart' ></i></a>
                      </div>
                      <!-- Title -->
                      <h5 class="card-title fw-normal text-danger"><a href="#" style="color: #000; text-decoration: none">{{$for->nom}}</a></h5>
                      <p class="mb-2 text-truncate-2" style="color: #b2b3b5">{{$for->description}}</p>
                  </div>
                  <!-- Card footer -->
                  <div class="card-footer pt-4 pb-3" style="background: #fff">
                      <div class="d-flex justify-content-between">
                          <span class="h6 fw-normal mb-0 text-primary"><i class='bx bxs-time'></i>12h 56m</span>
                          <span class="h6 fw-normal mb-0 text-primary"><i class='bx bxs-spreadsheet'></i>15 lectures</span>
                      </div>
                  </div>
              </div>
          </div>
      @endforeach
      @else
          <div class="container" style="display: flex; justify-content: space-around">
              <div class="alert alert-danger text-center w-50">
                  Aucun cours disponible pour l'instant.
              </div>
          </div>
      @endif
</div>

<br><br><br>
        {{-- FAQ --}}


        <div class="py-20 py-lg-32 bg-body-tertiary rounded-4">
            <div class="container mw-screen-xl">
                <div class="row mb-20">
                    <div class="col-lg-12 mb-5">
                        <h1 class="ls-tight fw-bolder mb-4 text-center">Frequently asked questions</h1>
                        <p class="lead fw-normal text-center" style="font-size: 17px">Here are the FAQs along with brief and easy-to-understand answers:</p>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">
                    <div class="col">
                        <div class="vstack gap-10">
                            <div>
                                <h4 style="font-size:calc(1rem + .3vw);" class="mb-4">What is a Bootstrap theme??</h4>
                                <p class="text-sm">A Bootstrap theme is a pre-designed template that uses Bootstrap, a popular front-end framework, to streamline website development.</p>
                            </div>
                            <div>
                                <h4 style="font-size:calc(1rem + .3vw);" class="mb-4">Is the theme compatible with the latest Bootstrap version?</h4>
                                <p class="text-sm">Yes, the theme is compatible with the latest version of Bootstrap.</p>
                            </div>
                            <div>
                                <h4 style="font-size:calc(1rem + .3vw);" class="mb-4">How do I install the Bootstrap theme?</h4>
                                <p class="text-sm">Installation is easy! Follow the provided instructions in the theme's documentation for step-by-step guidance.</p>
                            </div>
                            <div>
                                <h4 style="font-size:calc(1rem + .3vw);" class="mb-4">Is the theme compatible with popular web browsers?</h4>
                                <p class="text-sm">Yes, the theme is compatible with major web browsers for a consistent user experience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="vstack gap-10">
                            <div>
                                <h4 style="font-size:calc(1rem + .3vw);" class="mb-4">How do I get a refund if I'm not satisfied with the theme?</h4>
                                <p class="text-sm">You can request a refund within the provided refund period, adhering to our refund policy.</p>
                            </div>
                            <div>
                                <h4 style="font-size:calc(1rem + .3vw);" class="mb-4">Is the theme mobile-friendly and responsive?</h4>
                                <p class="text-sm">Yes, the theme is designed to be mobile-friendly and responsive, ensuring a seamless experience on all devices.</p>
                            </div>
                            <div>
                                <h4 style="font-size:calc(1rem + .3vw);" class="mb-4">What kind of support is provided after purchase?</h4><p class="text-sm">After purchase, you'll receive support for a 6 months to help with any theme-related questions or issues. The only rule is that it must be well detailed, with examples and errors if any.</p></div><div><h4 style="font-size:calc(1rem + .3vw);" class="mb-4">How do I install the Bootstrap theme?</h4><p class="text-sm">Installation is easy! Follow the provided instructions in the theme's documentation for step-by-step guidance.</p></div></div></div><div class="col"><div class="vstack gap-10"><div><h4 style="font-size:calc(1rem + .3vw);" class="mb-4">Does the theme include documentation for setup and customization?</h4><p class="text-sm">Yes, comprehensive documentation is provided, guiding you through theme setup and customization processes.</p></div><div><h4 style="font-size:calc(1rem + .3vw);" class="mb-4">Are future updates included with the purchase??</h4><p class="text-sm">Yes, future updates to the theme are included with your purchase.</p></div><div><h4 style="font-size:calc(1rem + .3vw);" class="mb-4">Can I use the theme in multiple projects with a single purchase?</h4><p class="text-sm">The licensing allows usage in a single project per purchase. For multiple projects, additional licenses are needed.</p></div></div></div></div></div></div>


@endsection