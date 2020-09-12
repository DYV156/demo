<?php
   /*
   Plugin Name: Indeed Job List
   Plugin URI: 
   Description: a plugin to create awesomeness and spread joy
   Version: 1.2
   Author: Mr. Awesome
   Author URI: 
  
   */


require ( plugin_dir_path( __FILE__ ) . 'src/indeed.php' );

function myplugin_scripts() {
    //wp_register_style( 'liststyle.css',  plugin_dir_url( __FILE__ ) . 'src/liststyle.css' );
    //wp_enqueue_style( 'liststyle.css' );
	//wp_register_style( 'formstyle.css',  plugin_dir_url( __FILE__ ) . 'src/formstyle.css' );
    //wp_enqueue_style( 'formstyle.css' );
	//wp_register_script( 'formscript.js',  plugin_dir_url( __FILE__ ) . 'src/formscript.js', array('jquery'), '1.0', true  );
    //wp_enqueue_script( 'formscript.js' );
}
add_action( 'wp_enqueue_scripts', 'myplugin_scripts' );

function plugin_name_scripts() {
wp_enqueue_style( 'style', plugins_url('css/liststyle.css', __FILE__));
wp_enqueue_style( 'font-awesome', plugins_url('css/font-awesome.min.css', __FILE__));
wp_enqueue_script( 'script', plugins_url('js/formscript.js', __FILE__), array('jquery'));
}
add_action('wp_enqueue_scripts', 'plugin_name_scripts');

function job_listing() {
	
 

	$client = new Indeed("3328355262506345");

	$params = array(
		"q" => "php",
		"l" => "IN",
		"limit" => 10000,
         "sort" => "date",
         "start" => 0,
         "end" => 100,
		"userip" => "1.2.3.4",
		"useragent" => "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2)"
	);

	$results = $client->search($params);?>
	<?php 
	//$myarray = array_shift($results);
	//print_r($results);
	
	?>
	
	<?php
	
	 echo '<div class="job_listings"><p><strong>Total Results</strong>: '.$results['totalResults'].'</p>';
	echo '<ul class="list_table">';

	foreach($results['results'] as $key => $value){
		//print_r($value);
	$img = plugins_url( 'img/company.png', __FILE__ ); 
		
	echo '<li class="job_listing">
		<div class="job_listing-logo">
		<img class="company_logo" src="' . $img . '" alt="">
		</div>
		<div class="job_listing-about">
		<div class="job_listing-position job_listing__column">
		<h3 class="job_listing-title">'.$value['jobtitle'].'</h3>
			<div class="job_listing-company">
				<span class="job_listing-company-tagline">'.$value['company'].'</span>
			</div>
		</div>
		<div class="job_listing-location job_listing__column">'.$value['formattedLocation'].'</div>
		<ul class="job_listing-meta job_listing__column">
						<li class="job_listing-date"><date>'.$value['date'].'</date></li>
		</ul>
		</div>
		<div class="job_listing_description"><span class="job_listing-detail">'.$value['snippet'].'</span></div>
		<div class="contact">Apply</div>
		<div class="contactForm">  <h1>Keep in touch!</h1><h3> Apply For '.$value['jobtitle'].'</h3>' ?>
		<form action="" method="post">
			<label>Name</label>
			<input name="name" type="text" required />
			<label>Email</label>
			<input name="email" type="email" required />
			<label>Phone(optional)</label>
			<input name="phone" type="text" required />
			<label>Resume</label><br/>
			<input type="file" name="fileupload" value="fileupload" id="fileupload">
			<label>Subject</label>
			<input name="subject" type="text" required />
			<label>Meassage(optional)</label>
			<textarea name="msg"></textarea>
			<input class="formBtn" name="submit" type="submit" />
			<input class="formBtn" name="reset" type="reset" />
		</form>
<?php	  echo '</div></li>';
		}

	echo '</ul></div><div id="pagination"></div>';

}

add_shortcode( 'indeed_job_list', 'job_listing' );

 if(isset($_POST['submit']))
    {
        //The form has been submitted, prep a nice thank you message
        $output = '<h1>Thanks for your file and message!</h1>';

        $to = 'me@example.com';
		$from = $_POST['email']; // this is the sender's Email address
		$first_name = $_POST['name'];
		$phone = $_POST['phone'];
        $subject = 'a file for you';

        $message = strip_tags($_POST['message']);
        $attachment = chunk_split(base64_encode(file_get_contents($_FILES['fileupload']['tmp_name'])));
        $filename = $_FILES['fileupload']['name'];

        $boundary =md5(date('r', time())); 

        $headers = "From: ". $from."\r\nReply-To:" .$to;
        $headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"_1_$boundary\"";

        $message="This is a multi-part message in MIME format.

--_1_$boundary
Content-Type: multipart/alternative; boundary=\"_2_$boundary\"

--_2_$boundary
Content-Type: text/plain; charset=\"iso-8859-1\"
Content-Transfer-Encoding: 7bit

$message

--_2_$boundary--
--_1_$boundary
Content-Type: application/octet-stream; name=\"$filename\" 
Content-Transfer-Encoding: base64 
Content-Disposition: attachment 

$attachment
--_1_$boundary--";

        mail($to, $subject, $message, $headers);
    }
?>
