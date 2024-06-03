# phar-deserialization
This is a lab for PHAR deserialization vulnerability. Your objective is to get remote code execution.

<h1>Setup</h1>

```
git clone https://github.com/diego-tella/phar-deserialization/
cd phar-deserialization/
docker build -t pharlab .
docker run --name pharlab -d -p 80:80 pharlab
```

You can now access http://127.0.0.1/phar_lab/ to access the lab and practice. 

<h1>Exploit</h1>
To generate the phar file, use the exploit.php. You can edit it to execute your own commands.

```
php exploit.php
```

Make sure your phar.readonly is set to off in the php.ini file.

![image](https://github.com/diego-tella/phar-deserialization/assets/70545257/9e645bfc-8439-4c4f-9b11-3be960045a6a)
