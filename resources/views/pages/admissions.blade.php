@extends('layouts.app')

@section('content')

<section class="py-5" style="background: url('https://cdn.pixabay.com/photo/2016/03/27/21/38/children-1284235_1280.jpg') no-repeat center; background-size: cover;">
    <div class="container py-5" style="background-color: rgba(255,255,255,0.95); border-radius: 10px;">

        <div class="text-center mb-5">
            <h1 class="fw-bold text-success">Admissions at Abu Haneefah School</h1>
            <p class="text-muted">A modern, step-by-step application experience</p>
        </div>

        <!-- Icon Stepper -->
        <div class="d-flex justify-content-between mb-5">
            <div class="step active">
                <div class="step-circle bg-success text-white"><i class="bi bi-person-badge-fill"></i></div>
                <p class="step-label mt-2">Student Info</p>
            </div>
            <div class="step">
                <div class="step-circle bg-light text-success border"><i class="bi bi-people-fill"></i></div>
                <p class="step-label mt-2">Parent Info</p>
            </div>
            <div class="step">
                <div class="step-circle bg-light text-success border"><i class="bi bi-file-earmark-arrow-up-fill"></i></div>
                <p class="step-label mt-2">Documents</p>
            </div>
        </div>

        <form action="{{ route('admissions.submit') }}" method="POST" enctype="multipart/form-data" id="admissionForm" class="p-4 shadow-sm rounded bg-white">
            @csrf

            <!-- Step 1: Student Info -->
            <div class="form-step active">
                <div class="mb-3">
                    <label for="student_name" class="form-label">Student Name</label>
                    <input type="text" class="form-control" id="student_name" name="student_name" required>
                </div>

                <div class="mb-3">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>

                <div class="mb-3">
                    <label for="grade" class="form-label">Applying For Grade</label>
                    <select class="form-select" id="grade" name="grade" required>
                        <option value="">Select Grade</option>
                        <option value="Primary 1">Primary 1</option>
                        <option value="Primary 2">Primary 2</option>
                        <option value="Primary 3">Primary 3</option>
                        <option value="Primary 4">Primary 4</option>
                        <option value="Primary 5">Primary 5</option>
                        <option value="Primary 6">Primary 6</option>
                        <option value="JSS 1">JSS 1</option>
                        <option value="JSS 2">JSS 2</option>
                        <option value="JSS 3">JSS 3</option>
                        <option value="SSS 1">SSS 1</option>
                        <option value="SSS 2">SSS 2</option>
                        <option value="SSS 3">SSS 3</option>
                    </select>
                </div>

                <button type="button" class="btn btn-success next-btn">Next <i class="bi bi-arrow-right"></i></button>
            </div>

            <!-- Step 2: Parent Info -->
            <div class="form-step">
                <div class="mb-3">
                    <label for="parent_name" class="form-label">Parent / Guardian Name</label>
                    <input type="text" class="form-control" id="parent_name" name="parent_name" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Parent Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Parent Phone Number</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary prev-btn"><i class="bi bi-arrow-left"></i> Previous</button>
                    <button type="button" class="btn btn-success next-btn">Next <i class="bi bi-arrow-right"></i></button>
                </div>
            </div>

            <!-- Step 3: Documents & Submit -->
            <div class="form-step">
                <div class="mb-3">
                    <label for="documents" class="form-label">Upload Documents (PDF or Images)</label>
                    <input type="file" class="form-control" id="documents" name="documents[]" multiple required>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary prev-btn"><i class="bi bi-arrow-left"></i> Previous</button>
                    <button type="submit" class="btn btn-success">Submit Application <i class="bi bi-check-circle"></i></button>
                </div>
            </div>
        </form>
    </div>
</section>

@endsection

@section('scripts')
<script>
    const form = document.getElementById('admissionForm');
    const nextBtns = form.querySelectorAll('.next-btn');
    const prevBtns = form.querySelectorAll('.prev-btn');
    const formSteps = form.querySelectorAll('.form-step');
    const steps = document.querySelectorAll('.step');
    let currentStep = 0;

    function updateStepper(step){
        steps.forEach((s,i)=>{
            if(i < step) {
                s.querySelector('.step-circle').classList.add('bg-success','text-white');
                s.querySelector('.step-circle').classList.remove('bg-light','text-success');
            } else if(i === step){
                s.querySelector('.step-circle').classList.add('bg-success','text-white');
                s.querySelector('.step-circle').classList.remove('bg-light','text-success');
            } else {
                s.querySelector('.step-circle').classList.add('bg-light','text-success');
                s.querySelector('.step-circle').classList.remove('bg-success','text-white');
            }
        });
    }

    function showStep(step){
        formSteps.forEach((fs, index) => {
            fs.classList.toggle('active', index === step);
        });
        updateStepper(step);
    }

    nextBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault(); // <--- This fixes it
            if(currentStep < formSteps.length - 1){
                currentStep++;
                showStep(currentStep);
            }
        });
    });

    prevBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault(); // <--- This fixes it
            if(currentStep > 0){
                currentStep--;
                showStep(currentStep);
            }
        });
    });

    showStep(currentStep);
</script>


<style>
    .form-step { display: none; }
    .form-step.active { display: block; animation: fadeIn 0.5s ease; }
    @keyframes fadeIn { from {opacity:0; transform: translateY(10px);} to {opacity:1; transform: translateY(0);} }

    /* Stepper styling */
    .step { text-align: center; flex: 1; position: relative; }
    .step-circle { width: 50px; height: 50px; border-radius: 50%; display:flex; align-items:center; justify-content:center; margin: 0 auto; font-size: 1.5rem; border: 2px solid #28a745; transition: all 0.3s ease; }
    .step-label { font-size: 0.9rem; font-weight: 500; }
</style>
@endsection
