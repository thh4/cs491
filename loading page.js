<script src="jquery.js"></script>
    <script>
      $(function() {
        $('#action').click(function() {
          $('#r').html('<img src="http://www.mediaforma.com/sdz/jquery/ajax-loader.gif">');
          var param = 'l=' + $('#ref').val();
          $('#r').load('http://www.mediaforma.com/sdz/jquery/data.php',param);
        });  
      });
      </script>
