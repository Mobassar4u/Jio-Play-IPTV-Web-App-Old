<?php
$playlist = fopen("JioPlayPlaylist.m3u", "w") or die("Unable to open file!");
$ipadd=$_GET["ipadd"];

$modlist =
'#EXTM3U url-tvg="http://bit.ly/3wdjXsD"

#EXTINF:-1 tvg-id="1918" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_English.png",Jio Cricket English HD
http://'.$ipadd.'/autoq.php?c=Jio_Cricket_English

#EXTINF:-1 tvg-id="144" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_HD.png",Colors HD
http://'.$ipadd.'/autoq.php?c=Colors_HD

#EXTINF:-1 tvg-id="291" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_HD.png",SET HD
http://'.$ipadd.'/autoq.php?c=Sony_HD

#EXTINF:-1 tvg-id="167" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_TV_HD.png",Zee TV HD
http://'.$ipadd.'/autoq.php?c=Zee_TV_HD

#EXTINF:-1 tvg-id="476" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Max_HD.png",Sony Max HD
http://'.$ipadd.'/autoq.php?c=Sony_Max_HD

#EXTINF:-1 tvg-id="165" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinema_HD.png",Zee Cinema HD
http://'.$ipadd.'/autoq.php?c=Zee_Cinema_HD

#EXTINF:-1 tvg-id="155" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Six_HD.png",Sony Ten 5 HD
http://'.$ipadd.'/autoq.php?c=Six_HD

#EXTINF:-1 tvg-id="383" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Times_NOW.png",Times NOW
http://'.$ipadd.'/autoq.php?c=Times_NOW

#EXTINF:-1 tvg-id="1906" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Times_Now_Navbharat.png",Times Now Navbharat
http://'.$ipadd.'/autoq.php?c=Times_Now_Navbharat

#EXTINF:-1 tvg-id="162" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_HD.png",Sony Ten 1 HD
http://'.$ipadd.'/autoq.php?c=Ten_HD

#EXTINF:-1 tvg-id="173" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aaj_Tak.png",Aaj Tak
http://'.$ipadd.'/autoq.php?c=Aaj_Tak

#EXTINF:-1 tvg-id="1155" group-title="News" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/BBC_Marathi.png",BBC Marathi
http://'.$ipadd.'/autoq.php?c=BBC_Marathi

#EXTINF:-1 tvg-id="177" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_News_India.png",ABP News India
http://'.$ipadd.'/autoq.php?c=ABP_News_India

#EXTINF:-1 tvg-id="891" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten2_HD.png",Sony Ten 2 HD
http://'.$ipadd.'/autoq.php?c=Ten2_HD

#EXTINF:-1 tvg-id="492" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/CNN_NEWS_18.png",CNN NEWS 18
http://'.$ipadd.'/autoq.php?c=CNN_NEWS_18

#EXTINF:-1 tvg-id="1145" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/MTV_HD_Plus.png",MTV HD Plus
http://'.$ipadd.'/autoq.php?c=MTV_HD_Plus

#EXTINF:-1 tvg-id="753" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/MTV_Beats_HD.png",MTV Beats HD
http://'.$ipadd.'/autoq.php?c=MTV_Beats_HD

#EXTINF:-1 tvg-id="858" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Republic_TV.png",Republic TV
http://'.$ipadd.'/autoq.php?c=Republic_TV

#EXTINF:-1 tvg-id="584" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mastiii.png",Mastiii
http://'.$ipadd.'/autoq.php?c=Mastiii

#EXTINF:-1 tvg-id="612" group-title="News" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Majha.png",ABP Majha
http://'.$ipadd.'/autoq.php?c=ABP_Majha

#EXTINF:-1 tvg-id="545" group-title="Kids" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Hindi.png",Nick Hindi
http://'.$ipadd.'/autoq.php?c=Nick_Hindi

#EXTINF:-1 tvg-id="619" group-title="News" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Karnataka.png",TV9 Karnataka
http://'.$ipadd.'/autoq.php?c=TV9_Karnataka

#EXTINF:-1 tvg-id="559" group-title="Kids" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pogo_Hindi.png",Pogo Hindi
http://'.$ipadd.'/autoq.php?c=Pogo_Hindi

#EXTINF:-1 tvg-id="636" group-title="News" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Polimer_News.png",Polimer News
http://'.$ipadd.'/autoq.php?c=Polimer_News

#EXTINF:-1 tvg-id="618" group-title="News" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Telugu_News.png",TV9 Telugu News
http://'.$ipadd.'/autoq.php?c=TV9_Telugu_News

#EXTINF:-1 tvg-id="816" group-title="Kids" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Cartoon_Network_Hindi.png",Cartoon Network Hindi
http://'.$ipadd.'/autoq.php?c=Cartoon_Network_Hindi

#EXTINF:-1 tvg-id="463" group-title="Infotainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_HD_World.png",Discovery HD World
http://'.$ipadd.'/autoq.php?c=Discovery_HD_World

#EXTINF:-1 tvg-id="672" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Ananda.png",ABP Ananda
http://'.$ipadd.'/autoq.php?c=ABP_Ananda

#EXTINF:-1 tvg-id="821" group-title="Infotainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD.png",Sony BBC Earth HD
http://'.$ipadd.'/autoq.php?c=Sony_BBC_Earth_HD

#EXTINF:-1 tvg-id="146" group-title="Infotainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/History_HD.png",History TV18 HD
http://'.$ipadd.'/autoq.php?c=History_HD

#EXTINF:-1 tvg-id="479" group-title="Lifestyle" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TLC_HD_World.png",TLC HD
http://'.$ipadd.'/autoq.php?c=TLC_HD_World

#EXTINF:-1 tvg-id="561" group-title="Lifestyle" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Food_Food.png",Food Food
http://'.$ipadd.'/autoq.php?c=Food_Food

#EXTINF:-1 tvg-id="560" group-title="Lifestyle" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/NDTV_Good_Times.png",GOOD TiMES
http://'.$ipadd.'/autoq.php?c=NDTV_Good_Times

#EXTINF:-1 tvg-id="657" group-title="Business" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Business.png",Zee Business
http://'.$ipadd.'/autoq.php?c=Zee_Business

#EXTINF:-1 tvg-id="143" group-title="Business" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Tv18_Prime_HD.png",CNBC Tv18 Prime HD
http://'.$ipadd.'/autoq.php?c=CNBC_Tv18_Prime_HD

#EXTINF:-1 tvg-id="259" group-title="Business" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/NDTV_Profit.png",NDTV Profit
http://'.$ipadd.'/autoq.php?c=NDTV_Profit

#EXTINF:-1 tvg-id="190" group-title="Business" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Awaaz.png",CNBC Awaaz
http://'.$ipadd.'/autoq.php?c=CNBC_Awaaz

#EXTINF:-1 tvg-id="175" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aastha.png",Aastha
http://'.$ipadd.'/autoq.php?c=Aastha

#EXTINF:-1 tvg-id="594" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Bhajan.png",Aastha Bhajan
http://'.$ipadd.'/autoq.php?c=Aastha_Bhaja

#EXTINF:-1 tvg-id="288" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sanskar.png",Sanskar
http://'.$ipadd.'/autoq.php?c=Sanskar

#EXTINF:-1 tvg-id="1433" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_Science.png",India Science
http://'.$ipadd.'/autoq.php?c=India_Science

#EXTINF:-1 tvg-id="980" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_01.png",Swayam Prabha 01
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_01

#EXTINF:-1 tvg-id="981" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_02.png",Swayam Prabha 02
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_02

#EXTINF:-1 tvg-id="982" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_03.png",Swayam Prabha 03
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_03

#EXTINF:-1 tvg-id="154" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SAB.png",Sony SAB
http://'.$ipadd.'/autoq.php?c=Sony_SAB

#EXTINF:-1 tvg-id="472" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/And_TV_HD.png",And TV HD
http://'.$ipadd.'/autoq.php?c=And_TV_HD

#EXTINF:-1 tvg-id="279" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rishtey.png",Rishtey
http://'.$ipadd.'/autoq.php?c=Rishtey

#EXTINF:-1 tvg-id="473" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Anmol.png",Zee Anmol
http://'.$ipadd.'/autoq.php?c=Zee_Anmol

#EXTINF:-1 tvg-id="474" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pal.png",Sony Pal
http://'.$ipadd.'/autoq.php?c=Sony_Pal

#EXTINF:-1 tvg-id="471" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SAB_HD.png",Sony SAB HD
http://'.$ipadd.'/autoq.php?c=Sony_SAB_HD

#EXTINF:-1 tvg-id="445" group-title="Entertainment" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Marathi.png",Zee Marathi
http://'.$ipadd.'/autoq.php?c=Zee_Marathi

#EXTINF:-1 tvg-id="755" group-title="Entertainment" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Marathi_HD.png",Colors Marathi HD
http://'.$ipadd.'/autoq.php?c=Colors_Marathi_HD

#EXTINF:-1 tvg-id="757" group-title="Entertainment" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Kannada_HD.png",Colors Kannada HD
http://'.$ipadd.'/autoq.php?c=Colors_Kannada_HD

#EXTINF:-1 tvg-id="689" group-title="Entertainment" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Kannada.png",Zee Kannada
http://'.$ipadd.'/autoq.php?c=Zee_Kannada

#EXTINF:-1 tvg-id="1157" group-title="Entertainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Comedy_Central_HD.png",Comedy Central HD
http://'.$ipadd.'/autoq.php?c=Comedy_Central_HD

#EXTINF:-1 tvg-id="638" group-title="Entertainment" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Telugu.png",Zee Telugu
http://'.$ipadd.'/autoq.php?c=Zee_Telugu

#EXTINF:-1 tvg-id="628" group-title="Entertainment" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Tamil.png",Zee Tamil
http://'.$ipadd.'/autoq.php?c=Zee_Tamil

#EXTINF:-1 tvg-id="196" group-title="Entertainment" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Gujarati.png",Colors Gujarati
http://'.$ipadd.'/autoq.php?c=Colors_Gujarati

#EXTINF:-1 tvg-id="625" group-title="Entertainment" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Bangla.png",Zee Bangla
http://'.$ipadd.'/autoq.php?c=Zee_Bangla

#EXTINF:-1 tvg-id="756" group-title="Entertainment" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Bengali_HD.png",Colors Bengali HD
http://'.$ipadd.'/autoq.php?c=Colors_Bengali_HD

#EXTINF:-1 tvg-id="481" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Epic_HD.png",Epic
http://'.$ipadd.'/autoq.php?c=Epic_HD

#EXTINF:-1 tvg-id="1158" group-title="Entertainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Infinity_HD.png",Colors Infinity HD
http://'.$ipadd.'/autoq.php?c=Colors_Infinity_HD

#EXTINF:-1 tvg-id="414" group-title="Entertainment" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Yuva.png",Zee Yuva
http://'.$ipadd.'/autoq.php?c=Zee_Yuva

#EXTINF:-1 tvg-id="1171" group-title="Entertainment" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Punjabi.png",PTC Punjabi
http://'.$ipadd.'/autoq.php?c=PTC_Punjabi

#EXTINF:-1 tvg-id="527" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ID.png",Investigation Discovery
http://'.$ipadd.'/autoq.php?c=ID

#EXTINF:-1 tvg-id="528" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_India.png",DD India
http://'.$ipadd.'/autoq.php?c=DD_India

#EXTINF:-1 tvg-id="202" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_National.png",DD National
http://'.$ipadd.'/autoq.php?c=DD_National

#EXTINF:-1 tvg-id="532" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dabangg.png",Dabangg
http://'.$ipadd.'/autoq.php?c=Daba

#EXTINF:-1 tvg-id="429" group-title="Entertainment" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Tamil_HD.png",Colors Tamil HD
http://'.$ipadd.'/autoq.php?c=Colors_Tamil_HD

#EXTINF:-1 tvg-id="536" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Madhya_Pradesh.png",DD Madhya Pradesh
http://'.$ipadd.'/autoq.php?c=DD_Madhya_Pradesh

#EXTINF:-1 tvg-id="538" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Rajasthan_Jaipur.png",DD Rajasthan (Jaipur)
http://'.$ipadd.'/autoq.php?c=DD_Rajasthan_Jaipur

#EXTINF:-1 tvg-id="482" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Cineplex.png",Colors Cineplex
http://'.$ipadd.'/autoq.php?c=Colors_Cineplex

#EXTINF:-1 tvg-id="762" group-title="Movies" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pix_HD.png",Sony Pix HD
http://'.$ipadd.'/autoq.php?c=Sony_Pix_HD

#EXTINF:-1 tvg-id="289" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Max_SD.png",Sony Max SD
http://'.$ipadd.'/autoq.php?c=Sony_Max_SD

#EXTINF:-1 tvg-id="483" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_MAX2.png",Sony MAX2
http://'.$ipadd.'/autoq.php?c=Sony_MAX2

#EXTINF:-1 tvg-id="185" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/And_Pictures_HD.png",And Pictures HD
http://'.$ipadd.'/autoq.php?c=And_Pictures_HD

#EXTINF:-1 tvg-id="484" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinema.png",Zee Cinema
http://'.$ipadd.'/autoq.php?c=Zee_Cinema

#EXTINF:-1 tvg-id="182" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Movies.png",B4U Movies
http://'.$ipadd.'/autoq.php?c=B4U_Movies

#EXTINF:-1 tvg-id="1074" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cinema.png",Jio Cinema
http://'.$ipadd.'/autoq.php?c=Jio_Cinema

#EXTINF:-1 tvg-id="487" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Classic.png",Zee Bollywood
http://'.$ipadd.'/autoq.php?c=Zee_Classic

#EXTINF:-1 tvg-id="486" group-title="Movies" tvg-language="Bhojpuri" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bhojpuri_Cinema.png",Bhojpuri Cinema
http://'.$ipadd.'/autoq.php?c=Bhojpuri_Cinema

#EXTINF:-1 tvg-id="485" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Enterr_10.png",Enterr 10
http://'.$ipadd.'/autoq.php?c=Enterr_10

#EXTINF:-1 tvg-id="488" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Action.png",Zee Action
http://'.$ipadd.'/autoq.php?c=Zee_Actio

#EXTINF:-1 tvg-id="413" group-title="Movies" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Cinemalu.png",Zee Cinemalu
http://'.$ipadd.'/autoq.php?c=Zee_Cinemalu

#EXTINF:-1 tvg-id="415" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Anmol_Cinema.png",Zee Anmol Cinema
http://'.$ipadd.'/autoq.php?c=Zee_Anmol_Cinema

#EXTINF:-1 tvg-id="231" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/IBN_7.png",News 18 India
http://'.$ipadd.'/autoq.php?c=IBN_7

#EXTINF:-1 tvg-id="235" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_TV.png",India TV
http://'.$ipadd.'/autoq.php?c=India_TV

#EXTINF:-1 tvg-id="258" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/NDTV_India.png",NDTV India
http://'.$ipadd.'/autoq.php?c=NDTV_India

#EXTINF:-1 tvg-id="504" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_News.png",Zee News
http://'.$ipadd.'/autoq.php?c=Zee_News

#EXTINF:-1 tvg-id="876" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Times_Now_HD.png",Times Now World
http://'.$ipadd.'/autoq.php?c=Times_Now_HD

#EXTINF:-1 tvg-id="255" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/NDTV_24x7.png",NDTV 24x7
http://'.$ipadd.'/autoq.php?c=NDTV_24x7

#EXTINF:-1 tvg-id="629" group-title="Entertainment" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Telugu.png",ETV Telugu
http://'.$ipadd.'/autoq.php?c=ETV_Telugu

#EXTINF:-1 tvg-id="778" group-title="News" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Public_TV.png",Public TV
http://'.$ipadd.'/autoq.php?c=Public_TV

#EXTINF:-1 tvg-id="464" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/24_Ghanta_TV.png",24 Ghanta TV
http://'.$ipadd.'/autoq.php?c=24_Ghanta_TV

#EXTINF:-1 tvg-id="632" group-title="News" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sakshi_tv.png",Sakshi tv
http://'.$ipadd.'/autoq.php?c=Sakshi_tv

#EXTINF:-1 tvg-id="626" group-title="News" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Suvarna_News.png",Suvarna News
http://'.$ipadd.'/autoq.php?c=Suvarna_News

#EXTINF:-1 tvg-id="646" group-title="News" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/NTV.png",NTV
http://'.$ipadd.'/autoq.php?c=NTV

#EXTINF:-1 tvg-id="830" group-title="News" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Thanthi_TV.png",Thanthi TV
http://'.$ipadd.'/autoq.php?c=Thanthi_TV

#EXTINF:-1 tvg-id="501" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_24.png",News 24
http://'.$ipadd.'/autoq.php?c=News_24

#EXTINF:-1 tvg-id="617" group-title="News" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Maharashtra.png",TV9 Maharashtra
http://'.$ipadd.'/autoq.php?c=TV9_Maharashtra

#EXTINF:-1 tvg-id="938" group-title="News" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/BTV.png",BTV
http://'.$ipadd.'/autoq.php?c=BTV

#EXTINF:-1 tvg-id="442" group-title="News" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_24_Taas.png",Zee 24 Taas
http://'.$ipadd.'/autoq.php?c=Zee_24_Taas

#EXTINF:-1 tvg-id="613" group-title="News" tvg-language="Assamese" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Newslive.png",Newslive
http://'.$ipadd.'/autoq.php?c=Newslive

#EXTINF:-1 tvg-id="892" group-title="Sports" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten3_HD.png",Sony Ten 3 HD
http://'.$ipadd.'/autoq.php?c=Ten3_HD

#EXTINF:-1 tvg-id="889" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Sports.png",Jio Sports HD
http://'.$ipadd.'/autoq.php?c=Jio_Sports

#EXTINF:-1 tvg-id="875" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dsports_HD.png",Eurosport HD
http://'.$ipadd.'/autoq.php?c=Dsports_HD

#EXTINF:-1 tvg-id="1156" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football.png",Jio Football HD
http://'.$ipadd.'/autoq.php?c=Jio_Football

#EXTINF:-1 tvg-id="1160" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_1_HD.png",Jio Cricket 1 HD
http://'.$ipadd.'/autoq.php?c=Jio_Cricket_1_HD

#EXTINF:-1 tvg-id="1165" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_1.png",Jio Football 1 HD
http://'.$ipadd.'/autoq.php?c=Jio_Football_1

#EXTINF:-1 tvg-id="1167" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_2.png",Jio Football 2 HD
http://'.$ipadd.'/autoq.php?c=Jio_Football_2

#EXTINF:-1 tvg-id="1168" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_3.png",Jio Football 3 HD
http://'.$ipadd.'/autoq.php?c=Jio_Football_3

#EXTINF:-1 tvg-id="1169" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_4.png",Jio Football 4 HD
http://'.$ipadd.'/autoq.php?c=Jio_Football_4

#EXTINF:-1 tvg-id="514" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_1.png",Sony Ten 1
http://'.$ipadd.'/autoq.php?c=Ten_1

#EXTINF:-1 tvg-id="523" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_2.png",Ten 2
http://'.$ipadd.'/autoq.php?c=Ten_2

#EXTINF:-1 tvg-id="524" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_3.png",Sony Ten 3
http://'.$ipadd.'/autoq.php?c=Ten_3

#EXTINF:-1 tvg-id="525" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Six_SD.png",Sony Ten 5
http://'.$ipadd.'/autoq.php?c=Sony_Six_SD

#EXTINF:-1 tvg-id="585" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zing.png",Zing
http://'.$ipadd.'/autoq.php?c=Zi

#EXTINF:-1 tvg-id="587" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/9XM.png",9XM
http://'.$ipadd.'/autoq.php?c=9XM

#EXTINF:-1 tvg-id="591" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/E_24.png",E 24
http://'.$ipadd.'/autoq.php?c=E_24

#EXTINF:-1 tvg-id="183" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Music.png",B4U Music
http://'.$ipadd.'/autoq.php?c=B4U_Music

#EXTINF:-1 tvg-id="592" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zoom.png",ZOOM
http://'.$ipadd.'/autoq.php?c=Zoom

#EXTINF:-1 tvg-id="248" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/MTV.png",MTV
http://'.$ipadd.'/autoq.php?c=MTV

#EXTINF:-1 tvg-id="440" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/9X_Jalwa.png",9X Jalwa
http://'.$ipadd.'/autoq.php?c=9X_Jalwa

#EXTINF:-1 tvg-id="773" group-title="Music" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Public_Music.png",Public Music
http://'.$ipadd.'/autoq.php?c=Public_Music

#EXTINF:-1 tvg-id="420" group-title="Music" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jaya_Max.png",Jaya Max
http://'.$ipadd.'/autoq.php?c=Jaya_Max

#EXTINF:-1 tvg-id="741" group-title="Music" tvg-language="Bhojpuri" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sangeet_Bhojpuri.png",Sangeet Bhojpuri
http://'.$ipadd.'/autoq.php?c=Sangeet_Bhojpuri

#EXTINF:-1 tvg-id="1189" group-title="Music" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Music.png",PTC Music
http://'.$ipadd.'/autoq.php?c=PTC_Music

