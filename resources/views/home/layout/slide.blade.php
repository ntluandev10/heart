<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @php
        $i=0;
    @endphp
    @foreach ($slide_chung as $item)
    <div @if ($i==0)
      class="carousel-item active"
    @else
      class="carousel-item"
    @endif >
      <img height="120px" width="600px" src="upload/slide/{{$item->Hinh}}" alt="First slide">
    </div>
    @php
        $i++;
    @endphp
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>