@extends('frontEnd.master')
@section('title')
    Post Job
@endsection
@section('content')
    <div class="single-job-post-area pt-130 pt-sm-60 pb-70 pb-sm-30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form action="{{route('new-job')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h1>{{session('message')}}</h1>
                        <div class="single-job-content">
                            <div class="title"><span>Job Details</span></div>
                            <div class="single-job-form">
                                <div class="single-info pb-14">
                                    <label for="title" class="uppercase pull-left m-0">Job Title</label>
                                    <div class="form-box fix">
                                        <input type="text" id="title" name="title" placeholder="Enter your job title">
                                    </div>
                                </div>
                                <div class="single-info pb-14">
                                    <label for="desc" class="uppercase pull-left m-0">Job Description</label>
                                    <div class="form-box fix">
                                        <input type="text" id="desc" name="desc" placeholder="Enter your job description">
                                    </div>
                                </div>
                                <div class="single-info pb-14">
                                    <label for="location" class="uppercase pull-left m-0">Job location</label>
                                    <div class="form-box fix">
                                        <input type="text" id="location" name="location" placeholder="Enter your job location">
                                    </div>
                                </div>
                                <div class="map-area ml-160 mb-14">
                                    <div id="googleMap" style="width:100%;height:160px;"></div>
                                </div>
                                <div class="single-info pb-14">
                                    <label for="type" class="uppercase pull-left m-0">Job type</label>
                                    <div class="form-box fix">
                                        <input type="text" id="type" name="type" placeholder="Enter your job type">
                                    </div>
                                </div>
                                <div class="single-info pb-14">
                                    <label for="category" class="uppercase pull-left m-0">Job category</label>
                                    <div class="form-box fix">
                                        <input type="text" id="category" name="category" placeholder="Enter your job category">
                                    </div>
                                </div>
                                <div class="single-info">
                                    <label for="date" class="uppercase pull-left m-0">Closing date</label>
                                    <div class="form-box fix">
                                        <input type="date" id="date" name="date">
                                    </div>
                                </div>
                            </div>
                            <div class="title"><span>Company Profile</span></div>
                            <div class="single-job-form">
                                <div class="single-info mb-14">
                                    <label for="company-name" class="uppercase pull-left m-0">company name</label>
                                    <div class="form-box fix">
                                        <input type="text" id="company-name" name="company_name" placeholder="Please enter your company name">
                                    </div>
                                </div>
                                <div class="single-info mb-14">
                                    <label for="company-website" class="uppercase pull-left m-0">company website</label>
                                    <div class="form-box fix">
                                        <input type="text" id="company-website" name="company_website" placeholder="Enter your company website">
                                    </div>
                                </div>
                                <div class="single-info mb-14 fix">
                                    <label class="uppercase pull-left m-0">description</label>
                                    <div class="desc fix">
                                        <textarea name="comp_desc" class="fix textarea" cols="30" rows="10" placeholder="Please enter your job description"></textarea>
                                    </div>
                                </div>
                                <div class="single-info mb-14 fix">
                                    <label class="uppercase pull-left m-0">company logo</label>
                                    <div class="uploader fix pull-left fileupload">
                                        <input type="file" id="fileupload" name="comp_logo">
                                        <span class="filename">Upload your company logo</span>
                                        <span class="action"><i class="zmdi zmdi-folder"></i>Browse</span>
                                    </div>
                                    <span class="ml-20 pull-left max-size">Maximum file size: 1MB</span>
                                </div>
                                <div class="single-info mb-14">
                                    <label for="google" class="uppercase pull-left m-0">google+</label>
                                    <div class="form-box fix">
                                        <input type="text" id="google" name="google" placeholder="http://">
                                    </div>
                                </div>
                                <div class="single-info mb-14">
                                    <label for="facebook" class="uppercase pull-left m-0">facebook</label>
                                    <div class="form-box fix">
                                        <input type="text" id="facebook" name="facebook" placeholder="http://">
                                    </div>
                                </div>
                                <div class="single-info mb-14">
                                    <label for="Linkedin" class="uppercase pull-left m-0">Linkedin</label>
                                    <div class="form-box fix">
                                        <input type="text" id="Linkedin" name="linkedin" placeholder="http://">
                                    </div>
                                </div>
                                <div class="single-info mb-14">
                                    <label for="twitter" class="uppercase pull-left m-0">twitter</label>
                                    <div class="form-box fix">
                                        <input type="text" id="twitter" name="twitter" placeholder="http://">
                                    </div>
                                </div>
                                <div class="single-info">
                                    <label for="instagram" class="uppercase pull-left m-0">instagram</label>
                                    <div class="form-box fix">
                                        <input type="text" id="instagram" name="instagram" placeholder="http://">
                                    </div>
                                </div>
                                <div class="ml-160 mt-38">
                                    <input type="submit" class="btn btn-lg btn-outline-primary" value="SUBMIT">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
