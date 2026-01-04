<style>
    .blog-span {
            font-size: 12px;
        }

        .card-custom {
            border-radius: 20px !important;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1) !important;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card-custom:hover {
            transform: translateY(-10px) !important;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2) !important;
        }

        .card-custom img {
            border-bottom: 5px solid #006401 !important;
        }

        .card-header-custom {
            background-color: #006401 !important;
            color: #fff !important;
            font-size: 1.25rem;
            font-weight: bold;
            text-align: center;
            padding: 1rem;
        }

        .card-body-custom {
            padding: 1.5rem;
            text-align: center;
        }

        .card-footer-custom {
            background-color: #f8f9fa !important;
            text-align: center;
            padding: 1rem;
        }

        .btn-custom {
            background-color: #006401 !important;
            color: #fff !important;
            border: none;
            transition: background-color 0.2s;
        }

        .btn-custom:hover {
            background-color: #458628 !important;
        }

        .card-meta {
            font-size: 0.9rem;
            color: #666 !important;
            margin-bottom: 1rem;
        }

        .card-meta span {
            margin-right: 1rem;
        }

        .card-meta .author {
            font-weight: bold;
        }

        .card-meta .date,
        .card-meta .comments {
            font-style: italic;
        }
</style>
<div class="card card-custom mb-4">
    <div class="card-header card-header-custom">
        {{ $previous->title }}
    </div>
    <div class="card-body card-body-custom">
        <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="Gambar Artikel"
            class="img-fluid mb-3">
        <div class="card-meta">
            <span class="author blog-span"><i class="fa fa-feather"></i> {{ $previous->user->username }}</span>
            <span class="date blog-span"><i class="fa fa-calendar-days"></i> {{ \Carbon\Carbon::parse($previous->published_at)->format('M d, Y') }}</span>
            <span class="comments blog-span"><i class="fa fa-comment"></i> 5 </span>
        </div>
        <p class="card-text">{{ $previous->excerpt }}</p>
    </div>
    <div class="card-footer card-footer-custom">
        <a href="/blog/{{ $previous->slug }}" class="btn btn-custom">Lengkapnya kuy!</a>
    </div>
</div>