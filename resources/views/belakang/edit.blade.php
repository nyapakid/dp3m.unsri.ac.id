<h3>Edit</h3>

<form action="#" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="title_posting" class="form-control" value="#" required>
    </div>
    
    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="pict" class="form-control">
        
            <img src="" class="mt-2" width="150">
        
    </div>
    <div class="mb-3">
        <label>Konten</label>
        <textarea name="content_posting" id="summernote" class="form-control" rows="100">#</textarea>
    </div>
    <button class="btn btn-success">Update</button>
    <a href="#" class="btn btn-secondary">Batal</a>
</form>

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>