#EXTINF:-1 tvg-id="740" group-title="Music" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sangeet_Bangla.png",Sangeet Bangla
http://'.$ipadd.'/autoq.php?c=Sangeet_Bangla

#EXTINF:-1 tvg-id="815" group-title="Kids" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/sonic_Hindi.png",Sonic Hindi
http://'.$ipadd.'/autoq.php?c=sonic_Hindi

#EXTINF:-1 tvg-id="872" group-title="Kids" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Hindi.png",Sony Yay Hindi
http://'.$ipadd.'/autoq.php?c=Sony_Yay_Hindi

#EXTINF:-1 tvg-id="547" group-title="Kids" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nickelodeon.png",Nickelodeon
http://'.$ipadd.'/autoq.php?c=Nickelodeo

#EXTINF:-1 tvg-id="546" group-title="Kids" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Tamil.png",Nick Tamil
http://'.$ipadd.'/autoq.php?c=Nick_Tamil

#EXTINF:-1 tvg-id="542" group-title="Kids" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pogo_Tamil.png",Pogo Tamil
http://'.$ipadd.'/autoq.php?c=Pogo_Tamil

#EXTINF:-1 tvg-id="1079" group-title="Kids" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/CN_HD_English.png",CN HD+ English
http://'.$ipadd.'/autoq.php?c=CN_HD_English

#EXTINF:-1 tvg-id="817" group-title="Kids" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Cartoon_Network_Tamil.png",Cartoon Network Tamil
http://'.$ipadd.'/autoq.php?c=Cartoon_Network_Tamil

#EXTINF:-1 tvg-id="543" group-title="Kids" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Telugu.png",Nick Telugu
http://'.$ipadd.'/autoq.php?c=Nick_Telugu

#EXTINF:-1 tvg-id="554" group-title="Kids" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Kids_2.png",Discovery Kids 2
http://'.$ipadd.'/autoq.php?c=Discovery_Kids_2

#EXTINF:-1 tvg-id="544" group-title="Kids" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Junior.png",Nick Junior
http://'.$ipadd.'/autoq.php?c=Nick_Junior

#EXTINF:-1 tvg-id="286" group-title="Infotainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_HD.png",Animal Planet HD World
http://'.$ipadd.'/autoq.php?c=Animal_Planet_HD

#EXTINF:-1 tvg-id="164" group-title="Lifestyle" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Travel_XP_HD.png",Travelxp HD
http://'.$ipadd.'/autoq.php?c=Travel_XP_HD

#EXTINF:-1 tvg-id="566" group-title="Infotainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_Hindi.png",Animal Planet Hindi
http://'.$ipadd.'/autoq.php?c=Animal_Planet_Hindi

#EXTINF:-1 tvg-id="575" group-title="Infotainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Hindi.png",Discovery Channel Hindi
http://'.$ipadd.'/autoq.php?c=Discovery_Channel_Hindi

#EXTINF:-1 tvg-id="578" group-title="Infotainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/History_18_Hindi.png",History TV18 HD Hindi
http://'.$ipadd.'/autoq.php?c=History_18_Hindi

#EXTINF:-1 tvg-id="568" group-title="Infotainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Science.png",Discovery Science
http://'.$ipadd.'/autoq.php?c=Discovery_Science

#EXTINF:-1 tvg-id="871" group-title="Infotainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Events.png",Jio Events HD
http://'.$ipadd.'/autoq.php?c=Jio_Events

#EXTINF:-1 tvg-id="576" group-title="Infotainment" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Telugu.png",Discovery Channel Telugu
http://'.$ipadd.'/autoq.php?c=Discovery_Channel_Telugu

#EXTINF:-1 tvg-id="569" group-title="Infotainment" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Tamil.png",D Tamil
http://'.$ipadd.'/autoq.php?c=Discovery_Channel_Tamil

#EXTINF:-1 tvg-id="579" group-title="Infotainment" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/History_18_Tamil.png",History TV18 HD Tamil
http://'.$ipadd.'/autoq.php?c=History_18_Tamil

#EXTINF:-1 tvg-id="577" group-title="Infotainment" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/History_18_Telugu.png",History TV18 HD Telugu
http://'.$ipadd.'/autoq.php?c=History_18_Telugu

#EXTINF:-1 tvg-id="567" group-title="Infotainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_English.png",Animal Planet English
http://'.$ipadd.'/autoq.php?c=Animal_Planet_English

#EXTINF:-1 tvg-id="1073" group-title="Infotainment" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Samara_News.png",Samara News
http://'.$ipadd.'/autoq.php?c=Samara_News

#EXTINF:-1 tvg-id="573" group-title="Infotainment" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Channel_Bengali.png",Discovery Channel Bengali
http://'.$ipadd.'/autoq.php?c=Discovery_Channel_Bengali

#EXTINF:-1 tvg-id="814" group-title="Lifestyle" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Travel_XP_Tamil.png",Travelxp Tamil
http://'.$ipadd.'/autoq.php?c=Travel_XP_Tamil

#EXTINF:-1 tvg-id="854" group-title="Infotainment" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_Telugu.png",Sony BBC Earth HD Telugu
http://'.$ipadd.'/autoq.php?c=Sony_BBC_Earth_HD_Telugu

#EXTINF:-1 tvg-id="242" group-title="Infotainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery.png",Discovery
http://'.$ipadd.'/autoq.php?c=Discovery

#EXTINF:-1 tvg-id="853" group-title="Infotainment" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_Tamil.png",Sony BBC Earth HD Tamil
http://'.$ipadd.'/autoq.php?c=Sony_BBC_Earth_HD_Tamil

#EXTINF:-1 tvg-id="1075" group-title="Infotainment" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ayush_TV.png",Ayush TV
http://'.$ipadd.'/autoq.php?c=Ayush_TV

#EXTINF:-1 tvg-id="906" group-title="Infotainment" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Desi_Channel.png",Desi Channel
http://'.$ipadd.'/autoq.php?c=Desi_Channel

#EXTINF:-1 tvg-id="562" group-title="Lifestyle" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Travel_XP.png",Travelxp HD Hindi
http://'.$ipadd.'/autoq.php?c=Travel_XP

#EXTINF:-1 tvg-id="574" group-title="Lifestyle" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TLC_English.png",TLC English
http://'.$ipadd.'/autoq.php?c=TLC_English

#EXTINF:-1 tvg-id="565" group-title="Lifestyle" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Abhiruchi.png",ETV Abhiruchi
http://'.$ipadd.'/autoq.php?c=ETV_Abhiruchi

#EXTINF:-1 tvg-id="571" group-title="Lifestyle" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TLC_Hindi.png",TLC Hindi
http://'.$ipadd.'/autoq.php?c=TLC_Hindi

#EXTINF:-1 tvg-id="1201" group-title="Devotional" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sadhguru_Television.png",Sadhguru Television HD
http://'.$ipadd.'/autoq.php?c=Sadhguru_Televisio

#EXTINF:-1 tvg-id="563" group-title="Lifestyle" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kaumudy_TV.png",Kaumudy TV
http://'.$ipadd.'/autoq.php?c=Kaumudy_TV

#EXTINF:-1 tvg-id="489" group-title="Business" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Tv_18.png",CNBC Tv 18
http://'.$ipadd.'/autoq.php?c=CNBC_Tv_18

#EXTINF:-1 tvg-id="212" group-title="Business" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ET_Now.png",ET Now
http://'.$ipadd.'/autoq.php?c=ET_Now

#EXTINF:-1 tvg-id="1907" group-title="Business" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ET_Now_Swadesh.png",ET Now Swadesh
http://'.$ipadd.'/autoq.php?c=ET_Now_Swadesh

#EXTINF:-1 tvg-id="776" group-title="Devotional" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bhakti_TV.png",Bhakti TV
http://'.$ipadd.'/autoq.php?c=Bhakti_TV

#EXTINF:-1 tvg-id="829" group-title="Devotional" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sri_Sankara.png",Sri Sankara
http://'.$ipadd.'/autoq.php?c=Sri_Sankara

#EXTINF:-1 tvg-id="937" group-title="Devotional" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/SaiTV.png",Sai TV
http://'.$ipadd.'/autoq.php?c=SaiTV

#EXTINF:-1 tvg-id="794" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Peace_of_Mind.png",Peace of Mind
http://'.$ipadd.'/autoq.php?c=Peace_of_Mind

#EXTINF:-1 tvg-id="609" group-title="Devotional" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/mh1_Shraddha.png",mh1 Shraddha
http://'.$ipadd.'/autoq.php?c=mh1_Shraddha

#EXTINF:-1 tvg-id="886" group-title="Devotional" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Lakshya_TV.png",Lakshya TV
http://'.$ipadd.'/autoq.php?c=Lakshya_TV

#EXTINF:-1 tvg-id="598" group-title="Devotional" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sri_Venkateshwar_Bhakti.png",Sri Venkateshwar Bhakti
http://'.$ipadd.'/autoq.php?c=Sri_Venkateshwar_Bhakti

#EXTINF:-1 tvg-id="801" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Divya_TV.png",Divya TV
http://'.$ipadd.'/autoq.php?c=Divya_TV

#EXTINF:-1 tvg-id="602" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Paras_tv.png",Paras tv
http://'.$ipadd.'/autoq.php?c=Paras_tv

#EXTINF:-1 tvg-id="593" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sadhna.png",Sadhna
http://'.$ipadd.'/autoq.php?c=Sadhna

#EXTINF:-1 tvg-id="597" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Satsang_TV.png",Satsang TV
http://'.$ipadd.'/autoq.php?c=Satsang_TV

#EXTINF:-1 tvg-id="835" group-title="Devotional" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Angel_TV_HD.png",Angel TV HD
http://'.$ipadd.'/autoq.php?c=Angel_TV_HD

#EXTINF:-1 tvg-id="772" group-title="Devotional" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/CVR_OM_Spiritual.png",CVR OM Spiritual
http://'.$ipadd.'/autoq.php?c=CVR_OM_Spiritual

#EXTINF:-1 tvg-id="777" group-title="Devotional" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aradhana_TV.png",Aradhana TV
http://'.$ipadd.'/autoq.php?c=Aradhana_TV

#EXTINF:-1 tvg-id="596" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jinvani_TV.png",Jinvani TV
http://'.$ipadd.'/autoq.php?c=Jinvani_TV

#EXTINF:-1 tvg-id="1191" group-title="Devotional" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Simran.png",PTC Simran
http://'.$ipadd.'/autoq.php?c=PTC_Simra

#EXTINF:-1 tvg-id="828" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shubh_TV.png",Shubh TV
http://'.$ipadd.'/autoq.php?c=Shubh_TV

#EXTINF:-1 tvg-id="1407" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sai_Leela.png",Sai Leela
http://'.$ipadd.'/autoq.php?c=Sai_Leela

#EXTINF:-1 tvg-id="955" group-title="Devotional" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hindu_Dharmam.png",Hindu Dharmam
http://'.$ipadd.'/autoq.php?c=Hindu_Dharmam

#EXTINF:-1 tvg-id="607" group-title="Devotional" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Subhavartha_TV.png",Subhavartha TV
http://'.$ipadd.'/autoq.php?c=Subhavartha_TV

#EXTINF:-1 tvg-id="934" group-title="Devotional" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Divya_Vani.png",Divya Vani
http://'.$ipadd.'/autoq.php?c=Divya_Vani

#EXTINF:-1 tvg-id="466" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Arihant_TV.png",Arihant TV
http://'.$ipadd.'/autoq.php?c=Arihant_TV

#EXTINF:-1 tvg-id="924" group-title="Devotional" tvg-language="Urdu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rujumargam_TV.png",Mercy TV
http://'.$ipadd.'/autoq.php?c=Rujumargam_TV

#EXTINF:-1 tvg-id="977" group-title="Devotional" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Calvary.png",Calvary
http://'.$ipadd.'/autoq.php?c=Calvary

#EXTINF:-1 tvg-id="984" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_04.png",Swayam Prabha 04
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_04

#EXTINF:-1 tvg-id="986" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_05.png",Swayam Prabha 05
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_05

#EXTINF:-1 tvg-id="987" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_06.png",Swayam Prabha 06
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_06

#EXTINF:-1 tvg-id="985" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_07.png",Swayam Prabha 07
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_07

#EXTINF:-1 tvg-id="983" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_08.png",Swayam Prabha 08
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_08

#EXTINF:-1 tvg-id="988" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_09.png",Swayam Prabha 09
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_09

#EXTINF:-1 tvg-id="989" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_10.png",Swayam Prabha 10
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_10

#EXTINF:-1 tvg-id="990" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_11.png",Swayam Prabha 11
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_11

#EXTINF:-1 tvg-id="991" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_12.png",Swayam Prabha 12
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_12

#EXTINF:-1 tvg-id="1272" group-title="Sports" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_4_HD.png",Jio Cricket 4 HD
http://'.$ipadd.'/autoq.php?c=Jio_Cricket_4_HD

#EXTINF:-1 tvg-id="992" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_13.png",Swayam Prabha 13
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_13

#EXTINF:-1 tvg-id="993" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_14.png",Swayam Prabha 14
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_14

#EXTINF:-1 tvg-id="995" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_15.png",Swayam Prabha 15
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_15

#EXTINF:-1 tvg-id="994" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_16.png",Swayam Prabha 16
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_16

#EXTINF:-1 tvg-id="996" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_17.png",Swayam Prabha 17
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_17

#EXTINF:-1 tvg-id="999" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_18.png",Swayam Prabha 18
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_18

#EXTINF:-1 tvg-id="401" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_19.png",Swayam Prabha 19
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_19

#EXTINF:-1 tvg-id="403" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_20.png",Swayam Prabha 20
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_20

#EXTINF:-1 tvg-id="997" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_21.png",Swayam Prabha 21
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_21

#EXTINF:-1 tvg-id="998" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swayam_Prabha_22.png",Swayam Prabha 22
http://'.$ipadd.'/autoq.php?c=Swayam_Prabha_22

#EXTINF:-1 tvg-id="400" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_1.png",PM e Vidya 01
http://'.$ipadd.'/autoq.php?c=evidya_1

#EXTINF:-1 tvg-id="402" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_2.png",PM e Vidya 02
http://'.$ipadd.'/autoq.php?c=evidya_2

#EXTINF:-1 tvg-id="405" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_3.png",PM e Vidya 03
http://'.$ipadd.'/autoq.php?c=evidya_3

#EXTINF:-1 tvg-id="406" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_4.png",PM e Vidya 04
http://'.$ipadd.'/autoq.php?c=evidya_4

#EXTINF:-1 tvg-id="407" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_5.png",PM e Vidya 05
http://'.$ipadd.'/autoq.php?c=evidya_5

#EXTINF:-1 tvg-id="408" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_6.png",PM e Vidya 06
http://'.$ipadd.'/autoq.php?c=evidya_6

#EXTINF:-1 tvg-id="404" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_7.png",PM e Vidya 07
http://'.$ipadd.'/autoq.php?c=evidya_7

#EXTINF:-1 tvg-id="533" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Pariwar.png",Raj Pariwar
http://'.$ipadd.'/autoq.php?c=Raj_Pariwar

#EXTINF:-1 tvg-id="539" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Bihar.png",DD Bihar
http://'.$ipadd.'/autoq.php?c=DD_Bihar

#EXTINF:-1 tvg-id="540" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Uttar_Pradesh.png",DD Uttar Pradesh
http://'.$ipadd.'/autoq.php?c=DD_Uttar_Pradesh

#EXTINF:-1 tvg-id="419" group-title="Entertainment" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jaya_TV_HD.png",Jaya TV HD
http://'.$ipadd.'/autoq.php?c=Jaya_TV_HD

#EXTINF:-1 tvg-id="844" group-title="Entertainment" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mazavali_Manorama_HD.png",Mazavali Manorama HD
http://'.$ipadd.'/autoq.php?c=Mazavali_Manorama_HD

#EXTINF:-1 tvg-id="847" group-title="Entertainment" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/MK_TV.png",MK TV
http://'.$ipadd.'/autoq.php?c=MK_TV

#EXTINF:-1 tvg-id="785" group-title="Entertainment" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Super.png",Colors Super
http://'.$ipadd.'/autoq.php?c=Colors_Super

#EXTINF:-1 tvg-id="857" group-title="Entertainment" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vendhar_TV.png",Vendhar TV
http://'.$ipadd.'/autoq.php?c=Vendhar_TV

#EXTINF:-1 tvg-id="904" group-title="Entertainment" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sanjha_TV.png",Sanjha TV
http://'.$ipadd.'/autoq.php?c=Sanjha_TV

#EXTINF:-1 tvg-id="951" group-title="Entertainment" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/GarvPunjabi.png",Punjab Today
http://'.$ipadd.'/autoq.php?c=GarvPunjabi

#EXTINF:-1 tvg-id="959" group-title="Entertainment" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/JUSPunjabi.png",JUSPunjabi
http://'.$ipadd.'/autoq.php?c=JUSPunjabi

#EXTINF:-1 tvg-id="963" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Arre.png",Arre HD
http://'.$ipadd.'/autoq.php?c=Arre

#EXTINF:-1 tvg-id="796" group-title="Entertainment" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Peppers_TV.png",Peppers TV
http://'.$ipadd.'/autoq.php?c=Peppers_TV

#EXTINF:-1 tvg-id="722" group-title="Entertainment" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sarthak_TV.png",Zee Sarthak
http://'.$ipadd.'/autoq.php?c=Sarthak_TV

#EXTINF:-1 tvg-id="634" group-title="Entertainment" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Flower_TV.png",Flower TV
http://'.$ipadd.'/autoq.php?c=Flower_TV

#EXTINF:-1 tvg-id="648" group-title="Entertainment" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mazhavil_Manorama.png",Mazhavil Manorama
http://'.$ipadd.'/autoq.php?c=Mazhavil_Manorama

#EXTINF:-1 tvg-id="690" group-title="Entertainment" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Bangla.png",DD Bangla
http://'.$ipadd.'/autoq.php?c=DD_Bangla

#EXTINF:-1 tvg-id="824" group-title="Entertainment" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Puthu_Yugam.png",Puthu Yugam
http://'.$ipadd.'/autoq.php?c=Puthu_Yugam

#EXTINF:-1 tvg-id="691" group-title="Entertainment" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Saam_Tv.png",Saam Tv
http://'.$ipadd.'/autoq.php?c=Saam_Tv

#EXTINF:-1 tvg-id="198" group-title="Entertainment" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Oriya.png",Colors Oriya
http://'.$ipadd.'/autoq.php?c=Colors_Oriya

#EXTINF:-1 tvg-id="765" group-title="Entertainment" tvg-language="Assamese" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jonack.png",Jonack
http://'.$ipadd.'/autoq.php?c=Jonack

#EXTINF:-1 tvg-id="623" group-title="Entertainment" tvg-language="Assamese" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rang.png",Rang
http://'.$ipadd.'/autoq.php?c=Ra

#EXTINF:-1 tvg-id="635" group-title="Entertainment" tvg-language="Assamese" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rengoni.png",Rengoni
http://'.$ipadd.'/autoq.php?c=Rengoni

#EXTINF:-1 tvg-id="692" group-title="Entertainment" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Plus.png",ETV Plus
http://'.$ipadd.'/autoq.php?c=ETV_Plus

#EXTINF:-1 tvg-id="1146" group-title="Entertainment" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Marathi_SD.png",Sony Marathi SD
http://'.$ipadd.'/autoq.php?c=Sony_Marathi_SD

#EXTINF:-1 tvg-id="695" group-title="Entertainment" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Sahayadri.png",DD Sahayadri
http://'.$ipadd.'/autoq.php?c=DD_Sahayadri

#EXTINF:-1 tvg-id="697" group-title="Entertainment" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_aath.png",Sony aath
http://'.$ipadd.'/autoq.php?c=Sony_aath

#EXTINF:-1 tvg-id="698" group-title="Entertainment" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aakaash_bangla.png",Aakash Aath
http://'.$ipadd.'/autoq.php?c=Aakaash_bangla

#EXTINF:-1 tvg-id="699" group-title="Entertainment" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Malayalam.png",DD Malayalam
http://'.$ipadd.'/autoq.php?c=DD_Malayalam

#EXTINF:-1 tvg-id="701" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dangal.png",Dangal
http://'.$ipadd.'/autoq.php?c=Dangal

#EXTINF:-1 tvg-id="702" group-title="Entertainment" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Oriya.png",DD Oriya
http://'.$ipadd.'/autoq.php?c=DD_Oriya

#EXTINF:-1 tvg-id="705" group-title="Entertainment" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Polimer_TV.png",Polimer TV
http://'.$ipadd.'/autoq.php?c=Polimer_TV

#EXTINF:-1 tvg-id="707" group-title="Entertainment" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_TV.png",Raj TV
http://'.$ipadd.'/autoq.php?c=Raj_TV

#EXTINF:-1 tvg-id="708" group-title="Entertainment" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Makkal_TV.png",Makkal TV
http://'.$ipadd.'/autoq.php?c=Makkal_TV

#EXTINF:-1 tvg-id="710" group-title="Entertainment" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kairali_TV.png",Kairali TV
http://'.$ipadd.'/autoq.php?c=Kairali_TV

#EXTINF:-1 tvg-id="711" group-title="Entertainment" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Captain_tv.png",Captain tv
http://'.$ipadd.'/autoq.php?c=Captain_tv

