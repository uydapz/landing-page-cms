<x-DashboardLayout :title="$title ?? ''">
    <style>
        .custom-img {
            max-width: 100%;
            /* Pastikan gambar tidak melebihi lebar elemen induknya */
            height: auto;
            /* Pertahankan aspek rasio gambar */
            max-height: 100px;
            /* Sesuaikan tinggi maksimal gambar sesuai kebutuhan */
            width: auto;
            /* Pertahankan aspek rasio gambar */
        }
    </style>
    <x-CheckValidate />
    <x-Alert />
    @include('components.molecules.AddModalArticle')
    <x-DataTables :tabel="$title" jenis="multi-filter-select" modal="AddModalArticle">
        <thead>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Author</th>
                <th>Judul</th>
                <th>Slug</th>
                <th>Excerpt</th>
                <th>Thumbnail</th>
                <th>Dipublikasi pada</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Author</th>
                <th>Judul</th>
                <th>Slug</th>
                <th>Excerpt</th>
                <th>Thumbnail</th>
                <th>Dipublikasi pada</th>
                <th>Aksi</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($articles as $a)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $a->category->slug }}</td>
                    <td>{{ $a->user->username }}</td>
                    <td>{{ $a->title }}</td>
                    <td>{{ $a->slug }}</td>
                    <td>{{ $a->excerpt }}</td>
                    <td>
                        <img src="{{ asset('storage/article/' . $a->image) }}" class="img-fluid custom-img" alt="">
                    </td>
                    <td>{{ \Carbon\Carbon::parse($a->published_at)->format('M d, Y') }}</td>
                    <x-buttonAction modal="EditModalArticle-{{ $a->id }}" delete="article/{{ $a->id }}" />
                </tr>
                @include('components.molecules.EditModalArticle')
            @endforeach
            
        </tbody>
    </x-DataTables>
</x-DashboardLayout>
