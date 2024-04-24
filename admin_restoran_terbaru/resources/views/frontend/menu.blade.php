  @extends('layouts.frontend')

  @section('content')
  <!-- ======= Menu Section ======= -->
  <section id="menu" class="menu section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Menu</h2>
        <p>Check Our Tasty Menu</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
                <li data-filter="*" class="filter-active">All</li>
                <!-- filter berdasarkan category pada model product -->
                @foreach(\App\Models\Product::CATEGORY_SELECT as $key => $value)
                <li data-filter=".filter-{{ strtolower($key) }}">{{ $value }}</li>
                @endforeach
            </ul>
        </div>
    </div>
      <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
        @foreach ($products as $p)
        <div class="col-lg-6 menu-item filter-{{ strtolower($p->category) }}">
          <img src="{{ $p->getFirstMediaUrl('image', 'priview') }}" class="menu-img" alt="{{ $p->name }}"/>
          <div class="menu-content">
            <a href="#">{{ $p->name }}</a><span>Rp.{{$p->price}}</span>
          </div>
          <div class="menu-ingredients">
           {{$p->description}}
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- End Menu Section -->
  @endsection
