
    @php
        $blogs = App\Models\Blog::orderBy('created_at', 'desc')->take(3)->get();
    @endphp
    <section id="recent-posts" class="recent-posts section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Recent Blog Posts</h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                @foreach ($blogs as $blog)
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 + 100 }}">
                        <article>
                            <div class="post-img">
                                @if ($blog->image)
                                    <img src="{{ $blog->image }}" alt="{{ $blog->title }}" class="img-fluid">
                                @else
                                    <img src="assets/img/default-blog-image.jpg" alt="{{ $blog->title }}" class="img-fluid">
                                @endif
                            </div>
                            <p class="post-category">{{ $blog->meta_title }}</p>
                            <h2 class="title">
                                {{-- <a href="{{ route('frontend.blog.show', $blog->slug) }}">{{ $blog->title }}</a> --}}
                            </h2>
                            <div class="d-flex align-items-center">
                                <img src="assets/img/default-author-image.jpg" alt="{{ $blog->author }}"
                                    class="img-fluid post-author-img flex-shrink-0">
                                <div class="post-meta">
                                    <p class="post-author">{{ $blog->author }}</p>
                                    <p class="post-date">
                                        <time datetime="{{ $blog->date }}">{{ \Carbon\Carbon::parse($blog->date)->format('M d, Y') }}</time>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div><!-- End post list item -->
                @endforeach

            </div><!-- End recent posts list -->

        </div>

    </section>
