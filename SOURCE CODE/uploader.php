// Upload Code

if($_POST['avatarSubmit'])
{
	
// Where the file is going to be placed 
$target_path = "profileImages/";

/* Add the original filename to our target path.  
Result is "profileImages/filename.extension" */
$target_path = mysqli_real_escape_string($link,$target_path . basename( $_FILES['uploadedfile']['name'])); 
//print_r($_FILES);
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
}
}