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

<title> FreeGiftcards.Net/About-Giftcards</title>
    <meta name="author" content="your name" />

        <meta name="description" content="" />

<script src="JS/WebDevUser13.js"></script>
<link rel="stylesheet" href="User13css/day.css">
    <link href="https://fonts.googleapis.com/css?family=B612&display=swap" rel="stylesheet">
<style>
   
    .titlemania{
        color: #003b6f;
        font-family: cursive;
        text-align: center;
        font-size: 250%;
    }
    </style>

<!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->        


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

                                <a class="a2" href="webDevUser13_Games.php">Games</a>
                                
                                <a class="a2" href="webDevUser13_FAQ.php">FAQ</a>

                                <a class="acurrent" href="webDevUser13_Giftcards.php">About Giftcards</a>
<a href="webDevUser13_Movies.php" class="a2">Free Movies</a>
                    <a href="myaccount.php" class="a2">My Account</a>

                </div>
<img id="imggfh" src="https://bit.ly/32kV9gS" >
        <article><div class="article_content">
            
            <h1>About Giftcards</h1>                
 
<p>
    A gift card also known as gift certificate in North America, or gift voucher or gift token in the UK is a prepaid stored-value money card, usually issued by a retailer or bank, to be used as an alternative to cash for purchases within a particular store or related businesses. Gift cards are also given out by employers or organizations as rewards or gifts. They may also be distributed by retailers and marketers as part of a promotion strategy, to entice the recipient to come in or return to the store, and at times such cards are called cash cards. Gift cards are generally redeemable only for purchases at the relevant retail premises and cannot be cashed out, and in some situations may be subject to an expiry date or fees. American Express, MasterCard, and Visa offer generic gift cards which need not be redeemed at particular stores, and which are widely used for cashback marketing strategies. A feature of these cards is that they are generally anonymous and are disposed of when the stored value on a card is exhausted.</p>

<p>
    From the purchaser's point of view, a gift card is a gift, given in place of an object which the recipient may not need, when the giving of cash as a present may be regarded as socially inappropriate.<span class="co"> In the United States, gift cards are highly popular</span>, ranking in 2006 as the second-most given gift by consumers, the most-wanted gift by women, and the third-most wanted by males. Gift cards have become increasingly popular as they relieve the donor of selecting a specific gift. In 2012, nearly 50% of all US consumers claimed to have purchased a gift card as a present during the holiday season. In Canada, $1.8 billion was spent on gift cards, and in the UK it is estimated to have reached £3 billion in 2009, whereas in the United States about US$80 billion was paid for gift cards in 2006. The recipient of a gift card can use it at their discretion within the restrictions set by the issue, for example as to validity period and businesses that accept a particular card.</p>

    <h3>History</h3>          
<p>Neiman Marcus introduced the first giftcard using a payments infrastructure in late 1994, though Blockbuster Entertainment was the first company to do so on a wide scale, test-marketing them in 1995 and launching them around the country the next year. In the beginning, the Blockbuster giftcard replaced gift certificates that were being counterfeited with recently introduced color copiers and color printers. Blockbuster's first giftcard transactions were processed by what was then Nabanco of Sunrise, Florida Nabanco was the developer of the first third-party platform for the processing of gift cards using existing payment infrastructure.</p>

<p>Neiman Marcus and Blockbuster were later followed by the Mobil gas card, which initially offered prepaid phone value provided by MCI. Kmart was next with the introduction of the Kmart Cash Card, which in the early generations provided prepaid phone time with ATandT. Later Kmart and Mobil dropped this feature, as it was not profitable for them. The Kmart Mags Pangilinan Cash Card was the first replacement for cash returns when a shopper did not have a receipt for a gift. This practice of giving a cash card in place of cash for non-receipted returns is commonplace today with most merchants. From these early introductions, other retailers began to adapt a giftcard program to replace their gift certificate programs.</p>

