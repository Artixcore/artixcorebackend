<!-- About Section -->
@php
    $uploads = App\Models\Upload::whereNotNull('image')->orWhereNotNull('video')->get();
@endphp

<section id="about" class="about section">
    <div class="container">
        <div class="row gy-4">
            @foreach ($uploads as $upload)
                <div class="col-md-2 content" data-aos="fade-up" data-aos-delay="100">
                    <div class="card shadow-sm">
                        @if ($upload->image)
                            <a href="{{ $upload->url }}" target="_blank">
                                <img src="{{ $upload->image }}" style="height: 100%; width:100%;"
                                    alt="{{ $upload->meta_title }}">
                            </a>
                        @elseif ($upload->video)
                            <a href="{{ $upload->url }}" target="_blank">
                                <video src="{{ $upload->video }}" controls style="height: 100%; width:100%;"
                                    alt="{{ $upload->meta_title }}"></video>
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section><!-- /About Section -->
