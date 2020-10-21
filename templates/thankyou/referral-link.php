<?php
/**
 * File Security Check
 */
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
	die ( 'You do not have sufficient permissions to access this page!' );
}

$pid = Prelaunchr()->valid_uuid( $_GET['pid'] );
$email = ($_POST['email']);
if ( $pid ) {
	$url = get_permalink() . ( parse_url( untrailingslashit( get_permalink() ) , PHP_URL_QUERY ) ? '&' : '?' ) . 'ref=' . $pid;
?>

 





<div id="referral-link" ><?php echo $url ?>

</div>
 <!--<button onclick="myFunction()" class="cbut">Copy </button>-->
<input type="text" value=<?php echo $url ?> id="myInput" style="display:none">


<script>      function myFunction() 
{
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>

<?php
 
 ?>
<?php } ?>