<h3>Function and types</h3>
<p>A gift card may resemble a credit card or display a specific theme on a plastic card the size of a credit card. The card is identified by a specific number or code, not usually with an individual name, and thus could be used by anybody. They are backed by an on-line electronic system for authorization. Some gift cards can be reloaded by payment and can be used thus multiple times.</p><p>

Cards may have a barcode or magnetic strip, which is read by an electronic credit card machine. Many cards have no value until they are sold, at which time the cashier enters the amount which the customer wishes to put on the card. This amount is rarely stored on the card but is instead noted in the store's database, which is cross linked to the card ID. Gift cards thus are generally not stored-value cards as used in many public transport systems or library photocopiers, where a simplified system with no network stores the value only on the card itself. To thwart counterfeiting, the data is encrypted. The magnetic strip is also often placed differently than on credit cards, so they cannot be read or written with standard equipment. Other gift cards may have a set value and need to be activated by calling a specific number.</p><p>

<span class="co">Gift cards can also be custom tailored to meet specific needs.</span> By adding a custom message or name on the front of the card, it can make for an individualized gift or incentive to an employee to show how greatly they are appreciated.</p><p>

Gift cards are divided into open loop or network cards and closed loop cards. The former are issued by banks or credit card companies and can be redeemed by different establishments, the latter by a specific store or restaurant and can be only redeemed by the issuing provider. The latter, however, tend to have fewer problems with card value decay and fees. In either case the giver would buy the gift card and may have to pay an additional purchase or activation fee, and the recipient of the card would use the value of the card at a later transaction. A third form is the hybrid closed loop card whose issuer has bundled a number of closed loop cards; an example is free gift cards for a specific shopping mall.</p><p>

Gift cards differ from scrip gift certificates, in that the latter are usually sold as a paper document with an authorized signature by a restaurant, store, or other individual establishment as a voucher for a future service; there is no electronic authorization. A gift certificate may or may not have an expiration date and generally has no administrative fees.</p><p>

Bank issued gift cards may be used in lieu of checks as a way to disburse rebate funds. Some retailers use the gift card system for refunds in lieu of cash thereby assuring that the customer will spend the funds at their store.</p><p>

A charity gift card allows the gift giver to make a charitable donation and the gift recipient to choose a charity that will receive the donation.</p>

<h3>Mobile and virtual gift cards</h3><p>
Mobile gift cards are delivered to mobile phones via email or SMS, and phone apps allow users to carry only their cell phone. Benefits include tying them to a particular phone number and ease of distribution.</p><p>

Virtual gift cards are delivered via email to the recipient, the benefits being that they cannot be lost and that the consumer does not have to drive to the brick and mortar location to purchase a gift card.</p><p>

            <span class="co">Other companies have introduced virtual gift cards that users redeem on their smartphones.</span>As the merchant is not involved in the loop, it is considered a cash transfer rather than a traditional gift card.</p><p>

<h3>Pitfalls</h3>
<p>It has been argued that holiday giving destroys value due to mismatching gifts. The most efficient way to keep value in gifting would be to give cash; however, this is socially acceptable only within limits. Gift cards, to a degree, may overcome this problem but have certain pitfalls. Some feel that the absence of the thought of selecting a specific gift makes a gift card a worse choice than a poorly executed but individual gift. New products in the gift card industry are evolving to tackle this "impersonal" pitfall of gift cards; new services launched by some service providers allows for customization and personalization of gift cards.Gift cards have been criticized for the issuers ability to set rules that are detrimental to the purchaser or card recipient. For example, gift cards may be subject to an expiry date, administrative fees, restrictions on use, and absence of adequate protection in case of fraud or loss. Over time fees may render the value of a gift card zero. However, these issues have been addressed in recent years in some jurisdictions. In the United States, many jurisdictions limit or prohibit all fees or expiration dates for gift cards. Furthermore, because of the negative impact on sales that such policies can have, most merchants have adopted and even advertise a no fee, no expiration policy for their gift cards, whether or not state laws require it. In 2011, an estimated 2.5% of gift cards were subject to an expiration date and 2.7% to post sale fees.A quarter of gift card recipients still have not spent gift cards a year after receiving them, according to a Consumer Reports survey, and a majority of people say they end up spending more than the value of the card once they get to the store.In the event of the bankruptcy of the issuing retailer, the outstanding value on gift cards is considered unsecured debt, and as such gift cards may become valueless. If the company intends to continue trading, gift cards may be honoured even in bankruptcy.</p>
<p>

