<html>

           <title>Tutorial TinyMCE di dalam web PHP</title>
                <head>
<script  type="text/javascript"  src="tinymce/tinymce.min.js"></script>
<script  type="text/javascript">
            tinymce.init({
            selector: "textarea"
            });
</script>
</head>
  <body>
               <table>
                    <tr>
                        <td>Nama</td>
                            <td>:</td>
                        <td><input  type="text" name="Nama"></td>
                    </tr>
                    <tr>
                        <td>Website</td>
                             <td>:</td>
                        <td><input  type="text" name="Website"></td>
                    </tr>
                    <tr>
                       <td>Komentar</td>
                             <td>:</td>
                        <td><textarea name="Komentar"></textarea></td>
                    </tr>
                </table>
  </body>
  </html>	
