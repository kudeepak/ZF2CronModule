# ZF2 Generic Cron/Console Module

To use this module, You need to write function in model and need 
to create an entry of that model in module.php's "getServiceConfig()" function 
as we are doing the same to call our model function in controller.

After that you can run the command :

php public/index.php cron index --method='Method name defined in model' --model='Key set in side the getServiceConfig'  [--args='Optional, you can pass any string parameter']

Let us know if any issue or query on <a href="mailTo:kudeepakh@gmail.com">kudeepakh@gmail.com</a>.
