@extends('layouts.frontend')

@section('content')

<main id="main">
    <!-- ======= About Section ======= -->
    @foreach ($blog as $a)
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div
            class="col-lg-6 order-1 order-lg-2"
            data-aos="zoom-in"
            data-aos-delay="100"
          >
            <div class="about-img">
              <img src="{{ $a->getFirstMediaUrl('blogimage', 'priview') }}" alt="{{ $a->tittle }}" />
            </div>
          </div>
  
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>{{ $a->title }}</h3>
            <p class="fst-italic">
             {!! $a ->detail_content !!}
            </p>
          </div>
          @endforeach
        </div>
      </div>
    </section>
    <!-- End About Section -->

@endsection