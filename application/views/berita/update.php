<?php echo validation_errors(); ?>

<?php echo form_open('berita/update/'.$berita_item['id']); ?>

<label for="title">Title</label>
<input type="text" id="title" name="title" value="<?php echo $berita_item['title']; ?>">

<br>

<label for="content">Content</label>
<textarea name="content" id="content" cols="30" rows="10"><?php echo $berita_item['content']; ?></textarea>

<br>

<input type="submit" name="submit" value="Simpan">


<?php echo form_close(); ?>