@extends('layouts.layout')

@section('form')
<div class="bg-white card h-auto">
    <div class="text-center font-weight-bold p-1 mt-2">
    <span>Input Form</span>
    </div>
    <form method="POST" action="inputform" class="px-6 py-4 shadow-sm">
        @csrf
            <!-- <div class="w-full mb-4">
                <label class="text-14" id="text-title">Code</label>
                <input type="text" value="" placeholder="" class="form-control" name="code">
            </div -->>
            <div class="w-full mb-4">
                <label class="text-14" id="text-title">Year</label>
                <input type="number" placeholder="Year" class="form-control" name="year" required>
            </div>
            <div class="col-md-4 p-1 mb-1" id="category">
                <label for="Category" class="form-label">Category</label>
                <select id="Category" class="form-select form-select-sm" name="category" required>
                <option selected hidden>Pilih</option>
                    <option value="Bisnis dan Usaha - BU">Bisnis dan Usaha - BU</option>
                    <option value="Siap Kerja - SK">Siap Kerja - SK</option>
                    <option value="Digital Marketing - DM">Digital Marketing - DM</option>
                </select>
            </div>
            <div class="w-full mb-4">
                <label class="text-14" id="text-title">Title</label>
                <input type="text" name="title" value="" placeholder="Title" class="form-control " required>
            </div>
            <div class="w-full mb-4">
                <label class="text-14" id="text-title">Topic</label>
                <input type="text" name="topic" value="" placeholder="Topic" class="form-control " required>
            </div>
            <div class="w-full mb-4">
                <label class="text-14" id="text-title">Sub Topic</label>
                <input type="text" name="subtopic" value="" placeholder="Sub Topic" class="form-control " required>
            </div>
            <div class="w-full mb-4">
                <label class="text-14" id="text-title">Reference</label>
                <input type="text" name="reference" placeholder="Reference" class="form-control ">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </form>
</div>
@endsection