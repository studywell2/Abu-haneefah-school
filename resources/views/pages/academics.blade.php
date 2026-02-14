@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="bg-primary text-light text-center py-5 my-4" style="border-radius:10px;">
    <div class="container py-5">
        <h1 class="display-4 fw-bold">Academics at Abu Haneefah School</h1>
        <p class="lead">Quality education designed to inspire and prepare students for the future</p>
    </div>
</section>

<!-- ACADEMIC OVERVIEW -->
<section class="py-5 my-4">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Our Academic Approach</h2>
            <p class="text-muted">Combining strong academics, creativity, and critical thinking</p>
        </div>
        <p>
            At Abu Haneefah School, we offer a structured and engaging academic program for students from Primary to Secondary levels.  
            Our curriculum balances literacy, numeracy, sciences, arts, and technology, ensuring students develop holistically.  
            Each subject is taught by passionate teachers using modern teaching methods and well-equipped classrooms.
        </p>
        <p>
            Over the years, we have refined our programs to foster critical thinking, creativity, and ethical values.  
            Our students are prepared to excel in exams, embrace lifelong learning, and become responsible global citizens.
        </p>
    </div>
</section>

<!-- CLASSES / GRADES -->
<section class="py-5 bg-light my-4">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Classes & Grades</h2>
            <p class="text-muted">Tailored learning at every level</p>
        </div>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm p-4 border-0 rounded">
                    <i class="bi bi-book fs-1 text-success mb-3"></i>
                    <h5 class="card-title">Primary School</h5>
                    <p class="card-text">Grades 1–6: Foundational learning in literacy, numeracy, and core subjects.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm p-4 border-0 rounded">
                    <i class="bi bi-journal-text fs-1 text-success mb-3"></i>
                    <h5 class="card-title">Junior Secondary</h5>
                    <p class="card-text">Grades 7–9: Emphasis on sciences, arts, critical thinking, and ICT skills.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm p-4 border-0 rounded">
                    <i class="bi bi-mortarboard fs-1 text-success mb-3"></i>
                    <h5 class="card-title">Senior Secondary</h5>
                    <p class="card-text">Grades 10–12: Exam preparation, higher education readiness, and career guidance.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SUBJECTS / CURRICULUM -->
<section class="py-5 my-4">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Subjects We Offer</h2>
            <p class="text-muted">A balanced curriculum covering academics, arts, and technology</p>
        </div>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm p-4 border-0 rounded">
                    <i class="bi bi-calculator fs-1 text-success mb-3"></i>
                    <h5 class="card-title mb-3">Mathematics & Sciences</h5>
                    <p class="card-text">Mathematics, Physics, Chemistry, Biology, Computer Science – building logical thinking and problem-solving skills.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm p-4 border-0 rounded">
                    <i class="bi bi-chat-left-text fs-1 text-success mb-3"></i>
                    <h5 class="card-title mb-3">Languages & Literacy</h5>
                    <p class="card-text">English, Literature, and other languages to strengthen communication and comprehension.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm p-4 border-0 rounded">
                    <i class="bi bi-palette fs-1 text-success mb-3"></i>
                    <h5 class="card-title mb-3">Arts & Creativity</h5>
                    <p class="card-text">Music, Visual Arts, Drama, and Design encourage creativity and personal expression.</p>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm p-4 border-0 rounded">
                    <i class="bi bi-laptop fs-1 text-success mb-3"></i>
                    <h5 class="card-title mb-3">ICT & Technology</h5>
                    <p class="card-text">Computer skills, coding, and digital literacy prepare students for the modern world.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm p-4 border-0 rounded">
                    <i class="bi bi-people fs-1 text-success mb-3"></i>
                    <h5 class="card-title mb-3">Social Studies & Ethics</h5>
                    <p class="card-text">History, Geography, and Moral Education develop responsible and informed citizens.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm p-4 border-0 rounded">
                    <i class="bi bi-heart-pulse fs-1 text-success mb-3"></i>
                    <h5 class="card-title mb-3">Physical Education</h5>
                    <p class="card-text">Sports, health education, and team-building activities promote physical and social development.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- EXTRACURRICULAR ACTIVITIES -->
<section class="py-5 bg-light my-4">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Extracurricular Activities</h2>
            <p class="text-muted">Holistic development beyond academics</p>
        </div>
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm p-4 border-0 rounded">
                    <i class="bi bi-trophy fs-1 text-success mb-3"></i>
                    <h5 class="card-title mb-3">Sports</h5>
                    <p class="card-text">Football, basketball, athletics, and inter-school competitions.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm p-4 border-0 rounded">
                    <i class="bi bi-music-note-beamed fs-1 text-success mb-3"></i>
                    <h5 class="card-title mb-3">Arts & Clubs</h5>
                    <p class="card-text">Drama, music, art club, debate, and other creative activities.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm p-4 border-0 rounded">
                    <i class="bi bi-robot fs-1 text-success mb-3"></i>
                    <h5 class="card-title mb-3">STEM & Robotics</h5>
                    <p class="card-text">Hands-on learning, coding clubs, and science projects.</p>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm p-4 border-0 rounded">
                    <i class="bi bi-people-circle fs-1 text-success mb-3"></i>
                    <h5 class="card-title mb-3">Leadership & Community</h5>
                    <p class="card-text">Student council, volunteer programs, and social responsibility initiatives.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="py-5 bg-primary text-light text-center my-4">
    <div class="container">
        <h2 class="fw-bold mb-3">Give Your Child the Best Education</h2>
        <p class="mb-4">Enroll at Abu Haneefah School today and prepare them for a bright future</p>
        <a href="/admissions" class="btn btn-warning btn-lg">Apply Now</a>
    </div>
</section>

@endsection