#EXTINF:-1 tvg-id="712" group-title="Entertainment" tvg-language="Urdu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_urdu.png",DD urdu
http://'.$ipadd.'/autoq.php?c=DD_urdu

#EXTINF:-1 tvg-id="706" group-title="Entertainment" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Saptagiri.png",DD Saptagiri
http://'.$ipadd.'/autoq.php?c=DD_Saptagiri

#EXTINF:-1 tvg-id="713" group-title="Entertainment" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD9_chandana_kannada.png",DD9 chandana (kannada)
http://'.$ipadd.'/autoq.php?c=DD9_chandana_kannada

#EXTINF:-1 tvg-id="714" group-title="Entertainment" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Girnar.png",DD Girnar
http://'.$ipadd.'/autoq.php?c=DD_Girnar

#EXTINF:-1 tvg-id="715" group-title="Entertainment" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Punjabi.png",DD Punjabi
http://'.$ipadd.'/autoq.php?c=DD_Punjabi

#EXTINF:-1 tvg-id="716" group-title="Entertainment" tvg-language="Urdu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Kashir.png",DD Kashir
http://'.$ipadd.'/autoq.php?c=DD_Kashir

#EXTINF:-1 tvg-id="719" group-title="Entertainment" tvg-language="Nepali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nepal_one.png",Nepal one
http://'.$ipadd.'/autoq.php?c=Nepal_one

#EXTINF:-1 tvg-id="720" group-title="Entertainment" tvg-language="Assamese" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD13_Guwahati_NE.png",DD13 Guwahati NE
http://'.$ipadd.'/autoq.php?c=DD13_Guwahati_NE

#EXTINF:-1 tvg-id="723" group-title="Entertainment" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Amrita_TV.png",Amrita TV
http://'.$ipadd.'/autoq.php?c=Amrita_TV

#EXTINF:-1 tvg-id="725" group-title="News" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kairali_People_TV.png",Kairali News
http://'.$ipadd.'/autoq.php?c=Kairali_People_TV

#EXTINF:-1 tvg-id="726" group-title="Entertainment" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD5_Podhigai.png",DD5 Podhigai
http://'.$ipadd.'/autoq.php?c=DD5_Podhigai

#EXTINF:-1 tvg-id="727" group-title="Entertainment" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vasanth_TV.png",Vasanth TV
http://'.$ipadd.'/autoq.php?c=Vasanth_TV

#EXTINF:-1 tvg-id="728" group-title="Entertainment" tvg-language="Urdu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Salaam.png",Zee Salaam
http://'.$ipadd.'/autoq.php?c=Zee_Salaam

#EXTINF:-1 tvg-id="730" group-title="Entertainment" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kasturi.png",Kasturi
http://'.$ipadd.'/autoq.php?c=Kasturi

#EXTINF:-1 tvg-id="731" group-title="Entertainment" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kairali_WE_TV.png",Kairali WE TV
http://'.$ipadd.'/autoq.php?c=Kairali_WE_TV

#EXTINF:-1 tvg-id="734" group-title="Entertainment" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vissa_TV.png",Vissa TV
http://'.$ipadd.'/autoq.php?c=Vissa_TV

#EXTINF:-1 tvg-id="736" group-title="Entertainment" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Maiboli.png",Maiboli
http://'.$ipadd.'/autoq.php?c=Maiboli

#EXTINF:-1 tvg-id="1066" group-title="Entertainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TheQIndia.png",The Q
http://'.$ipadd.'/autoq.php?c=TheQIndia

#EXTINF:-1 tvg-id="1920" group-title="Kids" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/The_Q_Kahaniyan.png",The Q Kahaniyan
http://'.$ipadd.'/autoq.php?c=The_Q_Kahaniya

#EXTINF:-1 tvg-id="1144" group-title="Entertainment" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Namma_TV.png",Namma TV
http://'.$ipadd.'/autoq.php?c=Namma_TV

#EXTINF:-1 tvg-id="1151" group-title="Entertainment" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rangamanch.png",Rangamanch
http://'.$ipadd.'/autoq.php?c=Rangamanch

#EXTINF:-1 tvg-id="534" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dillagi_TV.png",Dillagi TV
http://'.$ipadd.'/autoq.php?c=Dillagi_TV

#EXTINF:-1 tvg-id="535" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dhamaal_TV.png",Dhamaal TV
http://'.$ipadd.'/autoq.php?c=Dhamaal_TV

#EXTINF:-1 tvg-id="153" group-title="Movies" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Talkies.png",Zee Talkies
http://'.$ipadd.'/autoq.php?c=Zee_Talkies

#EXTINF:-1 tvg-id="417" group-title="Movies" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/J_Movies.png",J Movies
http://'.$ipadd.'/autoq.php?c=J_Movies

#EXTINF:-1 tvg-id="685" group-title="Movies" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Bangla_Cinema.png",Zee Bangla Cinema
http://'.$ipadd.'/autoq.php?c=Zee_Bangla_Cinema

#EXTINF:-1 tvg-id="252" group-title="Movies" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Cinema.png",ETV Cinema
http://'.$ipadd.'/autoq.php?c=ETV_Cinema

#EXTINF:-1 tvg-id="738" group-title="Movies" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Fakt_Marathi.png",Fakt Marathi
http://'.$ipadd.'/autoq.php?c=Fakt_Marathi

#EXTINF:-1 tvg-id="946" group-title="Movies" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pitaara.png",Pitaara
http://'.$ipadd.'/autoq.php?c=Pitaara

#EXTINF:-1 tvg-id="809" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Maha_Movies.png",Maha Movies
http://'.$ipadd.'/autoq.php?c=Maha_Movies

#EXTINF:-1 tvg-id="683" group-title="Movies" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Digital_Plus.png",Raj Digital Plus
http://'.$ipadd.'/autoq.php?c=Raj_Digital_Plus

#EXTINF:-1 tvg-id="1190" group-title="Movies" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Punjabi_Gold.png",PTC Punjabi Gold 
http://'.$ipadd.'/autoq.php?c=PTC_Punjabi_Gold

#EXTINF:-1 tvg-id="883" group-title="Movies" tvg-language="Bhojpuri" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Osar_Movies.png",Oscar Movies
http://'.$ipadd.'/autoq.php?c=Osar_Movies

#EXTINF:-1 tvg-id="908" group-title="Movies" tvg-language="Assamese" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Indradhanu.png",Indradhanu
http://'.$ipadd.'/autoq.php?c=Indradhanu

#EXTINF:-1 tvg-id="1101" group-title="Movies" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Amaar_Cinema.png",Amaar Cinema
http://'.$ipadd.'/autoq.php?c=Amaar_Cinema

#EXTINF:-1 tvg-id="666" group-title="News" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABN_Andhra_Jyothi.png",ABN Andhra Jyothi
http://'.$ipadd.'/autoq.php?c=ABN_Andhra_Jyothi

#EXTINF:-1 tvg-id="499" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_Nation.png",News Nation
http://'.$ipadd.'/autoq.php?c=News_Natio

#EXTINF:-1 tvg-id="718" group-title="News" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kanak_TV.png",Kanak News
http://'.$ipadd.'/autoq.php?c=Kanak_TV

#EXTINF:-1 tvg-id="498" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_news.png",India news
http://'.$ipadd.'/autoq.php?c=India_news

#EXTINF:-1 tvg-id="677" group-title="News" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Puthiya_Thalimurai.png",Puthiya Thalimurai
http://'.$ipadd.'/autoq.php?c=Puthiya_Thalimurai

#EXTINF:-1 tvg-id="693" group-title="News" tvg-language="Bhojpuri" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_BIHAR.png",News18 BIHAR
http://'.$ipadd.'/autoq.php?c=ETV_BIHAR

#EXTINF:-1 tvg-id="923" group-title="News" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dighvijay_TV.png",Dighvijay TV
http://'.$ipadd.'/autoq.php?c=Dighvijay_TV

#EXTINF:-1 tvg-id="724" group-title="News" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Kalinga.png",Zee Delhi NCR Haryana
http://'.$ipadd.'/autoq.php?c=Zee_Kalinga

#EXTINF:-1 tvg-id="620" group-title="News" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_News_Gujarati.png",News18 Gujarati
http://'.$ipadd.'/autoq.php?c=ETV_News_Gujarati

#EXTINF:-1 tvg-id="502" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tez.png",Good News Today
http://'.$ipadd.'/autoq.php?c=Tez

#EXTINF:-1 tvg-id="180" group-title="News" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Asianet_News.png",Asianet News
http://'.$ipadd.'/autoq.php?c=Asianet_News

#EXTINF:-1 tvg-id="823" group-title="Infotainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_SD.png",Sony BBC Earth SD
http://'.$ipadd.'/autoq.php?c=Sony_BBC_Earth_SD

#EXTINF:-1 tvg-id="653" group-title="News" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Kannada_News.png",News18 Kannada News
http://'.$ipadd.'/autoq.php?c=ETV_Kannada_News

#EXTINF:-1 tvg-id="673" group-title="News" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News7_Tamil.png",News7 Tamil
http://'.$ipadd.'/autoq.php?c=News7_Tamil

#EXTINF:-1 tvg-id="633" group-title="News" tvg-language="Assamese" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DY_365.png",DY 365
http://'.$ipadd.'/autoq.php?c=DY_365

#EXTINF:-1 tvg-id="232" group-title="News" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/IBN_Lokmat.png",News18 Lokmat
http://'.$ipadd.'/autoq.php?c=IBN_Lokmat

#EXTINF:-1 tvg-id="647" group-title="News" tvg-language="Assamese" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pratidin_News.png",Pratidin Time
http://'.$ipadd.'/autoq.php?c=Pratidin_News

#EXTINF:-1 tvg-id="616" group-title="News" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tv_9_Gujarat.png",Tv 9 Gujarat
http://'.$ipadd.'/autoq.php?c=Tv_9_Gujarat

#EXTINF:-1 tvg-id="531" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_RAJASTHAN.png",News18 RAJASTHAN
http://'.$ipadd.'/autoq.php?c=ETV_RAJASTHAN

#EXTINF:-1 tvg-id="717" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Bangla_News.png",News18 Bangla News
http://'.$ipadd.'/autoq.php?c=ETV_Bangla_News

#EXTINF:-1 tvg-id="792" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_State_UK_UP.png",News State UK UP
http://'.$ipadd.'/autoq.php?c=News_State_UK_UP

#EXTINF:-1 tvg-id="627" group-title="News" tvg-language="Assamese" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_18_Assam.png",News 18 Assam
http://'.$ipadd.'/autoq.php?c=News_18_Assam

#EXTINF:-1 tvg-id="641" group-title="News" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Asmita.png",ABP Asmita
http://'.$ipadd.'/autoq.php?c=ABP_Asmita

#EXTINF:-1 tvg-id="624" group-title="News" tvg-language="Assamese" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prag_News.png",Prag News
http://'.$ipadd.'/autoq.php?c=Prag_News

#EXTINF:-1 tvg-id="529" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_MP.png",News18 MP
http://'.$ipadd.'/autoq.php?c=ETV_MP

#EXTINF:-1 tvg-id="770" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kashish_News.png",Kashish News
http://'.$ipadd.'/autoq.php?c=Kashish_News

#EXTINF:-1 tvg-id="769" group-title="News" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/V6_News.png",V6 News
http://'.$ipadd.'/autoq.php?c=V6_News

#EXTINF:-1 tvg-id="614" group-title="News" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Andhra_pradesh.png",ETV Andhra pradesh
http://'.$ipadd.'/autoq.php?c=ETV_Andhra_pradesh

#EXTINF:-1 tvg-id="615" group-title="News" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_18_Tamilnadu.png",News 18 Tamilnadu
http://'.$ipadd.'/autoq.php?c=News_18_Tamilnadu

#EXTINF:-1 tvg-id="662" group-title="News" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manorama_News.png",Manorama News
http://'.$ipadd.'/autoq.php?c=Manorama_News

#EXTINF:-1 tvg-id="780" group-title="News" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mathrubhumi_News.png",Mathrubhumi News
http://'.$ipadd.'/autoq.php?c=Mathrubhumi_News

#EXTINF:-1 tvg-id="493" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_Today.png",India Today
http://'.$ipadd.'/autoq.php?c=India_Today

#EXTINF:-1 tvg-id="956" group-title="News" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV_5_Kannada.png",TV 5 Kannada
http://'.$ipadd.'/autoq.php?c=TV_5_Kannada

#EXTINF:-1 tvg-id="204" group-title="Sports" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Sports.png",DD Sports
http://'.$ipadd.'/autoq.php?c=DD_Sports

#EXTINF:-1 tvg-id="845" group-title="Music" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/MK_Music.png",MK Music
http://'.$ipadd.'/autoq.php?c=MK_Music

#EXTINF:-1 tvg-id="250" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Music_India.png",Music India
http://'.$ipadd.'/autoq.php?c=Music_India

#EXTINF:-1 tvg-id="803" group-title="Music" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tunes_6.png",Tunes 6
http://'.$ipadd.'/autoq.php?c=Tunes_6

#EXTINF:-1 tvg-id="743" group-title="Music" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Music_Kannada.png",Raj Music Kannada
http://'.$ipadd.'/autoq.php?c=Raj_Music_Kannada

#EXTINF:-1 tvg-id="639" group-title="Music" tvg-language="Assamese" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ramdhenu.png",Ramdhenu
http://'.$ipadd.'/autoq.php?c=Ramdhenu

#EXTINF:-1 tvg-id="748" group-title="Music" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Musix.png",Raj Musix
http://'.$ipadd.'/autoq.php?c=Raj_Musix

#EXTINF:-1 tvg-id="1172" group-title="Music" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_Chak_De.png",PTC Chak De
http://'.$ipadd.'/autoq.php?c=PTC_Chak_De

#EXTINF:-1 tvg-id="732" group-title="Music" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/9X_Tashan.png",9X Tashan
http://'.$ipadd.'/autoq.php?c=9X_Tasha

#EXTINF:-1 tvg-id="749" group-title="Music" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sahana_Music.png",Sahana Music
http://'.$ipadd.'/autoq.php?c=Sahana_Music

#EXTINF:-1 tvg-id="1188" group-title="Music" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_DHOL_TV.png",PTC DHOL TV
http://'.$ipadd.'/autoq.php?c=PTC_DHOL_TV

#EXTINF:-1 tvg-id="742" group-title="Music" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/mh1_Music.png",mh1 (Music)
http://'.$ipadd.'/autoq.php?c=mh1_Music

#EXTINF:-1 tvg-id="735" group-title="Music" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sangeet_Marathi.png",Sangeet Marathi
http://'.$ipadd.'/autoq.php?c=Sangeet_Marathi

#EXTINF:-1 tvg-id="441" group-title="Music" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/9x_Jhakaas.png",9x Jhakaas
http://'.$ipadd.'/autoq.php?c=9x_Jhakaas

#EXTINF:-1 tvg-id="903" group-title="Music" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Only_Music.png",Only Music
http://'.$ipadd.'/autoq.php?c=Only_Music

#EXTINF:-1 tvg-id="905" group-title="Music" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/PBN_Music.png",PBN Music
http://'.$ipadd.'/autoq.php?c=PBN_Music

#EXTINF:-1 tvg-id="737" group-title="Music" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Music_Telugu.png",Raj Music Telugu
http://'.$ipadd.'/autoq.php?c=Raj_Music_Telugu

#EXTINF:-1 tvg-id="1192" group-title="Music" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Brit_Asia.png",Brit Asia
http://'.$ipadd.'/autoq.php?c=Brit_Asia

#EXTINF:-1 tvg-id="786" group-title="Music" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kappa_TV.png",Kappa TV
http://'.$ipadd.'/autoq.php?c=Kappa_TV

#EXTINF:-1 tvg-id="1103" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/PEACE_MUSIC.png",PEACE MUSIC
http://'.$ipadd.'/autoq.php?c=PEACE_MUSIC

#EXTINF:-1 tvg-id="739" group-title="Music" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_Music_Malayalam.png",Raj Music Malayalam
http://'.$ipadd.'/autoq.php?c=Raj_Music_Malayalam

#EXTINF:-1 tvg-id="1184" group-title="Music" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Steelbird_Music.png",Steelbird Music
http://'.$ipadd.'/autoq.php?c=Steelbird_Music

#EXTINF:-1 tvg-id="832" group-title="News" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/10_TV.png",10 TV
http://'.$ipadd.'/autoq.php?c=10_TV

#EXTINF:-1 tvg-id="658" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_News_MP_Chattisgarh.png",Zee News MP Chattisgarh
http://'.$ipadd.'/autoq.php?c=Zee_News_MP_Chattisgarh

#EXTINF:-1 tvg-id="503" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/IBC-24.png",IBC24
http://'.$ipadd.'/autoq.php?c=IBC-24

#EXTINF:-1 tvg-id="642" group-title="News" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/VTV_Gujarati.png",VTV Gujarati
http://'.$ipadd.'/autoq.php?c=VTV_Gujarati

#EXTINF:-1 tvg-id="668" group-title="News" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV_5_News.png",TV 5 News
http://'.$ipadd.'/autoq.php?c=TV_5_News

#EXTINF:-1 tvg-id="866" group-title="Entertainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Exclusive.png",Jio Exclusive HD
http://'.$ipadd.'/autoq.php?c=Jio_Exclusive

#EXTINF:-1 tvg-id="1232" group-title="Entertainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hi_Dost.png",Hi Dost!
http://'.$ipadd.'/autoq.php?c=Hi_Dost

#EXTINF:-1 tvg-id="675" group-title="News" tvg-language="Assamese" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Assam_Talks.png",Assam Talks
http://'.$ipadd.'/autoq.php?c=Assam_Talks

#EXTINF:-1 tvg-id="687" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_Time_TV.png",News Time TV
http://'.$ipadd.'/autoq.php?c=News_Time_TV

#EXTINF:-1 tvg-id="661" group-title="News" tvg-language="Bhojpuri" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Purvaiya.png",Zee Bihar Jharkhand
http://'.$ipadd.'/autoq.php?c=Zee_Purvaiya

#EXTINF:-1 tvg-id="779" group-title="News" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prameya_News_7.png",Prameya News 7
http://'.$ipadd.'/autoq.php?c=Prameya_News_7

#EXTINF:-1 tvg-id="784" group-title="News" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/CVR_News.png",CVR News
http://'.$ipadd.'/autoq.php?c=CVR_News

#EXTINF:-1 tvg-id="659" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Rajasthan.png",Zee Rajasthan
http://'.$ipadd.'/autoq.php?c=Zee_Rajastha

#EXTINF:-1 tvg-id="530" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_UP.png",News18 UP
http://'.$ipadd.'/autoq.php?c=ETV_UP

#EXTINF:-1 tvg-id="696" group-title="News" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_News_Oriya.png",News18 Oriya
http://'.$ipadd.'/autoq.php?c=ETV_News_Oriya

#EXTINF:-1 tvg-id="667" group-title="News" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/T_News.png",T News
http://'.$ipadd.'/autoq.php?c=T_News

#EXTINF:-1 tvg-id="782" group-title="News" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sandesh_News.png",Sandesh News
http://'.$ipadd.'/autoq.php?c=Sandesh_News

#EXTINF:-1 tvg-id="203" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_News.png",DD News
http://'.$ipadd.'/autoq.php?c=DD_News

#EXTINF:-1 tvg-id="954" group-title="News" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prajaa_TV.png",Prajaa TV
http://'.$ipadd.'/autoq.php?c=Prajaa_TV

#EXTINF:-1 tvg-id="418" group-title="News" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jaya_Plus.png",Jaya Plus
http://'.$ipadd.'/autoq.php?c=Jaya_Plus

#EXTINF:-1 tvg-id="826" group-title="News" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Malai_Murasu.png",Malai Murasu
http://'.$ipadd.'/autoq.php?c=Malai_Murasu

#EXTINF:-1 tvg-id="910" group-title="News" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Media_One_TV.png",Media One TV
http://'.$ipadd.'/autoq.php?c=Media_One_TV

#EXTINF:-1 tvg-id="929" group-title="News" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_24_Kalak.png",Zee 24 Kalak
http://'.$ipadd.'/autoq.php?c=Zee_24_Kalak

#EXTINF:-1 tvg-id="142" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/BBC_World_News.png",BBC World News
http://'.$ipadd.'/autoq.php?c=BBC_World_News

#EXTINF:-1 tvg-id="630" group-title="News" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Telangana.png",ETV Telangana
http://'.$ipadd.'/autoq.php?c=ETV_Telangana

#EXTINF:-1 tvg-id="781" group-title="News" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kalinga_TV.png",Kalinga TV
http://'.$ipadd.'/autoq.php?c=Kalinga_TV

#EXTINF:-1 tvg-id="810" group-title="News" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Janam_TV.png",Janam TV
http://'.$ipadd.'/autoq.php?c=Janam_TV

#EXTINF:-1 tvg-id="512" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_News_UP.png",India News UP
http://'.$ipadd.'/autoq.php?c=India_News_UP

#EXTINF:-1 tvg-id="965" group-title="News" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_18_Kerala.png",News 18 Kerala
http://'.$ipadd.'/autoq.php?c=News_18_Kerala

