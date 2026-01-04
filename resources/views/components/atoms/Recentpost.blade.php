<div class="blog__details__recent">
    <h4>Postingan Terbaru</h4>
    <div class="row">
        @foreach($recentPosts as $post)
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__details__recent__item" onclick="window.location.href='/blog/{{ $post->slug}}'">
                    <img src="{{ asset('storage/article/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid small-image">
                    <h5>{{ $post->title }}</h5>
                    <span>{{ \Carbon\Carbon::parse($post->published_at)->format('M d, Y') }}</span>
                </div>
            </div>
        @endforeach
    </div>
</div>
<style>
    .blog__details__recent {
    margin-top: 20px;
}

.blog__details__recent__item {
    background: #fff;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

.blog__details__recent__item img {
    max-width: 100%;
    max-height: 130 px;
    /* Sesuaikan ukuran gambar sesuai kebutuhan */
    border-radius: 8px;
    margin-bottom: 10px;
}

.blog__details__recent__item h5 {
    margin: 10px 0;
    font-size: 16px;
    color: #333;
}

.blog__details__recent__item span {
    font-size: 12px;
    color: #999;
}

</style>