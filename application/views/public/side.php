 <div class="list-group list-group-flash mt-3">
            <?php
            foreach($category as $cat):
            ?>
             <a href="" class="list-group-item list-group-item-action"><?= $cat->title;?></a>
             
            <?php endforeach;?>
         </div>