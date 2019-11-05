<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<html lang="en">
<!--Version 6.0 
	Name:Ben Sebastian
	Date Completed:9/5/2019
 -->
<head>

<title> FreeGiftcards.Net/Games</title>
    <style>
   
    .titlemania{
        color: #003b6f;
        font-family: cursive;
        text-align: center;
                font-size: 250%;

    }
    </style>

    <meta name="author" content="your name" />

        <meta name="description" content="" />


<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->        

<link rel="stylesheet" href="User13css/day.css">  
    
<script LANGUAGE="JavaScript">

<!--- hide from old browsers --->

function jumpBox(list) {
   location.href = list.options[list.selectedIndex].value
   }

//1997 All Rights Reserved, Daniel C. Peterson
//For commercial user rates please email a quote request to
//webmaster@webwinder.com

function compute(form)  {
    form.title.value = ("''A SHORT STORY,'' by " + form.firstName.value + " " + form.lastName.value);
    if(form.gender.value == "Male" || form.gender.value == "male") {var boyGirl = "boy"} else {var boyGirl = "girl"};
    if(form.gender.value == "Male" || form.gender.value == "male") {var heShe = "he"} else {var heShe = "she"};
    if(form.gender.value == "Male" || form.gender.value == "male") {var hisHer = "his"} else {var hisHer = "her"};
    if(form.gender.value == "Male" || form.gender.value == "male") {var himHer = "him"} else {var himHer = "her"};
    
    var pet = form.color.value + " " + form.animal.value

form.story.value = ("Once upon a time there was a young " + boyGirl + " named " + form.firstName.value + ".  " + form.firstName.value + " was " + form.age.value + " years old and lived in " + form.city.value + ", " + form.state.value + ".  While walking home from school one day, a " + pet + " jumped out from behind a " + form.plant.value + " and tackled " + form.firstName.value + " to the ground.  But just when " + heShe + " was about to let out a scream for help, " + form.firstName.value + " realized that the " + pet + " was only licking " + hisHer + " face, not trying to bite it off.  At that moment, " + form.firstName.value + " decided to keep the " + pet + " as a pet.  And on the way home " + heShe + " decided to name " + hisHer + " pet " + pet + " ''" + form.friend.value + ".''  When " + form.firstName.value + " and " + hisHer + " new pet finally got home, guess who was standing on the front porch?  That's right, it was " + form.firstName.value + "'s mother, " + form.mom.value + ".  And boy was she surprised to see a " + pet + " following " + form.firstName.value + " into the yard!  ''What in world is that?'' shouted " + form.mom.value + ".  ''It's a " + pet + ",'' answered " + form.firstName.value + ".  ''Dah, I can see that, " + form.firstName.value + ", but what on earth is it doing here?'' said " + form.mom.value + ".  ''It's my new pet!'' answered " + form.firstName.value +".  ''Oh you think so do you?'' remarked " + form.mom.value + ".  ''I wouldn't get your hopes up. You know how your father hates " + pet + "s.  But, well, I suppose you can keep him until your father comes home.''  And with that " + form.firstName.value + " grabbed " + form.friend.value + " by the scruff of the neck and led " + hisHer + " new pet into the house--even though " + heShe + " knew " + hisHer + " father was probably going to dissaprove.  Once in the house, " + form.firstName.value + " and " + form.friend.value + " played and played, that is until " + form.firstName.value + "'s favorite television show, ''"+ form.tv.value + ",'' started.  At that point " + form.firstName.value + " forgot all about " + form.friend.value + " having an unsupervised run of the house.  That is until half way through ''" + form.tv.value + ",'' when " + form.firstName.value + " was brought back to reality when " + heShe + " heard " + hisHer + " father shout, ''" + form.cuss.value + "!!  " + form.firstName.value + "! Get your " + form.butt.value + " in the " + form.room.value + "...NOW!!''  With that " + form.firstName.value + " rushed into the " + form.room.value + " to see what all the fuss was about.  When " + heShe + " entered the " + form.room.value + ", there stood " + hisHer + " father, " + form.dad.value + ", pointing toward the " + form.furn.value + ".  ''Will someone please explain that?'' asked " + hisHer + " father.  Then, as " + form.firstName.value + " followed " + hisHer + " father's finger to where it was pointing, " + heShe + " instantly knew what " + hisHer + " father was so upset about.  There, smack dab in the middle of the " + form.furn.value + ", was the biggest pile of " + form.animal.value + " doo-doo " + heShe + " had ever seen!  ''I don't EVEN want to know how that got there,'' said " + form.dad.value + ".  ''But you had better get it cleaned up now!  And you had better get rid of whatever it is that could have done such a thing!''  Well, knowing " + hisHer + " father as well as " + heShe + " did, " + form.firstName.value + " knew there was no sense even asking " + hisHer + " father if " + heShe + " could keep " + form.friend.value + " for a pet.  So without hesitation, " + form.firstName.value + " set out to find where " + form.friend.value + " was hiding.  After a few minutes of looking, " + form.firstName.value + " discovered " + form.friend.value + " crouched beneath the table that " + form.firstName.value + " did " + hisHer + " " + form.hobby.value + " on.  ''Come on, " + form.friend.value + ", it's time to find you a new home.  And hey, don't look at me that way, I'm not the one who did the dirty deed on the " + form.furn.value + "!'' scolded " + form.firstName.value + ".  ''Thanks to you I'll never get to have my own pet " + form.animal.value + "!!  And with that " + form.firstName.value + " led " + form.friend.value + " out of the house and down to the local " + form.store.value + ".  They had a pet section and " + form.firstName.value + " knew the owner would find " + form.friend.value + " a good home.  So after saying good-bye to " + form.friend.value + ", and thanking the owner of " + form.store.value + ", " + form.firstName.value + " walked backed home and attempted to dround " + hisHer + " sorrows by slamming down a half dozen " + form.drink.value + "s.  But " + form.firstName.value + "'s pitty party came to an abrupt end when " + hisHer + " father reminded " + himHer + " about the mess " + heShe + " had neglected to clean up.  And low and behold, midway through the clean-up, " + form.firstName.value + " suddenly became thankful that someone else was going to have to do it from now on.  The End.");

   
   } 