#EXTINF:-1 tvg-id="800" group-title="News" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Maha_News.png",Maha News
http://'.$ipadd.'/autoq.php?c=Maha_News

#EXTINF:-1 tvg-id="665" group-title="News" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/HM_TV.png",HM TV
http://'.$ipadd.'/autoq.php?c=HM_TV

#EXTINF:-1 tvg-id="290" group-title="Kids" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/sonic_Tamil.png",sonic Tamil
http://'.$ipadd.'/autoq.php?c=sonic_Tamil

#EXTINF:-1 tvg-id="166" group-title="Kids" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Cartoon_Network_Telugu.png",Cartoon Network Telugu
http://'.$ipadd.'/autoq.php?c=Cartoon_Network_Telugu

#EXTINF:-1 tvg-id="550" group-title="Kids" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Kids_Tamil.png",Discovery Kids Tamil
http://'.$ipadd.'/autoq.php?c=Discovery_Kids_Tamil

#EXTINF:-1 tvg-id="583" group-title="Infotainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Kisan.png",DD Kisan
http://'.$ipadd.'/autoq.php?c=DD_Kisa

#EXTINF:-1 tvg-id="570" group-title="Infotainment" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Life.png",ETV Life
http://'.$ipadd.'/autoq.php?c=ETV_Life

#EXTINF:-1 tvg-id="422" group-title="Infotainment" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/InGoa24x7.png",In Goa 24x7
http://'.$ipadd.'/autoq.php?c=InGoa24x7

#EXTINF:-1 tvg-id="775" group-title="Infotainment" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vanitha.png",Vanitha
http://'.$ipadd.'/autoq.php?c=Vanitha

#EXTINF:-1 tvg-id="774" group-title="Infotainment" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/CVR_Health.png",CVR Health
http://'.$ipadd.'/autoq.php?c=CVR_Health

#EXTINF:-1 tvg-id="541" group-title="Infotainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Discovery_Turbo.png",Discovery Turbo
http://'.$ipadd.'/autoq.php?c=Discovery_Turbo

#EXTINF:-1 tvg-id="852" group-title="Infotainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_BBC_Earth_HD_English.png",Sony BBC Earth HD English
http://'.$ipadd.'/autoq.php?c=Sony_BBC_Earth_HD_English

#EXTINF:-1 tvg-id="962" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Boogle_Bollywood.png",Boogle Bollywood
http://'.$ipadd.'/autoq.php?c=Boogle_Bollywood

#EXTINF:-1 tvg-id="795" group-title="Lifestyle" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Wellness.png",testa
http://'.$ipadd.'/autoq.php?c=Wellness

#EXTINF:-1 tvg-id="953" group-title="Lifestyle" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Propex_TV.png",Propex TV
http://'.$ipadd.'/autoq.php?c=Propex_TV

#EXTINF:-1 tvg-id="797" group-title="Lifestyle" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sakhi_TV.png",testii
http://'.$ipadd.'/autoq.php?c=Sakhi_TV

#EXTINF:-1 tvg-id="490" group-title="Business" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/CNBC_Bazaar_MNO.png",CNBC Bazaar (MNO)
http://'.$ipadd.'/autoq.php?c=CNBC_Bazaar_MNO

#EXTINF:-1 tvg-id="599" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Disha_tv.png",Disha tv
http://'.$ipadd.'/autoq.php?c=Disha_tv

#EXTINF:-1 tvg-id="856" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vedic_TV.png",Vedic TV
http://'.$ipadd.'/autoq.php?c=Vedic_TV

#EXTINF:-1 tvg-id="611" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Darshan_24.png",Darshan 24
http://'.$ipadd.'/autoq.php?c=Darshan_24

#EXTINF:-1 tvg-id="939" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bhaktisagar.png",Bhaktisagar 2
http://'.$ipadd.'/autoq.php?c=Bhaktisagar

#EXTINF:-1 tvg-id="601" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ishwar_TV.png",Ishwar TV
http://'.$ipadd.'/autoq.php?c=Ishwar_TV

#EXTINF:-1 tvg-id="605" group-title="Devotional" tvg-language="Urdu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Channel_Win.png",Channel Win
http://'.$ipadd.'/autoq.php?c=Channel_Wi

#EXTINF:-1 tvg-id="603" group-title="Devotional" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nambikkai.png",Nambikkai
http://'.$ipadd.'/autoq.php?c=Nambikkai

#EXTINF:-1 tvg-id="879" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Harekrsna.png",Hare krsna
http://'.$ipadd.'/autoq.php?c=Harekrsna

#EXTINF:-1 tvg-id="887" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Garv_Swaminarayan.png",Swar Shree
http://'.$ipadd.'/autoq.php?c=Garv_Swaminaraya

#EXTINF:-1 tvg-id="608" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shubhsandesh_TV.png",Shubhsandesh TV
http://'.$ipadd.'/autoq.php?c=Shubhsandesh_TV

#EXTINF:-1 tvg-id="606" group-title="Devotional" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shalom.png",Shalom
http://'.$ipadd.'/autoq.php?c=Shalom

#EXTINF:-1 tvg-id="1159" group-title="JioDarshan" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tulja_Bhavani.png",Tulja Bhavani
http://'.$ipadd.'/autoq.php?c=Tulja_Bhavani

#EXTINF:-1 tvg-id="972" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sarv_Dharam_Sangam.png",Sarv Dharam Sangam
http://'.$ipadd.'/autoq.php?c=Sarv_Dharam_Sangam

#EXTINF:-1 tvg-id="1077" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sharnam_TV.png",Sharnam TV
http://'.$ipadd.'/autoq.php?c=Sharnam_TV

#EXTINF:-1 tvg-id="952" group-title="Devotional" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/GarvGurbani.png",Garv Punjabi Gurbani
http://'.$ipadd.'/autoq.php?c=GarvGurbani

#EXTINF:-1 tvg-id="1174" group-title="Devotional" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Fateh_TV.png",Fateh TV
http://'.$ipadd.'/autoq.php?c=Fateh_TV

#EXTINF:-1 tvg-id="1187" group-title="Devotional" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Valambhakti.png",Valam TV
http://'.$ipadd.'/autoq.php?c=Valambhakti

#EXTINF:-1 tvg-id="964" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Om_Shanti.png",Om Shanti
http://'.$ipadd.'/autoq.php?c=Om_Shanti

#EXTINF:-1 tvg-id="1186" group-title="Devotional" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kartavya_Tv.png",Kartavya TV
http://'.$ipadd.'/autoq.php?c=Kartavya_Tv

#EXTINF:-1 tvg-id="1099" group-title="Devotional" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hamari_Sanskruti_TV.png",Hamari Sanskruti
http://'.$ipadd.'/autoq.php?c=Hamari_Sanskruti_TV

#EXTINF:-1 tvg-id="961" group-title="Devotional" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/JUSOne.png",JUSOne
http://'.$ipadd.'/autoq.php?c=JUSOne

#EXTINF:-1 tvg-id="1078" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Soham_TV.png",Soham TV
http://'.$ipadd.'/autoq.php?c=Soham_TV

#EXTINF:-1 tvg-id="1175" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Awakening.png",Awakening
http://'.$ipadd.'/autoq.php?c=Awakeni

#EXTINF:-1 tvg-id="1176" group-title="Devotional" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/SRMD.png",SRMD HD
http://'.$ipadd.'/autoq.php?c=SRMD

#EXTINF:-1 tvg-id="1193" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hare_Krsna_music.png",Hare Krsna Music
http://'.$ipadd.'/autoq.php?c=Hare_Krsna_music

#EXTINF:-1 tvg-id="409" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/_evidya_8.png",PM e Vidya 08
http://'.$ipadd.'/autoq.php?c=_evidya_8

#EXTINF:-1 tvg-id="410" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/_evidya_9.png",PM e Vidya 09
http://'.$ipadd.'/autoq.php?c=_evidya_9

#EXTINF:-1 tvg-id="411" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_10.png",PM e Vidya 10
http://'.$ipadd.'/autoq.php?c=evidya_10

#EXTINF:-1 tvg-id="1410" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_11.png",PM e Vidya 11
http://'.$ipadd.'/autoq.php?c=evidya_11

#EXTINF:-1 tvg-id="1532" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/evidya_12.png",PM e Vidya 12
http://'.$ipadd.'/autoq.php?c=evidya_12

#EXTINF:-1 tvg-id="1069" group-title="Educational" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_1.png",Vande Gujarat 1
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_1

#EXTINF:-1 tvg-id="1070" group-title="Educational" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_2.png",Vande Gujarat 2
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_2

#EXTINF:-1 tvg-id="1082" group-title="Educational" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_3.png",Vande Gujarat 3
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_3

#EXTINF:-1 tvg-id="1071" group-title="Educational" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_4.png",Vande Gujarat 4
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_4

#EXTINF:-1 tvg-id="1083" group-title="Educational" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_5.png",Vande Gujarat 5
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_5

#EXTINF:-1 tvg-id="1084" group-title="Educational" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_6.png",Vande Gujarat 6
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_6

#EXTINF:-1 tvg-id="1085" group-title="Educational" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_7.png",Vande Gujarat 7
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_7

#EXTINF:-1 tvg-id="1086" group-title="Educational" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_8.png",Vande Gujarat 8
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_8

#EXTINF:-1 tvg-id="1087" group-title="Educational" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_9.png",Vande Gujarat 9
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_9

#EXTINF:-1 tvg-id="1088" group-title="Educational" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_10.png",Vande Gujarat 10
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_10

#EXTINF:-1 tvg-id="1089" group-title="Educational" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_11.png",Vande Gujarat 11
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_11

#EXTINF:-1 tvg-id="1090" group-title="Educational" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_12.png",Vande Gujarat 12
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_12

#EXTINF:-1 tvg-id="1091" group-title="Educational" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_13.png",Vande Gujarat 13
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_13

#EXTINF:-1 tvg-id="1092" group-title="Educational" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_14.png",Vande Gujarat 14
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_14

#EXTINF:-1 tvg-id="1093" group-title="Educational" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_15.png",Vande Gujarat 15
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_15

#EXTINF:-1 tvg-id="1094" group-title="Educational" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Gujarat_16.png",Vande Gujarat 16
http://'.$ipadd.'/autoq.php?c=Vande_Gujarat_16

#EXTINF:-1 tvg-id="807" group-title="News" tvg-language="Urdu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Gulistan_News.png",Gulistan News
http://'.$ipadd.'/autoq.php?c=Gulistan_News

#EXTINF:-1 tvg-id="768" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jan_TV.png",Jan TV
http://'.$ipadd.'/autoq.php?c=Jan_TV

#EXTINF:-1 tvg-id="651" group-title="News" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_Kannada.png",Raj News Kannada
http://'.$ipadd.'/autoq.php?c=Raj_News_Kannada

#EXTINF:-1 tvg-id="1524" group-title="JioDarshan" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ashtavinayak.png",Ashtavinayak
http://'.$ipadd.'/autoq.php?c=Ashtavinayak

#EXTINF:-1 tvg-id="694" group-title="News" tvg-language="Urdu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Urdu.png",News18 JKLH
http://'.$ipadd.'/autoq.php?c=ETV_Urdu

#EXTINF:-1 tvg-id="516" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_News_Haryana.png",India News Haryana
http://'.$ipadd.'/autoq.php?c=India_News_Haryana

#EXTINF:-1 tvg-id="513" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_News_Rajasthan.png",India News Rajasthan
http://'.$ipadd.'/autoq.php?c=India_News_Rajastha

#EXTINF:-1 tvg-id="643" group-title="News" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/GS_TV.png",GS TV
http://'.$ipadd.'/autoq.php?c=GS_TV

#EXTINF:-1 tvg-id="631" group-title="News" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/MBC.png",MBC
http://'.$ipadd.'/autoq.php?c=MBC

#EXTINF:-1 tvg-id="509" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sahara_Samay_Bihar.png",Sahara Samay Bihar
http://'.$ipadd.'/autoq.php?c=Sahara_Samay_Bihar

#EXTINF:-1 tvg-id="652" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_SANGAM.png",Zee Hindustan
http://'.$ipadd.'/autoq.php?c=Zee_SANGAM

#EXTINF:-1 tvg-id="551" group-title="Kids" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST14_HD.png",TEST14 HD
http://'.$ipadd.'/autoq.php?c=TEST14_HD

#EXTINF:-1 tvg-id="808" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hindi_Khabar.png",Hindi Khabar
http://'.$ipadd.'/autoq.php?c=Hindi_Khabar

#EXTINF:-1 tvg-id="654" group-title="News" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Punjabi_HP_Haryana.png",Zee Punjabi HP Haryana
http://'.$ipadd.'/autoq.php?c=Zee_Punjabi_HP_Haryana

#EXTINF:-1 tvg-id="927" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/First_India_News.png",First India News
http://'.$ipadd.'/autoq.php?c=First_India_News

#EXTINF:-1 tvg-id="882" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News11.png",News11
http://'.$ipadd.'/autoq.php?c=News11

#EXTINF:-1 tvg-id="950" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/RPLUS.png",R Plus
http://'.$ipadd.'/autoq.php?c=RPLUS

#EXTINF:-1 tvg-id="507" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/SAHARA_SAMAY_MP.png",SAHARA SAMAY MP
http://'.$ipadd.'/autoq.php?c=SAHARA_SAMAY_MP

#EXTINF:-1 tvg-id="645" group-title="News" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Captain_News.png",Captain News
http://'.$ipadd.'/autoq.php?c=Captain_News

#EXTINF:-1 tvg-id="790" group-title="News" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/I_News.png",I News
http://'.$ipadd.'/autoq.php?c=I_News

#EXTINF:-1 tvg-id="495" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_X.png",News X
http://'.$ipadd.'/autoq.php?c=News_X

#EXTINF:-1 tvg-id="491" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mirror_Now.png",Mirror Now
http://'.$ipadd.'/autoq.php?c=Mirror_Now

#EXTINF:-1 tvg-id="515" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_News_MP.png",India News MP
http://'.$ipadd.'/autoq.php?c=India_News_MP

#EXTINF:-1 tvg-id="671" group-title="News" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sathiyam.png",Sathiyam TV
http://'.$ipadd.'/autoq.php?c=Sathiyam

#EXTINF:-1 tvg-id="799" group-title="News" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Naxatra_News.png",Naxatra News
http://'.$ipadd.'/autoq.php?c=Naxatra_News

#EXTINF:-1 tvg-id="572" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Living_Foodz.png",Zee UP UK
http://'.$ipadd.'/autoq.php?c=Living_Foodz

#EXTINF:-1 tvg-id="193" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/CNN.png",CNN
http://'.$ipadd.'/autoq.php?c=CNN

#EXTINF:-1 tvg-id="517" group-title="News" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Chardikla_Time_TV.png",Chardikla Time TV
http://'.$ipadd.'/autoq.php?c=Chardikla_Time_TV

#EXTINF:-1 tvg-id="518" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sudarshan.png",Sudarshan
http://'.$ipadd.'/autoq.php?c=Sudarsha

#EXTINF:-1 tvg-id="789" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/JK_24x7_News.png",JK 24x7 News
http://'.$ipadd.'/autoq.php?c=JK_24x7_News

#EXTINF:-1 tvg-id="494" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/AL_Jazeera.png",AL Jazeera
http://'.$ipadd.'/autoq.php?c=AL_Jazeera

#EXTINF:-1 tvg-id="1170" group-title="News" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTC_News.png",PTC News
http://'.$ipadd.'/autoq.php?c=PTC_News

#EXTINF:-1 tvg-id="791" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Taaza_TV.png",Taaza TV
http://'.$ipadd.'/autoq.php?c=Taaza_TV

#EXTINF:-1 tvg-id="771" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Live_Today.png",Live Today
http://'.$ipadd.'/autoq.php?c=Live_Today

#EXTINF:-1 tvg-id="506" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sahara_Samay_Rastriya.png",Sahara Samay Rastriya
http://'.$ipadd.'/autoq.php?c=Sahara_Samay_Rastriya

#EXTINF:-1 tvg-id="511" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mh_One_News.png",Mh One News
http://'.$ipadd.'/autoq.php?c=Mh_One_News

#EXTINF:-1 tvg-id="880" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Janta_TV.png",Janta TV
http://'.$ipadd.'/autoq.php?c=Janta_TV

#EXTINF:-1 tvg-id="655" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_Haryana_and_HP_News.png",News18 Punjab Haryana
http://'.$ipadd.'/autoq.php?c=ETV_Haryana_and_HP_News

#EXTINF:-1 tvg-id="855" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Total_TV.png",Total TV
http://'.$ipadd.'/autoq.php?c=Total_TV

#EXTINF:-1 tvg-id="978" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST1_HD.png",TEST1 HD
http://'.$ipadd.'/autoq.php?c=TEST1_HD

#EXTINF:-1 tvg-id="979" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST2_HD.png",TEST2 HD
http://'.$ipadd.'/autoq.php?c=TEST2_HD

#EXTINF:-1 tvg-id="508" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/SAHARA_SAMAY_UP.png",SAHARA SAMAY UP
http://'.$ipadd.'/autoq.php?c=SAHARA_SAMAY_UP

#EXTINF:-1 tvg-id="412" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Wion.png",Wion
http://'.$ipadd.'/autoq.php?c=Wio

#EXTINF:-1 tvg-id="918" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bharat_Samachar.png",Bharat Samachar
http://'.$ipadd.'/autoq.php?c=Bharat_Samachar

#EXTINF:-1 tvg-id="783" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/K_News_India.png",K News India
http://'.$ipadd.'/autoq.php?c=K_News_India

#EXTINF:-1 tvg-id="637" group-title="News" tvg-language="Assamese" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/North_East_Live.png",North East Live
http://'.$ipadd.'/autoq.php?c=North_East_Live

#EXTINF:-1 tvg-id="804" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Samachar_Plus.png",Samachar Plus
http://'.$ipadd.'/autoq.php?c=Samachar_Plus

#EXTINF:-1 tvg-id="793" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Samay_Rajasthan.png",Samay Rajasthan
http://'.$ipadd.'/autoq.php?c=Samay_Rajastha

#EXTINF:-1 tvg-id="664" group-title="News" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_Telugu.png",Raj News Telugu
http://'.$ipadd.'/autoq.php?c=Raj_News_Telugu

#EXTINF:-1 tvg-id="496" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/dw.png",dw
http://'.$ipadd.'/autoq.php?c=dw

#EXTINF:-1 tvg-id="522" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Loksabha_TV.png",Sansad TV
http://'.$ipadd.'/autoq.php?c=Loksabha_TV

#EXTINF:-1 tvg-id="843" group-title="News" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Madhimugam_TV.png",Madhimugam TV
http://'.$ipadd.'/autoq.php?c=Madhimugam_TV

#EXTINF:-1 tvg-id="520" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_Rajyasabha.png",Sansad TV HD
http://'.$ipadd.'/autoq.php?c=DD_Rajyasabha

#EXTINF:-1 tvg-id="885" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV_5_Monde.png",TV5 Monde
http://'.$ipadd.'/autoq.php?c=TV_5_Monde

#EXTINF:-1 tvg-id="970" group-title="News" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Win_TV.png",Win TV
http://'.$ipadd.'/autoq.php?c=Win_TV

#EXTINF:-1 tvg-id="944" group-title="News" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mantavya_News.png",Mantavya News
http://'.$ipadd.'/autoq.php?c=Mantavya_News

#EXTINF:-1 tvg-id="933" group-title="News" tvg-language="Urdu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/4_TV.png",4 TV
http://'.$ipadd.'/autoq.php?c=4_TV

#EXTINF:-1 tvg-id="936" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_1_India.png",News 1 India
http://'.$ipadd.'/autoq.php?c=News_1_India

#EXTINF:-1 tvg-id="846" group-title="News" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/MK_News.png",MKN
http://'.$ipadd.'/autoq.php?c=MK_News

#EXTINF:-1 tvg-id="917" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/APN_News.png",APN News
http://'.$ipadd.'/autoq.php?c=APN_News

#EXTINF:-1 tvg-id="465" group-title="News" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jaihind_tv.png",Jaihind tv
http://'.$ipadd.'/autoq.php?c=Jaihind_tv

#EXTINF:-1 tvg-id="842" group-title="News" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jeevan_TV.png",Jeevan TV
http://'.$ipadd.'/autoq.php?c=Jeevan_TV

#EXTINF:-1 tvg-id="916" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV_100.png",TV 100
http://'.$ipadd.'/autoq.php?c=TV_100

#EXTINF:-1 tvg-id="1179" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bansal_News.png",Bansal News
http://'.$ipadd.'/autoq.php?c=Bansal_News

#EXTINF:-1 tvg-id="788" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_Voice.png",India Voice
http://'.$ipadd.'/autoq.php?c=India_Voice

#EXTINF:-1 tvg-id="926" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/A1_TV_Rajasthan.png",A1 TV Rajasthan
http://'.$ipadd.'/autoq.php?c=A1_TV_Rajastha

#EXTINF:-1 tvg-id="957" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/INH_24x7.png",INH 24x7
http://'.$ipadd.'/autoq.php?c=INH_24x7

