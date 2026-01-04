<x-HomeLayout :title="$title">
    <div class="breadcrumb-option spad">
        <img src="{{ asset('storage/article/' . $blog->image) }}" alt="Breadcrumb Background" class="breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="blog__hero__text">
                        <h2>{{ $blog->title }}</h2>
                        <ul>
                            <li onclick="window.location.href='{{ url('usepaga') }}/{{ $blog->user->id }}'"><span>{{ $blog->user->username }}</span></li>
                            <li>{{ \Carbon\Carbon::parse($blog->published_at)->format('M d, Y') }}</li>
                            <li onclick="window.location.href='{{ url('category') }}/{{ $blog->category->slug }}'"> :{{ $blog->category->name }}</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__details__content">
                        <div class="blog__details__text">
                            {!! $blog->body !!}
                        </div>
                        <div class="blog__details__tags">
                            <span><i class="fa fa-tag"></i> Category:</span>
                            <a href="{{ url('category') }}/{{ $blog->category->slug }}">{{ $blog->category->name }}</a>
                        </div>
                        @include('components.atoms.MoveCard')
                        @include('components.atoms.Recentpost')
                        {{-- <div class="blog__details__comment">
                            <h4>Leave a comment</h4>
                            <form action="#">
                                <div class="input__list">
                                    <input type="text" placeholder="Name">
                                    <input type="text" placeholder="Email">
                                    <input type="text" placeholder="Website">
                                </div>
                                <textarea placeholder="Comment"></textarea>
                                <button type="submit" class="site-btn">Send Message</button>
                            </form>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <style>
        .blog__hero__text {
            background-color: rgba(0, 0, 0, 0.5);
            /* Background semi-transparan untuk kontras */
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            margin: 1rem auto;
            /* Jarak luar */
            max-width: 800px;
            /* Maksimal lebar */
        }

        .blog__hero__text h2 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            color: #ffffff;
        }

        .blog__hero__text ul {
            list-style: none;
            /* Menghilangkan bullet points */
            padding: 0;
            margin: 0;
        }

        .blog__hero__text ul li {
            font-size: 1rem;
            color: #ffffff;
            margin-bottom: 0.5rem;
        }

        .blog__hero__text ul li span {
            font-weight: bold;
        }

        .breadcrumb-option {
            position: relative;
            overflow: hidden;
        }

        .breadcrumb-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .breadcrumb-option .container {
            position: relative;
        }
    </style>
</x-HomeLayout>
