@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="bg-success text-light text-center py-5">
    <div class="container py-5">
        <h1 class="display-4 fw-bold">About Abu Haneefah School</h1>
        <p class="lead">Excellence in education with strong morals and values</p>
        <a href="/admissions" class="btn btn-warning btn-lg mt-3">Apply Now</a>
    </div>
</section>

<!-- SCHOOL HISTORY -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Our History</h2>
            <p class="text-muted">A legacy of academic excellence and character building</p>
        </div>
        <p>
            Abu Haneefah School was founded to nurture responsible and innovative leaders.  
            Since its inception, we have focused on quality education, blending academic excellence with moral development.  
            Our students thrive in a safe, engaging, and inspiring environment guided by passionate educators.
        </p>
        <p>
            Over the years, we have grown to include modern facilities, a dynamic curriculum, and a wide range of extracurricular activities.  
            Our vision is to create lifelong learners who make a positive impact in society.
        </p>
    </div>
</section>

<!-- MISSION & VISION -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Our Mission & Vision</h2>
            <p class="text-muted">What drives us every day</p>
        </div>
        <div class="row text-center">
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm p-3 border-0">
                    <div class="card-body">
                        <h3 class="card-title text-success">Mission</h3>
                        <p class="card-text">To provide quality education that nurtures academic excellence and moral integrity in every student.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card h-100 shadow-sm p-3 border-0">
                    <div class="card-body">
                        <h3 class="card-title text-success">Vision</h3>
                        <p class="card-text">To be recognized as a leading institution producing responsible, innovative, and lifelong learners.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CORE VALUES -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Our Core Values</h2>
            <p class="text-muted">The principles that guide our school</p>
        </div>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 p-3">
                    <i class="bi bi-shield-lock-fill fs-1 text-success mb-3"></i>
                    <h5 class="card-title">Discipline</h5>
                    <p class="card-text">We instill self-discipline and respect in every student to prepare them for life.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 p-3">
                    <i class="bi bi-lightning-fill fs-1 text-success mb-3"></i>
                    <h5 class="card-title">Innovation</h5>
                    <p class="card-text">We encourage creativity and critical thinking in academics and co-curricular activities.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm border-0 p-3">
                    <i class="bi bi-people-fill fs-1 text-success mb-3"></i>
                    <h5 class="card-title">Integrity</h5>
                    <p class="card-text">We build honesty and ethical behavior as the foundation of our students’ character.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ACHIEVEMENTS / AWARDS -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Achievements & Awards</h2>
            <p class="text-muted">Recognitions that highlight our excellence</p>
        </div>
        <ul class="list-group list-group-flush text-center">
            <li class="list-group-item border-0">🏆 Top Academic School 2025</li>
            <li class="list-group-item border-0">⚽ Best Sports Program</li>
            <li class="list-group-item border-0">🎨 Excellence in Arts & Music</li>
        </ul>
    </div>
</section>

<!-- STAFF / TEAM -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Meet Our Staff</h2>
            <p class="text-muted">Dedicated teachers shaping the future</p>
        </div>
        <ul class="list-group list-group-flush text-center">
            <li class="list-group-item border-0">Mrs. Amina Bello – Head of Primary School</li>
            <li class="list-group-item border-0">Mr. Ahmed Musa – Secondary School Coordinator</li>
            <li class="list-group-item border-0">Mrs. Fatima Ali – Art & Co-curricular Teacher</li>
            <li class="list-group-item border-0">Mr. John Okoro – Science & Math Teacher</li>
        </ul>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Testimonials</h2>
            <p class="text-muted">What our parents and students say</p>
        </div>

        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <!-- Testimonial 1 -->
                <div class="carousel-item active">
                    <div class="card h-100 shadow-sm p-4 border-0 text-center">
                        <p class="card-text">"Abu Haneefah School has provided excellent education and a nurturing environment for my child."</p>
                        <h6 class="card-subtitle text-success">– Mrs. Fatima Ali</h6>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="carousel-item">
                    <div class="card h-100 shadow-sm p-4 border-0 text-center">
                        <p class="card-text">"The school balances academics, arts, and sports perfectly. Highly recommend!"</p>
                        <h6 class="card-subtitle text-success">– Mr. Ahmed Musa</h6>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="carousel-item">
                    <div class="card h-100 shadow-sm p-4 border-0 text-center">
                        <p class="card-text">"Teachers are dedicated and truly care about each student's success. My child loves learning here."</p>
                        <h6 class="card-subtitle text-success">– Mrs. Amina Bello</h6>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="carousel-item">
                    <div class="card h-100 shadow-sm p-4 border-0 text-center">
                        <p class="card-text">"A safe, engaging, and inspiring environment where students are encouraged to excel."</p>
                        <h6 class="card-subtitle text-success">– Mr. John Okoro</h6>
                    </div>
                </div>

            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-success rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-success rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="py-5 bg-success text-light text-center">
    <div class="container">
        <h2 class="fw-bold mb-3">Join Abu Haneefah School Today</h2>
        <p class="mb-4">Enroll your child and give them the best foundation for the future</p>
        <a href="/admissions" class="btn btn-warning btn-lg">Apply Now</a>
    </div>
</section>

@endsection
