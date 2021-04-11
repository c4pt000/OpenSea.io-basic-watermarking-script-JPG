* requires php-gd, php, apache2 (or nginx)

# OpenSea.io-basic-watermarking-script-JPG

https://opensea.io/assets/0x495f947276749ce646f68ac8c248420045cb7b5e/19201499528010607873248852600248884910024546448420280403806937460419197927425

![s1](https://raw.githubusercontent.com/c4pt000/OpenSea.io-basic-watermarking-script-JPG/main/watermarking-1.png)
![s1](https://raw.githubusercontent.com/c4pt000/OpenSea.io-basic-watermarking-script-JPG/main/watermarking-2.png)

<br>


<br>
git clone https://github.com/c4pt000/OpenSea.io-basic-watermarking-script-JPG
<br>
<br>
<br>
-> /var/www/html/watermark
<br>
<br>
replace liberty.jpg file with original file to watermark
<br>
<br>
this script uses the original JPG as an initial watermark by pixelating the original photo with the original photo
<br>
<br>

then the script uses a semi transparent "opensea.io" logo and places in the lower right hand corner of the watermarked photo
<br>
<br>

the script only does this on the client side of the browser (the actual file never physically changes preserving the original file from any changes
<br>
<br>

(it only makes the changes as the browser displays it)
<br>
<br>

change index.html accordingly
```
change from:
<img src="watermark.php?file=liberty.jpg"></img>

change to:
<img src="watermark.php?file=file_you_want_to_watermark.jpg"></img>

```
firefox 127.0.0.1/watermark/index.html
