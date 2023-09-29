<div class="py-6 px-6 text-center">
          <p class="mb-0 fs-4">Design and Developed by <a href="#" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> Distributed by <a href="#">ThemeWagon</a></p>
        </div>
      </div>
    </div>
  </div>
  <script>
  new DataTable('#example');
  </script>
  <script type="text/javascript">
  $('.close').click(function() {
    $(this).parent().hide();
  });
  $('body').on('click', '.delete_btn', function() {
    var s = confirm('Are u sure you want to delete this record ?');
    if (s == true) {
      $.ajax({
        url: 'http://localhost/jenisha/Modernize/src/delete.php',
        data: {
          'id': $(this).attr('data-id')
        },
        success: function(data) {
          $('#message').html(data);
        }
      });
    }
  });
</script>
  

  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

</html>