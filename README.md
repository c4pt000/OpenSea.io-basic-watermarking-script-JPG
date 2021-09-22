# QR code OT (other thoughts) informational and transparent QR

![s1](https://raw.githubusercontent.com/c4pt000/OpenSea.io-basic-watermarking-script-JPG-mp4/main/QR-information-robotic-detection-and-other-exp-OT-2.png)
![s1](https://raw.githubusercontent.com/c4pt000/OpenSea.io-basic-watermarking-script-JPG-mp4/main/QR-information-robotic-detection-and-other-exp-OT-3.png)


* 09-22-2021
He made up a story about QR codes being stolen or hijacked he seems like a nutcase
I offered a suggestion to be helpful because anyone can login and screenshot
An NFT and own it , it doesn't involve stealing any kind of secret credentials
# honest
Anyone can screenshot the NFTs and own them!

https://www.theverge.com/22683766/nft-scams-theft-social-engineering-opensea-community-recovery


# response from OpenSea.io 04-22-2021 regarding protecting NFTs

https://raw.githubusercontent.com/c4pt000/OpenSea.io-basic-watermarking-script-JPG-mp4/main/opensea.io-watermarking-response-to-request.txt

https://www.linkedin.com/in/natechastain

![s1](https://raw.githubusercontent.com/c4pt000/OpenSea.io-basic-watermarking-script-JPG-mp4/main/page1-opensea.png)
![s1](https://raw.githubusercontent.com/c4pt000/OpenSea.io-basic-watermarking-script-JPG-mp4/main/page2-opensea.png)
![s1](https://raw.githubusercontent.com/c4pt000/OpenSea.io-basic-watermarking-script-JPG-mp4/main/page3-opensea.png)
![s1](https://raw.githubusercontent.com/c4pt000/OpenSea.io-basic-watermarking-script-JPG-mp4/main/page4-opensea.png)




<br>
<br>
<br>
* requires php-gd, php, apache2 (or nginx), ffmpeg

```
docker run -it -d -p 888:888 -e DISPLAY=$DISPLAY -v /tmp/.X11-unix:/tmp/.X11-unix c4pt/opensea-watermarking-template

change /etc/apache2/ports.conf from 888 once running the docker VM

docker exec -it <docker_vm_hash> bash
service apache2 start

firefox 127.0.0.1:888/index.html
```

# OpenSea.io-basic-watermarking-script-JPG+mp4

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




https://opensea.io/assets/0x495f947276749ce646f68ac8c248420045cb7b5e/19201499528010607873248852600248884910024546448420280403806937456021151416321

# video with watermarking opensea.io logo

![wm_17568181861618174820-x264](https://user-images.githubusercontent.com/46433702/114322807-2ba51600-9af0-11eb-8444-0f865aa480b3.gif)

