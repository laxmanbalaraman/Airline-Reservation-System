<?php if(count($errors)>0): ?>
  <div class="modal fade" keyboard="True" id="mymodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger" role="alert">
            <?php foreach ($errors as $error ):?>
              <p> <?php echo $error; ?></p>
            <?php endforeach  ?>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <script>
 $(document).ready(function(){
     $("#mymodal").modal('show');
 });
</script>

<?php endif ?>
<?php if(count($msg)>0): ?>
  <div class="modal fade" keyboard="True" id="mymodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="alert alert-success" role="alert">
          <?php foreach ($msg as $msg ):?>
            <p> <?php echo $msg; ?></p>
          <?php endforeach  ?>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <script>
 $(document).ready(function(){
     $("#mymodal").modal('show');
 });
</script>
<?php endif ?>
<?php if(count($upd)>0): ?>
  <div class="modal fade" keyboard="True" id="mymodal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="alert alert-primary" role="alert">
          <?php foreach ($upd as $upd ):?>
            <p> <?php echo $upd; ?></p>
          <?php endforeach  ?>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <script>
 $(document).ready(function(){
     $("#mymodal").modal('show');
 });
</script>
<?php endif ?>
