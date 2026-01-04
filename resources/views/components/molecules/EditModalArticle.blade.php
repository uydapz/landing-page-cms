<!-- Modal EDIT -->
<div class="modal fade" id="EditModalArticle-{{ $a->id ?? '' }}" tabindex="-1" role="dialog" aria-labelledby="EditModalArticleLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="EditModalArticleLabel">Edit Article</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/update/article/{{ $a->id ?? '' }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title" value="{{ $a->title ?? '' }}" placeholder="Title" />
                        </div>
                        <div class="form-group mt-3">
                            <label for="excerpt" class="form-label">Excerpt</label>
                            <textarea class="form-control" id="excerpt" name="excerpt" rows="3" placeholder="Excerpt">{{ $a->excerpt ?? '' }}</textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label for="body" class="form-label">Body</label>
                            <textarea class="form-control" id="body" name="body" rows="5" placeholder="Body">{{ $a->body ?? '' }}</textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image-{{ $a->id ?? '' }}" name="image" />
                            <div class="col-md-3 mt-3">
                                <img id="imagePreview-{{ $a->id ?? '' }}" src="{{ isset($a->image) ? asset('storage/article/' . $a->image) : '' }}" alt="Image Preview" style="display: block; margin-top: 10px; width: 100%;" />
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="category_id" class="form-label">Category</label>
                            <select class="form-control" id="category_id" name="category_id">
                                @foreach ($category as $c)
                                    <option value="{{ $c->id }}" {{ $a->category_id == $c->id ? 'selected' : '' }}>
                                        {{ $c->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="published_at" class="form-label">Published At</label>
                            <input type="datetime-local" class="form-control" id="published_at" name="published_at" value="{{ $a->published_at ? \Carbon\Carbon::parse($a->published_at)->format('Y-m-d\TH:i') : '' }}" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('input[type="file"]').forEach(input => {
            input.addEventListener('change', function(event) {
                const file = event.target.files[0];
                const imageId = event.target.id.split('-').pop();
                const imagePreview = document.getElementById('imagePreview-' + imageId);

                if (file) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        imagePreview.src = e.target.result;
                        imagePreview.style.display = 'block';
                    }

                    reader.readAsDataURL(file);
                } else {
                    // Display the existing image
                    imagePreview.src = '{{ isset($a->image) ? asset('storage/article/' . $a->image) : '' }}';
                    imagePreview.style.display = 'block';
                }
            });
        });
    });
</script>
<!--END MODAL-->