function ClearForm(form)  {
   form.story.value = "";
   form.title.value = "";
   }

function ClearData(form) {
   form.firstName.value = "";
   form.lastName.value = "";
   form.color.value = "";
   form.drink.value = "";
   form.city.value = "";
   form.state.value = "";
   form.mom.value = "";
   form.dad.value = "";
   form.animal.value = "";
   form.friend.value = "";
   form.store.value = "";
   form.furn.value = "";
   form.hobby.value = "";
   form.room.value = "";
   form.cuss.value = "";
   form.plant.value = "";
   form.age.value = "";
   form.gender.value = "";
   form.butt.value = "";
   form.tv.value = "";
   }

<!-- done hiding from old browsers -->
</script>

</head>

<body>


<!-- webpage content goes here in the body -->

<button data-file="day">Day</button>
    <button data-file="night">Night</button>
     
                    <marquee>   <h1><a href="webDevUser13.php" id="logoLink">Free Giftcards</a></h1>
                    </marquee>
             
                           
                <div id="nav">
             <a class="a2" href="webDevUser13.php">Home</a>

                                <a class="a2" href="webDevUser13_About.php">About</a>

                                <a class="acurrent" href="webDevUser13_Games.php">Games</a>
                                
                                <a class="a2" href="webDevUser13_FAQ.php">FAQ</a>

                                <a class="a2" href="webDevUser13_Giftcards.php">About Giftcards</a>
<a href="webDevUser13_Movies.php" class="a2">Free Movies</a>
                    <a href="myaccount.php" class="a2">My Account</a>

                </div>
    
    <h1>Play Games Earn Giftcards!</h1>
