@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="bg-primary text-light text-center py-5 my-4 rounded" style="border-radius:10px;">
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
            @php
                $classes = [
                    ['icon'=>'bi-book', 'title'=>'Primary School', 'desc'=>'Grades 1–6: Foundational learning in literacy, numeracy, and core subjects.'],
                    ['icon'=>'bi-journal-text', 'title'=>'Junior Secondary', 'desc'=>'Grades 7–9: Emphasis on sciences, arts, critical thinking, and ICT skills.'],
                    ['icon'=>'bi-mortarboard', 'title'=>'Senior Secondary', 'desc'=>'Grades 10–12: Exam preparation, higher education readiness, and career guidance.'],
                ];
            @endphp
            @foreach($classes as $c)
            <div class="col-md-4 mb-4">
                <div class="card h-100 p-4 rounded shadow-sm border hover-shadow">
                    <div class="icon-circle bg-success text-white mb-3">
                        <i class="bi {{ $c['icon'] }} fs-2"></i>
                    </div>
                    <h5 class="card-title">{{ $c['title'] }}</h5>
                    <p class="card-text">{{ $c['desc'] }}</p>
                </div>
            </div>
            @endforeach
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
        @php
            $subjects = [
                ['icon'=>'bi-calculator', 'title'=>'Mathematics & Sciences', 'desc'=>'Mathematics, Physics, Chemistry, Biology, Computer Science – building logical thinking and problem-solving skills.'],
                ['icon'=>'bi-chat-left-text', 'title'=>'Languages & Literacy', 'desc'=>'English, Literature, and other languages to strengthen communication and comprehension.'],
                ['icon'=>'bi-palette', 'title'=>'Arts & Creativity', 'desc'=>'Music, Visual Arts, Drama, and Design encourage creativity and personal expression.'],
                ['icon'=>'bi-laptop', 'title'=>'ICT & Technology', 'desc'=>'Computer skills, coding, and digital literacy prepare students for the modern world.'],
                ['icon'=>'bi-people', 'title'=>'Social Studies & Ethics', 'desc'=>'History, Geography, and Moral Education develop responsible and informed citizens.'],
                ['icon'=>'bi-heart-pulse', 'title'=>'Physical Education', 'desc'=>'Sports, health education, and team-building activities promote physical and social development.'],
            ];
        @endphp
        <div class="row text-center">
            @foreach($subjects as $s)
            <div class="col-md-4 mb-4">
                <div class="card h-100 p-4 rounded shadow-sm border hover-shadow">
                    <div class="icon-circle bg-success text-white mb-3">
                        <i class="bi {{ $s['icon'] }} fs-2"></i>
                    </div>
                    <h5 class="card-title mb-3">{{ $s['title'] }}</h5>
                    <p class="card-text">{{ $s['desc'] }}</p>
                </div>
            </div>
            @endforeach
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
        @php
            $activities = [
                ['icon'=>'bi-trophy','title'=>'Sports','desc'=>'Football, basketball, athletics, and inter-school competitions.'],
                ['icon'=>'bi-music-note-beamed','title'=>'Arts & Clubs','desc'=>'Drama, music, art club, debate, and other creative activities.'],
                ['icon'=>'bi-robot','title'=>'STEM & Robotics','desc'=>'Hands-on learning, coding clubs, and science projects.'],
                ['icon'=>'bi-people-circle','title'=>'Leadership & Community','desc'=>'Student council, volunteer programs, and social responsibility initiatives.'],
            ];
        @endphp
        <div class="row text-center">
            @foreach($activities as $a)
            <div class="col-md-3 mb-4">
                <div class="card h-100 p-4 rounded shadow-sm border hover-shadow">
                    <div class="icon-circle bg-success text-white mb-3">
                        <i class="bi {{ $a['icon'] }} fs-2"></i>
                    </div>
                    <h5 class="card-title mb-3">{{ $a['title'] }}</h5>
                    <p class="card-text">{{ $a['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- CALL TO ACTION -->
<section class="py-5 bg-primary text-light text-center my-4 rounded">
    <div class="container">
        <h2 class="fw-bold mb-3">Give Your Child the Best Education</h2>
        <p class="mb-4">Enroll at Abu Haneefah School today and prepare them for a bright future</p>
        <a href="/admissions" class="btn btn-warning btn-lg shadow-sm">
            <i class="bi bi-pencil-square me-2"></i> Apply Now
        </a>
    </div>
</section>

@endsection

<!-- Custom CSS -->
@push('styles')
<style>
.icon-circle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px auto;
}

.hover-shadow:hover {
    box-shadow: 0 8px 20px rgba(0,0,0,0.15) !important;
    transform: translateY(-3px);
    transition: all 0.3s ease;
}
</style>
@endpush