#EXTINF:-1 tvg-id="907" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/GoodNews_Channel.png",GoodNews Channel
http://'.$ipadd.'/autoq.php?c=GoodNews_Channel

#EXTINF:-1 tvg-id="850" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_India_24_X_7.png",News India 24x7
http://'.$ipadd.'/autoq.php?c=News_India_24_X_7

#EXTINF:-1 tvg-id="831" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Living_India_News.png",Living India News
http://'.$ipadd.'/autoq.php?c=Living_India_News

#EXTINF:-1 tvg-id="851" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/SMBC_TV.png",SMBC TV
http://'.$ipadd.'/autoq.php?c=SMBC_TV

#EXTINF:-1 tvg-id="519" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sadhna_News_Plus.png",Sadhna News Plus
http://'.$ipadd.'/autoq.php?c=Sadhna_News_Plus

#EXTINF:-1 tvg-id="764" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Channel_News_Asia_International.png",Channel News Asia International
http://'.$ipadd.'/autoq.php?c=Channel_News_Asia_International

#EXTINF:-1 tvg-id="421" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Goa365.png",GOA 365
http://'.$ipadd.'/autoq.php?c=Goa365

#EXTINF:-1 tvg-id="838" group-title="News" tvg-language="French" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/France_24.png",France 24
http://'.$ipadd.'/autoq.php?c=France_24

#EXTINF:-1 tvg-id="650" group-title="News" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_Malayalam.png",Raj News Malayalam
http://'.$ipadd.'/autoq.php?c=Raj_News_Malayalam

#EXTINF:-1 tvg-id="921" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prime_News.png",Prime News
http://'.$ipadd.'/autoq.php?c=Prime_News

#EXTINF:-1 tvg-id="837" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Euro_News.png",Euro News
http://'.$ipadd.'/autoq.php?c=Euro_News

#EXTINF:-1 tvg-id="966" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/PrudentHD.png",Prudent
http://'.$ipadd.'/autoq.php?c=PrudentHD

#EXTINF:-1 tvg-id="915" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Khabar_Fast.png",Khabar Fast
http://'.$ipadd.'/autoq.php?c=Khabar_Fast

#EXTINF:-1 tvg-id="1185" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swadesh_News.png",Swadesh News
http://'.$ipadd.'/autoq.php?c=Swadesh_News

#EXTINF:-1 tvg-id="960" group-title="News" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/JUS24x7.png",JUS 24x7
http://'.$ipadd.'/autoq.php?c=JUS24x7

#EXTINF:-1 tvg-id="1102" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/RDX_News.png",RDX Goa
http://'.$ipadd.'/autoq.php?c=RDX_News

#EXTINF:-1 tvg-id="787" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/CVR_English.png",CVR English
http://'.$ipadd.'/autoq.php?c=CVR_English

#EXTINF:-1 tvg-id="958" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DNN.png",DNN
http://'.$ipadd.'/autoq.php?c=DNN

#EXTINF:-1 tvg-id="975" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jantantra.png",Jantantra
http://'.$ipadd.'/autoq.php?c=Jantantra

#EXTINF:-1 tvg-id="767" group-title="News" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raj_News_24x7.png",Raj News 24x7
http://'.$ipadd.'/autoq.php?c=Raj_News_24x7

#EXTINF:-1 tvg-id="874" group-title="Kids" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Telugu.png",Sony Yay Telugu
http://'.$ipadd.'/autoq.php?c=Sony_Yay_Telugu

#EXTINF:-1 tvg-id="873" group-title="Kids" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Yay_Tamil.png",Sony Yay Tamil
http://'.$ipadd.'/autoq.php?c=Sony_Yay_Tamil

#EXTINF:-1 tvg-id="548" group-title="Kids" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nickelodeon_Jr.png",Nickelodeon Jr.
http://'.$ipadd.'/autoq.php?c=Nickelodeon_Jr

#EXTINF:-1 tvg-id="1081" group-title="Kids" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/CN_HD_Tamil.png",CN HD+ Tamil
http://'.$ipadd.'/autoq.php?c=CN_HD_Tamil

#EXTINF:-1 tvg-id="1080" group-title="Kids" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/CN_HD_Telugu.png",CN HD+ Telugu
http://'.$ipadd.'/autoq.php?c=CN_HD_Telugu

#EXTINF:-1 tvg-id="580" group-title="Infotainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DD_bharati.png",DD bharati
http://'.$ipadd.'/autoq.php?c=DD_bharati
';

fwrite($playlist, $modlist);

$modlist='
#EXTINF:-1 tvg-id="582" group-title="Infotainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Care_World.png",Care World
http://'.$ipadd.'/autoq.php?c=Care_World

#EXTINF:-1 tvg-id="888" group-title="Infotainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Insight.png",Insight HD
http://'.$ipadd.'/autoq.php?c=Insight

#EXTINF:-1 tvg-id="1162" group-title="Infotainment" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prime_Asia_Tv.png",Prime Asia HD
http://'.$ipadd.'/autoq.php?c=Prime_Asia_Tv

#EXTINF:-1 tvg-id="1340" group-title="Kids" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Malayalam.png",Nick Malayalam
http://'.$ipadd.'/autoq.php?c=Nick_Malayalam

#EXTINF:-1 tvg-id="1341" group-title="Kids" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Bangla.png",Nick Bangla
http://'.$ipadd.'/autoq.php?c=Nick_Bangla

#EXTINF:-1 tvg-id="1342" group-title="Kids" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Marathi.png",Nick Marathi
http://'.$ipadd.'/autoq.php?c=Nick_Marathi

#EXTINF:-1 tvg-id="1344" group-title="Kids" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Malayalam.png",Sonic Malayalam
http://'.$ipadd.'/autoq.php?c=Sonic_Malayalam

#EXTINF:-1 tvg-id="1345" group-title="Kids" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Bangla.png",Sonic Bangla
http://'.$ipadd.'/autoq.php?c=Sonic_Bangla

#EXTINF:-1 tvg-id="1346" group-title="Kids" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Marathi.png",Sonic Marathi
http://'.$ipadd.'/autoq.php?c=Sonic_Marathi

#EXTINF:-1 tvg-id="1227" group-title="Educational" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Digishala.png",Digishala
http://'.$ipadd.'/autoq.php?c=Digishala

#EXTINF:-1 tvg-id="1337" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Top_Tutor.png",Top Tutor
http://'.$ipadd.'/autoq.php?c=Top_Tutor

#EXTINF:-1 tvg-id="1428" group-title="Educational" tvg-language="Assamese" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Gyan_Brikshya.png",Gyan Brikshya
http://'.$ipadd.'/autoq.php?c=Gyan_Brikshya

#EXTINF:-1 tvg-id="1456" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manipur_Educational_Channel.png",Lairik
http://'.$ipadd.'/autoq.php?c=Manipur_Educational_Channel

#EXTINF:-1 tvg-id="1447" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV_Teacher.png",TV Teacher
http://'.$ipadd.'/autoq.php?c=TV_Teacher

#EXTINF:-1 tvg-id="1434" group-title="Educational" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Primary.png",Utkarsh Primary
http://'.$ipadd.'/autoq.php?c=Utkarsh_Primary

#EXTINF:-1 tvg-id="1435" group-title="Educational" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Middle.png",Utkarsh HSBTE
http://'.$ipadd.'/autoq.php?c=Utkarsh_Middle

#EXTINF:-1 tvg-id="1436" group-title="Educational" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Secondary.png",Utkarsh Secondary
http://'.$ipadd.'/autoq.php?c=Utkarsh_Secondary

#EXTINF:-1 tvg-id="1437" group-title="Educational" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Utkarsh_Higher.png",Utkarsh Higher
http://'.$ipadd.'/autoq.php?c=Utkarsh_Higher

#EXTINF:-1 tvg-id="1439" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Meluha.png",Meluha
http://'.$ipadd.'/autoq.php?c=Meluha

#EXTINF:-1 tvg-id="1460" group-title="Educational" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Home_Learning_Gujarat.png",Home Learning Gujarat Standard-9
http://'.$ipadd.'/autoq.php?c=Home_Learning_Gujarat

#EXTINF:-1 tvg-id="1429" group-title="Educational" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/KITE_Victers.png",KITE VICTERS
http://'.$ipadd.'/autoq.php?c=KITE_Victers

#EXTINF:-1 tvg-id="1449" group-title="Devotional" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Parmarth_TV.png",Parmarth TV
http://'.$ipadd.'/autoq.php?c=Parmarth_TV

#EXTINF:-1 tvg-id="1161" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_2_HD.png",Jio Cricket 2 HD
http://'.$ipadd.'/autoq.php?c=Jio_Cricket_2_HD

#EXTINF:-1 tvg-id="1163" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Esports_HD.png",JioGames HD
http://'.$ipadd.'/autoq.php?c=Jio_Esports_HD

#EXTINF:-1 tvg-id="1166" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Cricket_3.png",Jio Cricket 3 HD
http://'.$ipadd.'/autoq.php?c=Jio_Cricket_3

#EXTINF:-1 tvg-id="1324" group-title="Movies" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Gujarati_Cinema.png",Colors Gujarati Cinema
http://'.$ipadd.'/autoq.php?c=Colors_Gujarati_Cinema

#EXTINF:-1 tvg-id="1326" group-title="Entertainment" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Marathi_SD.png",Colors Marathi SD
http://'.$ipadd.'/autoq.php?c=Colors_Marathi_SD

#EXTINF:-1 tvg-id="1368" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_SD.png",Colors SD
http://'.$ipadd.'/autoq.php?c=Colors_SD

#EXTINF:-1 tvg-id="1369" group-title="Entertainment" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Bangla_SD.png",Colors Bangla SD
http://'.$ipadd.'/autoq.php?c=Colors_Bangla_SD

#EXTINF:-1 tvg-id="1370" group-title="Entertainment" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Kannada_SD.png",Colors Kannada SD
http://'.$ipadd.'/autoq.php?c=Colors_Kannada_SD

#EXTINF:-1 tvg-id="1378" group-title="Music" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/VH1.png",VH1
http://'.$ipadd.'/autoq.php?c=VH1

#EXTINF:-1 tvg-id="1400" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/MTV_Beats_SD.png",MTV Beats SD
http://'.$ipadd.'/autoq.php?c=MTV_Beats_SD

#EXTINF:-1 tvg-id="1478" group-title="Educational" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Akal_Academy_Group.png",Akal Academy Group
http://'.$ipadd.'/autoq.php?c=Akal_Academy_Grou

#EXTINF:-1 tvg-id="1480" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/IMS_School.png",IMS Schools Grade 1 - 8
http://'.$ipadd.'/autoq.php?c=IMS_School

#EXTINF:-1 tvg-id="1481" group-title="News" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Argus_TV.png",Argus News
http://'.$ipadd.'/autoq.php?c=Argus_TV

#EXTINF:-1 tvg-id="1482" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Amma.png",AMMA TV
http://'.$ipadd.'/autoq.php?c=Amma

#EXTINF:-1 tvg-id="1518" group-title="Entertainment" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Moon_Tv.png",Moon TV
http://'.$ipadd.'/autoq.php?c=Moon_Tv

#EXTINF:-1 tvg-id="1521" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Birla_Brainiacs.png",Birla Brainiacs
http://'.$ipadd.'/autoq.php?c=Birla_Brainiacs

#EXTINF:-1 tvg-id="1526" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vedant_TV.png",Vedant TV
http://'.$ipadd.'/autoq.php?c=Vedant_TV

#EXTINF:-1 tvg-id="1527" group-title="Music" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Haryanvi_Hits.png",Haryanvi Hits
http://'.$ipadd.'/autoq.php?c=Haryanvi_Hits

#EXTINF:-1 tvg-id="1529" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/MI_TV.png",MI TV
http://'.$ipadd.'/autoq.php?c=MI_TV

#EXTINF:-1 tvg-id="1531" group-title="Educational" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Gyanvani_1.png",Gyanvani 1
http://'.$ipadd.'/autoq.php?c=Gyanvani_1

#EXTINF:-1 tvg-id="1542" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tute.png",Tute
http://'.$ipadd.'/autoq.php?c=Tute

#EXTINF:-1 tvg-id="1545" group-title="Educational" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Punjab_School_TV.png",Punjab School TV
http://'.$ipadd.'/autoq.php?c=Punjab_School_TV

#EXTINF:-1 tvg-id="1547" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/AAS_Vidyalaya.png",AAS Vidyalaya CBSE NCERT
http://'.$ipadd.'/autoq.php?c=AAS_Vidyalaya

#EXTINF:-1 tvg-id="1548" group-title="JioDarshan" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Khandoba_Majha_Jejuri.png",Khandoba Majha, Jejuri
http://'.$ipadd.'/autoq.php?c=Khandoba_Majha_Jejuri

#EXTINF:-1 tvg-id="1549" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DharmaGranth_TV.png",Dharm Granth TV
http://'.$ipadd.'/autoq.php?c=DharmaGranth_TV

#EXTINF:-1 tvg-id="1551" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/P_News.png",P News
http://'.$ipadd.'/autoq.php?c=P_News

#EXTINF:-1 tvg-id="1552" group-title="Infotainment" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Malnadu_TV.png",Malanadu TV
http://'.$ipadd.'/autoq.php?c=Malnadu_TV

#EXTINF:-1 tvg-id="1553" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABSTAR_News.png",AB Star News
http://'.$ipadd.'/autoq.php?c=ABSTAR_News

#EXTINF:-1 tvg-id="1554" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sanatan_TV.png",Sanatan TV
http://'.$ipadd.'/autoq.php?c=Sanatan_TV

#EXTINF:-1 tvg-id="1557" group-title="Infotainment" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Express_TV.png",Express TV
http://'.$ipadd.'/autoq.php?c=Express_TV

#EXTINF:-1 tvg-id="1558" group-title="Educational" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Express_TV_Shikshana.png",Express Shikshana
http://'.$ipadd.'/autoq.php?c=Express_TV_Shikshana

#EXTINF:-1 tvg-id="1559" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jigyasa_TV.png",Jigyasa TV
http://'.$ipadd.'/autoq.php?c=Jigyasa_TV

#EXTINF:-1 tvg-id="1560" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/35mm.png",35mm
http://'.$ipadd.'/autoq.php?c=35mm

#EXTINF:-1 tvg-id="1561" group-title="Infotainment" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sristi_TV.png",Sristi TV
http://'.$ipadd.'/autoq.php?c=Sristi_TV

#EXTINF:-1 tvg-id="1562" group-title="Educational" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Himshiksha_Elementary.png",Himshiksha Elementary
http://'.$ipadd.'/autoq.php?c=Himshiksha_Elementary

#EXTINF:-1 tvg-id="1563" group-title="Educational" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Himshiksha_Higher.png",Himshiksha Higher
http://'.$ipadd.'/autoq.php?c=Himshiksha_Higher

#EXTINF:-1 tvg-id="1564" group-title="Educational" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Himshiksha_Vocational.png",Himshiksha Vocational
http://'.$ipadd.'/autoq.php?c=Himshiksha_Vocational

#EXTINF:-1 tvg-id="1565" group-title="Educational" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/AP_BIE_ARTS.png",AP-BIE-ARTS
http://'.$ipadd.'/autoq.php?c=AP_BIE_ARTS

#EXTINF:-1 tvg-id="1566" group-title="Educational" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/AP_BIE_SCIENCE.png",AP-BIE-SCIENCE
http://'.$ipadd.'/autoq.php?c=AP_BIE_SCIENCE

#EXTINF:-1 tvg-id="1567" group-title="Educational" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/AP_CIE_SIVE.png",AP-CIE-SIVE
http://'.$ipadd.'/autoq.php?c=AP_CIE_SIVE

#EXTINF:-1 tvg-id="1568" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Atmadarshan_TV.png",Atmadarshan TV
http://'.$ipadd.'/autoq.php?c=Atmadarshan_TV

#EXTINF:-1 tvg-id="1590" group-title="Educational" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sanskritam.png",Sanskrit
http://'.$ipadd.'/autoq.php?c=Sanskritam

#EXTINF:-1 tvg-id="1592" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Lokmanch_News.png",Lokmanch News
http://'.$ipadd.'/autoq.php?c=Lokmanch_News

#EXTINF:-1 tvg-id="1593" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Lifology.png",Lifology
http://'.$ipadd.'/autoq.php?c=Lifology

#EXTINF:-1 tvg-id="1594" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Samachar_24.png",Samachar 24
http://'.$ipadd.'/autoq.php?c=Samachar_24

#EXTINF:-1 tvg-id="1598" group-title="Lifestyle" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/FTV_HD.png",FTV HD
http://'.$ipadd.'/autoq.php?c=FTV_HD

#EXTINF:-1 tvg-id="1599" group-title="Infotainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/InWild_HD.png",InWild HD
http://'.$ipadd.'/autoq.php?c=InWild_HD

#EXTINF:-1 tvg-id="1601" group-title="Kids" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ZooMoo_HD.png",ZooMoo HD
http://'.$ipadd.'/autoq.php?c=ZooMoo_HD

#EXTINF:-1 tvg-id="1602" group-title="Infotainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Smithsonian_HD.png",Smithsonian HD
http://'.$ipadd.'/autoq.php?c=Smithsonian_HD

#EXTINF:-1 tvg-id="1605" group-title="Devotional" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bangla_Bhakti.png",Bangla Bhakti
http://'.$ipadd.'/autoq.php?c=Bangla_Bhakti

#EXTINF:-1 tvg-id="1606" group-title="Infotainment" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ken_Kerelam_TV.png",Ken TV Keralam
http://'.$ipadd.'/autoq.php?c=Ken_Kerelam_TV

#EXTINF:-1 tvg-id="1607" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manav_Dharam.png",Manav Dharam
http://'.$ipadd.'/autoq.php?c=Manav_Dharam

#EXTINF:-1 tvg-id="1608" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/MP_News.png",MP News
http://'.$ipadd.'/autoq.php?c=MP_News

#EXTINF:-1 tvg-id="1609" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ishvani_TV.png",Ishvani TV
http://'.$ipadd.'/autoq.php?c=Ishvani_TV

#EXTINF:-1 tvg-id="1610" group-title="News" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Divyang_News.png",Divyang News
http://'.$ipadd.'/autoq.php?c=Divyang_News

#EXTINF:-1 tvg-id="1612" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tara_TV.png",Tara TV
http://'.$ipadd.'/autoq.php?c=Tara_TV

#EXTINF:-1 tvg-id="1613" group-title="Educational" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Medha_Secondary.png",Medha Secondary
http://'.$ipadd.'/autoq.php?c=Medha_Secondary

#EXTINF:-1 tvg-id="1614" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Omnicuris.png",Omnicuris
http://'.$ipadd.'/autoq.php?c=Omnicuris

#EXTINF:-1 tvg-id="1617" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_Ahead.png",India Ahead
http://'.$ipadd.'/autoq.php?c=India_Ahead

#EXTINF:-1 tvg-id="1618" group-title="News" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Real_News_Kerala.png",Real News Kerala
http://'.$ipadd.'/autoq.php?c=Real_News_Kerala

#EXTINF:-1 tvg-id="1655" group-title="Devotional" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Madha_TV.png",Madha TV
http://'.$ipadd.'/autoq.php?c=Madha_TV

#EXTINF:-1 tvg-id="1667" group-title="Kids" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rongeen_TV.png",Rongeen TV
http://'.$ipadd.'/autoq.php?c=Rongeen_TV

#EXTINF:-1 tvg-id="1670" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/C_News_Bharat.png",C News Bharat
http://'.$ipadd.'/autoq.php?c=C_News_Bharat

#EXTINF:-1 tvg-id="1672" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Gyanvani_2.png",Gyanvani 2
http://'.$ipadd.'/autoq.php?c=Gyanvani_2

#EXTINF:-1 tvg-id="1673" group-title="Educational" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/PTD_Chhattisgarrh.png",PTD Chhattisgarrh
http://'.$ipadd.'/autoq.php?c=PTD_Chhattisgarrh

#EXTINF:-1 tvg-id="1675" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ESG.png",ESG TV
http://'.$ipadd.'/autoq.php?c=ESG

#EXTINF:-1 tvg-id="1690" group-title="Devotional" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/BVTV.png",BVTV
http://'.$ipadd.'/autoq.php?c=BVTV

#EXTINF:-1 tvg-id="1692" group-title="News" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Badakhabar.png",Badakhabar
http://'.$ipadd.'/autoq.php?c=Badakhabar

#EXTINF:-1 tvg-id="1694" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Haryana_Beats.png",Haryana Beats
http://'.$ipadd.'/autoq.php?c=Haryana_Beats

#EXTINF:-1 tvg-id="1695" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prime_TV.png",Prime TV
http://'.$ipadd.'/autoq.php?c=Prime_TV

#EXTINF:-1 tvg-id="1696" group-title="Infotainment" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/SSV_TV.png",SSV TV
http://'.$ipadd.'/autoq.php?c=SSV_TV

#EXTINF:-1 tvg-id="1697" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/FM_News.png",FM News
http://'.$ipadd.'/autoq.php?c=FM_News

#EXTINF:-1 tvg-id="1698" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/IND_24.png",IND 24
http://'.$ipadd.'/autoq.php?c=IND_24

