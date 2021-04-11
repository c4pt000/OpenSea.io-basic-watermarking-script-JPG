# OpenSea.io-basic-watermarking-script-JPG
git clone https://github.com/c4pt000/OpenSea.io-basic-watermarking-script-JPG
-> /var/www/html/watermark

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
