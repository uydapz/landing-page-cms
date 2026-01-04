<div class="blog__details__option">
    <div class="row justify-content-center">
        @if($previous)
            <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center mb-4">
                <a href="{{ route('blog.show', $previous->slug) }}" class="blog__details__option__item">
                    <h5><i class="fa fa-angle-left"></i> Previous posts</h5>
                    <div class="blog__details__option__item__img">
                        <img src="{{ asset('storage/article/' . $previous->image) }}" alt="{{ $previous->title }}" class="img-fluid small-image">
                    </div>
                    <div class="blog__details__option__item__text">
                        <h6>{{ $previous->title }}</h6>
                        <span>{{ \Carbon\Carbon::parse($previous->published_at)->format('M d, Y') }}</span>
                    </div>
                </a>
            </div>
        @endif

        @if ($next)            
            <div class="col-lg-6 col-md-6 col-sm-6 d-flex justify-content-center mb-4">
                <a href="{{ route('blog.show', $next->slug) }}" class="blog__details__option__item blog__details__option__item--right">
                    <h5>Next posts <i class="fa fa-angle-right"></i></h5>
                    <div class="blog__details__option__item__img">
                        <img src="{{ asset('storage/article/' . $next->image) }}" alt="{{ $next->title }}" class="img-fluid small-image">
                    </div>
                    <div class="blog__details__option__item__text">
                        <h6>{{ $next->title }}</h6>
                        <span>{{ \Carbon\Carbon::parse($next->published_at)->format('M d, Y') }}</span>
                    </div>
                </a>
            </div>
        @endif
    </div>
</div>

<style>
    .blog__details__option__item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-decoration: none;
    }

    .blog__details__option__item__img img {
        max-width: 100%;
        max-height: 100px;
        /* Sesuaikan ukuran gambar sesuai kebutuhan */
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .blog__details__option__item__text {
        text-align: center;
    }

    .blog__details__option__item__text h6 {
        margin: 5px 0;
    }

    .blog-span {
        font-size: 10px;
    }

    .author {
        font-weight: bold;
    }

    @media (max-width: 767px) {
        .blog__details__option__item {
            margin-bottom: 10px;
        }
    }
</style>
