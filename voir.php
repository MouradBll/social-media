<?php

    require "function.php";
    $conn = connect_bdd();

    /*afficher le contenu*/

    $pdoStat = $conn->query('SELECT * FROM posts ORDER BY date DESC');
    $executeOk = $pdoStat->execute();
    $posts = $pdoStat->fetchALL();

/*   echo "<a href=\"edit.php?id={$data["id"]}\">Modifier ce post </a>"; 
    echo "<a href=\"suppr.php?id={$data["id"]}\">X</a> <br />"; */



     foreach($posts as $post): ?>


<div class="post-content">
                <!--Post Date-->
    <div class="post-date hidden-xs hidden-sm">
        <h5>Mourad</h5>
        <?php echo "<p align\"right\">".date("j/n/Y G:i",strtotime($post["date"]))."</p>"; ?>
    </div><!--Post Date End-->

    <img src="images/post-images/12.jpg" alt="post-image" class="img-responsive post-image" />
    <div class="post-container">
        <img src="images/users/user-1.jpg" alt="user" class="profile-photo-md pull-left" />
        <div class="post-detail">
            <div class="user-info">
                <h5><a href="timeline.html" class="profile-link">Sarah Cruiz</a> <span class="following">following</span></h5>
                <p class="text-muted">Published a photo about 15 mins ago</p>
            </div>
            <div class="reaction">
                <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
            </div>
            <div class="line-divider"></div>
            <div class="post-text">
                
                <?php
                    echo "<p>{$post["contenu"]}</p>";
                ?>

            </div>
            
            <div class="line-divider"></div>
            
            <?php
            $id = $post['id'];
            $pdoStat = $conn->query("SELECT * FROM commentaires WHERE post_id = $id");
            $executeOk = $pdoStat->execute();
            $comments = $pdoStat->fetchALL();

            foreach($comments as $comment):
            ?>
            
            <div class="post-comment">
                <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                <?php
                echo "<p> <a href=\"timeline.html\" class=\"profile-link\"> Mourad </a> {$comment["contenu"]}  </p> <br>";
                echo "  <palign\"right\">".date("j/n/Y G:i",strtotime($comment["date"]))."</p>"; ?>
                
                
            </div>
            
            <?php endforeach; ?>
            
            <form action="addcomm.php" method="post">
                <div class="post-comment">
                    <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                    <input type="text" name="contenu" class="form-control" placeholder="Post a comment" >
                    <input type="hidden" name="post_id" value="<?php echo $post["id"]; ?>">
                    <input type="submit" value="Envoyer">
                </div>
            </form>
        </div>
    </div>
</div>

<?php endforeach; ?>
