@extends('layouts.app')

@section('content')
<section class="py-5" style="background: url('https://cdn.pixabay.com/photo/2016/11/19/14/00/school-1836581_1280.jpg') no-repeat center; background-size: cover;">
    <div class="container py-5" style="background-color: rgba(255, 255, 255, 0.95); border-radius: 20px;">

        <!-- Header -->
        <div class="row mb-5 text-center">
            <h1 class="fw-bold text-success">Contact Us</h1>
            <p class="text-muted fs-5">We’re here to answer your questions. Send us a message or visit our school.</p>
        </div>

        <div class="row g-5 align-items-start">
            <!-- Left: Contact Info -->
            <div class="col-lg-5">
                <div class="p-4 shadow-lg rounded-4 bg-light border border-success h-100">
                    <h4 class="text-success mb-4"><i class="bi bi-telephone-fill me-2"></i>Get in Touch</h4>

                    <div class="d-flex align-items-start mb-4">
                        <i class="bi bi-geo-alt-fill text-success fs-3 me-3"></i>
                        <div>
                            <strong>Address:</strong><br> Wisdom Street, Along Agbara Road, Onigbongbo Atan, Ogun State
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <i class="bi bi-telephone text-success fs-3 me-3"></i>
                        <div>
                            <strong>Phone:</strong> 08056501115 <br>
                            <strong>Phone:</strong> 08123483155
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <i class="bi bi-envelope-fill text-success fs-3 me-3"></i>
                        <div>
                            <strong>Email:</strong> <a href="mailto:abuaneefah330@gmail.com">abuaneefah330@gmail.com</a>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <i class="bi bi-clock-fill text-success fs-3 me-3"></i>
                        <div>
                            <strong>Office Hours:</strong> Mon - Fri, 8:00 AM - 4:00 PM
                        </div>
                    </div>

                    <div class="mt-4">
                        <h5 class="text-success mb-3">Follow Us</h5>
                        <a href="#" class="btn btn-outline-success btn-sm me-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="btn btn-outline-success btn-sm me-2"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="btn btn-outline-success btn-sm"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>

            <!-- Right: Contact Form -->
            <div class="col-lg-7">
                <div class="p-5 shadow-lg rounded-4 bg-white border border-success h-100">

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                        @csrf

                        <div class="row g-3">
                            <div class="col-md-6 position-relative">
                                <i class="bi bi-person-fill input-icon text-success"></i>
                                <input type="text" class="form-control rounded-pill ps-5 py-2 shadow-sm @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Your Name" required>
                                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="col-md-6 position-relative">
                                <i class="bi bi-envelope-fill input-icon text-success"></i>
                                <input type="email" class="form-control rounded-pill ps-5 py-2 shadow-sm @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Your Email" required>
                                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="col-12 position-relative">
                                <i class="bi bi-pencil-fill input-icon text-success"></i>
                                <input type="text" class="form-control rounded-pill ps-5 py-2 shadow-sm @error('subject') is-invalid @enderror" id="subject" name="subject" value="{{ old('subject') }}" placeholder="Subject" required>
                                @error('subject')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="col-12 position-relative">
                                <i class="bi bi-chat-text-fill input-icon text-success"></i>
                                <textarea class="form-control rounded-3 ps-5 py-3 shadow-sm @error('message') is-invalid @enderror" id="message" name="message" rows="5" placeholder="Your Message" required>{{ old('message') }}</textarea>
                                @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-success w-100 btn-lg shadow-sm hover-scale">
                                    <i class="bi bi-send-fill me-2"></i>Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@push('styles')
<style>
.input-icon {
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 1.2rem;
}

.contact-form .form-control {
    transition: all 0.3s ease;
    border: 1px solid #28a745;
}
.contact-form .form-control:focus {
    box-shadow: 0 0 15px rgba(40, 167, 69, 0.25);
    border-color: #28a745;
}

.hover-scale:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease-in-out;
}

/* Add subtle animation to icons on focus */
.contact-form .form-control:focus + .input-icon {
    color: #198754;
    transform: translateY(-50%) scale(1.2);
    transition: all 0.3s ease-in-out;
}
</style>
@endpush
@endsection
