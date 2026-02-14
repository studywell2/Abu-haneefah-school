@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="bg-warning text-dark text-center py-5" style="background: url('https://cdn.pixabay.com/photo/2016/03/27/21/38/children-1284235_1280.jpg') no-repeat center; background-size: cover;">
    <div class="container py-5" style="background-color: rgba(255,255,255,0.85); border-radius: 15px;">
        <h1 class="display-4 fw-bold">Admissions at Abu Haneefah School</h1>
        <p class="lead">Join our family of learners and leaders</p>
        <a href="#apply-form" class="btn btn-success btn-lg mt-3 shadow-sm">Apply Now</a>
    </div>
</section>

<!-- ADMISSION REQUIREMENTS -->
<section class="py-5 my-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Admission Requirements</h2>
            <p class="text-muted">Documents and criteria needed for enrollment</p>
        </div>
        <div class="row text-center g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm p-4 border border-success rounded-4">
                    <i class="bi bi-person-badge fs-1 text-success mb-3"></i>
                    <h5 class="card-title mb-3">Birth Certificate</h5>
                    <p class="card-text">Provide an official birth certificate or proof of age.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm p-4 border border-success rounded-4">
                    <i class="bi bi-file-earmark-text fs-1 text-success mb-3"></i>
                    <h5 class="card-title mb-3">Previous School Records</h5>
                    <p class="card-text">Report cards or transcripts from previous school years.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm p-4 border border-success rounded-4">
                    <i class="bi bi-camera fs-1 text-success mb-3"></i>
                    <h5 class="card-title mb-3">Passport Photo</h5>
                    <p class="card-text">Recent passport-size photograph of the student.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ADMISSION PROCESS -->
<section class="py-5 bg-light my-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">How to Apply</h2>
            <p class="text-muted">Step-by-step guide for a smooth admission process</p>
        </div>
        <div class="row text-center g-4">
            <div class="col-md-3">
                <div class="card h-100 shadow-sm p-4 border border-primary rounded-4 hover-scale">
                    <i class="bi bi-pencil-square fs-1 text-primary mb-3"></i>
                    <h5 class="card-title mb-3">Step 1</h5>
                    <p class="card-text">Fill out the online application form below.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 shadow-sm p-4 border border-primary rounded-4 hover-scale">
                    <i class="bi bi-upload fs-1 text-primary mb-3"></i>
                    <h5 class="card-title mb-3">Step 2</h5>
                    <p class="card-text">Submit all required documents to the school office.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 shadow-sm p-4 border border-primary rounded-4 hover-scale">
                    <i class="bi bi-person-check fs-1 text-primary mb-3"></i>
                    <h5 class="card-title mb-3">Step 3</h5>
                    <p class="card-text">Attend the entrance assessment or interview if required.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card h-100 shadow-sm p-4 border border-primary rounded-4 hover-scale">
                    <i class="bi bi-award fs-1 text-primary mb-3"></i>
                    <h5 class="card-title mb-3">Step 4</h5>
                    <p class="card-text">Receive admission confirmation and proceed with enrollment.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ADMISSION FORM -->
<section id="apply-form" class="py-5 my-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Online Application Form</h2>
            <p class="text-muted">Fill out the form to apply for admission</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">

                <!-- Success Message -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('admissions.submit') }}" method="POST" enctype="multipart/form-data" class="p-5 shadow-sm rounded-4 bg-white border border-secondary">
                    @csrf

                    <!-- Student Name -->
                    <div class="mb-3">
                        <label for="student_name" class="form-label">Student Name</label>
                        <input type="text" class="form-control @error('student_name') is-invalid @enderror" id="student_name" name="student_name" value="{{ old('student_name') }}" required>
                        @error('student_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Date of Birth -->
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob" value="{{ old('dob') }}" required>
                        @error('dob')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Grade -->
                    <div class="mb-3">
                        <label for="grade" class="form-label">Applying For Grade</label>
                        <select class="form-select @error('grade') is-invalid @enderror" id="grade" name="grade" required>
                            <option value="">Select Grade</option>
                            <option value="Primary 1" {{ old('grade')=='Primary 1' ? 'selected' : '' }}>Primary 1</option>
                            <option value="Primary 2" {{ old('grade')=='Primary 2' ? 'selected' : '' }}>Primary 2</option>
                            <option value="Primary 3" {{ old('grade')=='Primary 3' ? 'selected' : '' }}>Primary 3</option>
                            <option value="Primary 4" {{ old('grade')=='Primary 4' ? 'selected' : '' }}>Primary 4</option>
                            <option value="Primary 5" {{ old('grade')=='Primary 5' ? 'selected' : '' }}>Primary 5</option>
                            <option value="Primary 6" {{ old('grade')=='Primary 6' ? 'selected' : '' }}>Primary 6</option>
                            <option value="JSS 1" {{ old('grade')=='JSS 1' ? 'selected' : '' }}>JSS 1</option>
                            <option value="JSS 2" {{ old('grade')=='JSS 2' ? 'selected' : '' }}>JSS 2</option>
                            <option value="JSS 3" {{ old('grade')=='JSS 3' ? 'selected' : '' }}>JSS 3</option>
                            <option value="SSS 1" {{ old('grade')=='SSS 1' ? 'selected' : '' }}>SSS 1</option>
                            <option value="SSS 2" {{ old('grade')=='SSS 2' ? 'selected' : '' }}>SSS 2</option>
                            <option value="SSS 3" {{ old('grade')=='SSS 3' ? 'selected' : '' }}>SSS 3</option>
                        </select>
                        @error('grade')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Parent Name -->
                    <div class="mb-3">
                        <label for="parent_name" class="form-label">Parent / Guardian Name</label>
                        <input type="text" class="form-control @error('parent_name') is-invalid @enderror" id="parent_name" name="parent_name" value="{{ old('parent_name') }}" required>
                        @error('parent_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Parent Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Phone -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Parent Phone Number</label>
                        <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" required>
                        @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Documents -->
                    <div class="mb-4">
                        <label for="documents" class="form-label">Upload Documents (PDF or Images)</label>
                        <input type="file" class="form-control @error('documents.*') is-invalid @enderror" id="documents" name="documents[]" multiple required>
                        @error('documents.*')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success w-100 btn-lg shadow-sm">Submit Application</button>
                </form>

            </div>
        </div>
    </div>
</section>

<!-- Optional: hover effect for cards -->
<style>
.hover-scale:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease-in-out;
}
</style>

@endsection
