 <h2>
     <?= $title ; ?>
 </h2>
<?= validation_errors(); ?>

 <?= form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name ="title" placeholder = "Add Title">
  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="category_id" class="form-control">
      <?php foreach($categories as $category): ?>
        <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    <label>Image Upload</label>
    <input type="file" name="postimage" size="20">        
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id = "editor1" class="form-control" name="body" placeholder = "Add Body"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>