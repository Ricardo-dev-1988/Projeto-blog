<?php
    include_once('templates/header.php');

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?=$currentPost['title']?></h1>
            <p id="post-description"><?=$currentPost['description']?></p>
            <div id="img-container">
                <img src="<?=$BASE_URL?>/img/<?=$currentPost['img']?>" alt="<?=$currentPost['title']?>">
            </div>
            <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem vero qui aspernatur laboriosam sequi labore repellendus, sint voluptates incidunt quia veniam assumenda expedita nesciunt, aliquam ad eum quibusdam! Corporis, aliquid?
            Beatae facilis, laboriosam pariatur nobis dolores numquam cumque animi rerum porro non corporis, voluptatem unde. Odio officiis quaerat nostrum vitae laudantium fugiat veritatis sit. Distinctio neque officia aperiam ex! Soluta.
            Animi, quam. Harum delectus enim recusandae unde ab temporibus, sequi quasi ex magnam molestiae quae iusto libero optio repellat provident hic dolor consectetur officiis tempora, similique velit laudantium, culpa dolorem!
            Iste, asperiores cumque laborum eligendi soluta repellat exercitationem at consequuntur voluptatem quisquam dolorum ipsa error debitis voluptatum cupiditate voluptatibus rerum quod inventore, accusantium aliquid ullam dicta, in quidem. Cumque, rem?
            Laudantium assumenda ducimus minima alias vitae. Magnam voluptate esse ducimus officiis quas velit voluptates aspernatur cum animi earum ex eligendi corporis quam facilis sed facere, rem quia architecto atque illum.</p>
            <p class="post-content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quidem vero qui aspernatur laboriosam sequi labore repellendus, sint voluptates incidunt quia veniam assumenda expedita nesciunt, aliquam ad eum quibusdam! Corporis, aliquid?
            Beatae facilis, laboriosam pariatur nobis dolores numquam cumque animi rerum porro non corporis, voluptatem unde. Odio officiis quaerat nostrum vitae laudantium fugiat veritatis sit. Distinctio neque officia aperiam ex! Soluta.
            Animi, quam. Harum delectus enim recusandae unde ab temporibus, sequi quasi ex magnam molestiae quae iusto libero optio repellat provident hic dolor consectetur officiis tempora, similique velit laudantium, culpa dolorem!
            Iste, asperiores cumque laborum eligendi soluta repellat exercitationem at consequuntur voluptatem quisquam dolorum ipsa error debitis voluptatum cupiditate voluptatibus rerum quod inventore, accusantium aliquid ullam dicta, in quidem. Cumque, rem?
            Laudantium assumenda ducimus minima alias vitae. Magnam voluptate esse ducimus officiis quas velit voluptates aspernatur cum animi earum ex eligendi corporis quam facilis sed facere, rem quia architecto atque illum.</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?=$tag?></a></li>
                <?php endforeach; ?>    
            </ul>
            <h3 id="categorias-title">Categorias</h3>
            <ul id="categorias-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?=$category?></a></li>
                <?php endforeach; ?>    
            </ul>
        </aside>
    </main>
    

<?php
    include_once('templates/footer.php');
?>    
