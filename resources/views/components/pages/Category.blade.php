<!-- resources/views/category/show.blade.php -->
<x-HomeLayout :title="$category->name">
    <x-Breadcrumb :title="$category->name" />

    <section class="blog spad">
        <div class="container mb-2">
            <div class="section-title">
                <h6>Artikel dalam Kategori: "{{ $category->name }}"</h6>
            </div>

            @if ($articles->isEmpty())
                <p>Tidak ada hasil ditemukan.</p>
            @else
                <div class="row">
                    @foreach ($articles as $b)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            @include('components.atoms.ArticleCard')
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</x-HomeLayout>