<?php foreach($berita as $berita_item){
    echo '<a href="'.base_url('berita/'.$berita_item['slug']).'"><h1>'.$berita_item['title'].'</h1></a>';
    echo '<p>'.$berita_item['content'].'</p>';
    echo '<a href="'.base_url('berita/update/'.$berita_item['id']).'">Edit</a>';
    echo ' | ';
    echo '<a href="'.base_url('berita/delete/'.$berita_item['id']).'">Delete</a>';
} ?>