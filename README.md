# A Simple PHP ShareX Server
![](https://img.shields.io/github/stars/lanoow/sharex.svg) ![](https://img.shields.io/github/forks/lanoow/sharex.svg) ![](https://img.shields.io/github/tag/lanoow/sharex.svg) ![](https://img.shields.io/github/release/lanoow/sharex.svg)

About
----
I was tired of using imgur and prnt.sc for screenshot hosting, so I researched in self-hosting a platform like that or something but it was either too complicated for my small brain or it was not worth it, so I decided to make one myself.

Installation
----
Lets start with the **Dependencies:**
📡 NGINX
🏇 PHP 7.4 or newer (PHP 8 is recommended)

Okay lets move to copying the repository to your machine
`$ git clone https://github.com/lanoow/simple-sharex-server.git`

Open the repository folder, if on linux that would be `$ cd simple-sharex-server/`
After doing so, open index.php and edit the following

	<?php
	$secret_key = ""; // Change this to your preference
	$sharexdir = "i/"; // The subdir where all the images are stored
	$domain_url = 'https://your-domain.com/'; // Your domain name
	$lengthofstring = 6; // Lenght of the file name. Example: rgs63s.png
	
	...
    

I am not going to show you how to setup your NGINX for PHP so if you don't have it setup, please look at some tutorial.
The next step is to add the server settings to ShareX.
1. Open ShareX
2. Go to **Destinations > Custom uploader settings**
3. Select **New**
4. Fill out the details. Name can be whatever you want, for **Destination Type**, select **Image Uploader and File Uploader (Optional)**. Method is **POST** and **Request URL** is your domain name. Under **Body** on **Name** set it to "secret" and **Value** to your secret key. Uder all of that is **File form name**, set it to "sharex". Test if it all works!
5. After you're done with the testing, go to **Destinations > Image Uploader > Custom image uploader**
6. Enjoy!

Thanks for all. You can support me here: [![ko-fi](https://ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/H2H8AN8FK)
