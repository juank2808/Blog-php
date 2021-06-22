<div class="row justify-content-md-center">
  <ul class="pagination col-1">
    <?php if ($page == 1): ?>
    <li class="page-item disabled">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php else: ?>
      <li class="page-item">
        <a class="page-link" href="?page=<?php echo $page -1 ?>" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
    <?php endif; ?>
    <?php
    for ($i=1; $i <= $n_Page; $i++) {
      if ($page == $i) {
        echo "  <li class='page-item'><a class='page-link' href='?page=$i'>$i</a></li>";
      }else{
        echo "<li class='page-item'><a class='page-link' href='?page=$i'>$i</a></li>";
      }
    }
     ?>
    <?php if ($page == $n_Page): ?>
       <li class="page-item disabled">
         <a  class="page-link" aria-hidden="true" href="#">
            <span aria-hidden="true">&raquo;</span>
         </a>
       </li>
     <?php else: ?>
       <li class="page-item">
         <a class="page-link" aria-hidden="true" href="?page=<?php echo $page +1 ?>">
           <span aria-hidden="true">&raquo;</span>
         </a>
     <?php endif; ?>
  </ul>
</div>