#EXTINF:-1 tvg-id="1699" group-title="News" tvg-language="Urdu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ANN_News.png",ANN News
http://'.$ipadd.'/autoq.php?c=ANN_News

#EXTINF:-1 tvg-id="1705" group-title="Devotional" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shri_Hingulambika_Devi_Temple.png",Shri Hingulambika Devi Temple
http://'.$ipadd.'/autoq.php?c=Shri_Hingulambika_Devi_Temple

#EXTINF:-1 tvg-id="1706" group-title="Devotional" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shri_Mangal_Dev_Grah_Temple.png",Shri Mangal Dev Grah Temple
http://'.$ipadd.'/autoq.php?c=Shri_Mangal_Dev_Grah_Temple

#EXTINF:-1 tvg-id="1708" group-title="Music" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/SKY_12.png",SKY 12
http://'.$ipadd.'/autoq.php?c=SKY_12

#EXTINF:-1 tvg-id="1725" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/24hrs_TV.png",24Hrs TV
http://'.$ipadd.'/autoq.php?c=24hrs_TV

#EXTINF:-1 tvg-id="1726" group-title="News" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/BBC_Gujarati.png",BBC News Gujarati
http://'.$ipadd.'/autoq.php?c=BBC_Gujarati

#EXTINF:-1 tvg-id="1728" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Anaadi_TV.png",Anaadi TV
http://'.$ipadd.'/autoq.php?c=Anaadi_TV

#EXTINF:-1 tvg-id="1729" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Live_7.png",Live 7
http://'.$ipadd.'/autoq.php?c=Live_7

#EXTINF:-1 tvg-id="1730" group-title="Entertainment" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Punjab1_TV.png",Punjab1 TV
http://'.$ipadd.'/autoq.php?c=Punjab1_TV

#EXTINF:-1 tvg-id="1731" group-title="News" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/N5TV.png",N5TV
http://'.$ipadd.'/autoq.php?c=N5TV

#EXTINF:-1 tvg-id="1733" group-title="News" tvg-language="Assamese" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ND24.png",ND 24
http://'.$ipadd.'/autoq.php?c=ND24

#EXTINF:-1 tvg-id="1734" group-title="Devotional" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ek_Onkar.png",Ek Onkar
http://'.$ipadd.'/autoq.php?c=Ek_Onkar

#EXTINF:-1 tvg-id="1735" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Bangla.png",TV9 Bangla
http://'.$ipadd.'/autoq.php?c=TV9_Bangla

#EXTINF:-1 tvg-id="1736" group-title="Lifestyle" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Luxe_Tv_HD.png",LUXE TV HD
http://'.$ipadd.'/autoq.php?c=Luxe_Tv_HD

#EXTINF:-1 tvg-id="1737" group-title="Music" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mezzo_HD.png",Mezzo Live HD
http://'.$ipadd.'/autoq.php?c=Mezzo_HD

#EXTINF:-1 tvg-id="1738" group-title="Devotional" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hosanna_TV.png",Hosanna TV
http://'.$ipadd.'/autoq.php?c=Hosanna_TV

#EXTINF:-1 tvg-id="1739" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/V24_TV.png",JKAC News
http://'.$ipadd.'/autoq.php?c=V24_TV

#EXTINF:-1 tvg-id="1740" group-title="Infotainment" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Purnima_TV.png",Purnima TV
http://'.$ipadd.'/autoq.php?c=Purnima_TV

#EXTINF:-1 tvg-id="1741" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bharat_AtoZ.png",Bharat AtoZ
http://'.$ipadd.'/autoq.php?c=Bharat_AtoZ

#EXTINF:-1 tvg-id="1742" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sanskrit_Ganga_TV.png",Sanskrit Ganga
http://'.$ipadd.'/autoq.php?c=Sanskrit_Ganga_TV

#EXTINF:-1 tvg-id="1743" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hornbill_TV.png",Hornbill TV
http://'.$ipadd.'/autoq.php?c=Hornbill_TV

#EXTINF:-1 tvg-id="1755" group-title="News" tvg-language="Urdu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/T_TV.png",TTV News
http://'.$ipadd.'/autoq.php?c=T_TV

#EXTINF:-1 tvg-id="1757" group-title="News" tvg-language="Assamese" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/NK_TV.png",NK TV 24x7
http://'.$ipadd.'/autoq.php?c=NK_TV

#EXTINF:-1 tvg-id="1758" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DPK_News.png",DPK News
http://'.$ipadd.'/autoq.php?c=DPK_News

#EXTINF:-1 tvg-id="1759" group-title="News" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Buletin_India.png",Buletin India
http://'.$ipadd.'/autoq.php?c=Buletin_India

#EXTINF:-1 tvg-id="1761" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aryan_TV_National.png",Aryan TV National
http://'.$ipadd.'/autoq.php?c=Aryan_TV_National

#EXTINF:-1 tvg-id="1762" group-title="Entertainment" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Channel_Vision.png",Channel Vision
http://'.$ipadd.'/autoq.php?c=Channel_Visio

#EXTINF:-1 tvg-id="1764" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dadabhagwan.png",Dada Bhagwan Foundation
http://'.$ipadd.'/autoq.php?c=Dadabhagwa

#EXTINF:-1 tvg-id="1765" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Doinandin.png",Doinandin
http://'.$ipadd.'/autoq.php?c=Doinandi

#EXTINF:-1 tvg-id="1766" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zorins_TV.png",Zorins TV
http://'.$ipadd.'/autoq.php?c=Zorins_TV

#EXTINF:-1 tvg-id="1768" group-title="Infotainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Naaptol.png",Naaptol
http://'.$ipadd.'/autoq.php?c=Naaptol

#EXTINF:-1 tvg-id="1769" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/LWA.png",LWA
http://'.$ipadd.'/autoq.php?c=LWA

#EXTINF:-1 tvg-id="1770" group-title="Educational" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vande_Tripura.png",Vande Tripura
http://'.$ipadd.'/autoq.php?c=Vande_Tripura

#EXTINF:-1 tvg-id="1771" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Express_News.png",Express News
http://'.$ipadd.'/autoq.php?c=Express_News

#EXTINF:-1 tvg-id="1772" group-title="Sports" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_4_HD_Tamil.png",Sony Ten 4 HD Tamil
http://'.$ipadd.'/autoq.php?c=Ten_4_HD_Tamil

#EXTINF:-1 tvg-id="1773" group-title="Sports" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_4_HD_Telugu.png",Sony Ten 4 HD Telugu
http://'.$ipadd.'/autoq.php?c=Ten_4_HD_Telugu

#EXTINF:-1 tvg-id="1774" group-title="Sports" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_4_Tamil.png",Sony Ten 4 Tamil
http://'.$ipadd.'/autoq.php?c=Ten_4_Tamil

#EXTINF:-1 tvg-id="1777" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bharat_News.png",Bharat News TV
http://'.$ipadd.'/autoq.php?c=Bharat_News

#EXTINF:-1 tvg-id="1786" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/SamacharExpressTV.png",Samachar Express TV
http://'.$ipadd.'/autoq.php?c=SamacharExpressTV

#EXTINF:-1 tvg-id="1787" group-title="Devotional" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/VISVAS.png",VISVAS
http://'.$ipadd.'/autoq.php?c=VISVAS

#EXTINF:-1 tvg-id="1788" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Yeshuaa.png",Yeshuaa TV
http://'.$ipadd.'/autoq.php?c=Yeshuaa

#EXTINF:-1 tvg-id="1789" group-title="Devotional" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dada_Bhagwan_Foundation_Gujarati.png",Dada Bhagwan Foundation Gujarati
http://'.$ipadd.'/autoq.php?c=Dada_Bhagwan_Foundation_Gujarati

#EXTINF:-1 tvg-id="1790" group-title="News" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/VRLive.png",VR Live
http://'.$ipadd.'/autoq.php?c=VRLive

#EXTINF:-1 tvg-id="1791" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/KPNews.png",KP News 24x7
http://'.$ipadd.'/autoq.php?c=KPNews

#EXTINF:-1 tvg-id="1793" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Satta_Express.png",Sattaxpress News
http://'.$ipadd.'/autoq.php?c=Satta_Express

#EXTINF:-1 tvg-id="1794" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mangalmaylive.png",Mangalmay Live
http://'.$ipadd.'/autoq.php?c=Mangalmaylive

#EXTINF:-1 tvg-id="1795" group-title="JioDarshan" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shri_Amarnath_Shrine_Board.png",Shri Amarnathji Shrine Board
http://'.$ipadd.'/autoq.php?c=Shri_Amarnath_Shrine_Board

#EXTINF:-1 tvg-id="1796" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Anand_Barta.png",Ananda Barta
http://'.$ipadd.'/autoq.php?c=Anand_Barta

#EXTINF:-1 tvg-id="1797" group-title="News" tvg-language="Assamese" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DA_News_Plus.png",DA News Plus
http://'.$ipadd.'/autoq.php?c=DA_News_Plus

#EXTINF:-1 tvg-id="1798" group-title="Entertainment" tvg-language="Bhojpuri" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pasand.png",Pasand
http://'.$ipadd.'/autoq.php?c=Pasand

#EXTINF:-1 tvg-id="1799" group-title="Entertainment" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Studio_Yuva_Alpha.png",Studio Yuva Alpha
http://'.$ipadd.'/autoq.php?c=Studio_Yuva_Alpha

#EXTINF:-1 tvg-id="1802" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_World_India.png",News World India
http://'.$ipadd.'/autoq.php?c=News_World_India

#EXTINF:-1 tvg-id="1804" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jan_Setu_TV.png",Jan Setu News
http://'.$ipadd.'/autoq.php?c=Jan_Setu_TV

#EXTINF:-1 tvg-id="1813" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_5.png",Jio Football 5 HD
http://'.$ipadd.'/autoq.php?c=Jio_Football_5

#EXTINF:-1 tvg-id="1814" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_6.png",Jio Football 6 HD
http://'.$ipadd.'/autoq.php?c=Jio_Football_6

#EXTINF:-1 tvg-id="1816" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/DTV_Bharat.png",DTV Bharat
http://'.$ipadd.'/autoq.php?c=DTV_Bharat

#EXTINF:-1 tvg-id="1817" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/NEWS_24_MPCG.png",NEWS 24 MPCG
http://'.$ipadd.'/autoq.php?c=NEWS_24_MPCG

#EXTINF:-1 tvg-id="1823" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_7.png",Jio Football 7 HD
http://'.$ipadd.'/autoq.php?c=Jio_Football_7

#EXTINF:-1 tvg-id="1824" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_8.png",Jio Football 8 HD
http://'.$ipadd.'/autoq.php?c=Jio_Football_8

#EXTINF:-1 tvg-id="1826" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swarlasika.png",Swaralasika Sangeetalaya
http://'.$ipadd.'/autoq.php?c=Swarlasika

#EXTINF:-1 tvg-id="1834" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Green_Chillies_TV.png",Green Chillies
http://'.$ipadd.'/autoq.php?c=Green_Chillies_TV

#EXTINF:-1 tvg-id="1838" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Devam.png",Sadhna Bhakti
http://'.$ipadd.'/autoq.php?c=Devam

#EXTINF:-1 tvg-id="1848" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/AAS_Vidyalaya_State_Boards.png",AAS Vidyalaya State Boards
http://'.$ipadd.'/autoq.php?c=AAS_Vidyalaya_State_Boards

#EXTINF:-1 tvg-id="1849" group-title="Infotainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_At_Dubai_Expo.png",India At Dubai Expo
http://'.$ipadd.'/autoq.php?c=India_At_Dubai_Expo

#EXTINF:-1 tvg-id="1059" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST3_HD.png",TEST3 HD
http://'.$ipadd.'/autoq.php?c=TEST3_HD

#EXTINF:-1 tvg-id="1060" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST4_HD.png",TEST4 HD
http://'.$ipadd.'/autoq.php?c=TEST4_HD

#EXTINF:-1 tvg-id="1061" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST5_HD.png",TEST5 HD
http://'.$ipadd.'/autoq.php?c=TEST5_HD

#EXTINF:-1 tvg-id="1062" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST6_HD.png",TEST6 HD
http://'.$ipadd.'/autoq.php?c=TEST6_HD

#EXTINF:-1 tvg-id="1063" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST7_HD.png",TEST7 HD
http://'.$ipadd.'/autoq.php?c=TEST7_HD

#EXTINF:-1 tvg-id="1148" group-title="Shopping" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST8_HD.png",TEST8 HD
http://'.$ipadd.'/autoq.php?c=TEST8_HD

#EXTINF:-1 tvg-id="1205" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Ganga.png",ABP Ganga
http://'.$ipadd.'/autoq.php?c=ABP_Ganga

#EXTINF:-1 tvg-id="1209" group-title="Entertainment" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kalaignar_TV.png",Kalaignar TV
http://'.$ipadd.'/autoq.php?c=Kalaignar_TV

#EXTINF:-1 tvg-id="1210" group-title="News" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kalaignar_Seithigal_.png",Kalaignar Seithigal 
http://'.$ipadd.'/autoq.php?c=Kalaignar_Seithigal_

#EXTINF:-1 tvg-id="1212" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hare_Krsna_Pravachan.png",Hare Krsna Pravachan
http://'.$ipadd.'/autoq.php?c=Hare_Krsna_Pravacha

#EXTINF:-1 tvg-id="1216" group-title="Kids" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Highbrow.png",Highbrow
http://'.$ipadd.'/autoq.php?c=Highbrow

#EXTINF:-1 tvg-id="1217" group-title="JioDarshan" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/LordShri_Vitthal.png",Lord Shri Vitthal Rukmini
http://'.$ipadd.'/autoq.php?c=LordShri_Vitthal

#EXTINF:-1 tvg-id="1219" group-title="Infotainment" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Animal_Planet_HD_Tamil.png",Animal Planet HD Tamil
http://'.$ipadd.'/autoq.php?c=Animal_Planet_HD_Tamil

#EXTINF:-1 tvg-id="1220" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rajyoga_TV.png",Rajyoga TV
http://'.$ipadd.'/autoq.php?c=Rajyoga_TV

#EXTINF:-1 tvg-id="1221" group-title="Devotional" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rajyoga_Malayalam.png",Rajyoga TV Kannada
http://'.$ipadd.'/autoq.php?c=Rajyoga_Malayalam

#EXTINF:-1 tvg-id="1222" group-title="JioDarshan" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/GovindDevji_Jaipur.png",Mandir Shri Govinddevji-Jaipur
http://'.$ipadd.'/autoq.php?c=GovindDevji_Jaipur

#EXTINF:-1 tvg-id="1223" group-title="JioDarshan" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dagdusheth_Pune.png",Dagdusheth Ganpati - Pune
http://'.$ipadd.'/autoq.php?c=Dagdusheth_Pune

#EXTINF:-1 tvg-id="1224" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nimbark.png",Nimbark TV
http://'.$ipadd.'/autoq.php?c=Nimbark

#EXTINF:-1 tvg-id="1225" group-title="Lifestyle" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Click_Life.png",Click Life
http://'.$ipadd.'/autoq.php?c=Click_Life

#EXTINF:-1 tvg-id="1226" group-title="Kids" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_HD_Plus.png",Nick HD+
http://'.$ipadd.'/autoq.php?c=Nick_HD_Plus

#EXTINF:-1 tvg-id="1228" group-title="JioDarshan" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ambabai_Temple.png",Ambabai Temple-Kolhapur
http://'.$ipadd.'/autoq.php?c=Ambabai_Temple

#EXTINF:-1 tvg-id="1229" group-title="Infotainment" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST9_HD.png",TEST9 HD
http://'.$ipadd.'/autoq.php?c=TEST9_HD

#EXTINF:-1 tvg-id="1230" group-title="JioDarshan" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/VR_360.png",PTC VR
http://'.$ipadd.'/autoq.php?c=VR_360

#EXTINF:-1 tvg-id="1234" group-title="Sports" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_Hindi_HD.png",Jio Football Hindi HD
http://'.$ipadd.'/autoq.php?c=Jio_Football_Hindi_HD

#EXTINF:-1 tvg-id="1236" group-title="Sports" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_Malayalam_HD.png",Jio Football Malayalam HD
http://'.$ipadd.'/autoq.php?c=Jio_Football_Malayalam_HD

#EXTINF:-1 tvg-id="1239" group-title="Sports" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Football_Bangali_HD.png",Jio Football Bengali HD
http://'.$ipadd.'/autoq.php?c=Jio_Football_Bangali_HD

#EXTINF:-1 tvg-id="1240" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST10_HD.png",TEST10 HD
http://'.$ipadd.'/autoq.php?c=TEST10_HD

#EXTINF:-1 tvg-id="1241" group-title="Devotional" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/God_TV.png",God TV
http://'.$ipadd.'/autoq.php?c=God_TV

#EXTINF:-1 tvg-id="1242" group-title="Kids" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Telugu.png",Sonic Telugu
http://'.$ipadd.'/autoq.php?c=Sonic_Telugu

#EXTINF:-1 tvg-id="1243" group-title="Kids" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sonic_Kannada.png",Sonic Kannada
http://'.$ipadd.'/autoq.php?c=Sonic_Kannada

#EXTINF:-1 tvg-id="1244" group-title="Kids" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nick_Kannada.png",Nick Kannada
http://'.$ipadd.'/autoq.php?c=Nick_Kannada

#EXTINF:-1 tvg-id="1245" group-title="Music" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sakkat.png",Sakkat
http://'.$ipadd.'/autoq.php?c=Sakkat

#EXTINF:-1 tvg-id="1246" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tripura_News.png",Headlines Tripura
http://'.$ipadd.'/autoq.php?c=Tripura_News

#EXTINF:-1 tvg-id="1248" group-title="Music" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bol_Hadippa.png",Bol Hadippa
http://'.$ipadd.'/autoq.php?c=Bol_Hadippa

#EXTINF:-1 tvg-id="1249" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kadak_Hits.png",Kadak Hits
http://'.$ipadd.'/autoq.php?c=Kadak_Hits

#EXTINF:-1 tvg-id="1250" group-title="News" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TWENTY_FOUR_NEWS.png",Twenty Four News
http://'.$ipadd.'/autoq.php?c=TWENTY_FOUR_NEWS

#EXTINF:-1 tvg-id="1251" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV9_Bharatvarsh.png",TV9 Bharatvarsh
http://'.$ipadd.'/autoq.php?c=TV9_Bharatvarsh

#EXTINF:-1 tvg-id="1252" group-title="Infotainment" tvg-language="Urdu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEHZEEB_TV.png",Tehzeeb TV
http://'.$ipadd.'/autoq.php?c=TEHZEEB_TV

#EXTINF:-1 tvg-id="1253" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kolkata_LIVE.png",Kolkata Live
http://'.$ipadd.'/autoq.php?c=Kolkata_LIVE

#EXTINF:-1 tvg-id="1254" group-title="Devotional" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Telugu.png",Aastha Telugu
http://'.$ipadd.'/autoq.php?c=Aastha_Telugu

#EXTINF:-1 tvg-id="1255" group-title="Devotional" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Tamil.png",Aastha Tamil
http://'.$ipadd.'/autoq.php?c=Aastha_Tamil

#EXTINF:-1 tvg-id="1256" group-title="Devotional" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aastha_Kannada.png",Aastha Kannada
http://'.$ipadd.'/autoq.php?c=Aastha_Kannada

#EXTINF:-1 tvg-id="1260" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/CTVN_AKD_Plus.png",Ctvn Akd Plus
http://'.$ipadd.'/autoq.php?c=CTVN_AKD_Plus

#EXTINF:-1 tvg-id="1261" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Calcutta_News.png",Calcutta News
http://'.$ipadd.'/autoq.php?c=Calcutta_News

#EXTINF:-1 tvg-id="1263" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Total_Tv_Haryana.png",Total Tv Haryana
http://'.$ipadd.'/autoq.php?c=Total_Tv_Haryana

#EXTINF:-1 tvg-id="1264" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kolkata_TV.png",Kolkata TV
http://'.$ipadd.'/autoq.php?c=Kolkata_TV

#EXTINF:-1 tvg-id="1265" group-title="Infotainment" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Global_Sanjh.png",Global Sanjh
http://'.$ipadd.'/autoq.php?c=Global_Sanjh

#EXTINF:-1 tvg-id="1266" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bflix_Movies.png",Bflix Movies
http://'.$ipadd.'/autoq.php?c=Bflix_Movies

#EXTINF:-1 tvg-id="1267" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/iLove.png",iLove
http://'.$ipadd.'/autoq.php?c=iLove

#EXTINF:-1 tvg-id="1268" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABZY_Dhakad.png",ABZY Dhakad
http://'.$ipadd.'/autoq.php?c=ABZY_Dhakad

#EXTINF:-1 tvg-id="1269" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABZY_Cool.png",ABZY Cool
http://'.$ipadd.'/autoq.php?c=ABZY_Cool

#EXTINF:-1 tvg-id="1270" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABZY_Movies.png",ABZY Movies
http://'.$ipadd.'/autoq.php?c=ABZY_Movies

#EXTINF:-1 tvg-id="1271" group-title="JioDarshan" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Udupi_Krishna_Temple.png",Sri Krishna Matha Udupi
http://'.$ipadd.'/autoq.php?c=Udupi_Krishna_Temple