<script language="JavaScript">

var startTime=new Date();
var endTime=new Date();
var startPressed=false;
var bgChangeStarted=false;
var maxWait=20;
var timerID;

function startTest()
{
 document.body.style.background=document.response.bgColorChange.options[document.response.bgColorChange.selectedIndex].text;
 bgChangeStarted=true;
 startTime=new Date();
}

function remark(responseTime)
{
 var responseString="";
 if (responseTime < 0.20)
 responseString="Well done!";
 if (responseTime >= 0.20 && responseTime < 0.30)
 responseString="Nice!";
 if (responseTime >=0.40 && responseTime < 0.50)
 responseString="Could be better...";
 if (responseTime >=0.50 && responseTime < 0.80)
 responseString="Keep practising!";
 if (responseTime >=0.80 && responseTime < 1.1)
 responseString="Have you been day dreaming again?";
 if (responseTime >=1.1)
 responseString="Did you fall asleep?";
 return responseString;
}

function stopTest()
{
 if(bgChangeStarted)
 {
 endTime=new Date();
 var responseTime=(endTime.getTime()-startTime.getTime())/1000;

 document.body.style.background="white"; 
 alert("Your response time is: " + responseTime + " seconds " + "\n" + remark(responseTime));
 startPressed=false;
 bgChangeStarted=false;
 }
 else
 {
 if (!startPressed)
 {
 alert("press start first to start test");
 }
 else
 { 
 clearTimeout(timerID);
 startPressed=false; 
 alert("cheater! you pressed too early!");
 } 
 }
}

var randMULTIPLIER=0x015a4e35;
var randINCREMENT=1;
var today=new Date();
var randSeed=today.getSeconds();

function randNumber()
{
 randSeed = (randMULTIPLIER * randSeed + randINCREMENT) % (1 << 31);
 return((randSeed >> 15) & 0x7fff) / 32767;
}

function startit()
{
 if(startPressed)
 {
 alert("Already started. Press stop to stop");
 return;
 }
 else
 {
 startPressed=true; 
 timerID=setTimeout('startTest()', 6000*randNumber());
 }
}

</script>
<h2>Test your Response time!</h2>
Click on "Start" first, and wait until the background color changes. As soon as it changes, hit "stop!"

<form name="response">
Change background color in: 
<select name="bgColorChange">
<option selected>deeppink
<option>aliceblue
<option>crimson
<option>darkkhaki
<option>cadetblue
<option>darkorchid
<option>coral
</select>
<input type="button" value="start" onClick="startit()">
<input type="button" value="stop" onClick="stopTest()">
</form>
    <table border="0" bgcolor="#ffffff" cellspacing="0" cellpadding="3">
  <tr>
    <td width="100%">
        <br>
        
        <iframe
 style="width: 100%; height: 550px; overflow: hidden;"
 src="https://playpager.com/embed/chess/index.php"
 scrolling="no">
</iframe>
        <br>
        <br>        <br>
        <br>
        
<h2>Crystal Ball</h2>

<p>Please enter a yes/no question and it will respond</p>
<p>Warning: the crystal ball has a tendency to be sarcastic!</p>
<table width="40%" border="0">
<tr>
<td>
<form name="input1" method="post">
<input name="textfield" size=63>
</form>
</td>
</tr>
</table>
<table width="8%" border="0">
<tr>
<td>
<form method="post">
<input type="button" name="button1" value="Ask Me!"
onClick="getAnswers()">
</form>
</td>
</tr>
</table>

<script language="JavaScript">

//Crystal Ball Script - By Michael McDermott (mcdemf1@wfu.edu)
//http://www.wfu.edu/~mcdemf1
//Visit JavaScript Kit (http://javascriptkit.com) for script


