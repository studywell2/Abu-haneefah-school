@extends('layouts.app')

@section('title', 'Home')

@section('page-header')
    <h1 class="display-5 fw-bold">Welcome to Abu Haneefah Islamic Academy</h1>
    <p class="lead">Raising future leaders with knowledge, morals, and excellence</p>
    <a href="/admissions" class="btn btn-warning btn-lg mt-3">Apply for Admission</a>
@endsection

@section('content')

<!-- INTRO -->
<section class="text-center mb-5">
    <h2 class="fw-bold">A Place Where Faith Meets Excellence</h2>
    <p class="text-muted col-md-8 mx-auto">We combine Islamic values with modern education to nurture confident, disciplined and knowledgeable students prepared for success in this world and the hereafter.</p>
</section>

<!-- MISSION & VISION -->
<section class="mb-5">
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card border-0 shadow h-100">
                <div class="card-body p-4">
                    <h3 class="text-success fw-bold">Our Mission</h3>
                    <p>To provide sound Islamic and contemporary education that nurtures God‑conscious, morally upright and academically excellent learners who serve humanity with integrity.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 shadow h-100">
                <div class="card-body p-4">
                    <h3 class="text-success fw-bold">Our Vision</h3>
                    <p>To raise a generation grounded in faith, enriched with knowledge and guided by noble character for positive societal impact.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FEATURES -->
<section class="mb-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Why Choose Our School</h2>
        <p class="text-muted">Excellence in every aspect of school life</p>
    </div>
    <div class="row g-4 text-center">
        <div class="col-md-4">
            <div class="card border-0 shadow h-100 p-4">
                <h5 class="fw-bold">Qualified Teachers</h5>
                <p class="text-muted">Experienced educators dedicated to academic success and character development.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow h-100 p-4">
                <h5 class="fw-bold">Modern Learning</h5>
                <p class="text-muted">Interactive classrooms and practical learning approaches for deeper understanding.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow h-100 p-4">
                <h5 class="fw-bold">Moral Training</h5>
                <p class="text-muted">Strong Islamic upbringing shaping discipline, manners and responsibility.</p>
            </div>
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="bg-success text-light text-center rounded p-5 mb-5">
    <h2 class="fw-bold">Admissions Ongoing</h2>
    <p>Give your child a balanced Islamic and Western education today.</p>
    <a href="/admissions" class="btn btn-warning btn-lg">Start Application</a>
</section>

<!-- NEWS -->
<section class="mb-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Latest News</h2>
        <p class="text-muted">Recent activities and achievements</p>
    </div>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body">
                    <h5 class="fw-bold">Science Fair</h5>
                    <p class="text-muted">Students presented innovative projects demonstrating creativity and research skills.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body">
                    <h5 class="fw-bold">Sports Competition</h5>
                    <p class="text-muted">Our teams excelled and won multiple awards in inter‑school competitions.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow h-100">
                <div class="card-body">
                    <h5 class="fw-bold">Qur'an Competition</h5>
                    <p class="text-muted">Students displayed outstanding memorization and tajweed skills.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