#EXTINF:-1 tvg-id="1273" group-title="Lifestyle" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sugran.png",Sugran
http://'.$ipadd.'/autoq.php?c=Sugra

#EXTINF:-1 tvg-id="1274" group-title="News" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Studio_One.png",Studio One
http://'.$ipadd.'/autoq.php?c=Studio_One

#EXTINF:-1 tvg-id="1277" group-title="Devotional" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nireekshana_TV.png",Nireekshana TV
http://'.$ipadd.'/autoq.php?c=Nireekshana_TV

#EXTINF:-1 tvg-id="1278" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prarthana_Bhawan.png",Prarthana Bhawan
http://'.$ipadd.'/autoq.php?c=Prarthana_Bhawa

#EXTINF:-1 tvg-id="1279" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manoranjan_Grand.png",Manoranjan Grand
http://'.$ipadd.'/autoq.php?c=Manoranjan_Grand

#EXTINF:-1 tvg-id="1280" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manoranjan_TV.png",Manoranjan TV
http://'.$ipadd.'/autoq.php?c=Manoranjan_TV

#EXTINF:-1 tvg-id="1281" group-title="Movies" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manoranjan_Movies.png",Manoranjan Movies
http://'.$ipadd.'/autoq.php?c=Manoranjan_Movies

#EXTINF:-1 tvg-id="1282" group-title="Movies" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Khusboo_TV.png",Khushboo TV
http://'.$ipadd.'/autoq.php?c=Khusboo_TV

#EXTINF:-1 tvg-id="1283" group-title="JioDarshan" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hanuman_Mahavir_Temple.png",Mahavir Mandir Patna
http://'.$ipadd.'/autoq.php?c=Hanuman_Mahavir_Temple

#EXTINF:-1 tvg-id="1284" group-title="Devotional" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Vignesh_TV.PNG",Vignesh TV
http://'.$ipadd.'/autoq.php?c=Vignesh_TV.PNG

#EXTINF:-1 tvg-id="1286" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Insync.png",Insync
http://'.$ipadd.'/autoq.php?c=Insync

#EXTINF:-1 tvg-id="1287" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ANB_News.png",ANB News
http://'.$ipadd.'/autoq.php?c=ANB_News

#EXTINF:-1 tvg-id="1288" group-title="JioDarshan" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Omkareshwar_Temple.png",Shri Omkareshwar Mandir
http://'.$ipadd.'/autoq.php?c=Omkareshwar_Temple

#EXTINF:-1 tvg-id="1290" group-title="Lifestyle" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/StarTell.png",Stars Tell
http://'.$ipadd.'/autoq.php?c=StarTell

#EXTINF:-1 tvg-id="1291" group-title="News" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABP_Sanjha.png",ABP Sanjha
http://'.$ipadd.'/autoq.php?c=ABP_Sanjha

#EXTINF:-1 tvg-id="1292" group-title="Lifestyle" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Wellness_TV.png",Wellness
http://'.$ipadd.'/autoq.php?c=Wellness_TV

#EXTINF:-1 tvg-id="1293" group-title="News" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Lokshahi_News.png",Lokshahi News
http://'.$ipadd.'/autoq.php?c=Lokshahi_News

#EXTINF:-1 tvg-id="1294" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dsports.png",Eurosport
http://'.$ipadd.'/autoq.php?c=Dsports

#EXTINF:-1 tvg-id="1295" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Kadak.png",B4U Kadak
http://'.$ipadd.'/autoq.php?c=B4U_Kadak

#EXTINF:-1 tvg-id="1296" group-title="Movies" tvg-language="Bhojpuri" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/B4U_Bhojpuri.png",B4U Bhojpuri
http://'.$ipadd.'/autoq.php?c=B4U_Bhojpuri

#EXTINF:-1 tvg-id="1297" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV_Bangla.png",TV Bangla
http://'.$ipadd.'/autoq.php?c=TV_Bangla

#EXTINF:-1 tvg-id="1299" group-title="Entertainment" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Manjari_TV.png",Manjari TV
http://'.$ipadd.'/autoq.php?c=Manjari_TV

#EXTINF:-1 tvg-id="1315" group-title="Devotional" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/HHDL.png",HHDL
http://'.$ipadd.'/autoq.php?c=HHDL

#EXTINF:-1 tvg-id="1317" group-title="JioDarshan" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sri_Patna_Sahib.png",Takht Sri Patna Sahib - Patna
http://'.$ipadd.'/autoq.php?c=Sri_Patna_Sahib

#EXTINF:-1 tvg-id="1320" group-title="Music" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/VH1_HD.png",VH1 HD
http://'.$ipadd.'/autoq.php?c=VH1_HD

#EXTINF:-1 tvg-id="1325" group-title="Entertainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Infinity_SD.png",Colors Infinity SD
http://'.$ipadd.'/autoq.php?c=Colors_Infinity_SD

#EXTINF:-1 tvg-id="1327" group-title="Entertainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Comedy_Central_SD.png",Comedy Central SD
http://'.$ipadd.'/autoq.php?c=Comedy_Central_SD

#EXTINF:-1 tvg-id="1338" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/RT_TV.png",RT TV
http://'.$ipadd.'/autoq.php?c=RT_TV

#EXTINF:-1 tvg-id="1351" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_TV.png",Zee TV
http://'.$ipadd.'/autoq.php?c=Zee_TV

#EXTINF:-1 tvg-id="1358" group-title="Movies" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Talkies_HD.png",Zee Talkies HD 
http://'.$ipadd.'/autoq.php?c=Zee_Talkies_HD

#EXTINF:-1 tvg-id="1360" group-title="Entertainment" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Marathi_HD.png",Zee Marathi HD
http://'.$ipadd.'/autoq.php?c=Zee_Marathi_HD

#EXTINF:-1 tvg-id="1371" group-title="Entertainment" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Tamil.png",Colors Tamil
http://'.$ipadd.'/autoq.php?c=Colors_Tamil

#EXTINF:-1 tvg-id="1393" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Wah.png",Sony Wah
http://'.$ipadd.'/autoq.php?c=Sony_Wah

#EXTINF:-1 tvg-id="1396" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_SD.png",Set SD
http://'.$ipadd.'/autoq.php?c=Sony_SD

#EXTINF:-1 tvg-id="1405" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/NHK_World_Japan.png",NHK World Japan
http://'.$ipadd.'/autoq.php?c=NHK_World_Japa

#EXTINF:-1 tvg-id="1408" group-title="News" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Reporter_TV.png",Reporter TV
http://'.$ipadd.'/autoq.php?c=Reporter_TV

#EXTINF:-1 tvg-id="1411" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/SongDew_TV.png",SongDew TV
http://'.$ipadd.'/autoq.php?c=SongDew_TV

#EXTINF:-1 tvg-id="1412" group-title="Devotional" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shani_Shingnapur.png",Shani Shingnapur
http://'.$ipadd.'/autoq.php?c=Shani_Shingnapur

#EXTINF:-1 tvg-id="1414" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prati_Shirdi_Saibaba.png",Prati Shirdi Saibaba
http://'.$ipadd.'/autoq.php?c=Prati_Shirdi_Saibaba

#EXTINF:-1 tvg-id="1415" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ganga_Darshan_Varanasi.png",Ganga Darshan Varanasi
http://'.$ipadd.'/autoq.php?c=Ganga_Darshan_Varanasi

#EXTINF:-1 tvg-id="1417" group-title="Devotional" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/SVBC2.png",SVBC2
http://'.$ipadd.'/autoq.php?c=SVBC2

#EXTINF:-1 tvg-id="1418" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ichhapuran_Balaji_Rajasthan.png",Ichhapuran Balaji Rajasthan
http://'.$ipadd.'/autoq.php?c=Ichhapuran_Balaji_Rajastha

#EXTINF:-1 tvg-id="1419" group-title="Devotional" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Iskon_Girgaon.png",Iskon Girgaon
http://'.$ipadd.'/autoq.php?c=Iskon_Girgao

#EXTINF:-1 tvg-id="1420" group-title="Devotional" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ashtavinayak_Ranjangaon.png",Ashtavinayak Ranjangaon
http://'.$ipadd.'/autoq.php?c=Ashtavinayak_Ranjangao

#EXTINF:-1 tvg-id="1421" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Karani_Mata_Rajasthan.png",Karani Mata Rajasthan
http://'.$ipadd.'/autoq.php?c=Karani_Mata_Rajastha

#EXTINF:-1 tvg-id="1422" group-title="Devotional" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mahalaxmi_Mumbai.png",Mahalaxmi Mumbai
http://'.$ipadd.'/autoq.php?c=Mahalaxmi_Mumbai

#EXTINF:-1 tvg-id="1423" group-title="Devotional" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Babulnaath_Mumbai.png",Babulnaath Mumbai
http://'.$ipadd.'/autoq.php?c=Babulnaath_Mumbai

#EXTINF:-1 tvg-id="1424" group-title="Devotional" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Mumbadevi_Mumbai.png",Mumbadevi Mumbai
http://'.$ipadd.'/autoq.php?c=Mumbadevi_Mumbai

#EXTINF:-1 tvg-id="1425" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/1Sports.png",1Sports
http://'.$ipadd.'/autoq.php?c=1Sports

#EXTINF:-1 tvg-id="1426" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Santvani.png",Santvani
http://'.$ipadd.'/autoq.php?c=Santvani

#EXTINF:-1 tvg-id="1427" group-title="News" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nandighosha.png",Nandighosha
http://'.$ipadd.'/autoq.php?c=Nandighosha

#EXTINF:-1 tvg-id="1430" group-title="Kids" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_KIDS.png",Jio KIDS
http://'.$ipadd.'/autoq.php?c=Jio_KIDS

#EXTINF:-1 tvg-id="1431" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/BBC_Hindi.png",BBC News Hindi
http://'.$ipadd.'/autoq.php?c=BBC_Hindi

#EXTINF:-1 tvg-id="1432" group-title="News" tvg-language="Assamese" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TIME8.png",TIME8
http://'.$ipadd.'/autoq.php?c=TIME8

#EXTINF:-1 tvg-id="1438" group-title="Devotional" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Velukkudi_Discourses.png",Velukkudi Discourses
http://'.$ipadd.'/autoq.php?c=Velukkudi_Discourses

#EXTINF:-1 tvg-id="1440" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Krishna_Vani.png",Krishna Vani
http://'.$ipadd.'/autoq.php?c=Krishna_Vani

#EXTINF:-1 tvg-id="1441" group-title="Music" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Wah_Punjabi.png",Wah Punjabi
http://'.$ipadd.'/autoq.php?c=Wah_Punjabi

#EXTINF:-1 tvg-id="1444" group-title="Infotainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/YTV_INDIA.png",YTV India
http://'.$ipadd.'/autoq.php?c=YTV_INDIA

#EXTINF:-1 tvg-id="1450" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rishtey_Cineplex.png",Colors Cineplex Superhit
http://'.$ipadd.'/autoq.php?c=Rishtey_Cineplex

#EXTINF:-1 tvg-id="1451" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/9_Bharat_Samachar.png",9 Bharat Samachar
http://'.$ipadd.'/autoq.php?c=9_Bharat_Samachar

#EXTINF:-1 tvg-id="1452" group-title="Movies" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shemaroo_MarathiBana.png",Shemaroo MarathiBana
http://'.$ipadd.'/autoq.php?c=Shemaroo_MarathiBana

#EXTINF:-1 tvg-id="1453" group-title="Music" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Balle_Balle_TV.png",Balle Balle TV
http://'.$ipadd.'/autoq.php?c=Balle_Balle_TV

#EXTINF:-1 tvg-id="1454" group-title="Devotional" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shiksha_TV.png",Shiksha TV
http://'.$ipadd.'/autoq.php?c=Shiksha_TV

#EXTINF:-1 tvg-id="1455" group-title="Infotainment" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Janapriyam_News.png",Janapriyam
http://'.$ipadd.'/autoq.php?c=Janapriyam_News

#EXTINF:-1 tvg-id="1457" group-title="News" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_Only.png",News Only
http://'.$ipadd.'/autoq.php?c=News_Only

#EXTINF:-1 tvg-id="1458" group-title="Devotional" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Gurkebaani.png",Gurkibani
http://'.$ipadd.'/autoq.php?c=Gurkebaani

#EXTINF:-1 tvg-id="1463" group-title="JioDarshan" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Moti_Doongri.png",Shree Ganesh - Moti Doongri Jaipur
http://'.$ipadd.'/autoq.php?c=Moti_Doongri

#EXTINF:-1 tvg-id="1464" group-title="Infotainment" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Daijiworld_TV_24X7.png",Daijiworld TV 24x7
http://'.$ipadd.'/autoq.php?c=Daijiworld_TV_24X7

#EXTINF:-1 tvg-id="1471" group-title="Infotainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/History_TV18_SD.png",History TV18 SD
http://'.$ipadd.'/autoq.php?c=History_TV18_SD

#EXTINF:-1 tvg-id="1475" group-title="Infotainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST11_HD.png",TEST11 HD
http://'.$ipadd.'/autoq.php?c=TEST11_HD

#EXTINF:-1 tvg-id="1476" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST12_HD.png",TEST12 HD
http://'.$ipadd.'/autoq.php?c=TEST12_HD

#EXTINF:-1 tvg-id="1477" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Color_Cineplex_HD.png",Colors Cineplex HD
http://'.$ipadd.'/autoq.php?c=Color_Cineplex_HD

#EXTINF:-1 tvg-id="1479" group-title="JioDarshan" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nakoda_Temple.png",Shri Jain Nakoda Parshwanath Tirth
http://'.$ipadd.'/autoq.php?c=Nakoda_Temple

#EXTINF:-1 tvg-id="1494" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bhoomi_TV.png",BHOOMI 24x7
http://'.$ipadd.'/autoq.php?c=Bhoomi_TV

#EXTINF:-1 tvg-id="1514" group-title="Entertainment" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kannur_one.png",Kannur One
http://'.$ipadd.'/autoq.php?c=Kannur_one

#EXTINF:-1 tvg-id="1515" group-title="News" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_J.png",News J
http://'.$ipadd.'/autoq.php?c=News_J

#EXTINF:-1 tvg-id="1525" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST13_HD.png",TEST13 HD
http://'.$ipadd.'/autoq.php?c=TEST13_HD

#EXTINF:-1 tvg-id="1528" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Network_10.png",Network 10
http://'.$ipadd.'/autoq.php?c=Network_10

#EXTINF:-1 tvg-id="1530" group-title="Movies" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sony_Pix_SD.png",Sony Pix SD
http://'.$ipadd.'/autoq.php?c=Sony_Pix_SD

#EXTINF:-1 tvg-id="1534" group-title="Infotainment" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/World_Punjab.png",World  Punjabi
http://'.$ipadd.'/autoq.php?c=World_Punjab

#EXTINF:-1 tvg-id="1537" group-title="Devotional" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/RadheKrishna_TV.png",RadheKrishna TV
http://'.$ipadd.'/autoq.php?c=RadheKrishna_TV

#EXTINF:-1 tvg-id="1538" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Samachar_Today.png",Samachar Today
http://'.$ipadd.'/autoq.php?c=Samachar_Today

#EXTINF:-1 tvg-id="1539" group-title="Devotional" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sangat_TV.png",Sangat TV
http://'.$ipadd.'/autoq.php?c=Sangat_TV

#EXTINF:-1 tvg-id="1543" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Subharti.png",Subharti
http://'.$ipadd.'/autoq.php?c=Subharti

#EXTINF:-1 tvg-id="1550" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/AB_News.png",AB News
http://'.$ipadd.'/autoq.php?c=AB_News

#EXTINF:-1 tvg-id="1555" group-title="News" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_First.png",News First
http://'.$ipadd.'/autoq.php?c=News_First

#EXTINF:-1 tvg-id="1596" group-title="Lifestyle" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/MY_ZEN_HD.png",MY ZEN HD
http://'.$ipadd.'/autoq.php?c=MY_ZEN_HD

#EXTINF:-1 tvg-id="1603" group-title="Entertainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/HitsIndia_HD.png",HITS HD
http://'.$ipadd.'/autoq.php?c=HitsIndia_HD

#EXTINF:-1 tvg-id="1632" group-title="Movies" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Kannada_Cinema.png",Colors Kannada Cinema
http://'.$ipadd.'/autoq.php?c=Colors_Kannada_Cinema

#EXTINF:-1 tvg-id="1634" group-title="Entertainment" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sirikannada.png",Siri Kannada
http://'.$ipadd.'/autoq.php?c=Sirikannada

#EXTINF:-1 tvg-id="1657" group-title="Movies" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Bangla_Cinema.png",Colors Bangla Cinema
http://'.$ipadd.'/autoq.php?c=Colors_Bangla_Cinema

#EXTINF:-1 tvg-id="1747" group-title="News" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_News_Gujarat.png",India News Gujarat
http://'.$ipadd.'/autoq.php?c=India_News_Gujarat

#EXTINF:-1 tvg-id="1763" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Colors_Cineplex_Bollywood.png",Colors Cineplex Bollywood
http://'.$ipadd.'/autoq.php?c=Colors_Cineplex_Bollywood

#EXTINF:-1 tvg-id="1775" group-title="Sports" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ten_4_Telugu.png",Sony Ten 4 Telugu
http://'.$ipadd.'/autoq.php?c=Ten_4_Telugu

#EXTINF:-1 tvg-id="1780" group-title="Kids" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Hoopla_Kids_TV.png",Hoopla Kidz TV
http://'.$ipadd.'/autoq.php?c=Hoopla_Kids_TV

#EXTINF:-1 tvg-id="1827" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aakash_EduTV_NEET.png",Aakash EduTV NEET
http://'.$ipadd.'/autoq.php?c=Aakash_EduTV_NEET

#EXTINF:-1 tvg-id="1839" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/And_Pictures.png",And Pictures
http://'.$ipadd.'/autoq.php?c=And_Pictures

#EXTINF:-1 tvg-id="1847" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Harpal_TV.png",Z10 TV
http://'.$ipadd.'/autoq.php?c=Harpal_TV

#EXTINF:-1 tvg-id="1850" group-title="Devotional" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/SVBC.png",SVBC
http://'.$ipadd.'/autoq.php?c=SVBC

#EXTINF:-1 tvg-id="1851" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aakash_EduTV_JEE.png",Aakash EduTV JEE
http://'.$ipadd.'/autoq.php?c=Aakash_EduTV_JEE

#EXTINF:-1 tvg-id="1853" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News11_Bharat.png",News11 Bharat
http://'.$ipadd.'/autoq.php?c=News11_Bharat

#EXTINF:-1 tvg-id="1854" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/STV_Haryana_News.png",STV Haryana News
http://'.$ipadd.'/autoq.php?c=STV_Haryana_News

#EXTINF:-1 tvg-id="1855" group-title="News" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/NL_TV.png",NL TV
http://'.$ipadd.'/autoq.php?c=NL_TV

#EXTINF:-1 tvg-id="1856" group-title="News" tvg-language="Assamese" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_Time_Assam.png",Pratham Khabar 24x7
http://'.$ipadd.'/autoq.php?c=News_Time_Assam

#EXTINF:-1 tvg-id="1858" group-title="Devotional" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/SVBC3.png",SVBC3
http://'.$ipadd.'/autoq.php?c=SVBC3

#EXTINF:-1 tvg-id="1859" group-title="Devotional" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/SVBC4.png",SVBC4
http://'.$ipadd.'/autoq.php?c=SVBC4

#EXTINF:-1 tvg-id="1868" group-title="Entertainment" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Punjab_Plus.png",Punjab Plus
http://'.$ipadd.'/autoq.php?c=Punjab_Plus

#EXTINF:-1 tvg-id="1869" group-title="News" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kenson_News.png",Kenson News
http://'.$ipadd.'/autoq.php?c=Kenson_News

#EXTINF:-1 tvg-id="1871" group-title="Music" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/7X_Music.png",7X Music
http://'.$ipadd.'/autoq.php?c=7X_Music

#EXTINF:-1 tvg-id="1872" group-title="Kids" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dreamworks.png",DreamWorks
http://'.$ipadd.'/autoq.php?c=Dreamworks

#EXTINF:-1 tvg-id="1881" group-title="Entertainment" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/E_NBCU.png",E!
http://'.$ipadd.'/autoq.php?c=E_NBCU

#EXTINF:-1 tvg-id="1882" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TEST15_HD.png",TEST15 HD
http://'.$ipadd.'/autoq.php?c=TEST15_HD

#EXTINF:-1 tvg-id="1883" group-title="Kids" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pogo_Telugu.png",Pogo Telugu
http://'.$ipadd.'/autoq.php?c=Pogo_Telugu

#EXTINF:-1 tvg-id="1885" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Kripa_TV.png",Kripa TV
http://'.$ipadd.'/autoq.php?c=Kripa_TV

#EXTINF:-1 tvg-id="1886" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sansad_TV_RajyaSabha.png",Sansad TV Rajya Sabha
http://'.$ipadd.'/autoq.php?c=Sansad_TV_RajyaSabha

