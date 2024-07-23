# Garni Weather Station server PHP script
This simple php script gets data values from your Garni Meteo Station and converts everything to JSON file on your server. You need to setup few things before start.

## Requirements
- linux php webhosting with any domain (I did not test IP address version and also windows server with php)
- php 5.3+ (tested on 5.6, 7.1)
- ftp connection to your server (you also need ftp client, or Total Commander)

## Instalation
In your Garni device, you should add your domain where you will save you JSON file, for example **myweb.com**

1. use ftp and connect to your server (domain myweb.com)
2. make directory **weatherstation** in web root
3. upload script **updateweatherstation.php** to **/weatherstation** directory
4. make directory **data** in **/weatherstation**
5. change **/data** directory attributes to **755** (chmod 755)

## Testing
Check your php script if everything works OK. Go to your website in browser:
> myweb.com/weatherstation/updateweatherstation.php

Now you should find file **garni.json** in data directory
> myweb.com/weatherstation/data/garni.json

In garni.json file you should see these information
>{"manufacturer":"Garni"}

Also, this is output of php script. You should see same information in your browser. 

If you see correct testing information in browser and also in file, **close your browser and never use testing URL again**. Now, try start your Garni Meteo device and insert there correct **domain name (only)**. The URL label is misleading and you must enter only domain name. Device will always use `weatherstation/updateweatherstation.php` to submit data and that can't be changed. You should see data values from your device in garni.json file.

## Options
If you want switch off php output, please comment this line in php script
>// echo $export;

## Known bugs
- there is problem if you use SSL (https) on your server. You need to use port 80 (http)
- incorrect JSON headers in php output
- in JSON file there are last data values, no history (but I can make it in future)

## Future
- local JSON history files
- history data in SQL database
- history data visualization
