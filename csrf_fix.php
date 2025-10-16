// session start 
if (empty($_SESSION['csrf'])) { 
  $_SESSION['csrf'] = bin2hex(random_bytes(32)); 
} 
... 
// in form 
echo '<input type="hidden" name="csrf" value="'.$_SESSION['csrf'].'">'; 
... 
// on POST 
if (!hash_equals($_SESSION['csrf'], $_POST['csrf'] ?? '')) { 
  die('CSRF token invalid'); 
}
