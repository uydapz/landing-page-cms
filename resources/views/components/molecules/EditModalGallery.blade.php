<div class="modal fade" id="EditModalGallery-{{ $g->id ?? '' }}" tabindex="-1" role="dialog" aria-labelledby="EditModalGallery"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/update/gallery/{{ $g->id ?? '' }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="card-body">
                        <div>
                            <label for="caption" class="form-label">Caption</label>
                            <input type="text" class="form-control" id="caption" name="caption" value="{{ $g->caption ?? '' }}"
                                placeholder="Caption" aria-describedby="defaultFormControlHelp" />
                        </div>
                        <div class="mt-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image-{{ $g->id ?? '' }}" name="image" />
                            <img id="imagePreview-{{ $g->id ?? '' }}" src="{{ isset($g->image) ? asset('storage/gallery/' . $g->image) : '' }}" alt="Image Preview"
                                style="display: block; margin-top: 10px; width: 100%;" />
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
                    imagePreview.src = '{{ isset($g->image) ? asset('storage/gallery/' . $g->image) : '' }}';
                    imagePreview.style.display = 'block';
                }
            });
        });
    });
</script>
