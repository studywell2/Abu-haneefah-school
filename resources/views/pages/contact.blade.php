@extends('layouts.app')

@section('content')
<section class="py-5" style="background: url('https://cdn.pixabay.com/photo/2016/11/19/14/00/school-1836581_1280.jpg') no-repeat center; background-size: cover;">
    <div class="container py-5" style="background-color: rgba(255, 255, 255, 0.95); border-radius: 15px;">

        <div class="row mb-5 text-center">
            <h1 class="fw-bold text-success">Contact Us</h1>
            <p class="text-muted">We’d love to hear from you! Send us a message or visit our school.</p>
        </div>

        <div class="row g-4">
            <!-- Contact Info -->
            <div class="col-md-5">
                <div class="p-4 shadow-sm rounded-4 bg-light h-100 border border-success">
                    <h4 class="text-success mb-4"><i class="bi bi-telephone-fill me-2"></i>Our Contact Information</h4>
                    <p><i class="bi bi-geo-alt-fill text-success me-2"></i><strong>Address:</strong> Wisdom Street, Along Agbara Road, Onigbongbo Atan, Ogun State</p>
                    <p><i class="bi bi-telephone text-success me-2"></i><strong>Phone:</strong> 08056501115</p>
                    <p><i class="bi bi-telephone text-success me-2"></i><strong>Phone:</strong> 08123483155</p>
                    <p><i class="bi bi-envelope-fill text-success me-2"></i><strong>Email:</strong> <a href="mailto:abuaneefah330@gmail.com">abuaneefah330@gmail.com</a></p>
                    <p><i class="bi bi-clock-fill text-success me-2"></i><strong>Office Hours:</strong> Mon - Fri, 8:00 AM - 4:00 PM</p>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-md-7">
                <div class="p-5 shadow-lg rounded-4 bg-white h-100 border border-success">

                    <!-- Success Message -->
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="contact-form">
                        @csrf

                        <div class="mb-3 position-relative">
                            <i class="bi bi-person-fill input-icon text-success"></i>
                            <input type="text" class="form-control rounded-pill ps-5 py-2 shadow-sm @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Your Name" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 position-relative">
                            <i class="bi bi-envelope-fill input-icon text-success"></i>
                            <input type="email" class="form-control rounded-pill ps-5 py-2 shadow-sm @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Your Email" required>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 position-relative">
                            <i class="bi bi-pencil-fill input-icon text-success"></i>
                            <input type="text" class="form-control rounded-pill ps-5 py-2 shadow-sm @error('subject') is-invalid @enderror" id="subject" name="subject" value="{{ old('subject') }}" placeholder="Subject" required>
                            @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4 position-relative">
                            <i class="bi bi-chat-text-fill input-icon text-success"></i>
                            <textarea class="form-control rounded-3 ps-5 py-3 shadow-sm @error('message') is-invalid @enderror" id="message" name="message" rows="5" placeholder="Your Message" required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success w-100 btn-lg shadow-sm hover-scale">
                            <i class="bi bi-send-fill me-2"></i>Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>

<style>
/* Input icons */
.input-icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 1.2rem;
}

/* Floating shadow and hover for inputs */
.contact-form .form-control {
    transition: all 0.3s ease;
    border: 1px solid #28a745;
}
.contact-form .form-control:focus {
    box-shadow: 0 0 10px rgba(40, 167, 69, 0.3);
    border-color: #28a745;
}

/* Button hover */
.hover-scale:hover {
    transform: scale(1.03);
    transition: transform 0.3s ease-in-out;
}
</style>
@endsection
