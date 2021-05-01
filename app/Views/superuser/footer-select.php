 </div><!-- .animated -->
        </div><!-- .content -->


        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="<?php echo base_url('templates/admin/assets/js/main.js') ?>"></script>


    <script src="<?php echo base_url('templates/admin/assets/js/lib/data-table/datatables.min.js') ?>"></script>
    <script src="<?php echo base_url('templates/admin/assets/js/lib/data-table/dataTables.bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('templates/admin/assets/js/lib/data-table/dataTables.buttons.min.js') ?>"></script>
    <script src="<?php echo base_url('templates/admin/assets/js/lib/data-table/buttons.bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('templates/admin/assets/js/lib/data-table/jszip.min.js') ?>"></script>
    <script src="<?php echo base_url('templates/admin/assets/js/lib/data-table/vfs_fonts.js') ?>"></script>
    <script src="<?php echo base_url('templates/admin/assets/js/lib/data-table/buttons.html5.min.js') ?>"></script>
    <script src="<?php echo base_url('templates/admin/assets/js/lib/data-table/buttons.print.min.js') ?>"></script>
    <script src="<?php echo base_url('templates/admin/assets/js/lib/data-table/buttons.colVis.min.js') ?>"></script>
    <script src="<?php echo base_url('templates/admin/assets/js/init/datatables-init.js') ?>"></script>

    <script src="<?php echo base_url('templates/admin/assets/js/lib/chosen/chosen.jquery.min.js') ?>"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>
  <script>
    jQuery(document).ready(function() {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
    </script>

    <script type="text/javascript">
      $(document).ready(function(){

        $('#owner').change(function(){
          var user_id = $('#owner').val();
          if(user_id != ''){
            $.ajax({
              url:"<?php echo base_url('transaction/fetch_item');?>",
              method:"POST",
              data:{user_id:user_id},
              success:function(data){
                $('#item').html(data);
              }
            })
          }
        });

      });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
          if (window.File && window.FileList && window.FileReader) {
            $("#files").on("change", function(e) {
              var files = e.target.files,
                filesLength = files.length;
              for (var i = 0; i < filesLength; i++) {
                var f = files[i]
                var fileReader = new FileReader();
                fileReader.onload = (function(e) {
                  var file = e.target;
                  $("<span class=\"pip\">" +
                    "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                    "<br/><span class=\"remove\">Remove image</span>" +
                    "</span>").insertAfter("#files");
                  $(".remove").click(function(){
                    $(this).parent(".pip").remove();
                  });
                  
                  // Old code here
                  /*$("<img></img>", {
                    class: "imageThumb",
                    src: e.target.result,
                    title: file.name + " | Click to remove"
                  }).insertAfter("#files").click(function(){$(this).remove();});*/
                  
                });
                fileReader.readAsDataURL(f);
              }
            });
          } else {
            alert("Your browser doesn't support to File API")
          }
        });
    </script>


</body>
</html>