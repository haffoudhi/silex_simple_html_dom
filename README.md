integrating simple_html_dom in silex framework 
=====================

This is a simple silex service which integrates simple html dom into silex as a service .

Install instruction : 
    
    Via Composer :
      1 - Add this line to composer file: "haffoudhi/simplehtmldom": "@dev"
      2 - Then run composer update.
      3 - Register the new service in your bootstrap file $app->register(new Haffoudhi\Silex\SimpleHtmlDomServiceProvider());
      
    Without Composer :
      1 - Copy the folder Haffoudhi under the src file of your silex project.
      2 - Register the new service in your bootstrap file $app->register(new Haffoudhi\Silex\SimpleHtmlDomServiceProvider());
    
How to use : 

Now, afer you installed the service successfully, In your Controller, 

	1 - call the service : $simpleHtmlDom = $app['simpleHtmlDom'];
	2 - Use simplehtmldom to get all the links from a string :
		  $content = file_get_contents(__DIR__ . '/anyWebPage.htm'); // $content can be the 
		    //result of curl function or the content of html file, it's a string that contains the html source
      $simpleHtmlDom->load($content);
      // Find all links
      foreach($simpleHtmlDom->find('a') as $element) {
          echo $element->href . '<br/>';
      }
	3 - Use simplehtmldom to get all the links from a file :
		  $simpleHtmlDom->load_file(__DIR__ . '/anyWebPage.htm'); // we introduce the path to the file 
		  						           //that contains the html source
      // Find all links
      foreach($simpleHtmlDom->find('a') as $element) {
          echo $element->href . '<br/>';
      }

Final Notices,    

    1 - Need some assistance in data scraping, web scraping using silex and simple_html_dom
    2 - You do have some problems implementing the service

then pull a new request  i will answer as soon as possible.