Another issue regarding gift cards is the growing concerns from retailers and other businesses about what can be done to prevent gift cards from being exploited by fraudsters. Gift card information can either be stolen from their rightful owners by fraudsters or they can be purchased with stolen credit card information. In recent years, cyber criminals have increased their efforts to take advantage of fraudulent gift cards as they are simple to exploit with automated brute-force bot attacks. The most common form of gift card fraud is committed through the act of stealing card information for activated cards with an existing balance by attacking a retailer's systems which store gift card data. Once a gift card has been compromised, the fraudster will then check the balance through online customer portals before using the funds or reselling on the secondary gift card market.</p>
<p>

<h3>Redemption rate</h3>
<p>Not all gift cards are redeemed. The card may be lost, there may be time decay expiration and fees or complex rules of redemption, or the recipient may not be interested in the store that accepts the card or be under the false assumption that not using it will save money for the giver. It has been estimated that perhaps 10% of cards are not redeemed, amounting to a gain for retailers of about $8 billion in the United States in 2006.In 2012, over $100 billion in gift cards will be purchased in the United States, where over 20% of those gift cards will go unredeemed or unused. This has amassed a large opportunity in the secondary market, similar to the secondary ticket market in the early 2000s. Some companies have created a business in the secondary gift card market that allow consumers to sell their unused gift cards or buy discounted gift cards to their favorite brands. This has helped their users recoup their share of some $55 million per day that goes unredeemed in the United States every year, by turning their unused gift cards into cash.</p>

<h3>Regulations</h3>
<h4>Canada</h4>
<p>All Canadian provinces have legislations passed to ban expiry dates and fees collected on gift cards. However, provincial gift card legislations do not apply to sectors that are regulated under federal laws. For example, gift cards that resemble credit cards i.e. with American Express, MasterCard, or Visa branding and phone cards are regulated by the federal government. Under the federal Prepaid Payment Products Regulations, effective 1 May 2014, federally regulated gift cards may only charge maintenance fees under certain conditions and may not set an expiry date for funds on those cards.</p>

<h4>United States</h4>
<p>In the past, uniform standards concerning gift cards did not exist. This was set to change as an addendum to the Credit CARD Act of 2009 directs the federal government to create consumer-friendly standards pertaining to gift cards. Most notably, the new regulations prohibit retailers from setting expiration dates unless they are at least 5 years after the card's date of issue or the date on which funds were last added to the card. In addition, retailers are no longer able to assess dormancy, inactivity, or service fees unless the card has been inactive for at least 12 months, and if fees are added after that period, the details of such fees must be clearly disclosed on the card. Additionally, retailers are unable to levy more than one fee per month. The new provisions took effect on 22 August 2010.Open loop cards are governed by rules of the Comptroller of the Currency; however, oversight has been criticized. Closed loop gift cards are subject to rules set by different state regulations, and issuing authorities vary widely in the rules they set for the consumer. Moreover, rules can be changed by the issuer without notifying the consumer.</p>
            </div>  </article>
    
                  
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
        
    (function() {
        
      var co = $('article').find('span.co').each(function(){
          
          var $this= $(this);
          
          $('<blockquote></blockquote>', {
              class:'co',
              text: $this.text()
              
              
          }).prependTo($this.closest('p'));
          
          
          
          
          
      });  
        
        
        
    })();
    
    
    
    
    
    
    
    
    
    
    </script>
  <script>
      $("h1").addClass('titlemania');
    </script>  
</body>

</html>