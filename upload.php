<h2><center>Upload Image</center></h2>
<center><form action="check_upload.php" method="post" enctype="multipart/form-data">
	<center><h5 style="color:green">Available formats: .jpg</h5></center>
    <b style="color:navy;font-family:arial;">Choose your file:</b>
    <input type="file" name="upload" id="fileToUpload" minlength="1"><br/><br/>
    Enter your text here: <input type="text" name="text" value="This is sample text..."><br/><br/>
    <input type="submit" value="Upload" name="submit" id="u" title="Upload">
</form>
</center>
</div>
</div>
<style>
input{width:300px;color:black;padding:10px;border-radius:5px;border:1px solid lightgray;}
#u{width:150px;background-color:#3399cc;color:white;border:0px;}
</style>
