@extends("template")

@section("tittle")

@endsection

@section("content2")

<section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video" class="video-background-content">
          <source src="{{ url('myAssets/assets/images/pmdgn.mp4') }}" type="video/mp4" />
      </video>

      <div class="video header-text">
          <div class="caption">
              <h6> Welcome To NI F</h6>
              <h2><em>Wisata</em> Indonesia</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="{{url('data-wisata')}}">Lihat Data</a></div>
              </div>
          </div>
      </div>
  </section>
@endsection