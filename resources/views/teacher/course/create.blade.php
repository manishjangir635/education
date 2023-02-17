@extends('teacher.layouts.master')
@section('content')
 
<div class="content">
            <div class="p-lg-5">
            <div class="border-block text-center">
                <div class="text-end">
                    <a class="backBtn d-inline-flex align-items-center" href="index.html"><i class="bi bi-arrow-left"></i> <span class="font-medium ms-2">Back</span></a>
                </div>
                <h1 class="playfair font-32 text-darkblue">How about a working title?</h1>
                <p class="font-16 font-medium text-darkblue mb-4">it's ok if you can't think of a good title now. You can change it later</p>
                <form>
                    <div class="row justify-content-center mb-4">
                        <div class="col-sm-12 col-md-8 col-lg-6">
                            <input type="text" class="form-control" placeholder="e.g. Learn Photoshop CS6 from Scratch">
                        </div>
                    </div>
                    <div class="row justify-content-center text-start">
                        <div class="col-sm-12 col-md-8 col-lg-6">
                            <select id="category" class="form-control">
                                <option value="v-1">Category 1</option>
                                <option value="v-2">Category 2</option>
                                <option value="v-3">Category 3</option>
                            </select>
                        </div>
                        <div class="col-sm-12 text-end mt-3">
                            <button type="submit" class="themeBtn px-md-5">Save</button>
                        </div>
                    </div>
                    
                </form>
            </div>
            </div>
        </div>
@endsection
