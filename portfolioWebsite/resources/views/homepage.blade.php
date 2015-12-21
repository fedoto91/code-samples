@extends("master")

@section("navItems")
    <a href="/" class="selected">Eugene Fedotov</a> |
    <a href="/portfolio">Portfolio</a> |
    <a href="resume_eugene_fedotov.pdf">Resume (PDF)</a>
@endsection

@section("content")
    <div class="container">
        <div class="row" style="border-style: groove none">
            <div class="col-sm-2">
                <img src="status_bg.gif" alt="">
            </div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-12">I’m AVAILABLE for junior positions.</div>
                </div>
                <div class="row roles">
                    <div class="col-sm-12">Software Engineering • Web Development</div>
                </div>
            </div>

        </div>
        <div class="row" style="margin-top:50px">
            <div class="col-md-2">
                <img src="photo.png" alt="" width="150px">
            </div>
            <div class="col-md-10" style="font-size: 20px;">
                <p>Name: Eugene Fedotov</p>
                <p>Academics: graduated from Rowan University with a B.S. degree in computer science</p>
                <p>Interests: everything related to computer science, improving myself, and Japan</p>
            </div>
        </div>
    </div>
@endsection