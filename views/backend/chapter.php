
<form action="index.php?action=new_chapter">

    <label>Title</label><br />
    <input type='text' name='postTitle' value='<?php if(isset($error)){ echo $_POST['postTitle'];}?>'></p>

    <p><label>Body</label><br />
    <textarea name='postDesc' cols='60' rows='10'><?php if(isset($error)){ echo $_POST['postDesc'];}?></textarea></p>

    <p><label>Published date</label><br />
    <textarea name='postCont' cols='60' rows='10'><?php if(isset($error)){ echo $_POST['postCont'];}?></textarea></p>

    <p><input type='submit' name='submit' value='Submit'></p>
    

</form>