#EXTINF:-1 tvg-id="1888" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jivan_TV.png",Jivan TV
http://'.$ipadd.'/autoq.php?c=Jivan_TV

#EXTINF:-1 tvg-id="1889" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Sports_1_HD.png",Jio Sports 1 HD
http://'.$ipadd.'/autoq.php?c=Jio_Sports_1_HD

#EXTINF:-1 tvg-id="1890" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Sports_2_HD.png",Jio Sports 2 HD
http://'.$ipadd.'/autoq.php?c=Jio_Sports_2_HD

#EXTINF:-1 tvg-id="1891" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Tribe_TV.png",Tribe TV
http://'.$ipadd.'/autoq.php?c=Tribe_TV

#EXTINF:-1 tvg-id="1894" group-title="Educational" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Padhega_Bharat.png",Padhega Bharat
http://'.$ipadd.'/autoq.php?c=Padhega_Bharat

#EXTINF:-1 tvg-id="1895" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Today_24_News.png",Today 24 News
http://'.$ipadd.'/autoq.php?c=Today_24_News

#EXTINF:-1 tvg-id="1896" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_Flash.png",News Flash
http://'.$ipadd.'/autoq.php?c=News_Flash

#EXTINF:-1 tvg-id="1897" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pulse_24.png",Pulse 24
http://'.$ipadd.'/autoq.php?c=Pulse_24

#EXTINF:-1 tvg-id="1898" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/GBN24.png",GBN24
http://'.$ipadd.'/autoq.php?c=GBN24

#EXTINF:-1 tvg-id="1899" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/VK_News.png",VK News
http://'.$ipadd.'/autoq.php?c=VK_News

#EXTINF:-1 tvg-id="1900" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ENB.png",Express News Bharat
http://'.$ipadd.'/autoq.php?c=ENB

#EXTINF:-1 tvg-id="1901" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Adhyatam_TV.png",Adhyatam TV
http://'.$ipadd.'/autoq.php?c=Adhyatam_TV

#EXTINF:-1 tvg-id="1903" group-title="News" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aaj_Ki_Baat.png",Aaj Ki Baat Gujarati
http://'.$ipadd.'/autoq.php?c=Aaj_Ki_Baat

#EXTINF:-1 tvg-id="1919" group-title="Devotional" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Namasthe_TV.png",Namasthe TV
http://'.$ipadd.'/autoq.php?c=Namasthe_TV

#EXTINF:-1 tvg-id="1925" group-title="Entertainment" tvg-language="Bhojpuri" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/MH1_DilSe.png",MH1 Dil Se
http://'.$ipadd.'/autoq.php?c=MH1_DilSe

#EXTINF:-1 tvg-id="1926" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sanskriti_24x7.png",Sanskriti 24x7
http://'.$ipadd.'/autoq.php?c=Sanskriti_24x7

#EXTINF:-1 tvg-id="1933" group-title="JioDarshan" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shri_Trimbakeshwar_Devasthan.png",Shri Trimbakeshwar Devasthan Trust
http://'.$ipadd.'/autoq.php?c=Shri_Trimbakeshwar_Devastha

#EXTINF:-1 tvg-id="1954" group-title="News" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_Tamil_24x7.png",News Tamil 24x7
http://'.$ipadd.'/autoq.php?c=News_Tamil_24x7

#EXTINF:-1 tvg-id="1955" group-title="Lifestyle" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Food_XP.png",Foodxp
http://'.$ipadd.'/autoq.php?c=Food_XP

#EXTINF:-1 tvg-id="1956" group-title="Entertainment" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sidharth_TV.png",Sidharth TV
http://'.$ipadd.'/autoq.php?c=Sidharth_TV

#EXTINF:-1 tvg-id="1957" group-title="Movies" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sidharth_Gold.png",Sidharth Gold
http://'.$ipadd.'/autoq.php?c=Sidharth_Gold

#EXTINF:-1 tvg-id="1958" group-title="Devotional" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sidharth_Bhakti.png",Sidharth Bhakti
http://'.$ipadd.'/autoq.php?c=Sidharth_Bhakti

#EXTINF:-1 tvg-id="1959" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Global_India.png",Global India
http://'.$ipadd.'/autoq.php?c=Global_India

#EXTINF:-1 tvg-id="1960" group-title="News" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bhaarat_Today.png",Bhaarat Today
http://'.$ipadd.'/autoq.php?c=Bhaarat_Today

#EXTINF:-1 tvg-id="1961" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shemaroo_TV.png",Shemaroo TV
http://'.$ipadd.'/autoq.php?c=Shemaroo_TV

#EXTINF:-1 tvg-id="1962" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Amaar_Bangla.png",Amaar Bangla
http://'.$ipadd.'/autoq.php?c=Amaar_Bangla

#EXTINF:-1 tvg-id="1963" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/KVP_Bhaarat.png",KVP Bhaarat
http://'.$ipadd.'/autoq.php?c=KVP_Bhaarat

#EXTINF:-1 tvg-id="1964" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ABC_News.png",ABC News
http://'.$ipadd.'/autoq.php?c=ABC_News

#EXTINF:-1 tvg-id="1965" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/VNM_News.png",VNM TV
http://'.$ipadd.'/autoq.php?c=VNM_News

#EXTINF:-1 tvg-id="1966" group-title="News" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Live_TV_Kerala.png",Live TV Kerala
http://'.$ipadd.'/autoq.php?c=Live_TV_Kerala

#EXTINF:-1 tvg-id="1967" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/PMC_Hindi.png",PMC Hindi
http://'.$ipadd.'/autoq.php?c=PMC_Hindi

#EXTINF:-1 tvg-id="1968" group-title="Devotional" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/PMC_Kannada.png",PMC Kannada
http://'.$ipadd.'/autoq.php?c=PMC_Kannada

#EXTINF:-1 tvg-id="1969" group-title="Devotional" tvg-language="Tamil" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/PMC_Tamizh.png",PMC Tamizh
http://'.$ipadd.'/autoq.php?c=PMC_Tamizh

#EXTINF:-1 tvg-id="1970" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Sports_3_HD.png",Jio Sports 3 HD
http://'.$ipadd.'/autoq.php?c=Jio_Sports_3_HD

#EXTINF:-1 tvg-id="1971" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Sports_4_HD.png",Jio Sports 4 HD
http://'.$ipadd.'/autoq.php?c=Jio_Sports_4_HD

#EXTINF:-1 tvg-id="1972" group-title="News" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Top_News_Marathi.png",Top News Marathi
http://'.$ipadd.'/autoq.php?c=Top_News_Marathi

#EXTINF:-1 tvg-id="1973" group-title="Entertainment" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/ETV_HD.png",ETV HD
http://'.$ipadd.'/autoq.php?c=ETV_HD

#EXTINF:-1 tvg-id="1974" group-title="News" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Gujarat_First_24x7.png",Gujarat 1st 24x7
http://'.$ipadd.'/autoq.php?c=Gujarat_First_24x7

#EXTINF:-1 tvg-id="1975" group-title="Devotional" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/PMC_Telugu.png",PMC Telugu
http://'.$ipadd.'/autoq.php?c=PMC_Telugu

#EXTINF:-1 tvg-id="1976" group-title="Kids" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/BBC_Cbeebies.png",BBC Cbeebies
http://'.$ipadd.'/autoq.php?c=BBC_Cbeebies

#EXTINF:-1 tvg-id="1977" group-title="Entertainment" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Zee_Bangla_HD.png",Zee Bangla HD
http://'.$ipadd.'/autoq.php?c=Zee_Bangla_HD

#EXTINF:-1 tvg-id="1984" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sports18_1_HD.png",Sports18 1 HD
http://'.$ipadd.'/autoq.php?c=Sports18_1_HD

#EXTINF:-1 tvg-id="1985" group-title="Sports" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sports18_1_SD.png",Sports18 1
http://'.$ipadd.'/autoq.php?c=Sports18_1_SD

#EXTINF:-1 tvg-id="1998" group-title="Sports" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sports18_Khel.png",Sports18 Khel
http://'.$ipadd.'/autoq.php?c=Sports18_Khel

#EXTINF:-1 tvg-id="1999" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raftaar_Media.png",Raftaar Media
http://'.$ipadd.'/autoq.php?c=Raftaar_Media

#EXTINF:-1 tvg-id="2002" group-title="Devotional" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/",Aadinath TV
http://'.$ipadd.'/autoq.php?c=

#EXTINF:-1 tvg-id="2003" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Crypto_TV.0-TV",3.0 TV
http://'.$ipadd.'/autoq.php?c=Crypto_TV.0-TV

#EXTINF:-1 tvg-id="2004" group-title="News" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shekinah.png",Shekinah TV
http://'.$ipadd.'/autoq.php?c=Shekinah

#EXTINF:-1 tvg-id="2005" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Virat_24.png",Virat 24
http://'.$ipadd.'/autoq.php?c=Virat_24

#EXTINF:-1 tvg-id="2006" group-title="Devotional" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sattva_TV.png",Sattva TV
http://'.$ipadd.'/autoq.php?c=Sattva_TV

#EXTINF:-1 tvg-id="2007" group-title="News" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/BS9_News.png",BS9 News
http://'.$ipadd.'/autoq.php?c=BS9_News

#EXTINF:-1 tvg-id="2008" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_21.png",News 21
http://'.$ipadd.'/autoq.php?c=News_21

#EXTINF:-1 tvg-id="2010" group-title="Entertainment" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ekamra_Nilach_akra.png",Ekamra Nilach akra
http://'.$ipadd.'/autoq.php?c=Ekamra_Nilach_akra

#EXTINF:-1 tvg-id="2011" group-title="Infotainment" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ekamra_Bharat_Odia.png",Ekamra Bharat Odia
http://'.$ipadd.'/autoq.php?c=Ekamra_Bharat_Odia

#EXTINF:-1 tvg-id="2012" group-title="Devotional" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Paramatma.png",Paramatma
http://'.$ipadd.'/autoq.php?c=Paramatma

#EXTINF:-1 tvg-id="2013" group-title="News" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ekamra_S_News.png",Ekamra S News
http://'.$ipadd.'/autoq.php?c=Ekamra_S_News

#EXTINF:-1 tvg-id="2014" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Rajpath_TV.png",Rajpath TV
http://'.$ipadd.'/autoq.php?c=Rajpath_TV

#EXTINF:-1 tvg-id="2015" group-title="Music" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ekamra_Music.png",Ekamra Musiq
http://'.$ipadd.'/autoq.php?c=Ekamra_Music

#EXTINF:-1 tvg-id="2016" group-title="Movies" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Ekamra_Cinema.png",Ekamra Cinema
http://'.$ipadd.'/autoq.php?c=Ekamra_Cinema

#EXTINF:-1 tvg-id="2017" group-title="News" tvg-language="Urdu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Munsif_TV.png",Munsif TV
http://'.$ipadd.'/autoq.php?c=Munsif_TV

#EXTINF:-1 tvg-id="2018" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Samachar_Nation.png",Samachar Nation
http://'.$ipadd.'/autoq.php?c=Samachar_Natio

#EXTINF:-1 tvg-id="2019" group-title="News" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Global_Punjab.png",Global Punjab
http://'.$ipadd.'/autoq.php?c=Global_Punjab

#EXTINF:-1 tvg-id="2020" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/KKD_News.png",KKD News
http://'.$ipadd.'/autoq.php?c=KKD_News

#EXTINF:-1 tvg-id="2021" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/HNN24x7.png",HNN 24x7
http://'.$ipadd.'/autoq.php?c=HNN24x7

#EXTINF:-1 tvg-id="2022" group-title="News" tvg-language="Assamese" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/NB_News.png",NB News
http://'.$ipadd.'/autoq.php?c=NB_News

#EXTINF:-1 tvg-id="2024" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/And_TV.png",And TV
http://'.$ipadd.'/autoq.php?c=And_TV

#EXTINF:-1 tvg-id="2027" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Raatdin_News_Network.png",Raatdin News Network
http://'.$ipadd.'/autoq.php?c=Raatdin_News_Network

#EXTINF:-1 tvg-id="2028" group-title="Devotional" tvg-language="Gujarati" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Sadvidya_TV.png",Sadvidya TV
http://'.$ipadd.'/autoq.php?c=Sadvidya_TV

#EXTINF:-1 tvg-id="2029" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aaryaa_Bhakti.png",Aaryaa Bhakti
http://'.$ipadd.'/autoq.php?c=Aaryaa_Bhakti

#EXTINF:-1 tvg-id="2030" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aaryaa_News.png",Aaryaa News
http://'.$ipadd.'/autoq.php?c=Aaryaa_News

#EXTINF:-1 tvg-id="2031" group-title="Lifestyle" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Fashion_India.png",Fashion India
http://'.$ipadd.'/autoq.php?c=Fashion_India

#EXTINF:-1 tvg-id="2034" group-title="Educational" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/NSDC_TV.png",NSDC TV
http://'.$ipadd.'/autoq.php?c=NSDC_TV

#EXTINF:-1 tvg-id="2035" group-title="Devotional" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Amritwani.png",Amritwani
http://'.$ipadd.'/autoq.php?c=Amritwani

#EXTINF:-1 tvg-id="2036" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dil_Se.png",Dil Se
http://'.$ipadd.'/autoq.php?c=Dil_Se

#EXTINF:-1 tvg-id="2037" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Pop_Pataka.png",Pop Pataka
http://'.$ipadd.'/autoq.php?c=Pop_Pataka

#EXTINF:-1 tvg-id="2038" group-title="Music" tvg-language="Bhojpuri" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Dhamaal.png",Dhamaal
http://'.$ipadd.'/autoq.php?c=Dhamaal

#EXTINF:-1 tvg-id="2039" group-title="Music" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Adipolli.png",Adipolli
http://'.$ipadd.'/autoq.php?c=Adipolli

#EXTINF:-1 tvg-id="2040" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bollywood_Hungama.png",Bollywood Hungama
http://'.$ipadd.'/autoq.php?c=Bollywood_Hungama

#EXTINF:-1 tvg-id="2041" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bhakti_Sagar.png",Bhakti Sagar
http://'.$ipadd.'/autoq.php?c=Bhakti_Sagar

#EXTINF:-1 tvg-id="2042" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nazraana.png",Nazraana
http://'.$ipadd.'/autoq.php?c=Nazraana

#EXTINF:-1 tvg-id="2043" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Artist_Aloud.png",Artist Aloud
http://'.$ipadd.'/autoq.php?c=Artist_Aloud

#EXTINF:-1 tvg-id="2045" group-title="Devotional" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Auroville_TV.png",Auroville TV
http://'.$ipadd.'/autoq.php?c=Auroville_TV

#EXTINF:-1 tvg-id="2063" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/RS_Bharat.png",RS Bharat
http://'.$ipadd.'/autoq.php?c=RS_Bharat

#EXTINF:-1 tvg-id="2064" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Merchant_Records.png",Merchant Records
http://'.$ipadd.'/autoq.php?c=Merchant_Records

#EXTINF:-1 tvg-id="2066" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/The_Q_Comedistaan.png",The Q Comedistaan
http://'.$ipadd.'/autoq.php?c=The_Q_Comedistaa

#EXTINF:-1 tvg-id="2071" group-title="Entertainment" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/The_Q_Marathi.png",The Q Marathi
http://'.$ipadd.'/autoq.php?c=The_Q_Marathi

#EXTINF:-1 tvg-id="2074" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Prime_Media.png",Prime Media Goa
http://'.$ipadd.'/autoq.php?c=Prime_Media

#EXTINF:-1 tvg-id="2077" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Gangaur.png",Gangaur
http://'.$ipadd.'/autoq.php?c=Gangaur

#EXTINF:-1 tvg-id="2078" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Shemaroo_Umang.png",Shemaroo Umang
http://'.$ipadd.'/autoq.php?c=Shemaroo_Uma

#EXTINF:-1 tvg-id="2079" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bharat_24.png",Bharat 24
http://'.$ipadd.'/autoq.php?c=Bharat_24

#EXTINF:-1 tvg-id="2080" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News_Bartaman_24x7.png",News Bartaman 24x7
http://'.$ipadd.'/autoq.php?c=News_Bartaman_24x7

#EXTINF:-1 tvg-id="2081" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV27_News.png",TV27 News
http://'.$ipadd.'/autoq.php?c=TV27_News

#EXTINF:-1 tvg-id="2082" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/22Scope_News.png",22Scope News
http://'.$ipadd.'/autoq.php?c=22Scope_News

#EXTINF:-1 tvg-id="2149" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Prime_HD.png",Jio Prime HD
http://'.$ipadd.'/autoq.php?c=Jio_Prime_HD

#EXTINF:-1 tvg-id="2176" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/India24x7.png",India 24x7
http://'.$ipadd.'/autoq.php?c=India24x7

#EXTINF:-1 tvg-id="2177" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Arya_Sandesh_Tv.png",Arya Sandesh TV
http://'.$ipadd.'/autoq.php?c=Arya_Sandesh_Tv

#EXTINF:-1 tvg-id="2183" group-title="Sports" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Q_GameX.png",Q GameX
http://'.$ipadd.'/autoq.php?c=Q_GameX

#EXTINF:-1 tvg-id="2184" group-title="Infotainment" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/U_Bangla.png",U Bangla
http://'.$ipadd.'/autoq.php?c=U_Bangla

#EXTINF:-1 tvg-id="2187" group-title="News" tvg-language="Telugu" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Swatantra_News.png",Swatantra News
http://'.$ipadd.'/autoq.php?c=Swatantra_News

#EXTINF:-1 tvg-id="2188" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Globe_TV.png",Globe TV
http://'.$ipadd.'/autoq.php?c=Globe_TV

#EXTINF:-1 tvg-id="2189" group-title="Movies" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Aaryaa_Cinema.png",Aaryaa Cinema
http://'.$ipadd.'/autoq.php?c=Aaryaa_Cinema

#EXTINF:-1 tvg-id="2191" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Atrangii_TV.png",Atrangii TV
http://'.$ipadd.'/autoq.php?c=Atrangii_TV

#EXTINF:-1 tvg-id="2192" group-title="Devotional" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Gurukul_Rajkot.png",Gurukul
http://'.$ipadd.'/autoq.php?c=Gurukul_Rajkot

#EXTINF:-1 tvg-id="2205" group-title="JioDarshan" tvg-language="Malayalam" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Guruvayur_Devaswom.png",Guruvayur Devaswom
http://'.$ipadd.'/autoq.php?c=Guruvayur_Devaswom

#EXTINF:-1 tvg-id="2224" group-title="News" tvg-language="Punjabi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/India_News_Punjab.png",India News Punjab
http://'.$ipadd.'/autoq.php?c=India_News_Punjab

#EXTINF:-1 tvg-id="2225" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/TV24.png",TV24
http://'.$ipadd.'/autoq.php?c=TV24

#EXTINF:-1 tvg-id="2227" group-title="Entertainment" tvg-language="Odia" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jatra_Ekamra.png",Jatra Ekamra
http://'.$ipadd.'/autoq.php?c=Jatra_Ekamra

#EXTINF:-1 tvg-id="2228" group-title="News" tvg-language="Bengali" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Samay_Kolkata.png",Samay Kolkata
http://'.$ipadd.'/autoq.php?c=Samay_Kolkata

#EXTINF:-1 tvg-id="2229" group-title="Entertainment" tvg-language="Bhojpuri" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Bhojpuri_Junction.png",Bhojpuri Junction
http://'.$ipadd.'/autoq.php?c=Bhojpuri_Junctio

#EXTINF:-1 tvg-id="2230" group-title="Music" tvg-language="English" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Jio_Specials_HD.png",Jio Specials HD
http://'.$ipadd.'/autoq.php?c=Jio_Specials_HD

#EXTINF:-1 tvg-id="2232" group-title="Music" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/No1_Yari_Jam.png",No 1 Yaari Jam
http://'.$ipadd.'/autoq.php?c=No1_Yari_Jam

#EXTINF:-1 tvg-id="2233" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/News80.png",News 80
http://'.$ipadd.'/autoq.php?c=News80

#EXTINF:-1 tvg-id="2252" group-title="Entertainment" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Desi_Music_Station.png",Desi Music Station
http://'.$ipadd.'/autoq.php?c=Desi_Music_Statio

#EXTINF:-1 tvg-id="2253" group-title="Entertainment" tvg-language="Kannada" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Nakshatra_Digital_TV.png",Nakshatra Digital TV
http://'.$ipadd.'/autoq.php?c=Nakshatra_Digital_TV

#EXTINF:-1 tvg-id="2254" group-title="News" tvg-language="Marathi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/Media9.png",Media9
http://'.$ipadd.'/autoq.php?c=Media9

#EXTINF:-1 tvg-id="2255" group-title="News" tvg-language="Hindi" tvg-logo="http://jiotv.catchup.cdn.jio.com/dare_images/images/RRN_News.png",RRN News
http://'.$ipadd.'/autoq.php?c=RRN_News
';

fwrite($playlist, $modlist);
fclose($playlist);

$ip = fopen("ip.php", "w") or die("Unable to open file!");
$ipw='<?php
$ip="'.$ipadd.'";
?>
';

fwrite($ip, $ipw);
fclose($ip);
header('Location: index.php?msg=Playlist Generation Successfull');
?>