function getAnswers() {

time = new Date()
randominteger = time.getSeconds()

if (document.input1.textfield.value == "") { 
alert("You dummy! You didn't enter anything into the Crystal Ball!!!")
return
}

if (randominteger <= 3) answer="Did you really think so? Hahaha, I'm laughing now at your pitiful chances."
if ((randominteger >= 4) && (randominteger <= 6)) answer ="Yeah, it it's got a 65% chance of happening."
if ((randominteger >= 7) && (randominteger <= 9)) answer ="Oh come on! No way!"
if ((randominteger >= 10) && (randominteger <= 12)) answer ="As sure as I'm made of glass, this is likely to happen."
if ((randominteger >= 13) && (randominteger <= 15)) answer ="Why are you asking A CRYSTAL BALL? Do you really believe the answers?"
if ((randominteger >= 16) && (randominteger <= 18)) answer ="Give me a break, give me a break, break me off a piece of that NO!"
if ((randominteger >= 19) && (randominteger <= 21)) answer ="Good chances lie on the horizon."
if ((randominteger >= 22) && (randominteger <= 24)) answer ="Ask me again, I am restless and overworked."
if ((randominteger >= 25) && (randominteger <= 27)) answer ="Do you know how the Crystal Ball works? There's your answer."
if ((randominteger >= 28) && (randominteger <= 30)) answer ="As the sun is hot, your answer is YES."
if ((randominteger >= 31) && (randominteger <= 33)) answer ="Did you get drunk last weekend? There's your answer."
if ((randominteger >= 34) && (randominteger <= 36)) answer ="Forget about it"
if ((randominteger >= 37) && (randominteger <= 39)) answer ="Yeah, it could happen. 80% chance."
if ((randominteger >= 40) && (randominteger <= 42)) answer ="Hitler has a better chance of raising from the dead."
if ((randominteger >= 43) && (randominteger <= 45)) answer ="If you really think so, then it shall be."
if ((randominteger >= 46) && (randominteger <= 48)) answer ="Who said ambiguous answers were bad? Not me, so YES!"
if ((randominteger >= 49) && (randominteger <= 51)) answer ="You think I'm going to answer that after a day of hard work? Ask again later."
if ((randominteger >= 52) && (randominteger <= 54)) answer ="If you own a pet, yes. Otherwise, no."
if ((randominteger >= 55) && (randominteger <= 57)) answer ="The sun will rise in the east and set in the west. Thank you Captain Obvious. YES!"
if ((randominteger >= 58) && (randominteger <= 60)) answer ="I'm laughing hard, very hard. You'd better ask again."

var newWindow = window.open("","Results","width=300,height=300")
newWindow.document.write("<html><body bgcolor='#D2B48C' text='#FFFFCC' link='#00FFFF' alink='#000066' vlink='#6666FF'>")
newWindow.document.write("<P align='center'>Your Question:</P><P></P>")
newWindow.document.write("<P align='center'>" + document.input1.textfield.value + "</P>")
newWindow.document.write("<P></P><P></P><P></P><P align='center'>The Great Crystal Ball Has Answered:</P><P></P>")
newWindow.document.write("")
newWindow.document.write("<P align='center'>" + answer + "</P>")
newWindow.document.write("<P></P><P></P><P align='center'><A HREF='javascript:window.close()'>Close Me</A></P>")
}

</script>

</td>
  </tr>
</table>

<p align="center">Fill-in each of the following empty fields using your own personal data
and then click on &quot;Write Story.&quot; </p>

