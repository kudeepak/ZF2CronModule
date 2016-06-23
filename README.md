# ZF2 Generic Cron/Console Module

Install the module in your ZF2 application.

To use this module, You need to write function in model and need 
to create an entry of that model in module.php's "getServiceConfig()" function 
as we are doing the same to call our model function in controller.

After that you can run the command :

php public/index.php cron index --method='Method name defined in model' --model='Key set in side the getServiceConfig'  [--args='Optional, you can pass any string parameter']

If any issue or query on <a href="mailTo:kudeepakh@gmail.com">kudeepakh@gmail.com</a>.
Website : <a href="http://deepakkumar.co.in/">http://deepakkumar.co.in/</a>
