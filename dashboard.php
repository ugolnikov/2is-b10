<!doctype html>
 2 <html lang="en-us">
 3   <head>
 4     <meta charset="utf-8">
 5     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 6     <title>DOOM</title>
 7     <style type="text/css">
 8       .dosbox-container { width: 320px; height: 200px; }
 9       .dosbox-container > .dosbox-overlay { background: url(https://js-dos.com/cdn/DOOM.png); }
10     </style>
11   </head>
12   <body>
13     <div id="dosbox"></div>
14     <br/>
15     <button onclick="dosbox.requestFullScreen();">Make fullscreen</button>
16     
17     <script type="text/javascript" src="https://js-dos.com/cdn/js-dos-api.js"></script>
18     <script type="text/javascript">
19       var dosbox = new Dosbox({
20         id: "dosbox",
21         onload: function (dosbox) {
22           dosbox.run("upload/DOOM-@evilution.zip", "./doom");
23         },
24         onrun: function (dosbox, app) {
25           console.log("App '" + app + "' is runned");
26         }
27       });
28     </script>
29   </body>
30 </html>
