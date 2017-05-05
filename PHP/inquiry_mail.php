<?php

if($_POST){

    $name=$_POST['name'];
	 $email=$_POST['email'];
	 $telefono=$_POST['telefono'];
	 $quanti_siete=$_POST['quanti_siete'];
	 $orario=$_POST['orario'];
	 $my_date=$_POST['my_date'];
     $note=$_POST['note'];
        
 
                $to ="info@mastgood.it";
				$subject = "Prenotazione";
				$message ="<!DOCTYPE html>
							<html>
							<head>
								<meta charset='utf-8' />
							   <meta name='viewport' content='width=device-width, initial-scale=1.0'> 
							</head>
							<body>

								<div style='font-family: arial,helvetica,sans-serif;'>
								<div class='container' style='max-width:750px; margin:0 auto; padding-left: 20px; padding-right: 20px; background: #fff; padding-top: 20px;padding-bottom: 20px;'>
								
									<div class='first-sect'style='border: 1px solid #ddd; padding-left: 15px; padding-right: 15px; padding-bottom: 20px; border-style: double; border-width: 6px; padding-top: 30px;'>
									<div style='text-align:center; margin-bottom: 10px; margin-top: 10px;'>
										<img src='http://projects.theaxontech.com/php/mastgood.it/logo.png'>
									</div>	
										<div class=''>
											
											<h1 style='text-align: center; color: #1F2147;font-family: arial,helvetica,sans-serif; font-size: 30px;'> Prenotazione</h1>
											<div class='container'>
							  
												  <div class='row'>
													<div class='col-md-12'>
													 
													  
													</div>
												  </div>
													<hr />
												   <div class='row'>
													<div class='col-md-6'>
													  <span style='font-size:16px;'><strong>Name:</strong>".$name."</span>
													</div>
													<div class='col-md-6'>
													  <span style='font-size:16px;'><strong >Email:</strong>".$email."</span>
													</div><div class='col-md-6'>
													  <span style='font-size:16px;'><strong >Telefono:</strong>".$telefono."</span>
													</div>
												  </div>
												  
												  <div class='row'>
													<div class='col-md-6'>
													  <span  style='font-size:16px;' ><strong>Date:</strong>".$my_date."</span>
													</div>
													<div class='col-md-6'>
													  <span  style='font-size:16px;'><strong>Orario:</strong>".$orario."</span>
													</div>
												  </div>
												  
												  <div class='row'>
													<div class='col-md-6'>
													  <span  style='font-size:16px;'><strong>Quanti siete:</strong>".$quanti_siete."</span>
													</div>
													
												  </div>
												  
												  <hr />
												  
												<div class='row'>
													<div class='col-md-12'>
													  <h3 style='font-size:20px;'>Note</h3>
													    <p style='font-size:16px;'>".$note."</p>
													</div>
												  </div>
												 </div>
															 
											</div>
										</div>
									
									</div>
									
								</div>

							</div>
							</body>
							</html>";



					// Always set content-type when sending HTML email

					$headers = "MIME-Version: 1.0" . "\r\n";

					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";



					// More headers

					$headers .= 'From: info@mastgood.it' . "\r\n";
                  /*  $headers = 'From:info@mastgood.it' . "\r\n" .
							'Reply-To: ' . $to. "\r\n"; */
					//$headers .= 'Cc: myboss@example.com' . "\r\n";

                    

					 $mail= mail($to,$subject,$message,$headers);



					if(!$mail) 

					{

						echo "Mailer Error: " . $mail->ErrorInfo;

					} 

					else 

					{

						echo "success";

					}



}





?>





