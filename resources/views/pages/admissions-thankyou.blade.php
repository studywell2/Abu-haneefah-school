@extends('layouts.app')

@section('content')
<section class="py-5" style="background: url('https://cdn.pixabay.com/photo/2015/09/05/22/46/school-926444_1280.jpg') no-repeat center; background-size: cover;">
    <div class="container py-5" style="background-color: rgba(0,0,0,0.6);">
        <div class="text-center text-light">
            <h1 class="display-3 fw-bold mb-3">Thank You!</h1>
            <p class="lead mb-4">Your application has been submitted successfully. We will review it and contact you shortly.</p>
            <a href="/" class="btn btn-warning btn-lg">Back to Home</a>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="fw-bold mb-3">Need Assistance?</h2>
        <p class="text-muted mb-4">If you have any questions about the admission process, please contact our admissions office.</p>
        <a href="/contact" class="btn btn-success">Contact Us</a>
    </div>
</section>
@endsection