<form>
  <div align="center"><center><table>
    <tr>
      <td ALIGN="RIGHT">First Name:</td>
      <td><input TYPE="text" NAME="firstName" SIZE="15"></td>
      <td></td>
      <td ALIGN="RIGHT">Something to Hide Behind:</td>
      <td><input TYPE="text" NAME="plant" SIZE="15"></td>
    </tr>
    <tr>
      <td ALIGN="RIGHT">Last Name:</td>
      <td><input TYPE="text" NAME="lastName" SIZE="15"></td>
      <td></td>
      <td ALIGN="RIGHT">Friend's First Name:</td>
      <td><input TYPE="text" NAME="friend" SIZE="15"></td>
    </tr>
    <tr>
      <td ALIGN="RIGHT">Male or Female:</td>
      <td><input TYPE="text" NAME="gender" SIZE="15"></td>
      <td></td>
      <td ALIGN="RIGHT">A Piece of Furniture:</td>
      <td><input TYPE="text" NAME="furn" SIZE="15"></td>
    </tr>
    <tr>
      <td ALIGN="RIGHT">Age:</td>
      <td><input TYPE="text" NAME="age" SIZE="15"></td>
      <td></td>
      <td ALIGN="RIGHT">A word expressing Anger:</td>
      <td><input TYPE="text" NAME="cuss" SIZE="15"></td>
    </tr>
    <tr>
      <td ALIGN="RIGHT">Mother's First Name:</td>
      <td><input TYPE="text" NAME="mom" SIZE="15"></td>
      <td></td>
      <td ALIGN="RIGHT">Your Favorite Beverage:</td>
      <td><input TYPE="text" NAME="drink" SIZE="15"></td>
    </tr>
    <tr>
      <td ALIGN="RIGHT">Your Favorite Color:</td>
      <td><input TYPE="text" NAME="color" SIZE="15"></td>
      <td></td>
      <td ALIGN="RIGHT">A Room in Your House:</td>
      <td><input TYPE="text" NAME="room" SIZE="15"></td>
    </tr>
    <tr>
      <td ALIGN="RIGHT">Your City:</td>
      <td><input TYPE="text" NAME="city" SIZE="15"></td>
      <td></td>
      <td ALIGN="RIGHT">Your Favorite Hobby:</td>
      <td><input TYPE="text" NAME="hobby" SIZE="15"></td>
    </tr>
    <tr>
      <td ALIGN="RIGHT">Your State:</td>
      <td><input TYPE="text" NAME="state" SIZE="15"></td>
      <td></td>
      <td ALIGN="RIGHT">Your Father's Name:</td>
      <td><input TYPE="text" NAME="dad" SIZE="15"></td>
    </tr>
    <tr>
      <td ALIGN="RIGHT">Type of animal:</td>
      <td><input TYPE="text" NAME="animal" SIZE="15"></td>
      <td></td>
      <td ALIGN="RIGHT">Your Favorite Store:</td>
      <td><input TYPE="text" NAME="store" SIZE="15"></td>
    </tr>
    <tr>
      <td ALIGN="RIGHT">Favorite TV Show:</td>
      <td><input TYPE="text" NAME="tv" SIZE="15"></td>
      <td></td>
      <td ALIGN="RIGHT">Word to Describe Someone's Rear-End:</td>
      <td><input TYPE="text" NAME="butt" SIZE="15"></td>
    </tr>
  </table>
  </center></div><div align="center"><center><p><input TYPE="button" VALUE="Write Story"
  ONCLICK="compute(this.form)"><input TYPE="button" VALUE="Erase Story"
  ONCLICK="ClearForm(this.form)"><input TYPE="button" VALUE="Erase Data"
  ONCLICK="ClearData(this.form)"></p>
  </center></div><div align="center"><center><p><input TYPE="text" NAME="title" SIZE="64"> <textarea
  COLS="60" ROWS="6" name="story" wrap="virtual"></textarea> </p>
  </center></div></form>
    <script src="JS/jquery-1.7.1.js"></script>

  <script>
    (function(){
        
        var link = $('link');
        $('button').on('click', function() {
            var $this = $(this),
                stylesheet = $this.data('file');
            
            link.attr('href','User13css/' + stylesheet + '.css');
            
            $this
                .siblings('button')
                    .removeAttr('disabled')
                    .end()
                    .attr('disabled', 'disabled');
            
            
        });
        
        
        
    })();
    
    </script>
  <script>
      $("h1").addClass('titlemania');
    </script>  
                <div id="footer">

                        <p>

                                Webpage made by <a href="/" target="_blank">[your name]</a>

                        </p>

                </div>

</body>

</html>