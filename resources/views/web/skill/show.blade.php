@extends('web.layouts.master')

@section('custom-styles')
    <link type="text/css" rel="stylesheet" href="{{ asset('web/assets/css/style.css') }}" />
@endsection
@section('main-content')
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/page-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="{{ route('home') }}">Home</a></li>
							<li><a href="{{ route('cat.show',$skill->Category->id) }}">{{ $skill->Category->title }}</a></li>
							<li>{{ $skill->title }}</li>
						</ul>
						<h1 class="white-text">{{ $skill->title }}</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Blog -->
		<div id="blog" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- main blog -->
					<div id="main" class="col-md-12">

						<!-- row -->
						<div class="row">
                            @foreach ($exams as $exam)
                                <!-- single exam -->
                                <div class="col-md-3">
                                    <div class="single-blog">
                                        <div class="blog-img">
                                            <a href="{{ route('exam.show',$exam->id) }}">
                                                <img src="./img/exam1.jpg" alt="">
                                            </a>
                                        </div>
                                        <h4><a href="{{ route('exam.show',$exam->id) }}">{{ $exam->title }}</a></h4>
                                        <div class="blog-meta">
                                            <span>{{ Carbon\Carbon::parse($exam->created_at)->format('d M, Y') }}</span>
                                            <div class="pull-right">
                                                <span class="blog-meta-comments"><a href="#"><i class="fa fa-users"></i> {{ $exam->users()->count() }}</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /single exam -->
                            @endforeach






						</div>
						<!-- /row -->

						<!-- row -->
						<div class="row">

							<!-- pagination -->
							<div class="col-md-12">
								{{-- <div class="post-pagination">
									<a href="#" class="pagination-back pull-left">Back</a>
									<ul class="pages">
										<li class="active">1</li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
									</ul>
									<a href="#" class="pagination-next pull-right">Next</a>
								</div> --}}
                                {{ $exams->links() }}
							</div>
							<!-- pagination -->

						</div>
						<!-- /row -->
					</div>
					<!-- /main blog -->

				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
		<!-- /Blog -->

@endsection

