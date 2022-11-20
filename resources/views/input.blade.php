@extends('layout')
@section('project')
<section id="projects">
    <div class="container">
        <div class="row align-items-center mb-1">
            <h2 class="title mb-5">Arithmetic Sequence Program</h2>
            <form class="form" method='POST' action="/output#projects">
				@csrf
                <div class="col">
                    <div class="mb-3">
                        <label for="1stterm" class="form-label" for="firstterm">input a :</label>
                        <input type="number" class="form-control" id="firstterm"  name ="firstterm" placeholder="1st term (suku pertama)" />
                    </div>
                    <div class="mb-3">
                        <label for="common_difference" class="form-label" for="common_difference">input b :</label>
                        <input type="number" class="form-control" id="common_difference" name ="common_difference" placeholder="common difference (beda)" />
                    </div>
                    <div class="mb-3">
                        <label for="numberOfTerms" class="form-label" for="numberOfTerms">input n :</label>
                        <input type="number" class="form-control" id="numberOfTerms"  name ="numberOfTerms" placeholder="number of term (suku ke-n)" />
                    </div>
                </div>
                <input class="btn mineco" type="reset" value="Reset" />
                <button type="submit" class="btn mineco">Submit</button>
            </form>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#fff" fill-opacity="1"
            d="M0,96L40,117.3C80,139,160,181,240,202.7C320,224,400,224,480,202.7C560,181,640,139,720,117.3C800,96,880,96,960,112C1040,128,1120,160,1200,176C1280,192,1360,192,1400,192L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
        </path>
    </svg>
</section>
@endsection
<!-- end Project -->
