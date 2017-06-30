<div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img src="{{ $headline->image }}" alt="Image">
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-content">
        <p class="title is-4">{{ $headline->title }}</p>
        <p class="subtitle is-6">{{ $headline->created_at->format('d/m H:i') }}</p>
      </div>
    </div>

    <div class="content">
      {{ $headline->subtitle }}
    </div>
  </div>
  <footer class="card-footer">
    <a class="card-footer-item" href="http://www.ynet.co.il/{{ $headline->href }}" target="_article{{ $headline->id }}">לכתבה</a>
  </footer>
</div>