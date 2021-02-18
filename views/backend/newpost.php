
<form method="post" action="<?=$_SERVER['REQUEST_URI']?>">
  <input type="text" id="title"></input>
  <textarea id="body_field" name="body_field" rows="15" cols="80"><?php echo $bodyContent;?></textarea>
  <br/>
  <input type="submit" name="save" value="Submit" />
</form>