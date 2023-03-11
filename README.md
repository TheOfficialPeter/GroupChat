# GroupChat

Just a side project I wanted to make. A chat app like discord with 99% less features. Really basic, but functional.
It uses a kahoot based joining system for joining chat groups which is a "room" code/pin. New "rooms" can also be created with ease. 
I am planning on making a decentralized version of this chat app, but for now it runs on a web server using PHP and MYSQL for backend.

### Ways to improve:
- Add lazy loading for messages (like discord) ex: when scrolling upwards, the messages start loading in from the past.<br/>
- Improve error messages (use AJAX and get returns from HTTP calls, html forms has its limitations) 
- Add a password-after-pin for private servers. We don't want another 2020 zoom incident lol
- Make chat messages sent by you appear on the opposite side of the screen.


## Installation
1. Install xampp.
2. Create a folder in ~/xampp/htdocs called "Chat" or "Groupchat" or anything like that.
3. Download this repo and extract it into the folder you just created.
4. Start the xampp Apache and MySQL server

### MySQL setup
<b>(can't promise security here, call an expert if you need it to be secure)</b><br/>
1. Go to the "User Accounts" tab at the top.
2. Click on "Add user account".
3. Username = admin<br/>
   Host name = localhost<br/>
   Password = admin
4. Scroll down to Global priviledges and click on select all
5. Click on "Go" at the bottom

<b>And that's it!</b>

## Sneak peeks

![image](https://user-images.githubusercontent.com/57006688/224471715-3437bdbb-00e9-4715-9441-311a496cffec.png)
![image](https://user-images.githubusercontent.com/57006688/224471726-aa80fc15-4235-401b-aea3-d3d1466db453.png)
![image](https://user-images.githubusercontent.com/57006688/224471732-09d6ab5c-5170-40e8-8dbf-a2e13fd28a0c.png)
![image](https://user-images.githubusercontent.com/57006688/224471738-8c99c56d-4d8c-4cd5-b6d3-7d24d1dab87c.png)

