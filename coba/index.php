<!DOCTYPE html>
<html>
<head>
	<title>WHM</title>
	<link rel="stylesheet" type="text/css" href="asset/css.css">
	<script type="text/javascript" src="asset/js/jq.js"></script>
	<script type="text/javascript" src="asset/js/jq.inview.js"></script>
</head>
<body>
	<div class="atas">
		<div class="menu_atas">
            <div class="logo">
                <h3>Aplikasi Percobaan</h3>
            </div>
            <div class="search">
                <input type="text" name="cari" id="input" placeholder="Masukkan Kata Kunci">
            </div>
            <div class="menu">
                <h3>Kategori</h3>
            </div>
        </div>
	</div>
    <div class="tengah">
    
    </div>
	<div class="bawah" id="bawah">
        <div class="loader">
            <img src="asset/gambar/loading.gif" class="load" id="load" style="visibility: hidden;">
        </div>		
	</div>
	<script type="text/javascript">
		  $(document).ready(function(){
             $('#bawah').on('inview', function(event, isInView) {
             	$('#load').attr('style', 'visibility:visible');
                 if (isInView) {                 	
                     
                     $.ajax({
                         type: 'POST',
                         url: 'data.php',
                         data: { page: 3 },
                         success: function(data){
                             if(data != ''){							 
                                 $('.tengah').append(data);
                                 // $('#load').attr('style', 'visibility:hidden');
                             } else {								 
                                 $("#loader").hide();
                             }
                         }
                     });
                 }
             });
         });
	</script>
</body>
</html>